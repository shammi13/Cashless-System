<?php
	session_start();

echo "<script>";
		echo "var r = confirm('Confirm a purchase?');";
		echo "if(r == false)";
		echo "{";
			echo "window.open('event.php', '_self');";
		echo "}";
	echo "</script>";


	$pid = $_GET['pid'];
	$cost = $_GET['cost'];
	$pname = $_GET['pname'];

	$_SESSION['pname'] = $pname;
	$_SESSION['pid'] = $pid;
	$_SESSION['cost'] = $cost;

	echo "<script>window.open('eventbuy.php', '_self');</script>";

?>