#!/bin/bash

# Final Fix for 403 Forbidden in Filament Admin
echo "🔧 Final fix for 403 Forbidden in Filament Admin..."

# 1. Clear ALL caches
echo "Step 1: Clearing all caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan optimize:clear

# 2. Fix file permissions
echo "Step 2: Fixing file permissions..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache

# 3. Clear session files
echo "Step 3: Clearing session files..."
rm -rf storage/framework/sessions/*

# 4. Run migrations
echo "Step 4: Running migrations..."
php artisan migrate --force

# 5. Create/update admin user
echo "Step 5: Creating/updating admin user..."
php artisan production:admin admin@bestiestifin.com admin123

# 6. Optimize for production
echo "Step 6: Optimizing for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 7. Test admin authentication
echo "Step 7: Testing admin authentication..."
php artisan tinker --execute="echo 'Testing: '; \$user = App\Models\User::where('email', 'admin@bestiestifin.com')->first(); if(\$user) { echo 'User found: ' . \$user->name . ' - '; try { \$panel = app(Filament\Panel::class); if(method_exists(\$user, 'canAccessPanel')) { echo 'canAccessPanel: ' . (\$user->canAccessPanel(\$panel) ? 'true' : 'false'); } else { echo 'canAccessPanel method missing'; } } catch(Exception \$e) { echo 'Panel error'; } } else { echo 'User not found'; }"

echo ""
echo "🎉 Fix completed!"
echo "🌐 Try accessing: https://bestiestifin.com/admin"
echo "📧 Email: admin@bestiestifin.com"
echo "🔑 Password: admin123"
echo ""
echo "⚠️  If still getting 403, check:"
echo "   1. storage/logs/laravel.log for errors"
echo "   2. Web server error logs"
echo "   3. Try accessing debug-filament-basic.php to test"
