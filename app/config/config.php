<?php
$db_config['db_host']= 'localhost';
$db_config['db_user']= 'root';
$db_config['db_pass'] = 'Inventions@256';
$db_config['db_name'] = 'dmvc';
foreach($db_config as $key => $value){
  define(strtoupper($key), $value);
}
// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'http://localhost/dinomvc/');
// Site Name
define('SITENAME', 'DinoMVC');
