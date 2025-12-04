#!/bin/bash

# Exit on any error
set -e

# Install composer dependencies
echo "Installing composer dependencies..."
composer install

# Install npm dependencies
echo "Installing npm dependencies..."
npm install

# Build frontend assets
echo "Building frontend assets..."
npm run build

# Run database migrations and seeders
echo "Running database migrations and seeders..."
php artisan migrate:fresh --seed

# Start the Laravel development server
# echo "Starting the Laravel development server..."
# php artisan serve
