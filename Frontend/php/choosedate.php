<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Dashboard</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"><br><br>
			<div class="card">
  <div class="card-body">
		<h2>ดู Dashboard</h2>
		<hr class="my-4">
		<p>โปรดเลือกเดือนและปีที่ต้องการ</p>
	<form method="POST" action="db.php">
                <div class="form-group">
                    เดือน :  
					<select name="month" value="month">  
					  <option value="1">มกราคม</option>}  
					  <option value="2">กุมภาพันธ์</option>  
					  <option value="3">มีนาคม</option>  
					  <option value="4">เมษายน</option>  
					  <option value="5">พฤษภาคม</option>  
					  <option value="6">มิถุนายน</option>  
					  <option value="7">กรกฎาคม</option>  
					  <option value="8">สิงหาคม</option>  
					  <option value="9">กันยายน</option>
					  <option value="10">ตุลาคม</option>  
					  <option value="11">พฤศจิกายน</option>  
					  <option value="12">ธันวาคม</option> 
					</select>
					ปี :  
					<select name="year" value="year">  
					  <option value="2015">2015</option>}  
					  <option value="2016">2016</option>  
					  <option value="2017">2017</option>  
					  <option value="2018">2018</option>
					  <option value="2019">2019</option>
					</select>
                </div>

                <center>
                    <input type="submit" name="submit" value="submit">
                </center>
            </form> 
  </div>
</div>
			</div>
			<div class="col-md-4"></div>
		</div>

	</div>
	

						<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		 				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>