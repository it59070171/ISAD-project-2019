<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<form method="POST" action="db.php">
                <div class="form-group">
                    Month :  
					<select name="month" value="month">  
					  <option value="1">Jan</option>}  
					  <option value="2">Feb</option>  
					  <option value="3">Mar</option>  
					  <option value="4">Apl</option>  
					  <option value="5">may</option>  
					  <option value="6">Jun</option>  
					  <option value="7">Jul</option>  
					  <option value="8">Aug</option>  
					  <option value="9">Sep</option>
					  <option value="10">Oct</option>  
					  <option value="11">Nov</option>  
					  <option value="12">Dec</option> 
					</select>
					Year :  
					<select name="year" value="year">  
					  <option value="2015">2015</option>}  
					  <option value="2016">2016</option>  
					  <option value="2017">2017</option>  
					  <option value="2018">2018</option>
					  <option value="2019">2019</option>
					</select>
                </div>

                <center>
                    <input type="submit" name="submit" value="submit">
                </center>
            </form> 

</body>
</html>