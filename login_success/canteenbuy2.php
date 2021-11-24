<?php
	session_start();

echo "<script>";
		echo "var r = confirm('Confirm a purchase?');";
		echo "if(r == false)";
		echo "{";
			echo "window.open('canteen.php', '_self');";
		echo "}";
	echo "</script>";


	$pid = $_GET['pid'];
	$cost = $_GET['cost'];
	$name = $_GET[ 'pname' ];
	$hnh = $_GET[ 'item_type' ];
	

	$_SESSION['pid'] = $pid;
	$_SESSION['cost'] = $cost;
	$_SESSION['pname'] = $name;
	$_SESSION['hnh'] = $hnh;

	echo "<script>window.open('canteenbuy.php', '_self');</script>";

?>