<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>HBK School | Student Profile</title>

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
            <li style="font-weight: bold;font-family: Comic Sans MS, Comic Sans, cursive;"><a><u> Child Profile: 
            <?php
            session_start();
            if($_SESSION['login_user'])
            {
              $sid = $_GET['sid'];
              $conn = mysqli_connect("localhost", "root", "", "tictechtoe");
              $query = "SELECT * FROM student_details WHERE s_id = '$sid'";
              $result = mysqli_query($conn,$query);
              $row = mysqli_fetch_array($result);
              $name = $row['s_name'];
              echo $name;  
            }
            else{
              echo "<script>";
              echo "alert('Successfully purchased selected item!');";
              echo "</script>";
              echo "<script>window.open('../index.php', '_self')</script>";
            }
            ?>     </u> </a>
            </li>
            <li ><a href="parent_dashboard.php">Home</a></li> 
            <li class="active"><a href="child_profile.php">Student Profile</a></li> 
            <!-- <li><a href="stationary.php">Stationary</a></li>  -->
            <!-- <li><a href="canteen.php">Canteen</a></li>  -->
            <!-- <li><a href="event.php">Events</a></li>                  -->
            <li><a href="logout.php">Logout</a></li>               
            <!-- <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li> -->
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
 
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/bg.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Current Balance</h4>
        <span></span>
        <h2>
          <?php
          $sid = $_GET['sid'];
          $conn = mysqli_connect("localhost", "root", "", "tictechtoe");
          $query = "SELECT * FROM student_details WHERE s_id = '$sid'";
          $result = mysqli_query($conn,$query);
          $row = mysqli_fetch_array($result);
          $balance = $row['balance'];
          echo $balance;
          ?>
        </h2>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/bg.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Total Expenditure</h4>
        <span></span>
        <h2>
          <?php
          $sid = $_GET['sid'];
          $conn = mysqli_connect("localhost", "root", "", "tictechtoe");
          $query = "SELECT * FROM student_details WHERE s_id = '$sid'";
          $result = mysqli_query($conn,$query);
          $row = mysqli_fetch_array($result);
          $exp = $row['total_expenditure'];
          echo $exp;
          ?>
        </h2>
       
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/bg.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Remaining Canteen Limit </h4>
        <span></span>
        <h2>
          <?php
          $sid = $_GET['sid'];
          $conn = mysqli_connect("localhost", "root", "", "tictechtoe");
          $query = "SELECT * FROM student_details WHERE s_id = '$sid'";
          $result = mysqli_query($conn,$query);
          $row = mysqli_fetch_array($result);
          $clim = $row['canteen_limit'];
          echo $clim;
          ?>
        </h2>
      </div>

    </div>
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/bg.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHealthy Food Count &nbsp | &nbsp  Unhealthy Food Count </h4>
        <span></span>
        <h2>
          <?php
          $sid = $_GET['sid'];
          $conn = mysqli_connect("localhost", "root", "", "tictechtoe");
          $query = "SELECT * FROM student_details WHERE s_id = '$sid'";
          $result = mysqli_query($conn,$query);
          $row = mysqli_fetch_array($result);
          $h = $row['healthy'];
          $uh = $row['unhealthy'];

          echo "$h | $uh";
          ?>
        </h2>
      </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <!-- End service  -->

 

  <!-- Start features section -->
  <!-- End features section -->

  <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Section Wise Expenditure</h2>

            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#" style="padding: 50px;"><img src="assets/img/courses/one.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Canteen</a>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Expenditure</a>
                      <span class="mu-course-price" href="#">
                        <?php
                        $sid = $_GET['sid'];
                        $conn = mysqli_connect("localhost", "root", "", "tictechtoe");
                        $query = "SELECT SUM(cost) FROM transaction WHERE s_id = '$sid' and item_type = 'canteen'";
                        $result = mysqli_query($conn,$query);
                        $row = mysqli_fetch_array($result);
                        $can = $row[0];
                        if($can > 0)
                        {
                          echo "₹$can";
                        }
                        else
                        {
                          echo "₹0";
                        }
                        ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#" style="padding: 50px;"><img src="assets/img/courses/two.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Stationary </a>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Expenditure</a>
                      <span class="mu-course-price" href="#">
                        <?php
                        $sid = $_GET['sid'];
                        $conn = mysqli_connect("localhost", "root", "", "tictechtoe");
                        $query = "SELECT SUM(cost) FROM transaction WHERE s_id = '$sid' and item_type = 'stationary'";
                        $result = mysqli_query($conn,$query);
                        $row = mysqli_fetch_array($result);
                        $stat = $row[0];
                        if($stat > 0)
                        {
                          echo "₹$stat";
                        }
                        else
                        {
                          echo "₹0";
                        }                        ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#" style="padding: 50px;"><img src="assets/img/courses/three.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Events</a>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Expenditure</a>
                      <span class="mu-course-price" href="#">
                        <?php
                        $sid = $_GET['sid'];
                        $conn = mysqli_connect("localhost", "root", "", "tictechtoe");
                        $query = "SELECT SUM(cost) FROM transaction WHERE s_id = '$sid' and item_type = 'events'";
                        $result = mysqli_query($conn,$query);
                        $row = mysqli_fetch_array($result);
                        $event = $row[0];
                        if($event > 0)
                        {
                          echo "₹$event";
                        }
                        else
                        {
                          echo "₹0";
                        }
                        ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
     <section id="mu-features">
              <?php
               
              $dataPoints = array( 
                array("y" => (int)$h,"label" => "Healthy Food Items" ),
                array("y" => (int)$uh,"label" => "UnHealthy Food Items" ),
              );
               
              ?>
              <div id="chartContainer" style="height: 370px; width: 100%;"></div>
              <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
              
           

            <br><br><br><br>
              <?php
 
                $dataPoints1 = array( 
                  array("y" => (int)$can, "label" => "Canteen" ),
                  array("y" => (int)$stat, "label" => "Stationary" ),
                  array("y" => (int)$event, "label" => "Events" ),
                );
                 
                ?>
              <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
              <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

              <br><br><br><br>
              <?php
 
              $total_balance = $balance + $exp;
              $one_type = (float)$balance/$total_balance;
              $second_type = (float)$exp/$total_balance;
                $dataPoints2 = array( 
                array("label"=>"Remaining Balance", "y"=>$one_type*100),
                array("label"=>"Expenditure", "y"=>$second_type*100)
              )
                 
                ?>
                 <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
              <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

              <script>
              window.onload = function() {

                var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title:{
                  text: "Chart of Healthy-UnHealthy Food Count"
                },
                axisY: {
                  title: "No of Items",
                  includeZero: true,
                },
                data: [{
                  type: "bar",
                  indexLabel: "{y}",
                  indexLabelPlacement: "inside",
                  indexLabelFontWeight: "bolder",
                  indexLabelFontColor: "white",
                  dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
              });
              chart.render();

               
              var chart = new CanvasJS.Chart("chartContainer1", {
                animationEnabled: true,
                theme: "light2",
                title:{
                  text: "Expenditure per section"
                },
                axisY: {
                  title: "Expenditure (in rupees)"
                },
                data: [{
                  type: "column",
                  indexLabel: "{y}",
                  yValueFormatString: "#,##0.## rupees",
                  dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                }]
              });
              chart.render();



              var chart = new CanvasJS.Chart("chartContainer2", {
                animationEnabled: true,
                title: {
                  text: "Usage Of Total Balance"
                },
                subtitles: [{
                  text: ""
                }],
                data: [{
                  type: "pie",
                  yValueFormatString: "#,##0.00\"%\"",
                  indexLabel: "{label} ({y})",
                  dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                }]
              });
              chart.render();
               
              }
              </script>
            </section>
  </section>
  <!-- End latest course section -->

  

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
