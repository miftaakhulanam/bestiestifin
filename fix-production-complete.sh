#!/bin/bash

# Complete Fix Script for Production Issues
echo "🔧 Starting complete production fix..."

# Check if .env exists
if [ ! -f ".env" ]; then
    echo "❌ .env file not found! Creating one..."
    
    # Copy from .env.example if exists
    if [ -f ".env.example" ]; then
        cp .env.example .env
        echo "✓ Created .env from .env.example"
        echo "⚠️  IMPORTANT: Edit .env file with your production credentials!"
        exit 1
    else
        echo "❌ No .env.example found!"
        exit 1
    fi
fi

echo "✓ .env file exists"

# Generate APP_KEY if missing
echo "🔑 Checking APP_KEY..."
php artisan key:generate --force

# Fix file permissions
echo "📁 Fixing file permissions..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chmod -R 755 public

# Create storage directories if missing
echo "📂 Creating storage directories..."
mkdir -p storage/app/public
mkdir -p storage/framework/cache/data
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs
mkdir -p bootstrap/cache

# Clear ALL caches
echo "🧹 Clearing all caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize clear
php artisan optimize:clear

# Run migrations
echo "🗄️  Running migrations..."
php artisan migrate --force

# Create/update admin user
echo "👤 Creating/updating admin user..."
php artisan production:admin admin@bestiestifin.com admin123

# Create/update concepts
echo "📚 Creating/updating concepts..."
php artisan db:seed --class=ConceptSeeder --force

# Optimize for production
echo "⚡ Optimizing for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Test database connection
echo "🧪 Testing database connection..."
php artisan tinker --execute="try { DB::connection()->getPdo(); echo '✓ Database connected'; } catch(Exception \$e) { echo '✗ Database error: ' . \$e->getMessage(); }"

# Test admin user
echo "🧪 Testing admin user..."
php artisan tinker --execute="echo 'Admin: '; \$user = App\Models\User::where('email', 'admin@bestiestifin.com')->first(); echo \$user ? 'Found - ' . \$user->name : 'Not found';"

echo ""
echo "🎉 Production fix completed!"
echo "🌐 Admin panel: https://bestiestifin.com/admin"
echo "📧 Email: admin@bestiestifin.com"
echo "🔑 Password: admin123"
echo ""
echo "⚠️  Don't forget to:"
echo "   1. Delete public/debug-403.php"
echo "   2. Verify .env has correct database credentials"
echo "   3. Check storage/logs/laravel.log for any errors"
