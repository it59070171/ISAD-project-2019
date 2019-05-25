<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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

        .jumbotron{
	        background-color: whitesmoke;
        } 

    </style>

</head>
<body style="background-color:#292F33;">
<br><br><br>
<div class="jumbotron">
    <center>
  <h1 class="display-4">ระบบการจัดการคลังสินค้า</h1>
  <p class="lead">เพื่ออำนวยความสะดวกในการจัดการร้านค้าของคุณ</p>
  <hr class="my-4">
  <h2><span class="badge badge-secondary">เข้าสู่ระบบ</span></h2>
  <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
      <form method="POST" action="checklogin.php">
        <form method="POST" action="viewProduct2.php">
          <div class="form-group">
              User ID<br>
              <input class="form-control" type="text" id="username" name="username" required>
              <br>
              Password
              <input class="form-control" type="password" id="password" name="password" required>
              <br>
          </div>


              <input class="btn btn-dark" type="submit" name="submit" value="submit">

      </form> 


</form>
      </div>
  </div>
  </center>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
