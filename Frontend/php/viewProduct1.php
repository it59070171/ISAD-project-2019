<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ดูข้อมูลสินค้า</title>
</head>
<body>
    <div class="col-sm"><br><br><br><br>
        <div class="card" style="width: 70%;">
          <div class="card-body">
              <center><h2><span class="badge badge-secondary">ดูข้อมูลสินค้า</span></h2></center>
              <form method="POST" action="viewProduct2.php">
                <div class="form-group">
                    Product ID<br>
                    <input class="form-control" type="text" name="p_id">
                </div>

                <center>
                    <input class="btn btn-light" type="submit" name="submit" value="submit">
                    <button onclick="goBack()" type="button" class="btn btn-light">Back</button>
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

    <script>
function goBack() {
  window.history.back();
}
</script>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
