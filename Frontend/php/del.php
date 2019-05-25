<?php
function conn(){
		$conn = new mysqli("localhost", "root","", "stock");
		return $conn;
	}
$emp_id = $_POST['emp_id'];
$conn = conn();
$sql = "DELETE from employees where emp_id = '$emp_id'";
$result = $conn->query($sql);
echo "Delete Success";
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