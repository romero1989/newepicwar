#!/bin/sh

if [ -d "public/js" ]
then
    echo "Movendo pasta js"
    mv public/js js
fi

if [ -d "public/css" ]
then
    echo "Movendo pasta css"
    mv public/css css
fi

if [ -d "public/favicon.ico" ]
then
    echo "Movendo arquivo favicon"
    mv public/favicon.ico favicon.ico
fi

if [ -d "public/robots.txt" ]
then
    echo "Movendo arquivo robots"
    mv public/robots.txt robots.txt
fi

if [ -d "public/mix-manifest.json" ]
then
    echo "Movendo arquivo mix-manifest.json"
    mv public/mix-manifest.json mix-manifest.json
fi

# activate maintenance mode
php artisan down

# update source code
#git pull

# update PHP dependencies
#export COMPOSER_HOME='/tmp/composer'
php -d allow_url_fopen=On composer.phar install --optimize-autoloader --no-dev
	# --no-interaction	Do not ask any interactive question
	# --no-dev		Disables installation of require-dev packages.
	# --prefer-dist		Forces installation from package dist even for dev versions.

# clear view
php artisan view:clear

# clear cache
php artisan cache:clear

# clear config cache
php artisan config:clear

# clear route
php artisan route:clear

# clear config
php artisan route:cache

# cache config
php artisan config:cache

# cache view
php artisan view:cache

# restart queues
php artisan -v queue:restart

# update database
#php artisan migrate --force
	# --force		Required to run when in production.

# stop maintenance mode
php artisan up
