<?php include('db.php'); ?>

<?php 
session_start();
$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM posts WHERE user_id = '$user_id' ORDER BY pdatetime DESC " ;        

$result = mysqli_query($conn,$query);		

if (mysqli_num_rows($result) > 0 ) {
	$row = array();

    for($i=0;$i<mysqli_num_rows($result);$i++){
	$row[$i] = mysqli_fetch_assoc($result);

}

}




?>