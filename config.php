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
$config['locale'] = 'ru_RU.UTF-8';
$config['default_encoding'] = 'utf-8';
$config['admin_encoding'] = 'utf-8';
$config['max_upload_size'] = 10000000;
$config['output_compression'] = true;
$config['auto_alias_content'] = true;
$config['url_rewriting'] = 'mod_rewrite';
$config['assume_mod_rewrite'] = true;
$config['internal_pretty_urls'] = false;
$config['use_hierarchy'] = true;

$config['set_names'] = true;
$config['backwards_compatible'] = false;
$config['disable_htmlarea_translation'] = false;
$config['use_Indite'] = true;

$config['root_url'] = 'http://rusdiagnostika.ru';
$config['uploads_url'] = $config['root_url'] . '/uploads';
$config['root_path'] = '/home/rusdiagnostika/data/www/rusdiagnostika.ru';
$config['uploads_path'] = '/home/rusdiagnostika/data/www/rusdiagnostika.ru/uploads';

$config['debug'] = false;
?>