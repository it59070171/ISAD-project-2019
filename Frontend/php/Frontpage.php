<?php
function conn(){
		$conn = new mysqli("localhost", "root","", "stock");
		return $conn;
	}
session_start();
if($_SESSION["UserID"] == "")
{
echo "Please Login!";
exit();
}

if($_SESSION["role"] != "Frontend")
{
echo "This page for Frontend only!";
exit();
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Frontend Page</title>
</head>
<body>
	<br><br><br><br>
	<center><h2><span class="badge badge-secondary">หน้าหลักพนักงานหน้าร้าน</span></h2></center>
	<div class="col-sm"><br><br><br><br>
		<div class="container">
			<div class="row">
				<div class="card" style="width: 30%;">
					<div class="card-body">
						<div class="col-sm">
							<center><br>
							<a class="btn btn-dark" href="viewproduct1.php" role="button">ดูข้อมูลสินค้า</a>
							</center>
						</div>
					</div>
				</div>
				<div class="card" style="width: 30%;">
					<div class="card-body">
						<div class="col-sm">
							<center><br>
							<a class="btn btn-dark" href="scan1.php" role="button">แสกนบาร์โค้ดสินค้า</a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br>

	</div>

	<center><button type="button" class="btn btn-light">Log Out</button></center>

</div>
</div>
<!-- 	PHP

<button name = 'select_board_menu'onclick="window.location.href = 'login.html';">Dashboard</button>
	<br>
	<button name = 'select_emp_add_menu'onclick="window.location.href = 'addEmp.html';">addEmp</button>
	<br>
	<button name = 'select_product_menu'onclick="window.location.href = 'Product.html';">Product</button>
	<br>
	<button name = 'select_emp_del_menu'onclick="window.location.href = 'delEmp.html';">delEmp</button>
	<br>
	<button name = 'select_emp_edit_menu'onclick="window.location.href = 'editEmp.html';">editEmp</button> -->

</body>
<style>

.card{
	margin-left: auto;
	margin-right: auto;
	border-radius: 10pt;
	overflow: auto;

	transform: scale(0.8);
	margin-top: -60px;

}
.card-body{
	position: relative;

}

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
</html>