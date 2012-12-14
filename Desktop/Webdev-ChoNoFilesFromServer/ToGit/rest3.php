<?php

$con = mysql_connect( "localhost", "vsingh7", "xnogzhWO" );
//load the database
mysql_select_db( "vsingh7" );
//include '../library/config.php';
//include '../library/opendb.php';
$filename = "test";
$filepath = "test1";
$today = date("H:i:s"); 


$query = "INSERT INTO video (videoName, dateCreated, createdBy, dateChanged, changedBy,  videoType, videoSize, projectID, videoLocation ) 
VALUES ('$fileName', '$today','V','$today','V', '$fileName', '$fileName', '1', '$filePath')";

mysql_query($query) or die('Error, query failed : ' . mysql_error());

//include '../library/closedb.php';
mysql_close($con);
echo "<br>Files uploaded<br>";



?>
