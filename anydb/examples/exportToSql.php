<?php
//if (ob_get_contents() != '' ){
  ob_end_flush();
//}
if (preg_match("/--help|-h|-help/",$argv[1])){
  usage();
  exit(1);
}


if (isset($argv[1])){
  $database = $argv[1];
}else{
  $database = "kjoff_mitdaten";
}

if (isset($argv[2]) && preg_match("/debug|true|1/i",$argv[2])){
  $debug = true;
  echo "DEBUG MODE";
  error_reporting(E_ALL);
}else{
  $debug = false;
}

require "connect.inc.php";
require "../addon/Exporter.php";

function usage(){
  echo "Usage: php.exe exportToSql.php [<odbcdatasource>] [<debug>]\n";
  echo "\n";
  echo "     Options:\n";
  echo "         odbcdatasource : e.g. kjoff, default is kjoff_mitdaten\n";
  echo "         debug          : true, default is false\n";
}

// export table content as sql statements
$sqlData = Exporter::getDB($db, ANYDB_DUMP_SQL, ';',$debug);
foreach($sqlData as $key => $data) {
  //if (preg_match("/$INSERT INTO tbl_/",$data)) {
    echo $data;
  //}
}

require "disconnect.inc.php";
////////////////////////////////////////////////////////////////////////
//echo '<hr>';
//highlight_file(__FILE__);
?>