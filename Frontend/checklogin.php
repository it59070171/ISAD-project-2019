<!DOCTYPE html>
<html>
<head>
	<title>ONE TWO TWO - Promotion</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="http://jabont.com/jayss/jayss.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>
<body style="font-family: 'Kanit', sans-serif;">
    <div id="menu">
        <div class="logo">
            <img id="logo122" src="icon_122.jpg" align="middle">
        </div>
        <menu class="center">
            <a href="index.php"><li class="moment"><h3>Home</h3></li></a>
            <a href="history.php"><li><h3>History</h3></li></a>
            <a href="menu.php"><li><h3>Menu</h3></li></a>
            <a href="promotion.php"><li><h3>Promotion</h3></li></a>
            <a href="contact.php"><li><h3>Contact</h3></li></a>
        </menu>
    </div>
    <div role="main" class="container">
    	<div class="card">
    		<div class="redeem">
    	<?php
			function conn(){
				$conn = new mysqli("localhost", "root","", "stockingver999");
				return $conn;
			}
					    $username = $_POST['username'];
						$password = $_POST['password'];
						$conn = conn();
						$sql = "SELECT * FROM employees
						WHERE username = $username
						AND password = $password";
						$result = $conn->query($sql);
						$row = $result->fetch_assoc();
						if(!$row){
						      echo "Username and Password Incorrect!";
						  }else{
						  	if ($row['row']=='Manager') {
						  		header("Location: /url/to/the/other/page");
   								 exit;
						  	}elseif ($row['row']=='Frontend') {
						  		header("Location: /url/to/the/other/page");
   								 exit;
						  	}elseif ($row['row']=='Backend') {
						  		header("Location: /url/to/the/other/page");
   								 exit;
						  	}
		?>
	</div>
</div>
	</div>

	<script>
		window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
                document.getElementById("menu").style.height = "3.5em";
                // document.getElementsByClassName("logo")[0].style.width = "374px";
                document.getElementById("logo122").style.width = "0em";
                document.getElementsByClassName("logo")[0].style.height = "0em";
                // document.getElementsByClassName("logo")[0].style.marginLeft = "15em";
                // document.getElementsByClassName("center").style.width = "650px";
                // document.getElementsByTagName("li").style.width = "130px";
            }
            else {
                document.getElementById("menu").style.height = "9em";
                // document.getElementsByClassName("logo")[0].style.width = "100%";
                document.getElementById("logo122").style.width = "7em";
                document.getElementsByClassName("logo")[0].style.height = "5.5em";
                // document.getElementsByClassName("logo")[0].style.marginLeft = "0em";
                // document.getElementsByClassName("center").style.width = "1024px";
                // document.getElementsByTagName("li").style.width = "204.8px";
            }
        }
	</script>
</body>
</html>