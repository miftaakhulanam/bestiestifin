#!/bin/bash

# Final Deployment Script for Bestie STIFIn Production
echo "🚀 Starting final deployment..."

# Check if .env exists
if [ ! -f ".env" ]; then
    echo "❌ .env file not found! Please create one first."
    exit 1
fi

# Install/update dependencies
echo "📦 Installing dependencies..."
composer install --optimize-autoloader --no-dev --no-interaction

# Fix file permissions
echo "🔐 Fixing file permissions..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache

# Clear ALL caches
echo "🧹 Clearing all caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan optimize:clear

# Run migrations
echo "🗄️  Running migrations..."
php artisan migrate --force

# Seed database
echo "📚 Seeding database..."
php artisan production:admin admin@bestiestifin.com admin123
php artisan db:seed --class=ConceptSeeder --force

# Optimize for production
echo "⚡ Optimizing for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Verify deployment
echo "✅ Verifying deployment..."
php artisan concepts:check
php artisan routes:check-concepts

echo ""
echo "🎉 Deployment completed successfully!"
echo "🌐 Admin panel: https://bestiestifin.com/admin"
echo "📧 Email: admin@bestiestifin.com"
echo "🔑 Password: admin123"