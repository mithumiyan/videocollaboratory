<?php

//connect to mysql
$MySQLConnection = mysql_connect( "localhost", "sa", "password" );
//load the database
mysql_select_db( "db2" );
$user = $_POST["user"];
//get information from the test table
$Query = "SELECT * from journal ";
$Result = mysql_query( $Query );
/* print out your own XML */
print "<Files>\n";
while( $Row = mysql_fetch_object( $Result ) )
{
   print "<Items><journalText>".$Row->journalText."</journalText>
   				 <journalDate>".$Row->journalDate."</journalDate>
   				 </Items>\n";
}
print "</Files>";
?>