

<?php 
session_start();
if (isset($_SESSION['username'])) {
  header('location: home.php');
}

 ?>
<html>
    <head>
        <title>Hackathon</title>
        <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
     
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="css.css" rel="stylesheet">
    
    
    </head>
    <body style="background-image: linear-gradient(to right,gray,aqua)">
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">SITE NAME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse myClass " id="navbarNavDropdown">
    <ul class="navbar-nav ">
      <li class="nav-item active myClass">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
    
       
       
</nav>-->
        
        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FRIENDS FEED</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#" onclick="myfunction()"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
      <li><a href="#" onclick="myfunction2()"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
        
        
        <!--signup code-->
        <div id="id01">

<form action="signup.php" method="POST" >

  <div class="container signdiv">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
     <label for="username" ><b>Username</b></label>
      <input type="text" placeholder="Enter your name" name="username" required>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email"  required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass_1" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pass_2" required>




       <label for="image">Paste Your Image</label>
     <div class="blue1" >    
         <input class="blue1" value="register" type="file" name="fileToUpload" id="fileToUpload" style="border: none;">
         
       </div>

    

    



    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      
      <button type="submit" name="signup" value="Upload Image" class="signupbtn sign-button" >Sign Up</button>
    </div>
  </div>
</form>
        </div>
        <!--login code-->
        
             <div id="id02">
<form action="login.php" method="POST" >

  <div class="container signdiv">
    <h1>Login</h1>
    <p>Please fill your details to login.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" value="<?php if (!empty($_COOKIE['email'])) { echo $_COOKIE['email'] ; } ?>" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

   
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
      <br>
      <label>If you don't have account then <span onclick="myfunction()" class="below-button">sign-in </span>first.</label>

    <div class="clearfix">
      
      <button type="submit" name="login" class="signupbtn sign-button">Login</button>
    </div>
  </div>
</form>
        </div>
        <div style="float: right; ">
        <div >
            
            <h2 style="font-family: fantasy; font-size: 4rem;">Welcome to FRIEND FEED</h2>
            <br>
            <br>
            
            <h2 style="font-family: cursive; font-size: 5rem;">Find yourself with us.</h2>
            
            
            </div>
        
        
        </div>
        
    
    </body>
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</html>