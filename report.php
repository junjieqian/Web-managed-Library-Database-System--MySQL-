<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CSCE813 Project 2 - information.php</title>
</head>
<body>

<?php
$con = mysql_connect('cse.unl.edu', 'jqian', 'e_G95@');
if(!$con) {
  die("Could not connect:" . mysql_error());
}

mysql_select_db('jqian', $con);

if(isset($_GET['userName'])) {

// DISPLAY RESULTS
print("The selected reader name: " . $_GET['userName'] . "\n" );
echo"<br />";

$results = mysql_query("SELECT Loan.catalogNo, PhysicalCopy.title, PhysicalCopy.overdueChargePerDay, Loan.dateIn, Loan.duedate FROM Loan, PhysicalCopy WHERE Loan.username = '" . $_GET['userName'] . "' and Loan.catalogNo = PhysicalCopy.catalogNo", $con);
print("Number results:" . mysql_num_rows($results) . "\n");

$num=mysql_num_rows($results);
echo"<br />";
//print("Number results:" . $num);

echo"<table>";
print("The books in loan of " . $_GET['userName'] . "\n" );

while($row = mysql_fetch_array($results, MYSQL_ASSOC))
{
print("<ul>");
print("<li> catalogNo: " . $row['catalogNo'] . "</li>");
print("<li> title: " . $row['title'] . "</li>");
print("<li> dateIn: " . $row['dateIn'] . "</li>");
print("<li> duedate: " . $row['duedate'] . "</li>");
//print("<li> current fine: " . DATEDIFF(day,2012-11-01,$row['duedate'])*overdueChargePerDay . "</li>");

//echo"<$fine>";
if($row['dateIn']==NULL)
    {
        $days1 = abs((strtotime("2012-11-01")-strtotime($row['duedate']))/86400);
        $fine1 = $days1 * $row['overdueChargePerDay'];
		print("<li> current fine: " . $fine1 . "</li>");
	}
else if (date("Y-m-d",strtotime($row['dateIn']))>date("Y-m-d",strtotime($row['duedate'])))
    {
        $days2 = abs((strtotime($row['dateIn'])-strtotime($row['duedate']))/86400);
        $fine2 = $days2 * $row['overdueChargePerDay'];   
		print("<li> current fine: " . $fine2 . "</li>");
	
	}
else
    print("<li> current fine: 0</li>");
print("</ul>");
}
echo"</table>";

} else {
?>
<!-- adding code here for end users to pick the person and see the results -->
<form action="report.php" method="GET">
<div>


         <select name="userName" id="userName">
                <option value="blank">Select One Reader Name</option>
                <option value="Abe">Abe</option>
		        <option>Bob</option>
		        <option>Chunck</option>
		        <option>David</option>
         </select>
<input type="submit" />
</div>
</form>
<?php
}
?>

</body>
</html>
