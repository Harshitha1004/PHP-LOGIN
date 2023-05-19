<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login & Registration</title>
  </head>
  <body>
  


  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>

        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
               <br>
  <br>
  <br>
  <p><a href="index.php">Register</a> | <a href="login.php">Login</a></p>
              <div class="mb-4">
              <h3>Registration</h3>
       <!--       <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>-->
            </div>
            <form action="" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="user" name="user">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
                
              </div>
              
             <!-- <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>-->

              <input type="submit" value="Register" class="btn btn-block btn-primary" name="submit">

             <!-- <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>-->
            </form>

<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
  $user=$_POST['user'];
  $pass=$_POST['pass'];

  //$con=mysql_connect('localhost','root','') or die(mysql_error());
  //mysql_select_db('user_registration') or die("cannot select DB");
  $con= mysqli_connect("localhost","root","","registration","3306");

  $query=$con->query("SELECT * FROM login WHERE username='".$user."'");
  $numrows=mysqli_num_rows($query);
  if($numrows==0)
  {
  $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";

  $result=$con->query($sql);


  if($result){
  echo "Account Successfully Created";
  } else {
  echo "Failure!";
  }

  } else {
  echo "That username already exists! Please try again with another.";
  }

} else {
  echo "All fields are required!";
}
}
?>



            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>