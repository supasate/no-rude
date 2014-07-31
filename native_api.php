<?php
$username = "root";
$password = "sh@rep@ss";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("no_rude_db",$dbhandle) 
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM rude_word");

//get original text
$text = $_POST['intext'];

$rude = array();
$polite = array();

//fetch tha dictionary from the database 
while ($row = mysql_fetch_array($result)) {
	$rude[] = $row['rude'];
	$polite[] = $row['polite'];
}

$replaced_text = str_replace($rude, $polite, $text);
echo $replaced_text;

//close the connection
mysql_close($dbhandle);
?>
