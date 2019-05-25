<?php
include 'connectDB.php';
function conn(){
		$conn = new mysqli("localhost", "root","", "stocking");
		return $conn;
	}


$checkEmpID =  $conn->query("SELECT LAST(emp_id) FROM employees");
$RanPass = rand(100000,999999);
$sqlinsert = "INSERT INTO employees (emp_id,user_id,user_pass,emp_name,role) VALUES ('$checkEmpID', '$_POST["user_id"]', '$ranpass', '$_POST["emp_name"]', '$_post["role"]')";
echo "password = '$RanPass'";
?>