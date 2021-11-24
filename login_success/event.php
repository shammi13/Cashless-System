<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>HBK School | Events</title>

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
    <a class="scrollToTop" >
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->


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
            <li style="font-weight: bold;font-family: Comic Sans MS, Comic Sans, cursive;"><a><u>Welcome 
            <?php
            session_start();
            if($_SESSION['login_user'])
            {
              $sid = $_SESSION['login_user'];
              $conn = mysqli_connect("localhost", "root", "", "tictechtoe");
              $query = "SELECT * FROM student_details WHERE s_id = '$sid'";
              $result = mysqli_query($conn,$query);
              $row = mysqli_fetch_array($result);
              $balance = $row['s_name'];
              echo $balance;  
            }
            else{
              echo "<script>window.open('../index.php', '_self')</script>";
            }
            ?>!        </u></a>
            </li>
             </li>
            <li><a href="student_dashboard.php">Home</a></li>  
            <li><a href="stationary.php">Stationary</a></li> 
            <li ><a href="canteen.php">Canteen</a></li> 
            <li class="active"><a href="event.php">Events</a></li>                 
            <li><a href="logout.php">Logout</a></li>                
            <!-- <li><a  id="mu-search-icon"><i class="fa fa-search"></i></a></li> -->
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Events</h2>
           <ol class="breadcrumb">
            <!-- <li><a >Home</a></li>             -->
            <!-- <li class="active">Course</li> -->
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a ><img src="assets/img/science fair.jpg" alt="img" height="270" width="200"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a >Science fair</a>
                          <!-- <span>Healthy</span> -->
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a >Science fair is an opportunity for students to apply the scientific method to conduct independent research.<br>&nbsp</a></h4>
                        <div class="mu-latest-course-single-contbottom">
                          <form style="height: 0px;width: 0px;" action="eventbuy2.php">
                          	<input type="hidden" name="pid" value="3001">
                          	<input type="hidden" name="cost" value="100">
                          	<input type="hidden" name="pname" value="Science fair">
							<input type="submit" name="buy" value="Buy" style="height: 25px; width: 40px; background-color: inherit; border: none; cursor: pointer; color: blue;">
                          </form>
                          <span class="mu-course-price" >₹100</span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a ><img src="assets/img/picnic.jpg" height="270" width="200" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a >Picnic</a>
                          <!-- <span>Healthy</span> -->
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a >A School Picnic is the best day of a student's life as they can enjoy to their fullest without any hindrance from the teachers. </a></h4>
                      
                        <div class="mu-latest-course-single-contbottom">
                          <form style="height: 0px;width: 0px;" action="eventbuy2.php">
                          	<input type="hidden" name="pid" value="3002">
                          	<input type="hidden" name="cost" value="50">
                          	<input type="hidden" name="pname" value="Picnic">
							<input type="submit" name="buy" value="Buy" style="height: 25px; width: 40px; background-color: inherit; border: none; cursor: pointer; color: blue;">
                          </form>
                          <span class="mu-course-price" >₹50</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a ><img src="assets/img/ml-seminar.jpg" height="270" width="200" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a >ML Seminar</a>
                          <!-- <span>Unhealthy</span> -->
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a >Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed.</a></h4>
                        
                        <div class="mu-latest-course-single-contbottom">
                          <form style="height: 0px;width: 0px;" action="eventbuy2.php">
                          	<input type="hidden" name="pid" value="3003">
                          	<input type="hidden" name="cost" value="30">
                          	<input type="hidden" name="pname" value="ML seminar">
							<input type="submit" name="buy" value="Buy" style="height: 25px; width: 40px; background-color: inherit; border: none; cursor: pointer; color: blue;">
                          </form>
                          <span class="mu-course-price" >₹30</span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a ><img src="assets/img/maths-event.jpg" height="270" width="200" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a >Maths Event</a>
                          <!-- <span>Unhealthy</span> -->
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a >Mathematics includes the study of such topics as quantity (number theory), structure (algebra), space (geometry), and change (mathematical analysis).<br>&nbsp</a></h4>
                      
                        <div class="mu-latest-course-single-contbottom">
                          <form style="height: 0px;width: 0px;" action="eventbuy2.php">
                          	<input type="hidden" name="pid" value="3004">
                          	<input type="hidden" name="cost" value="20">
                          	<input type="hidden" name="pname" value="Maths Event">
							<input type="submit" name="buy" value="Buy" style="height: 25px; width: 40px; background-color: inherit; border: none; cursor: pointer; color: blue;">
                          </form>
                          <span class="mu-course-price" >₹20</span>
                        </div>
                      </div>
                    </div>
                  </div>
 
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

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