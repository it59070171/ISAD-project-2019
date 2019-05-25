<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
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
      <center><h2><span class="badge badge-secondary">เพิ่มสินค้า</span></h2></center>
<form method="POST" action="addp.php">
 <label for="exampleFormControlInput1">รหัสบาร์โค้ดสินค้า</label>
 <input type="text" name="p_code" value="">
  <div class="form-group">
    <label for="exampleFormControlInput1">ชื่อผลิตภัณฑ์</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="p_name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">ราคา</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="p_price" placeholder="x.xx">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">โซนที่อยู่</label>
    <select name= "l_id">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
  </div>
  <div class="form-group">
  <label for="exampleFormControlInput1">Category</label>
   <select name="cat_id">

        <option value="1">ของใช้ทั่วไป</option>
        <option value="2">อุปกรณ์</option>
        <option value="3">ยา</option>
        <option value="4">อาหาร</option>
        <option value="5">ของเล่น</option>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">วันหมดอายุ</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ปี-เดือน-วัน (ตัวอย่าง 2019-02-24 เป็นต้น)" name="expired_date">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">จำนวนขั้นต่ำ</label>
    <input type="text"class="form-control" id="exampleFormControlInput1" placeholder="เลขจำนวนเต็ม" name="p_min">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">จำนวนสินค้า</label>
    <input type="text"class="form-control" id="exampleFormControlInput1" placeholder="เลขจำนวนเต็ม" name="p_quantity">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">รายละเอียดสินค้า</label>
    <input type="text"class="form-control" id="exampleFormControlInput1" placeholder="" name="p_descript">
  </div>

       <center> <input type="submit" name="submit" value="submit"></center>



</form>
    </div>

  </div>
    </div>


</body>
</html>
