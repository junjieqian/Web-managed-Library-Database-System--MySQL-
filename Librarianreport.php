<html>
<head>
<title>CSCE813 Project 2 - Librarianreport.php</title>
</head>
<body>


<?php

header("Location: " . $_GET['select']);

?>

<form action="Librarianreport.php" method="GET">
<div>

         <select name="select" id="select">
                <option value="blank">Select One Report</option>
                <option value="physicalcopy.php">Report PhysicalCopy on hand</option>
		        <option value="books.php">Report book with number of PhysicalCopy</option>
		        <option value="duedate.php">Report due date for PhysicalCopy being borrowed sorted by catalogNo</option>
		        <option value="fines">Report readers with total current fines</option>
         </select>
		 <input type="submit" name="submit" value="submit">
</div>
</form>

</body>
</html>
