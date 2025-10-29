#!/bin/bash

# Production Deployment Script for Bestie STIFIn
echo "🚀 Starting production deployment..."

# Check if we're in production environment
if [ "$APP_ENV" != "production" ]; then
    echo "⚠️  Warning: This script is designed for production deployment"
    echo "Current environment: $APP_ENV"
    read -p "Continue anyway? (y/N): " -n 1 -r
    echo
    if [[ ! $REPLY =~ ^[Yy]$ ]]; then
        exit 1
    fi
fi

# Backup current database (optional but recommended)
echo "📦 Creating database backup..."
php artisan backup:run --only-db || echo "⚠️  Backup failed, continuing..."

# Install/update dependencies
echo "📦 Installing dependencies..."
composer install --optimize-autoloader --no-dev --no-interaction

# Clear all caches
echo "🧹 Clearing caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Run migrations
echo "🗄️  Running migrations..."
php artisan migrate --force

# Seed admin user
echo "👤 Creating/updating admin user..."
php artisan db:seed --class=AdminSeeder --force

# Seed concepts
echo "📚 Creating/updating concepts..."
php artisan db:seed --class=ConceptSeeder --force

# Cache configurations for production
echo "⚡ Caching configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set proper permissions
echo "🔐 Setting permissions..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache || echo "⚠️  Could not change ownership"

# Test admin user
echo "✅ Testing admin user..."
php artisan tinker --execute="echo 'Admin user: '; \$user = App\Models\User::where('email', 'admin@bestiestifin.com')->first(); echo \$user ? 'Found - ' . \$user->name : 'Not found';"

# Test concepts
echo "✅ Testing concepts..."
php artisan concepts:check

echo "🎉 Production deployment completed successfully!"
echo "📧 Admin login: admin@bestiestifin.com"
echo "🔑 Admin password: admin123"
echo "🌐 Admin panel: https://bestiestifin.com/admin"

