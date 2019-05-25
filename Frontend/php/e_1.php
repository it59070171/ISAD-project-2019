<?php
session_start();
function conn(){
		$conn = new mysqli("localhost", "root","", "stock");
		return $conn;
	}
$emp_id = $_POST['emp_id'];
$conn = conn();
$sql = "SELECT * from employees where emp_id = '$emp_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	header( "location: emp_edit2.php" );
	$_SESSION['emp_id'] = $emp_id;
}
else{
	echo("No employees that use this id");
}

?>
<!DOCTYPE html>
                  <html>
                  <head>
                  	<title></title>
                  </head>
                  <body>
                  <br>
                  <button type="button" class="btn btn-light" onclick="window.location.href='ManagerPage.php';">Back</button>
                  </body>
                  </html>