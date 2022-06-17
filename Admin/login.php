<?php
session_abort();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'php/includes/dbconn.php';

    $username = $_POST["uname"];
    
    $password = $_POST["psw"];

    session_start();
    $sql = "select * from admin where username='$username'";
    $result = mysqli_query($conn, $sql);
    $rec = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if($count==1)
    {
      if($password==$rec["password"])
      {
        $_SESSION["eusername"]=$rec["username"];
        header('location:dashboard.php');

      }
      else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>invalid password!</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
         }
    }
    else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>invalid username!!</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }   
}
?>



<!DOCTYPE html>
<html>

<head>
<title>Book My Space</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 150px;
  border-radius: 50%;
  height: 150px;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  
}
</style>
</head>
<body>

<h2 style="text-align:center;">Login As Admin</h2>

<form action="login.php" method="POST">
  <div class="imgcontainer">
    <img src="../images/avtar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Home</button>
    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
  </div>
</form>

</body>
</html>
