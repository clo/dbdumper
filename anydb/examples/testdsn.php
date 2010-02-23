<?php
$dsn = "DRIVER=Microsoft Access Driver (*.mdb); DBQ=C:/data/Z0/kjoff/kjoff_crashed.mdb";
$tabelle = "tbl_r_rechnung";
$uid = "Administrator";
$pwd = "";

$conn = odbc_connect($dsn,$uid,$pwd)
or die ("Fehler beim Datenbankaufruf");

$result = odbc_exec($conn, "SELECT * FROM $tabelle");
$i=1;

while (odbc_fetch_row($result, $i)){
echo $i. ". ". odbc_result($result, "idrechnung")."\n";
$i++;
}
?>