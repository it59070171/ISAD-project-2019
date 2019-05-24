<html>

<head>
    <title>Notification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body style="background-color:#292F33;">

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <h2 style="text-align:center; color: whitesmoke;"><b>- การแจ้งเตือนสินค้า -</b></h2><br>
                <div class="card border-dark mb-3">
                    <div class="card-body">
                        <h3><img src="https://i.imgur.com/lWAY0Os.png" alt="danger">&nbsp;การแจ้งเตือนสินค้าเหลือน้อย</h3>
                        <?php 
                            function conn(){
                            $conn = new mysqli("localhost", "root","", "stockingver999");
                              return $conn;
                            }
                            $conn = conn();
                            $sql = "SELECT p_name,p_quantity FROM product";

                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                if($row['p_quantity']<30){
                                ?>
                                <hr class="my-4">
                                <ul>
                                    <li>Product: <?=$row['p_name'];?><br> Quatity: <?=$row['p_quantity'];?></li>
                                </ul>
                                <?php
                                }
                            }
                         ?>
                    </div>
                </div><br>
                <div class="card border-dark mb-3">
                        <div class="card-body">
                            <h3><img src="https://i.imgur.com/lWAY0Os.png" alt="danger">&nbsp;การแจ้งเตือนสินค้าใกล้หมดอายุ</h3>
                            <?php 

                            $conn = conn();
                            $sql = "SELECT p_name,p_min FROM product";

                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                if($row['p_min']<10){
                                ?>
                                <hr class="my-4">
                                <ul>
                                    <li>Product: <?=$row['p_name'];?><br> EXP: <?=$row['p_min'];?></li>
                                </ul>
                                <?php
                                }
                            }
                         ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>