<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CSCE813 Project 2 - PhysicalCopy.php</title>
</head>
<body>

<?php
$con = mysql_connect('cse.unl.edu', 'jqian', 'e_G95@');
if(!$con) {
  die("Could not connect:" . mysql_error());
}

mysql_select_db('jqian', $con);

// DISPLAY RESULTS
//print("The selected reader name: " . $_GET['userName'] . "\n" );
echo"<br />";

$results = mysql_query("SELECT * FROM PhysicalCopy where PhysicalCopy.catalogNo not in (select catalogNo from Loan)", $con);
//print("Number results:" . mysql_num_rows($results) . "\n");

print("Books currently on hand for library: ");

while($row = mysql_fetch_array($results, MYSQL_ASSOC))
{
print("<ul>");
print("<li> catalogNo: " . $row['catalogNo'] . "</li>");
print("<li> title: " . $row['title'] . "</li>");
print("<li> overdueChargePerDay: " . $row['overdueChargePerDay'] . "</li>");
//print("<li>Telephone: " . $row['telephone'] . "</li>");
print("</ul>");
}

?>

</body>
</html>
