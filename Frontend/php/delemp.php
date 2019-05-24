
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

</head>
<body>
<br><br><br><br><br><br>
<div class="col-sm">
    <div class="card" style="width: 30%;">
  <div class="card-body">
      <center><h2><span class="badge badge-secondary">ลบพนักงาน</span></h2></center>
    <form method="POST" action="del.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">รหัสพนักงานที่ต้องการนำออกจากระบบ</label>
    <input type="email" class="form-control" name="emp_id" placeholder="xxxxxx">
  </div>


       <center> <button type="button" class="btn btn-primary">ยืนยัน</button></center>



</form>
    </div>

  </div>
    </div>


</body>
</html>