<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>HBK | AddBalance</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">    

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->

  <!-- End header  -->
  <!-- Start menu -->
<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand"><i class="fa fa-university"></i><span>HBK School</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li style="font-weight: bold;font-family: Comic Sans MS, Comic Sans, cursive;"><a><u>Welcome Parent,  
            <?php
            session_start();
            if($_SESSION['login_user'])
            {
              $pid = $_SESSION['login_user'];
              $conn = mysqli_connect("localhost", "root", "", "tictechtoe");
              $query = "SELECT * FROM student_details WHERE p_id = '$pid'";
              $result = mysqli_query($conn,$query);
              $row = mysqli_fetch_array($result);
              $name = $row['p_name'];
              echo $name;  
            }
            ?>!       </u> </a>
            </li>     
            <li ><a href="parent_dashboard.php">Home</a></li>
            <li class="active"><a href="addBalance.php">Add Balance</a></li>
            <li><a href="updateLimit.php">Update Limit</a></li>
            <li><a href="logout.php">Logout</a></li>              
            <!-- <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li> -->
          </ul>                    
        </div><!--/.nav-collapse -->        
      </div>    
    </nav>
  </section>

  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
             <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Add Balance</h2>
           <ol class="breadcrumb">
            <li><a href="parent_dashboard.php">Home</a></li>            
            <li class="active">Add Balance</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>Provide Student Details</h2>
          </div>
          <!-- end title -->
          <!-- start contact content -->
          <div class="mu-contact-content">           
            <div class="row">
              <div class="col-md-left">
                <div class="mu-contact-left">
				<center>
                  <form class="contactform" action="addingBalance.php">
                    <p class="comment-form-email" >
                      <label for="s_id" >Name: <span class="required">*</span></label>
                      <!-- <input type="amount" required="required" aria-required="true"  value="" name="s_id"> -->
                      <?php

              $pid = $_SESSION['login_user'];
              $conn = mysqli_connect("localhost", "root", "", "tictechtoe");

              $query = " SELECT * FROM `student_details` WHERE p_id='$pid' ";

              $result = $conn->query($query);
              
              echo "<select name='students' style='width:190px; height:35px;'>";
              while($row = mysqli_fetch_array($result))
              {
                $sid = $row['s_id'];
                #$query2 = " SELECT * FROM `student_details` WHERE s_id='$sid' ";
                // $r = $conn->query($query2);
                // $r2 = mysqli_fetch_array($r);
                $sname = $row['s_name'];
                echo "<option value='$sid'>$sname</option>";
              }
              echo "</select>";
            ?>
                    </p>
                    <p class="comment-form-email">
                      <label for="amount">Add Amount <span class="required">*</span></label>
                      <input type="amount" required="required" aria-required="true" value="" name="amount">
                    </p>
					<p class="comment-form-email">
                      <label for="canteenlimit">Canteen limit<span class="required">*</span></label>
                      <input type="amount" required="required" aria-required="true" value="" name="canteenlimit">
                    </p>
                    <p class="form-submit">
                      <input type="submit" value="Submit" class="mu-post-btn" name="submit">
                    </p>        
                  </form>
				 </center>
                </div>
              </div>
              
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->
 

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>School Contact:</h4>
                <address>
                  <p>P.O. Box 320, Ross, California 9495, USA</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: www.markups.io</p>
                  <p>Email: info@markups.io</p>
                </address>
              </div>
            </div>
			<div class="col-lg-3 col-md-3 col-sm-3">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="mu-footer-widget">
                <h4>Developer Contact:</h4>
                <address>
                  <p>DAIICT DareDevils, tic-tech-toe Ltd., Ahmedabad</p>
                  <p>Phone: (+91) 9999999999</p>
                  <p>Website: http://ifest.daiict.ac.in/tic-tech-toe/</p>
                  <p>Email: info@tictechtoe@daiict.ac.in</p>
                </address>
              </div>
			</div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
	<!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved.</p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->





  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>
