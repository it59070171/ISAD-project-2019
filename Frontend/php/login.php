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

    </style>

</head>
<body>
<br><br><br><br><br><br>
<div class="col-sm">
    <div class="card" style="width: 30%;">
  <div class="card-body">
    <form method="POST" action="checklogin.php">

      <center><h2><span class="badge badge-secondary">เข้าสู่ระบบ</span></h2></center>
              <form method="POST" action="viewProduct2.php">
                <div class="form-group">
                    User ID<br>
                    <input class="form-control" type="text" id="username" name="username">
                    <br>
                    Password
                    <input class="form-control" type="password" id="password" name="password">
                    <br>
                </div>

                <center>
                    <input type="submit" name="submit" value="submit">
                </center>
            </form> 


</form>
    </div>

  </div>
    </div>


</body>
