<html>
<head>
<title>CSCE813 Project 2 - Librarianupdate.php</title>
</head>
<body>


<?php

header("Location: " . $_GET['select']);

?>

<form action="Librarianupdate.php" method="GET">
<div>

         <select name="select" id="select">
                <option value="blank">Select One Function</option>
                <option value="addnewreader.php">Function for adding new reader and modifying reader information</option>
		        <option value="addnewbook.php">Function for adding new book</option>
		        <option value="modify_overduechargeperday.php">Function for modifying the overdueChargePerDay</option>
         </select>
		 <input type="submit" name="submit" value="submit">
</div>
</form>

</body>
</html>
