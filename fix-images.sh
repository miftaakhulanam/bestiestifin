#!/bin/bash

# Fix image display in production
echo "🖼️  Fixing image display in production..."

# Create storage symlink if not exists
echo "Step 1: Creating storage symlink..."
php artisan storage:link || echo "Storage symlink already exists"

# Fix permissions
echo "Step 2: Fixing permissions..."
chmod -R 755 storage/app/public
chmod -R 755 public/storage 2>/dev/null || echo "public/storage not found"

# Clear view cache
echo "Step 3: Clearing view cache..."
php artisan view:clear

# Test storage
echo "Step 4: Testing storage..."
php artisan tinker --execute="echo 'Storage disk: ' . config('filesystems.default') . PHP_EOL; echo 'Storage path: ' . storage_path('app/public') . PHP_EOL; echo 'Symlink exists: ' . (file_exists(public_path('storage')) ? 'Yes' : 'No') . PHP_EOL;"

echo "Done!"
