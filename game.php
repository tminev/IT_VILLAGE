<?php	
session_start();
$select= "border: 3px solid red;"; 
if ($_SESSION['count']>=0) {
$_SESSION['count']=$_SESSION['count']-1;
echo "Брой хвърляния:" . $_SESSION['count'] . "<br>" ;

echo "Текуща сума: " . $_SESSION['money'];

$rand=rand(1,6);

echo "<br>Зарче: " . $rand . "<br>";
echo $_SESSION['temp'] . "<br>";
$_SESSION['temp'] = $_SESSION['temp'] + $rand;
echo $_SESSION['temp'];




if ($_SESSION['temp']>12) {
	$_SESSION['temp']=$_SESSION['temp']-12;
}
echo "<br>" . $_SESSION['temp'] . "<br>";

switch ($_SESSION['temp']) {
	case '1':
		$sel1=$select;
		echo "P";
		$_SESSION['money']=$_SESSION['money']-5;
		echo "току-що изгуби 5 монети :(";
		break;
	case '2':
		$sel2=$select;
		echo "I";
		if ($_SESSION['money']>100) {
		$_SESSION['money']=$_SESSION['money']-100;
		echo "Честито, купи хотел :)"; 
		}else{
			$_SESSION['money']=$_SESSION['money']-10;
		}
		break;
	case '3':
		$sel3=$select;
		echo "F";
		$_SESSION['money']=$_SESSION['money']+20;
		echo " зЕми тия 20 монети :)";
		break;
	case '4':
		$sel4=$select;
		echo "S";
		$_SESSION['count']=$_SESSION['count']-2;
		echo " Wi-Fi - я ГРЪМНА!!! Губиш 2 хода :(" ;
		break;
	case '5':
		$sel5=$select;
		echo "F";
		$_SESSION['money']=$_SESSION['money']+20;
		echo " зЕми тия 20 монети :)";
		break;
	case '6':
		$sel6=$select;
		echo "V";
		$_SESSION['money']=$_SESSION['money']*10;
		echo "УАУ!Вашата сума се умножава по 10!!! :)";
		break;
	case '7':
		$sel7=$select;
		echo "I";
		if ($_SESSION['money']>100) {
		$_SESSION['money']=$_SESSION['money']-100;
		echo "Честито, купи хотел :)"; 
		}else{
			$_SESSION['money']=$_SESSION['money']-10;
		}
		break;
	case '8':
		$sel8=$select;
		echo "F";
		$_SESSION['money']=$_SESSION['money']+20;
		echo " зЕми тия 20 монети :)";
		break;
	case '9':
		$sel9=$select;
		echo "F";
		$_SESSION['money']=$_SESSION['money']+20;
		echo " зЕми тия 20 монети :)";
		break;
	case '10':
		$sel10=$select;
		echo "I";
		if ($_SESSION['money']>100) {
		$_SESSION['money']=$_SESSION['money']-100;
		echo "Честито, купи хотел :)"; 
		}else{
			$_SESSION['money']=$_SESSION['money']-10;
		}
		
		break;
	case '11':
		$sel11=$select;
		echo "N";
		echo "Брао, бе! WINNER!!! :)";
		session_destroy();
		break;
	case '12':
		$sel12=$select;
		echo "P";
		$_SESSION['money']=$_SESSION['money']-5;
		echo " току-що изгуби 5 монети :(";
		break;
}
}
// We've got a brand new repository
?>

<!DOCTYPE html>
<html>
<head>
	<title>TI Vilige</title>
<style type="text/css">
	.container{
	position: relative;
	top: 200px;
	left: 20px;
	}
	div{
		position: absolute;
		top: 0;
	}
	
	.size{
		height: 50px;
		width: 50px;
		border: 3px solid black;
	}

.div1{
	<?php echo $sel1;?>
	}
	.div2{
		left: 60px;<?php echo $sel2;?>
	}
	.div3{
		left: 120px;<?php echo $sel3;?>
	}
	.div4{
		background-image: url("pics/cloud.php");
		
		left: 180px;<?php echo $sel4;?>
		
		
	}
	.div5{
		top: 60px;
		left: 180px;<?php echo $sel5;?>
	}
	.div6{
	top: 120px;
	left: 180px;<?php echo $sel6;?>
	}
	.div7{
	top: 180px;
	left: 180px;<?php echo $sel7;?>
	}
	.div8{
	top: 180px;
	left: 120px;<?php echo $sel8;?>
	}
	.div9{
	top: 180px;
	left: 60px;<?php echo $sel9;?>
	}
	.div10{
	top: 180px;
	left: 0px;<?php echo $sel10;?>
	}
	.div11{
	top: 120px;<?php echo $sel11;?>
	left: 0px;
	}
	
	.div12{
	top: 60px;
	left: 0px;<?php echo $sel12;?>
	}


</style>
</head>
<body>
<!-- <button onclick="myFunction()">Click me</button> -->
<form method="" action="">
<?php
if ($_SESSION['count']>0) {
	echo '<input type="submit" name="submit" value="submit">';
	}
	else{
		echo "GAME OVER!!";
		session_destroy();
	}
?>
</form>
<div class="container" >
<div class="size div1">P
</div>
<div class="size div2">I
<img src="pics/bed.png" alt="beer" height="40" width="40">
</div>
<div class="size div3">F
<img src="pics/coins.png" alt="beer" height="40" width="40">
</div>
<div class="size div4">S
<!-- <img src="pics/cloud.png" alt="beer" height="40" width="40"> -->
</div>
<div class="size div5">F
<img src="pics/coins.png" alt="beer" height="40" width="40">
</div>
<div class="size div6">V
<img src="pics/diamonds1.png" alt="beer" height="100" width="100">
</div>
<div class="size div7">I
<img src="pics/hotel.png" alt="beer" height="40" width="40">
</div>
<div class="size div8">F
<img src="pics/coins.png" alt="beer" height="40" width="40">
</div>
<div class="size div9">F
<img src="pics/coins.png" alt="beer" height="40" width="40">
</div>
<div class="size div10">I
<img src="pics/hotel.png" alt="beer" height="40" width="40">
</div>
<div class="size div11">N
<img src="pics/winner.png" alt="beer" height="40" width="40">
</div>
<div class="size div12">P
<img src="pics/beer.png" alt="beer" height="35" width="35">
</div>
</div>
</body>
</html>
