#!/bin/bash

# Check .env Configuration Script
echo "🔍 Checking .env configuration..."

if [ ! -f ".env" ]; then
    echo "❌ .env file not found!"
    echo "Creating from .env.example..."
    
    if [ -f ".env.example" ]; then
        cp .env.example .env
        echo "✓ Created .env from .env.example"
    else
        echo "❌ .env.example not found!"
        exit 1
    fi
fi

echo "✓ .env file exists"

# Check critical environment variables
echo ""
echo "📋 Current .env settings:"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
grep -E "^APP_ENV=" .env && echo "✓" || echo "❌ Missing APP_ENV"
grep -E "^APP_DEBUG=" .env && echo "✓" || echo "❌ Missing APP_DEBUG"
grep -E "^APP_KEY=" .env && echo "✓" || echo "❌ Missing APP_KEY"
grep -E "^APP_URL=" .env && echo "✓" || echo "❌ Missing APP_URL"

echo ""
echo "Database settings:"
grep -E "^DB_CONNECTION=" .env && echo "✓" || echo "❌ Missing DB_CONNECTION"
grep -E "^DB_HOST=" .env && echo "✓" || echo "❌ Missing DB_HOST"
grep -E "^DB_PORT=" .env && echo "✓" || echo "❌ Missing DB_PORT"
grep -E "^DB_DATABASE=" .env && echo "✓" || echo "❌ Missing DB_DATABASE"
grep -E "^DB_USERNAME=" .env && echo "✓" || echo "❌ Missing DB_USERNAME"
grep -E "^DB_PASSWORD=" .env && echo "✓" || echo "❌ Missing DB_PASSWORD"

echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""

# Check if values are empty
echo "⚠️  Checking for empty values..."
if grep -q "^APP_KEY=$" .env; then
    echo "❌ APP_KEY is empty! Run: php artisan key:generate"
fi

if grep -q "^APP_URL=$" .env; then
    echo "❌ APP_URL is empty! Should be: https://bestiestifin.com"
fi

if grep -q "^DB_DATABASE=$" .env; then
    echo "❌ DB_DATABASE is empty!"
fi

if grep -q "^DB_USERNAME=$" .env; then
    echo "❌ DB_USERNAME is empty!"
fi

if grep -q "^DB_PASSWORD=$" .env; then
    echo "❌ DB_PASSWORD is empty!"
fi

echo ""
echo "Done checking .env configuration"
