<?php
$con = mysql_connect('cse.unl.edu', 'jqian', 'e_G95@');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('jqian', $con);

// SQL command that insert into the book table
$sql="INSERT INTO Book (ISBN, title, author, publisher) VALUES ('$_POST[ISBN]','$_POST[title]','$_POST[author]', '$_POST[publisher]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 book record added";

echo"<br />";
echo"<br />";
echo"<br />";

$sql_modify="INSERT INTO PhysicalCopy (catalogNo, title, overdueChargePerDay) VALUES ('$_POST[catalogNo]','$_POST[title]','$_POST[overdueChargePerDay]')";

if (!mysql_query($sql_modify,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 Physicalcopy record added";

mysql_close($con);
?>