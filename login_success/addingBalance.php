<?php
	
	$s_id = $_GET['students'];
	echo $s_id."<br>";
	$amount = $_GET['amount'];
	$limit = $_GET['canteenlimit'];
	
	$conn = mysqli_connect("localhost", "root", "", "tictechtoe");
	
	$query = " SELECT * FROM `student_details` WHERE s_id='$s_id' ";
	
	$result = $conn->query($query);

	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		$balance = (int)$row['balance'];
		$canteen_limit = (int)$row['canteen_limit'];
		
		$amount = $amount + $balance;
		// $limit = $limit + $canteen_limit;
		
		$query1 = "UPDATE `student_details` SET `balance`='$amount', `canteen_limit`='$limit' WHERE s_id='$s_id' ";
		
		if($conn->query($query1) == true)
		{
			echo "updated<br>"; 
		}
		else
		{
			echo "no update<br>";
		}
	}
	else
	{
		echo "no student id found...!!<br>";
	}

	echo "<script>window.open('parent_dashboard.php', '_self')</script>";

?>