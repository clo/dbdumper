<?php
error_reporting(0);
require_once '../anyDB.php';
require_once '../addon/DBHelper.php';
require_once '../addon/QueryHelper.php';

//$database = 'kjoff';
$host = $database;
$user = '';
$password = '';
$dbType = 'mysql';
if ($debug) echo "-- connecting to :".$database."\n";

$db = anyDB::getLayer('ODBC','',$dbType);

$db->connect($host, $database, $user, $password);
?>
