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
<body>
  <div class="col-sm"><br><br><br><br>
    <div class="card" style="width: 50%;">
      <div class="card-body">
        <center><h2><span class="badge badge-secondary">ระบุจำนวนสินค้าที่ขาย</span></h2></center>
        <?php
              function conn(){
    $conn = new mysqli("localhost", "root","", "stock");
    return $conn;
  }
              $p_code = $_POST['p_code'];
              $conn = conn();
              $sql = "SELECT * FROM product
              WHERE p_code = $p_code";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              
        ?>
        <p>ชื่อสินค้า: <?=$row["p_name"]?></p>
        <p>ราคาต่อหน่วย: <?=$row["p_price"]?></p>
        <form method="POST" action="scan3.php">
          <div class="form-group">
            จำนวนที่ขาย<br>
            <input class="form-control" type="integrity" name="quantity" required>
          </div>
          <center>
            <input type="hidden" name="p_price" value="<?=$row['p_price']?>"> 
            <button type="send" value="sell" class="btn btn-dark">Sell</button>
            <button type="button" class="btn btn-light" onclick="window.location.href='scan1.php';">Back</button>
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