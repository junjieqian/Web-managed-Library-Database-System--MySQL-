<?php
$con = mysql_connect('cse.unl.edu', 'jqian', 'e_G95@');
if(!$con) {
  die("Could not connect:" . mysql_error());
}

$del_id=$_GET["id"];
$q="select * from Reader where username = '" . $_GET['id'] . "'";


mysql_select_db('jqian', $con);
$rs=mysql_query("select * from Reader where username = '" . $_GET['id'] . "'", $con);
//$row = mysql_fetch_array($rs, MYSQL_ASSOC);

if(!$rs) {die("No result for" . $del_id . "!");}
?>

<html> 
<head> 
</head> 
<body> 

<form action="modify_finish.php" method="POST"> 
<?php 
echo"<table>";
echo "<input type='text' size=25 name='id' value='$del_id'>"; 
//while($row = mysql_fetch_object($rs)) 
//{
//Print("username was: " . $row['username']");
echo "username: <input type='text' size=10 name='username' value='$row[username]'>"; 
echo"<br />";
echo "user_city: <input type='text' size=10 name='user_city' value='$row[user_city]'>";
echo"<br />";
echo "email: <input type='text' size=10 name='email' value='$row[email]'>";
echo"<br />";
echo "telephone: <input type='text' size=10 name='telephone' value='$row[telephone]'>";
//}
echo"</table>";
//mysql_close($con);

?> 
<input type="submit" name="submit" value="submit"> 
</form> 

</body> 
</html> 