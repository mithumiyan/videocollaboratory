<?php
$con = mysql_connect("localhost","vsingh7","xnogzhWO");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vsingh7", $con);

$Query = "SELECT * from comment ORDER BY Time";
$Result = mysql_query( $Query );

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysql_fetch_array($Result))
  {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Time'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>