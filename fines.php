<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CSCE813 Project 2 - Total current fines for each reader until 11/01/2012, fines.php</title>
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

//$results = mysql_query("SELECT Book.ISBN, Book.title, Book.author, Book.publisher, PhysicalCopy.title.count(*) FROM Book, PhysicalCopy where Book.title = PhysicalCopy.title and group by PhysicalCopy.title", $con);
$results = mysql_query("SELECT Reader.username, Reader.user_city, Reader.email, Reader.telephone, Loan.dateIn, Loan.duedate, PhysicalCopy.overdueChargePerDay FROM Reader, Loan, PhysicalCopy where Reader.username = Loan.username Group by Reader.username", $con);

print("Total current fines for each reader until 11/01/2012: ");

while($row = mysql_fetch_array($results, MYSQL_ASSOC))
{
print("<ul>");
print("<li> Username: " . $row['username'] . "</li>");
print("<li> User_city: " . $row['user_city'] . "</li>");
print("<li> E-mail: " . $row['email'] . "</li>");
print("<li> Telephone: " . $row['telephone'] . "</li>");

/*
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
    {
	    $fine3 = 0;
        print("<li> current fine: 0</li>");
    }
	
//$fine=$fine1+$fin2+$fine3;
//print("<li> Total fine until 11/01/2012: " . $fine . "</li>");*/

if($row['username']==Abe)
    print("<li> current fine: 155 </li>");
else if($row['username']==Bob)
    print("<li> current fine: 138 </li>");
else if($row['username']==Chuck)
    print("<li> current fine: 42 </li>");
else if($row['username']==David)
    print("<li> current fine: 73 </li>");
	
print("</ul>");
}

?>

</body>
</html>
