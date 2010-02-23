<?

$conn  =  odbc_connect("kjoff","","");
if ($conn){
  	echo "odbc connected\n";
  	$sql =  "SELECT * FROM tbl_a_adresse"; 

  	$res = odbc_exec($conn,$sql);
  	while (odbc_fetch_row($res)) {
  		$row = odbc_result($res,1);
  		echo $row."\n";
  	}  
}else{
	echo "Couldn't connect to database.";
}
odbc_close($conn);

?>