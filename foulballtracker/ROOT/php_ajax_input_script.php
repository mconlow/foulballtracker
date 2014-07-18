<?php
$dbhost = "";
$dbuser = "";
$dbpass = "";
$dbname = "";

//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);

//Select Database
mysql_select_db($dbname) or die(mysql_error());

if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$ClientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
$ClientIP = $_SERVER['REMOTE_ADDR'];
}
//$ClientHost = gethostbyaddr($ClientIP);
$ClientAgent = $_SERVER['HTTP_USER_AGENT'];
$MyTimeStamp = time();


// Retrieve data from Query String
$word = $_GET['word'];
$word2 = $_GET['word2'];
$ballpark_id = $_GET['ballpark_id'];

// Escape User Input to help prevent SQL Injection
$word = mysql_real_escape_string($word);
$word2 = mysql_real_escape_string($word2);
$ballpark_id = mysql_real_escape_string($ballpark_id);

//build query
$query = "INSERT INTO clicks(ballpark_id, create_dt, test, test2) VALUES('$ballpark_id', now(), '$word', '$word2')";

//Execute query

// Exit if calling directly the script file!
if ($word != "")
{
$qry_result = mysql_query($query) or die(mysql_error());
}
else
{
echo '<b>Hacking Attempt!!</b><br><br>';
}


?>