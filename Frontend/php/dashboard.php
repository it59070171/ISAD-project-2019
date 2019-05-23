<?php 
function conn(){
        $conn = new mysqli("localhost", "root","", "tt");
        return $conn;
      }
            $month = 'Dec';
            $year = 2015;
            $conn = conn();
            $sql = "SELECT * FROM employee
            WHERE month = $month
            AND year = $year";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if(!$row){
                  echo "Username and Password Incorrect!";
              }else
              {
                echo "132312345";
              }
 ?>
