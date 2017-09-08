<?php
	if(isset($_POST["submit"])){
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];
		
		$x1 = (-$b + sqrt(pow($b, 2) -(4*$a*$c)))/2*$a ;
		$x2 = (-$b - sqrt(pow($b, 2) -(4*$a*$c)))/2*$a ;
	}
	if(isset($_POST["submit_radius"])){
		$pi = 3.147;
		$rad = $_POST["radius"];
		$area = $pi * pow($rad,2);
	}
	function sayHello(){
		echo "Hello";
	}
	
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
Quadratic equation easy calculator: 
<form action="" method="post" enctype="multipart/form-data">
    <p>a: <input name="a" type="text" size="5">
        	b: <input name="b" type="text" size="5">
            c: <input name="c" type="text" size="5">
    </p>
    <input name="submit" type="submit" value="Solve">
  </form>
  x1= <?php if(isset($x1)){echo $x1;} ?>, x2= <?php if(isset($x1)){echo $x2;}?><br>
  <br>
  Area of a circle:
  <form action="" method="post" enctype="multipart/form-data">
  <p>Radius: <input name="radius" type="text" size="5"></p>
  <input name="submit_radius" type="submit" value="Solve">
  Area= <?php if(isset($area)){echo $area."cm<sup>2</sup>";} ?>
  </form>
  <p>
  <a href="calculator.html"><button name="sayHello">Go to Calculator</button></a></p>
</body>
</html>