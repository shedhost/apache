<?php
/**
 * This is a minimal configuration file for phpMyAdmin for Shed. It should not
 * be used in production.
 */
$cfg['blowfish_secret'] = 'ChangeMeIfYouNeedThisToBeSecured';
$cfg['Servers'][1]['auth_type'] = 'cookie';
$cfg['Servers'][1]['host'] = 'mysql';
$cfg['Servers'][1]['connect_type'] = 'tcp';
$cfg['Servers'][1]['compress'] = false;
$cfg['Servers'][1]['AllowNoPassword'] = true;
