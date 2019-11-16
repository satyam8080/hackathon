<?php include('db.php'); ?>

<?php 
//session_start();
//$current_date = date("Y-m-d h:i:s");

$query = "SELECT * FROM posts ORDER BY pdatetime DESC " ;        // WHERE pdatetime ORDER BY pdatetime DESC ";

$result = mysqli_query($conn,$query);		

if (mysqli_num_rows($result) > 0 ) {
	$row = array();

    for($i=0;$i<mysqli_num_rows($result);$i++){
	$row[$i] = mysqli_fetch_assoc($result);


	//$title     = $row[$i]["ptitle"];
	//$post_data = $row[$i]["postdata"];
	//$post_time = $row[$i]["pdatetime"];
	//$post_by   = $row[$i]["user_id"];
}

    // post data into session
   //  $_SESSION['title']     = $title;
   //  $_SESSION['post_data'] = $post_data;
   //  $_SESSION['post_time'] = $post_time;
   //  $_SESSION['post_by']   = $post_by;
}




?> 