#!/bin/bash
set -e

pecl install imagick
echo 'extension=imagick.so' > /usr/local/etc/php/conf.d/imagick.ini
