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
  <title>สแกนเพื่อขายสินค้า</title>
</head>
<body style="background-color:#292F33;">
  <div class="col-sm"><br><br><br><br>
    <div class="card" style="width: 50%;">
      <div class="card-body">
        <center><h2><span class="badge badge-secondary">โปรดสแกนบาร์โค้ดสินค้า</span></h2></center>
        <form method="POST" action="scan2.php">
          <div class="form-group">
            Product Code<br>
            <input class="form-control" type="text" name="p_code" required>
          </div>

          <center>
            <input type="submit" name="submit" value="submit">
            <button onclick="goBack()" type="button" class="btn btn-light">Back</button>
          </center>
        </form> 
      </div>
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
