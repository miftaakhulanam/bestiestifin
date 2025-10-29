#!/bin/bash

# Fix 403 Forbidden Error Script for Production
echo "🔧 Fixing 403 Forbidden error for Filament admin..."

# Check if we're in production
if [ "$APP_ENV" != "production" ]; then
    echo "⚠️  Warning: This script is designed for production"
    echo "Current environment: $APP_ENV"
fi

# Fix file permissions
echo "📁 Fixing file permissions..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chmod -R 755 public

# Make sure storage directories exist
echo "📂 Creating storage directories..."
mkdir -p storage/app/public
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs
mkdir -p bootstrap/cache

# Clear all caches
echo "🧹 Clearing caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Check .htaccess
echo "📄 Checking .htaccess..."
if [ ! -f "public/.htaccess" ]; then
    echo "Creating .htaccess file..."
    cat > public/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Handle X-XSRF-Token Header
    RewriteCond %{HTTP:x-xsrf-token} .
    RewriteRule .* - [E=HTTP_X_XSRF_TOKEN:%{HTTP:X-XSRF-Token}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
EOF
    echo "✓ .htaccess created"
else
    echo "✓ .htaccess exists"
fi

# Ensure admin user exists
echo "👤 Checking admin user..."
php artisan production:admin admin@bestiestifin.com admin123

# Cache configurations
echo "⚡ Caching configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Test the fix
echo "🧪 Testing admin access..."
php artisan tinker --execute="echo 'Admin user: '; \$user = App\Models\User::where('email', 'admin@bestiestifin.com')->first(); echo \$user ? 'Found - ' . \$user->name : 'Not found';"

echo "🎉 403 Fix completed!"
echo "🌐 Try accessing: https://bestiestifin.com/admin"
echo "📧 Email: admin@bestiestifin.com"
echo "🔑 Password: admin123"

