#!/bin/bash
set -e

echo "Deployment started ..."

# Enter maintenance mode or return true
# if already is in maintenance mode
(php artisan down) || true

git reset --hard

# Pull the latest version of the app
git pull origin master && chown www-data:www-data /opt/jb -R

# Install composer dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader && chown www-data:www-data /opt/jb -R

# Clear the old cache
php artisan clear-compiled

# Recreate cache
php artisan optimize

# Install node dependencies
npm install

# Compile npm assets
npm run prod  && chown www-data:www-data /opt/jb -R

# Update Browserlist
npx browserslist@latest --update-db

# Run database migrations
php artisan migrate --force

# Exit maintenance mode
php artisan up

screen -dmS jcb php artisan octane:start --watch

echo "Deployment finished!"
