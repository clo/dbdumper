<?php
require "connect.inc.php";

// get all one column and print them in a table


if ($db->query("SELECT name FROM tbl_a_adresse")) {
	$res = $db->getColumn();
	echo DBHelper::dumpColumn($res, true, 'namen');
	echo '<br>';
	echo DBHelper::dumpColumn($res, false, 'namen');
} else {
	echo $db->error;
}

require "disconnect.inc.php";
////////////////////////////////////////////////////////////////////////
echo '<hr>';
highlight_file(__FILE__);
?>