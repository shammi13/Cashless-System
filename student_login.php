<?php

session_start();

$db = mysqli_connect('localhost','root','','tictechtoe');

if($_SERVER["REQUEST_METHOD"] == "POST") {
 $sid = mysqli_real_escape_string($db,$_POST['susername']);
}
// $pid =` $_POST['pusername'];

if(date('d') == 1)
{

    $query2 = "SELECT * FROM `student_details` WHERE s_id='$sid' ";

    $result = $db->query($query2);
    if(mysqli_num_rows($result) > 0)
    {   
        $row = mysqli_fetch_array($result);
            $sid = $row['s_id'];
            $year = date('Y');
            $year = (int)$year;
            echo var_dump($year)."<br>";

            $month = date('m');
            $month = (int)$month;
            echo var_dump($month)."<br>";
            $healthy = $row['healthy'];
            $unhealthy = $row['unhealthy'];
            $total_expenditure = $row['total_expenditure'];
   
            $query4 = "INSERT INTO `deitary_habits`(`s_id`, `year`, `month`, `healthy`, `unhealthy`, `total_expenditure`) VALUES ('$sid', '$year', '$month', '$healthy', '$unhealthy', '$total_expenditure') ";

            if(mysqli_query($db, $query4))
            {
                echo "insert<br>";
            }
            else
            {
                echo "no insert<br>";
            }

            $query3 = "UPDATE `student_details` SET `canteen_limit`='0', `total_expenditure`='0', `healthy`='0', `unhealthy`='0' WHERE s_id='$sid'  ";


            if($db->query($query3) == true)
            {
                echo "update<br>";
            }
            else
            {
                echo "no update<br>";
            }
        
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$myusername = mysqli_real_escape_string($db,$_POST['susername']);
    $mypassword = mysqli_real_escape_string($db,$_POST['spass']); 
      
    $sql = "SELECT * FROM student_login WHERE s_id = '$myusername' and s_password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    
    $count = mysqli_num_rows($result);
      
		
    if($count == 1) {
    	$_SESSION['login_user'] = $myusername;
        header("location: login_success/student_dashboard.php");
    }
    else {
        $error = "Your Student Login Id or Password is invalid";
        $_SESSION['serror'] = $error;
        header("location: index.php");
    }
}


?>