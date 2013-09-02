<?php
$con = mysql_connect('cse.unl.edu', 'jqian', 'e_G95@');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('jqian', $con);

$sql="INSERT INTO Reader (username, user_city, email, telephone) VALUES ('$_POST[username]','$_POST[user_city]','$_POST[email]', '$_POST[telephone]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>