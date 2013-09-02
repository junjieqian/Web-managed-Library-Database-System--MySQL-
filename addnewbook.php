<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CSCE813 Project 2 - Adding one new book and update the physicalcopy tables addnewbook.php</title>
</head>
<body>

<!-- ADD new reader and modify the reader information -->
<form action="insertbook.php" method="post">
ISBN: <input type="text" name="ISBN" />
Title: <input type="text" name="title" />
Author: <input type="text" name="author" />
Publisher: <input type="text" name="publisher" />
CatalogNo: <input type="text" name="catalogNo" />
OverdueChargePerDay: <input type="text" name="overdueChargePerDay" />
<input type="submit" />
</form>

</body>
</html>
