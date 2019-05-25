<?php
function conn(){
		$conn = new mysqli("localhost", "root","", "stock");
		return $conn;
	}
$user_id = $_POST['user_id'];
$emp_name = $_POST['emp_name'];
$role = $_POST['role'];
$RanPass = rand(100000,999999);
$conn = conn();
$sql = "INSERT INTO employees (user_id,user_pass,emp_name,role) VALUES ('$user_id', '$RanPass', '$emp_name', '$role')";
$result = $conn->query($sql);
echo "userid = $user_id";
echo '<br/>';
echo "password = $RanPass";
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