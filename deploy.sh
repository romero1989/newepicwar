#!/bin/sh

mv '/var/www/html/newepicwar.com.br/web/public/js' '/var/www/html/newepicwar.com.br/public/js'
mv '/var/www/html/newepicwar.com.br/web/public/css' '/var/www/html/newepicwar.com.br/public/css'
mv '/var/www/html/newepicwar.com.br/web/public/favicon.ico' '/var/www/html/newepicwar.com.br/public/favicon.ico'
mv '/var/www/html/newepicwar.com.br/web/public/favicon.robots.txt' '/var/www/html/newepicwar.com.br/public/robots.txt'
mv '/var/www/html/newepicwar.com.br/web/public/mix-manifest.json' '/var/www/html/newepicwar.com.br/public/mix-manifest.json'

# activate maintenance mode
php artisan down

# update source code
#git pull

# update PHP dependencies
#export COMPOSER_HOME='/tmp/composer'
#composer install --no-interaction --no-dev --prefer-dist
	# --no-interaction	Do not ask any interactive question
	# --no-dev		Disables installation of require-dev packages.
	# --prefer-dist		Forces installation from package dist even for dev versions.


# clear cache
php artisan cache:clear

# clear config cache
php artisan config:clear

# cache config
php artisan config:cache

# restart queues
php artisan -v queue:restart

# update database
php artisan migrate --force
	# --force		Required to run when in production.

# stop maintenance mode
php artisan up
