<?php


//connect to mysql
$MySQLConnection = mysql_connect( "localhost", "vsingh7", "xnogzhWO" );
//load the database
mysql_select_db( "vsingh7" );

$id = $_POST["id"];
//get information from the test table
$Query = "SELECT @row := @row + 1 AS commentNumber, commentTimeOnProgressBar, comment, commentImage, createdBy, commentOffset,
case 
when octet_length(commentImage) > 4000 and 
     length(comment)>0 then 't+d'
when octet_length(commentImage) > 4000 then 'd' 
when length(comment)>0 then 't'
end as DisplayType
FROM comments , (SELECT @row := 0) r WHERE videoID='$id' ORDER BY commentTimeOnProgressBar";
$Result = mysql_query( $Query );
/* print out your own XML */
print "<comment>\n";
while( $Row = mysql_fetch_object( $Result ) )
{

   print "<Items><Number>".$Row->commentNumber."</Number>
   				<ID>".$Row->commentID."</ID>
   				 <Time>".$Row->commentTimeOnProgressBar."</Time>
   				 <Comment>".$Row->comment."</Comment>
   				 <image>".$Row->commentImage."</image>
   				 <createdBy>".$Row->createdBy."</createdBy>
   				 <Offset>".$Row->commentOffset."</Offset>
   				 <DisplayType>".$Row->DisplayType."</DisplayType></Items>\n";
}
print "</comment>";
?>