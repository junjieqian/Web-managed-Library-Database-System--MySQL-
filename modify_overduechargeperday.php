<html>
<head>
<title>CSCE813 Project 2 - Modify the overduechargeperday of physicalcopy modify_overduechargeperday.php</title>
</head>
<body>

<?php
$con = mysql_connect('cse.unl.edu', 'jqian', 'e_G95@');
if(!$con) {
  die("Could not connect:" . mysql_error());
}

mysql_select_db('jqian', $con);

if(isset($_GET['title'])) {

// DISPLAY RESULTS
print("The selected book title: " . $_GET['title'] . "\n" );
echo"<br />";

$sql = "update PhysicalCopy set overdueChargePerDay = '" . $_GET['overdueChargePerDay'] . "' where title =  '" . $_GET['title'] . "'";

if (!mysql_query($sql,$con))
{
  die('Error: ' . mysql_error());
}

echo "The overduechargeperday of the chosen book is modified!";

echo"<br />";


$results = mysql_query("SELECT * FROM PhysicalCopy WHERE title = '" . $_GET['title'] . "'", $con);
//print("Number results:" . mysql_num_rows($results) . "\n");

$row = mysql_fetch_array($results, MYSQL_ASSOC);
print("PhysicalCopy's information: ");
print("<ul>");
print("<li> Title: " . $row['title'] . "</li>");
print("<li> OverdueChargePerDay: " . $row['overdueChargePerDay'] . "</li>");
print("</ul>");

}
else{
?>

<form action="modify_overduechargeperday.php" method="GET">
<div>


         <select name="title" id="title">
                <option value="blank">Select One Book Title</option>
                <option value="Computer Architecture">Computer Architecture</option>
		        <option value="Introduction to Algorithms">Introduction to Algorithms</option>
		        <option value="Mastering Linux">Mastering Linux</option>
		        <option value="Introduction to Java Programming">Introduction to Java Programming</option>
				<option value="System Architecture">System Architecture</option>
         </select>
		 
		 <br><br>
		 
		 New OverdueChargePerday: <input type="text" name="overdueChargePerDay" />

<input type="submit" />
</div>
</form>
<?php
}
?>

</body>
</html>
