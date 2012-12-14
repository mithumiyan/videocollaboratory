<?php

header("Content-type: text/xml");

$host = "localhost";
$user = "vsingh7";
$pass = "xnogzhWO";
$database = "vsingh7";

$linkID = mysql_connect($host, $user, $pass) or die("Could not connect to host.");
mysql_select_db($database, $linkID) or die("Could not find database.");

$query = "SELECT * FROM video where videoID > 90";
$resultID = mysql_query($query, $linkID) or die("Data not found.");

$xml_output = "<?xml version=\"1.0\"?>\n";
$xml_output .= "<videos>\n";

for($x = 0 ; $x < mysql_num_rows($resultID) ; $x++){
    $row = mysql_fetch_assoc($resultID);
    $xml_output .= "\t<folderName title = " . "'" . $row['folderName'] . "'" . ">\n";
    $xml_output .= "\t\t<dateCreated>" . $row['dateCreated'] . "</dateCreated>\n";
  
    $xml_output .= "\t\t<video name = " . "'" . $row['videoName'] . "'" . " path = " . "'" . $row['videoLocation'] . "'" . " ID = " . "'" . $row['videoID'] . "' " . " />\n";
    $xml_output .= "\t</folderName>\n";
}

$xml_output .= "</videos>";

echo $xml_output;

?> 