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
<html>
<head>
    <title>แก้ไขข้อมูลพนักงาน</title>
</head>
<body style="background-color:#292F33;">
    <div class="col-sm"><br><br><br><br>
        <div class="card" style="width: 70%;">
          <div class="card-body">
              <center><h2><span class="badge badge-secondary">แก้ไขข้อมูลพนักงาน</span></h2></center>
              <form method="POST" action="e_2.php">
                <div class="form-group">
                    Employee Name<br>
                    <input class="form-control" type="text" name="emp_name" required>
                </div>
                 <div class="form-group">
                    Password<br>
                    <input class="form-control" type="text" name="user_pass" required>
                </div>

                <div class="form-group">
                    Employee Position<br>
                   <select name="role">  
            <option value="Manager">Manager</option>  
            <option value="Fronted">Fronted</option>  
            <option value="Backend">Backend</option>  
          </select>
                </div>


               
                <center>
                    <input type="submit" name="submit" value="submit">
                </center>
            </form> 
        </div>
    </div>
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
