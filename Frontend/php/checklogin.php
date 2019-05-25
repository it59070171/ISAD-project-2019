    	<?php
			function conn(){
		$conn = new mysqli("localhost", "root","", "stock");
		return $conn;
	}
					    $user_id = $_POST['username'];
						$user_pass = $_POST['password'];
						$conn = conn();
						$sql = "SELECT * FROM employees
						WHERE user_id = $user_id
						AND user_pass = $user_pass";
						$result = $conn->query($sql);
						$row = $result->fetch_assoc();
						if(!$row){
						      echo "Username and Password Incorrect!";
						  }else{
						  	if ($row['row']=='Manager') {
						  		echo "1";
						  	}elseif ($row['row']=='Frontend') {
						  		echo "2";
						  	}elseif ($row['row']=='Backend') {
						  		echo "3";
						  	}
		?>