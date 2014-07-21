<?php
/*
if (filter_has_var(INPUT_POST,"username")){
$username = filter_input(INPUT_POST, "username");
print "HOla $username!";
}
*/

$conn= mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("clasedemo", $conn);
$sql = "select * from demo";
$result = mysql_query($sql, $conn) or die (mysql_error());

while($row = mysql_fetch_assoc($result)) {
	foreach ($row as $name => $value) {
		print "$name: $value <br /> \n";
		
	}


}

?>
