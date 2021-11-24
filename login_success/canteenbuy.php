<?php

	session_start();


	$date = date("Y-m-d");

	$pid = $_SESSION['pid'];
	$cost = $_SESSION['cost'];
	$name = $_SESSION['pname'];
	$sid = $_SESSION['login_user'];

	$hnh = $_SESSION['hnh'];

	$conn = mysqli_connect("localhost", "root", "", "tictechtoe");


	$query2 = " SELECT * FROM `student_details` WHERE s_id='$sid' ";

	$result = $conn->query($query2);

	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		$balance = (int)$row['balance'];
		$total_expenditure = (int)$row['total_expenditure'];
		$limit=(int)$row['canteen_limit'];
		$balance = $balance - $cost;
		$total_expenditure = $total_expenditure + $cost;
		$limit=$limit-$cost;

		$h = (int)$row['healthy'];
		$nh = (int)$row['unhealthy'];
		if($limit>=0)
		{
			if($balance<0)
			{
				$balance = (int)$row['balance'];
				$total_expenditure = (int)$row['total_expenditure'];
				
				//give error message with inappropriate data
				echo "<script>";
				echo "alert('Balance not sufficient!');";
				echo "</script>";
				echo "<script>window.open('canteen.php', '_self')</script>";
			}
			else
			{
				$item_type = 'canteen';
				$query = "INSERT INTO `transaction` (`s_id`, `p_id`, `cost`, `time`, `p_name`, `item_type`) VALUES ('$sid', '$pid', '$cost', '$date','$name','$item_type') ";
				if($conn->query($query) == true)
				{
					// echo "success insert <br>";
				}
				else
				{
					// echo "no insert<br>";
				}
			$query3 = "UPDATE `student_details` SET `balance`='$balance', `total_expenditure`='$total_expenditure',`canteen_limit`='$limit' WHERE s_id=$sid ";
			if($conn->query($query3) == true)
			{
				// echo "updated<br>"; 
			}
			else
			{
				// echo "no update<br>";
			}
			if($hnh == "healthy")
			{
				$h = $h + 1;
				$query4 = "UPDATE `student_details` SET `healthy`='$h' WHERE s_id=$sid ";
				if($conn->query($query4) == true)
					{
						// echo "updated<br>"; 
					}
					else
					{
						// echo "no update<br>";
					}
			}
			else{
					$nh = $nh + 1;
					$query5 = "UPDATE `student_details` SET `unhealthy`='$nh' WHERE s_id=$sid ";
					if($conn->query($query5) == true)
						{
							// echo "updated<br>"; 
						}
						else
						{
							// echo "no update<br>";
						}
			}


			}
			}
		else
		{
			$limit = (int)$row['canteen_limit'];
			$total_expenditure = (int)$row['total_expenditure'];
			echo "<script>";
			echo "alert('Canteen Limit Exceeded');";
			echo "</script>";
			echo "<script>window.open('canteen.php', '_self')</script>";
			
		}
	}
	else
	{
		// echo "no data<br>";
	}

	echo "<script>";
	echo "alert('Successfully purchased selected canteen item!');";
	echo "</script>";
	echo "<script>window.open('canteen.php', '_self')</script>";

?>