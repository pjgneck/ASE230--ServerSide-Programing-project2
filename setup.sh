#!/bin/bash

# Exit on any error
set -e

# Build and start the Docker containers
echo "Building and starting the Docker containers..."
docker-compose up -d --build

# Wait for the database container to be ready
echo "Waiting for the database container to be ready..."
sleep 30

# Install composer dependencies
echo "Installing composer dependencies..."
docker-compose exec app composer install

# Clear the configuration cache
echo "Clearing the configuration cache..."
docker-compose exec app php artisan config:clear

# Run database migrations and seeders
echo "Running database migrations and seeders..."
docker-compose exec app php artisan migrate:fresh --seed

echo "The application is now running on http://localhost:8000"
