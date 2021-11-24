<?php

	session_start();


	$date = date("Y-m-d");

	$pid = $_SESSION['pid'];
	$cost = $_SESSION['cost'];
	$pname = $_SESSION['pname'];
	$sid = $_SESSION['login_user'];

	$conn = mysqli_connect("localhost", "root", "", "tictechtoe");


	$query2 = " SELECT * FROM `student_details` WHERE s_id='$sid' ";

	$result = $conn->query($query2);

	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		$balance = (int)$row['balance'];
		$total_expenditure = (int)$row['total_expenditure'];
		
		$balance = $balance - $cost;
		$total_expenditure = $total_expenditure + $cost;

		if($balance<0)
		{
			$balance = (int)$row['balance'];
			$total_expenditure = (int)$row['total_expenditure'];

			//give error message with inappropriate data
			echo "<script>";
			echo "alert('Balance not sufficient!');";
			echo "</script>";
			echo "<script>window.open('stationary.php', '_self')</script>";
		}
		else
		{
			$item_type = 'stationary';
			$query = "INSERT INTO `transaction` (`s_id`, `p_id`, `p_name`, `cost`, `time`, `item_type` ) VALUES ('$sid', '$pid', '$pname', '$cost', '$date','$item_type') ";



			if($conn->query($query) == true)
			{
				
			}
			else
			{
				
			}

		
		
		$query3 = "UPDATE `student_details` SET `balance`='$balance', `total_expenditure`='$total_expenditure' WHERE s_id='$sid' ";

		


		if($conn->query($query3) == true)
		{
			
		}
		else
		{
			
		}

		}
	}
	else
	{
		echo "<script>";
		echo "alert('No data found!');";
		echo "</script>";
		echo "<script>window.open('stationary.php', '_self')</script>";
	}
	echo "<script>";
	echo "alert('Successfully purchased selected item!');";
	echo "</script>";
	echo "<script>window.open('stationary.php', '_self')</script>";

?>