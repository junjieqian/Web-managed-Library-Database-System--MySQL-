<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CSCE813 Project 2 - information.php</title>
</head>
<body>

<p>Want to check one patron information? Please choose the name from droplist first!</p>

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

$results = mysql_query("SELECT * FROM Reader NATURAL LEFT JOIN Loan WHERE Reader.userName = '" . $_GET['userName'] . "'", $con);
//print("Number results:" . mysql_num_rows($results) . "\n");

$row = mysql_fetch_array($results, MYSQL_ASSOC);
print("Reader's information: ");
print("<ul>");
print("<li> username: " . $row['username'] . "</li>");
print("<li> user_city: " . $row['user_city'] . "</li>");
print("<li> email: " . $row['email'] . "</li>");
print("<li>Telephone: " . $row['telephone'] . "</li>");
print("</ul>");

} else {
?>
<!-- adding code here for end users to pick the person and see the results -->
<form action="information.php" method="GET">
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

<p>Want to modify one patron information? Please click this <a href="view.php">link</a>!</p>

</body>
</html>
