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

if($_SESSION["role"] != "Manager")
{
echo "This page for Manager only!";
exit();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
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
<body style="background-color:#292F33;">
<br><br><br><br><br><br>
<div class="col-sm">
    <div class="card" style="width: 30%;">
  <div class="card-body">
      <center><h2><span class="badge badge-secondary">เพิ่มพนักงาน</span></h2></center>
  <form method="POST" action="adde.php">
    <label for="exampleFormControlInput1">Userid</label>
    <input class="form-control" type="text" placeholder="xxxxxx" name="user_id" required>
  
    <label for="exampleFormControlInput1">ชื่อ</label>
    <input  class="form-control" type="text" name="emp_name" required>
 
 
    <label for="exampleFormControlInput1">ตำแหน่งงาน</label>
    <select name="role">  
            <option value="Manager">Manager</option>  
            <option value="Fronted">Fronted</option>  
            <option value="Backend">Backend</option>  
          </select>
  

      <center>
                    <input class="btn btn-light" type="submit" name="submit" value="submit">
                    <button onclick="goBack()" type="button" class="btn btn-light">Back</button>
                </center>
    </div>


</form>
    </div>

  </div>
    </div>

    <script>
    function goBack() {
    window.history.back();
}
</script>
</body>
</html>
