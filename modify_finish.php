<?php 

$con =mysql_connect('cse.unl.edu', 'jqian', 'e_G95@'); 
if(!$con){die("error");} 
 
mysql_select_db('jqian', $con); 

$rs = mysql_query("select * from Reader where username = '" . $_POST['id'] . "'", $con); 
//$rs=mysql_query($q,$con);
echo $q . "</p>";
//$row = mysql_fetch_object($rs); 
$row = mysql_fetch_array($rs, MYSQL_ASSOC);
$modify_sql="update Reader set username = '" . $_POST['username'] . "', user_city = '" . $_POST['user_city'] . "', email = '" . $_POST['email'] ."' where username = '" . $_POST['id'] . "'";

echo $modify_sql . "</p>";

if(mysql_query($modify_sql, $con))
    echo "Successful!" ; 
else
    echo"Failed!";

mysql_close($con); 

?>