<?php
require "connect.inc.php";

// get all tables
$tables = $db->getTables();
foreach ($tables as $table) {
        echo $table . "\n";
}

require "disconnect.inc.php";
////////////////////////////////////////////////////////////////////////
echo '<hr>';
highlight_file(__FILE__);
?>
