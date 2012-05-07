<?php
error_reporting(E_ALL);
require_once '../anyDB.php';
require_once '../addon/DBHelper.php';
require_once '../addon/QueryHelper.php';

$database = 'kjoff_aktuelleversion';
$host = 'kjoff_aktuelleversion';
$user = '';
$password = '';
$dbType = 'mysql';

// create a new db layer
$db = anyDB::getLayer('ODBC','',$dbType);

//connect to db
$db->connect($host, $database, $user, $password);
?>
