<?php include('db.php'); ?>

<?php 
session_start();

if (isset($_POST['login'])) {
	$email    = ($_POST['email']);
	$pass     = ($_POST['password']);
    $errors = array();
// validation
	if (empty($email)) {
		array_push($errors, "Email required");
	}
	if (empty($pass)) {
		array_push($errors, "Password required");  
	}


	if (count($errors)==0) {
		$pass = md5($pass);  

		$query = "SELECT * FROM users WHERE email='$email' AND user_password='$pass' " ;
		$result = mysqli_query($conn,$query);

		if(mysqli_num_rows($result)==1) {
			//$_SESSION['email'] = $email;

			$row = mysqli_fetch_assoc($result);
			$username = $row["username"];
			$user_id  = $row["id"];

			$_SESSION['username'] = $username; 
			$_SESSION['user_id']  = $user_id;       ////////////////////////////// 
			//$_SESSION['success'] = "logged in successfuly ";


   			if (!empty($_POST['remember'])) {
   				setcookie('email',$email,time()+ 3600 );    // set cookie    
   			}
			         
			header('location: home.php'); // redirect url
		} else {
			array_push($errors, "wrong username and password");
			header('location: errors.php');


		}

   }


}

//logout
if (isset($_GET['logout'])) {
	unset($_SESSION['username']);
	session_destroy();
	header('location: index.php');
}


?>