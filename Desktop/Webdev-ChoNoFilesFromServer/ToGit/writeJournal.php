<?php
//connect to mysql
$con = mysql_connect( "localhost", "vsingh7", "xnogzhWO" );
//load the database
mysql_select_db( "vsingh7" );

$journalText = $_POST["text"];
$user = $_POST["user"];
$today = date('Y-m-d H:i:s');



if(!get_magic_quotes_gpc())
{
$journalText = addslashes($journalText);
$user = addslashes($user);
}

//you could easily write code here that will update data in a database
$query="INSERT INTO journal (journalText, journalDate, journalUser)
VALUES
('$journalText','$today','$user')";

mysql_query($query) or die('Error, query failed : ' . mysql_error());

mysql_close($con)

?>