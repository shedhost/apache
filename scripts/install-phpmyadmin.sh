#!/bin/bash
set -e

# download
cd /tmp
wget https://github.com/phpmyadmin/phpmyadmin/archive/STABLE.tar.gz
tar xf STABLE.tar.gz -C /var/shed/public
mv /var/shed/public/phpmyadmin-* /var/shed/public/phpmyadmin
rm STABLE.tar.gz
