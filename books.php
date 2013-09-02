<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CSCE813 Project 2 - Books with number of physicalcopies.php</title>
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
$results = mysql_query("SELECT Book.ISBN, Book.title, Book.author, Book.publisher, count(*) FROM Book, PhysicalCopy where Book.title = PhysicalCopy.title Group by Book.title", $con);

print("Books with number of PhysicalCopy: ");

while($row = mysql_fetch_array($results, MYSQL_ASSOC))
{
print("<ul>");
print("<li> ISBN: " . $row['ISBN'] . "</li>");
print("<li> Title: " . $row['title'] . "</li>");
print("<li> Author: " . $row['author'] . "</li>");
print("<li> Publisher: " . $row['publisher'] . "</li>");
print("<li> Number of Physical Copies: " . $row['count(*)'] . "</li>");
print("</ul>");
}

?>

</body>
</html>
