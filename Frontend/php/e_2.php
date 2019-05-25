<?php
session_start();
function conn(){
		$conn = new mysqli("localhost", "root","", "stock");
		return $conn;
	}
$emp_id = $_SESSION['emp_id'];
$emp_name = $_POST['emp_name'];
$user_pass = $_POST['user_pass'];
$role= $_POST['role'];
$conn = conn();
$sql = "UPDATE employees SET user_pass ='$user_pass',emp_name ='$emp_name',role ='$role' WHERE emp_id = '$emp_id'";
$result = $conn->query($sql);
echo "Update success";
unset($_SESSION['emp_id']);
?>