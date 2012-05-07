<?php
require "connect_mitdaten.inc.php";
require "../addon/Exporter.php";

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