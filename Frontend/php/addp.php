<?php
function conn(){
            $conn = new mysqli("localhost", "root","", "stock");
            return $conn;
      }
$p_code = $_POST['p_code'];
$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$l_id = $_POST['l_id'];
$p_quantity = $_POST['p_quantity'];
$cat_id = $_POST['cat_id'];
$p_descript = $_POST['p_descript'];
$p_min = $_POST['p_min'];
$expired_date =  $_POST['expired_date'];
$conn = conn();
$sql = "INSERT INTO product(p_code,p_name,p_price,l_id,p_quantity,cat_id,p_descript,expired_date,p_min) VALUES ('$p_code','$p_name','$p_price','$l_id','$p_quantity','$cat_id','$p_descript','$expired_date','$p_min')";
$result = $conn->query($sql);
echo "Add product Success";

?>
<!DOCTYPE html>
                  <html>
                  <head>
                  	<title></title>
                  </head>
                  <body>
                  <br>
                  <button type="button" class="btn btn-light" onclick="window.location.href='Backpage.php';">Back</button>
                  </body>
                      <script>
function goBack() {
  window.history.back();
}
</script>
                  </html>
