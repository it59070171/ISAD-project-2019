<?php 
 function conn(){
    $conn = new mysqli("localhost", "root","", "stock");
    return $conn;
  }
       $income = $_POST['p_price'] * $_POST["quantity"];
       $quantity = $_POST['quantity'];
       $year = date("Y");
       $month = date("m");
       $conn = conn();
       $sql = "INSERT INTO finance (
                income,
                circulation,
                year,
                month)
          VALUES ( '$income',  
                  '$quantity',
                  '$year',
                  '$month')";
                  $conn->query($sql);
                  ?>
                  <!DOCTYPE html>
                  <html>
                  <head>
                  	<title></title>
                  </head>
                  <body>
                  Sale Success
                  <br>
                  <button type="button" class="btn btn-light" onclick="window.location.href='scan1.php';">Back</button>
                  </body>
                  </html>