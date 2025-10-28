#!/bin/bash

# Deployment script for Bestie STIFIn
echo "Starting deployment process..."

# Install/update dependencies
echo "Installing dependencies..."
composer install --optimize-autoloader --no-dev

# Clear and cache configurations
echo "Clearing caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Check and seed the database with concepts
echo "Checking concepts..."
php artisan concepts:check

# Check routes
echo "Checking routes..."
php artisan routes:check-concepts

# Cache configurations for production
echo "Caching configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set proper permissions
echo "Setting permissions..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache

# Test a concept route
echo "Testing concept route..."
php artisan tinker --execute="echo 'Testing thinking concept: '; \$concept = App\Models\Concept::where('slug', 'thinking')->first(); echo \$concept ? 'Found: ' . \$concept->title : 'Not found';"

echo "Deployment completed successfully!"
