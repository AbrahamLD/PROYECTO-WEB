<?php


$conn= mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("proyecto", $conn);
$sql = "select * from comentario";
$result = mysql_query($sql, $conn) or die (mysql_error());

while($row = mysql_fetch_assoc($result)) {
	foreach ($row as $name => $value) {
		print "$name: $value <br /> \n";
		
	}


}

?>
