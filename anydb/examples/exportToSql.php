<?php
if (preg_match("/--help|-h|-help/",$argv[1])){
  usage();
  exit(1);
}


if (isset($argv[1])){
  $database = $argv[1];
}else{
  $database = "kjoff_mitdaten";
}

if (isset($argv[2])){
  $debug = $argv[2];
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
$sqlData = Exporter::getDB($db, ANYDB_DUMP_SQL,true);

foreach($sqlData as $key => $data) {
    //echo "$key<br>";
    //echo nl2br($data);
    if (preg_match("/$INSERT INTO tbl_/",$data)) {
      echo $data;
    }
}

require "disconnect.inc.php";
////////////////////////////////////////////////////////////////////////
echo '<hr>';
highlight_file(__FILE__);
?>