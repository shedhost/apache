#!/bin/bash
set -e

# download composer
cd /tmp
wget https://getcomposer.org/composer.phar
php composer.phar create-project vrana/adminer
mv adminer /var/shed/public/
rm composer.phar
