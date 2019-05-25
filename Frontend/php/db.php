<?php 
  ///
  $sum_income = 0;
  $sum_outcome = 0;
  $sum_circulation = 0;
  ///
function conn(){
    $conn = new mysqli("localhost", "root","", "stock");
    return $conn;
  }
  $month = $_POST["month"];
  $year = $_POST["year"];
  $conn = conn();
  $sql = "SELECT * FROM finance WHERE month = $month AND year = $year";
  $result = $conn->query($sql);
  $count = mysqli_num_rows($result);
  $row = $result->fetch_assoc();
  for ($i=1; $i <= $count ; $i++) {
    if($row["order_id"] == $i){
        $sum_income += $row["income"];
        $sum_outcome += $row["outcome"];
        $sum_circulation += $row["circulation"];
    }
  }
  // switch ($row['week']) {
  //   case 1:
  //     $week1 = $row['week'];
  //     $incomeWeek = 
  //     break;
  //   case 2:
  //     $week2 = $row['week'];
  //     break;
  //   case 3:
  //     $week3 = $row['week'];
  //     break;
  //   case 4:
  //     $week4 = $row['week'];
  //     break;
  //   default:
  //     break;
  // }



  // for ($i=; $i < ; $i++) { 
  //   # code...
  // }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <div class="col-sm"><br><br><br><br>
    <div class="card" style="width: 80%;">
      <div class="card-body">
        <center><h2><span class="badge badge-secondary">Dashboard</span></h2></center><br><br><br><br>

        <div class="container">
          <div class="row">
            <div class="card" style="width: 30%;">
              <div class="card-body">
                <div class="col-sm">
                  Income:<?=$sum_income?>++<?=$row["income"]?><br>
                  Outcome:<?=$sum_outcome?>++<?=$row["outcome"]?><br>
                  Circulation:<?=$sum_circulation?>++<?=$row["circulation"]?><br>
                </div>
              </div>
            </div>
            <div class="card" style="width: 30%;">
              <div class="card-body">
                <div class="col-sm">
                  Month:<?=$month?><br>

                  Year:<?=$year?><br>

                  OrdetrID: <?=$row["order_id"]?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <center><button type="button" class="btn btn-light">Back</button></center>

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