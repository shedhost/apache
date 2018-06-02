#!/bin/bash
set -e

pecl install memcached
echo 'extension=memcached.so' > /usr/local/etc/php/conf.d/memcached.ini
