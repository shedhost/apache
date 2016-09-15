#!/bin/bash
set -e

# download composer
cd /tmp
wget https://getcomposer.org/composer.phar
php composer.phar create-project vrana/adminer
mv adminer /var/shed/public/

# install adminer skin
mv /var/shed/public/adminer.css /var/shed/public/adminer/static/default.css
rm composer.phar
