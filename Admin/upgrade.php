<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconn.php';

    $uname = $_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $about = $_POST["about"];
    
    $sql = "select * from admin where username='$uname'";
    $result1 = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result1);

    if($num!=0)
    {
        echo'
        <div class="alert alert-primary" role="alert">
        username should be unique...!!!
      </div>';
    }
    else{
       if($password==$repassword){
        $sql = "INSERT INTO `admin` (`username`, `password`, `first_name`, `last_name`, `email`, `city`, `about`) VALUES ('$uname', '$password', '$fname', '$lname', '$email', '$city', '$about');";
        $result = mysqli_query($conn, $sql);
        echo'
         <div class="alert alert-primary" role="alert">
         Admin added successfully...!!!
         </div>';
        }
        else{
        echo'
        <div class="alert alert-primary" role="alert">
         Password and Re-password should be same...!!!
         </div>';
         }
    } 
}
?>


 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Book My Space</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
<<<<<<< HEAD:Admin/examples/upgrade.php
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    .wrapper{
  width: 480px;
=======
=======

>>>>>>> a28d74553f75648ceaa7c5bc76bd2a696ae7a6b1:Admin/upgrade.php
<style>
    .wrapper{
  width: 1200px;
  height: 900px;
  background: #fff;
  border-radius: 20px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}

.wrapper1 .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: white ;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: red;
}
.wrapper1 form{
  padding: 10px 30px 50px 30px;
}
.wrapper1 form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;

}
.wrapper1 form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper1 form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper1 form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: black;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;

}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #4158d0;
  background: green;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: white;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: red;
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}
form.btn-circle.btn-sm {
            width: 100px;
            height: 40px;
            padding: 2px 0px;
            border-radius: 30px;
            font-size: 14px;
            text-align: center;

            margin: 20px;
        }
</style> 
</head>


<body>
    <div class="wrapper">
        <?php include('header.php')?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Add Admin </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li> -->
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- 
            <div class="content">
                <div class="container-fluid">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 ml-auto mr-auto">
                                    <div class="card">
                                        <div class="header text-center">
                                            <h4 class="title">Light Bootstrap Dashboard PRO</h4>
                                            <p class="category">Are you looking for more components? Please check our Premium Version of Light Bootstrap Dashboard.</p>
                                            <br>
                                        </div>
                                        <div class="content table-responsive table-upgrade">
                                            <table class="table">
                                                <thead>
                                                    <th></th>
                                                    <th class="text-center">Free</th>
                                                    <th class="text-center">PRO</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Components</td>
                                                        <td>16</td>
                                                        <td>115+</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Plugins</td>
                                                        <td>4</td>
                                                        <td>14+</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Example Pages</td>
                                                        <td>4</td>
                                                        <td>22+</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Documentation</td>
                                                        <td><i class="fa fa-times text-danger"></i></td>
                                                        <td><i class="fa fa-check text-success"></td>
                                </tr>
                                <tr>
                                	<td>SASS Files</td>
									<td><i class="fa fa-times text-danger"></i></td>
                                                        <td><i class="fa fa-check text-success"></td>
                                </tr>
                                <tr>
                                	<td>Login/Register/Lock Pages</td>
									<td><i class="fa fa-times text-danger"></i></td>
                                                        <td><i class="fa fa-check text-success"></td>
                                </tr>
								<tr>
                                	<td>Premium Support</td>
									<td><i class="fa fa-times text-danger"></i></td>
                                                        <td><i class="fa fa-check text-success"></td>
                                </tr>
								<tr>
                                	<td></td>
									<td>Free</td>
                                	<td>Just $39</td>
                                </tr>
								<tr class="last-row">
									<td></td>
									<td>
										<a href="#" class="btn btn-round btn-fill btn-default disabled">Current Version</a>
									</td>
									<td>
										<a target="_blank" href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro/?ref=lbdupgrade" class="btn btn-round btn-fill btn-info">Upgrade to PRO</a>
									</td>
								</tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                -->


    <div class="wrapper1">
                <div class="title">
          <!-- <img src="https://99designs-acquisition-frontend.imgix.net/serverless/images/categoryPage/hero/logo-design/04-artsigma.jpg" height="100px" width="100px"> -->
            Add New Admin Details

         </div>

         <form action="upgrade.php" method="POST">
           <div class="field">
              <input type="text" name="username" required>
              <label>Username</label>
           </div>
           <div class="field">
              <input type="password" name="password" required>
              <label>Password</label>
           </div>
           <div class="field">
              <input type="password" name="repassword" required>
              <label>Re-Password</label>
           </div>
           <div class="field">
              <input type="text" name="fname" required>
              <label>First Name</label>
           </div>
           <div class="field">
              <input type="text" name="lname" required>
              <label>Last Name</label>
           </div>
           <div class="field">
              <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
              <label>Email Address</label>
           </div>

           <div class="field">
              <input type="tel" name="city" required>
              <label>City</label>
           </div>
           <div class="field">
              <input type="text" name="about" required>
              <label>About</label>
           </div>





          <!--  <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div> -->
            <div class="field">
               <input type="submit" value="Add Admin">
            </div>
    </div>
    

</div>
</div>




                <footer class="footer">
    <div class="container-fluid">
        <nav>
            <ul class="footer-menu">
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                       Blog
                    </a>
                </li>
            </ul>

            <p class="copyright text-center">
                © <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
            </p>
        </nav>
    </div>
</footer>

            </div>
        </div>
        <!--   -->
        <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li class="header-title"> Sidebar Style</li>
                                                                <li class="adjustments-line">
                                                                    <a href="javascript:void(0)" class="switch-trigger">
                                                                        <p>Background Image</p>
                                                                        <label class="switch">
                                                                            <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary">
                                                                            <span class="toggle"></span>
                                                                        </label>
                                                                        <div class="clearfix"></div>
                                                                    </a>
                                                                </li>
                                                                <li class="adjustments-line">
                                                                    <a href="javascript:void(0)" class="switch-trigger background-color">
                                                                        <p>Filters</p>
                                                                        <div class="pull-right">
                                                                            <span class="badge filter badge-black" data-color="black"></span>
                                                                            <span class="badge filter badge-azure" data-color="azure"></span>
                                                                            <span class="badge filter badge-green" data-color="green"></span>
                                                                            <span class="badge filter badge-orange" data-color="orange"></span>
                                                                            <span class="badge filter badge-red" data-color="red"></span>
                                                                            <span class="badge filter badge-purple active" data-color="purple"></span>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </a>
                                                                </li>
                                                                <li class="header-title">Sidebar Images</li>
                                                                <li class="active">
                                                                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                                        <img src="../assets/img/sidebar-1.jpg" alt="" />
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                                        <img src="../assets/img/sidebar-3.jpg" alt="" />
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                                        <img src="..//assets/img/sidebar-4.jpg" alt="" />
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                                        <img src="../assets/img/sidebar-5.jpg" alt="" />
                                                                    </a>
                                                                </li>
                                                                <li class="button-container">
                                                                    <div class="">
                                                                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                                                                    </div>
                                                                </li>
                                                                <li class="header-title pro-title text-center">Want more components?</li>
                                                                <li class="button-container">
                                                                    <div class="">
                                                                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                                                                    </div>
                                                                </li>
                                                                <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>
                                                                <li class="button-container">
                                                                    <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                                                                    <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
                                                                </li>
                                                            </ul>
                                        </div>
                                    </div>
                                    -->
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
