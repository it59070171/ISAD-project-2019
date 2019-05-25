    	<?php
			function conn(){
		$conn = new mysqli("localhost", "root","", "stock");
		return $conn;
	}
					    $strSQL = "SELECT * FROM employees WHERE Username = '".mysql_real_escape_string($_POST['username'])."' and Password = '".mysql_real_escape_string($_POST['Password'])."'";
						$conn = conn();
						$objQuery = mysql_query($strSQL);
						$objResult = mysql_fetch_array($objQuery);
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