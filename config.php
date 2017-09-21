<?php
# CMS Made Simple Configuration File
# Documentation: https://docs.cmsmadesimple.org/configuration/config-file/config-reference
#
$config['dbms'] = 'mysqli';
$config['db_hostname'] = 'localhost';
$config['db_username'] = 'rusdiagnostika';
$config['db_password'] = 'b2fh2cTE';
$config['db_name'] = 'rusdiagnostika';
$config['db_prefix'] = 'ms_';
$config['timezone'] = 'Europe/Moscow';
$config['default_encoding'] = 'utf-8'; 
$config['locale'] = 'ru_RU.UTF-8';
$config['admin_encoding'] = 'utf-8';
$config['max_upload_size'] = 10000000;
$config['auto_alias_content'] = true;
$config['url_rewriting'] = 'mod_rewrite';

$config['root_url'] = 'http://rusdiagnostika.ru';
$config['uploads_url'] = $config['root_url'] . '/uploads';
$config['root_path'] = '/home/rusdiagnostika/data/www/rusdiagnostika.ru';
$config['uploads_path'] = '/home/rusdiagnostika/data/www/rusdiagnostika.ru/uploads';

$config['debug'] = false;
?>