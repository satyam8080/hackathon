<?php include('db.php'); ?>

<?php 

	session_start();
	$user_id = $_SESSION['user_id']; 
	//$user_id =  $user_id  	;
	

if (isset($_POST['post'])) {
	$title    = ($_POST['title']) ;
	$msg_body = ($_POST['body']);
	$errors   = array();

    if (empty($title)) {
    	array_push($errors, "title required");
    }
    if (empty($msg_body)) {
    	array_push($errors, "Body should not be empty");
    }

    	// if no errors
    if (count($errors)==0) {
    	$query = "INSERT INTO posts(ptitle,postdata,user_id) VALUES('$title','$msg_body','$user_id') ";
    	mysqli_query($conn,$query);
    	header('location: home.php');

    }

}






?>