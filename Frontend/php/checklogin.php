<?php
function conn(){
		$conn = new mysqli("localhost", "root","", "stock");
		return $conn;
	}

session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$conn = conn();
$sql = "SELECT role FROM employees WHERE user_id='$username' AND user_pass='$password'";
$result = $conn->query($sql);
$objResult = mysqli_fetch_array($result);
	if ($result->num_rows > 0) {
		$_SESSION["UserID"] = $username;
		$_SESSION["role"] = $objResult['role'];
		if ($objResult['role'] == "Manager") {
			header( "location: ManagerPage.php" );
		}
		else if ($objResult['role'] == "Frontend") {
			header( "location: FrontPage.php" );
		}
		else
		{
			header( "location: BackPage.php" );
		}
				
	} else {
		echo "Username and Password Incorrect!";
	}


?>