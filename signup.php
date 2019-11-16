<?php include('db.php') ?>
<?php 
session_start();

if(isset($_POST['signup'])) {

	$username = ($_POST['username']);   
	$email    = ($_POST['email']);
	$pass_1   = ($_POST['pass_1']);
	$pass_2   = ($_POST['pass_2']);
    $errors   = array();


// validation 
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($email)) {
		array_push($errors, "email is required");
	}
	if (empty($pass_1)) {
		array_push($errors, "Password is Password");
	}
    if($pass_1 !=  $pass_2) {
    	array_push($errors, "The two Password doesn't match ");
    }

    // if no errors 
    if (count($errors)==0) {
    	$pass = md5($pass_1);
    

    $query = "INSERT INTO users(username,email,user_password) VALUES('$username','$email','$pass')";

    mysqli_query($conn,$query );

    $_SESSION['email'] = $email;
			$_SESSION['success'] = "logged in successfuly ";
    header('location: home.php');
}
}


?>