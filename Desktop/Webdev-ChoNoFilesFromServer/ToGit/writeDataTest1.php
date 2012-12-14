<?php
$con = mysql_connect("localhost","vsingh7","xnogzhWO");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vsingh7", $con);


mysql_query("INSERT INTO comment (CommentID, Time, Comment, Name, Offset)
VALUES ('11', '8.5', 'Test1', 'cp3', '63')");

mysql_close($con);
?> 