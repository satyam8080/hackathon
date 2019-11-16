<?php include('login.php'); ?>
<?php include('read.php'); ?>
<?php include('db.php'); ?>

<?php 
//session_start();

if(empty($_SESSION['username'])) {
   header('location: index.php');
}

?>

<?php 
$user_id = $_SESSION['user_id'];
 
 $query = "SELECT img_url FROM images WHERE user_id = '$user_id' ";
 $result = mysqli_query($conn,$query);
 
  if(mysqli_num_rows($result) > 0) {
    $img_row = mysqli_fetch_assoc($result);
    $img_url = $img_row["img_url"];
    $_SESSION['img_url'] = $img_url;
  }

?>








<html>
    <head>
        <title>news and posts</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="css2.css" rel="stylesheet">
      <link href=" https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        
        

    
    </head>
    <body style="background-image: linear-gradient(to right,lightblue,#aaaaaa);">
   
<nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" title="Home" href="#">FRIENDS FEED</a>
             
    <div class="bardiv">  <a href="javascript:void(0);"  onclick="myFunction()">
    <i class="fa fa-bars"></i>
        </a></div>
    </div>
   
    <ul class="nav navbar-nav" id="responsivenav">
        
          <li id="link1"  class="active" onclick="active_link1()"><a href="home.php">News and Feeds</a></li>
          <li id="link2" ><a href="timeline.php">Your Timeline</a></li>
      
   
                
    </ul>
         
    <form class="navbar-form navbar-right" action="login.php">
        <div class="input-group">



          <img src="uploads/<?php print_r( $img_url ); ?>" style="border-radius : 15px; width:35px;height:35px; ">    

        





        <label style="color: darkgray; font-size: 2rem;"></label> <b style="color: darkgray; font-size: 2rem; margin-right: 2rem">  <?php  echo $_SESSION['username']; ?>  </b>
            <button type="submit"  title="Sign Out" name="logout" class="input-group-btn signout_button" style="background: none; border: none; color: #07c;"><i class="fa fa-sign-out " style="font-size: 3rem; line-height: 0"></i></button>
        
        </div>
       
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button style="height: 3.4rem;"
                  class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
       
            <div id="home" class="table_margin">
        
        
        <!--code for below navbar -->
        <table >
            <td style="width: 30rem;">
            
            </td>
        <td>
            
            <form action="post.php" method="POST">
            <label style="font-family: cursive; color: chocolate;">Make a Post:-</label>
                 <br>
                 <label>Title-</label>
                 <br>
                 <input type="text" name="title" placeholder="Enter title" class="titlebox" required>
                 <br>
                 
                
                 
                <textarea class="realtextarea" name="body" placeholder="What's on your mind...." required ></textarea>
                 
                   <input type="submit" name="post"  onclick="alert('hi')" class="postbtn" value="POST">
        
        </form>


    <?php  $i=1;
  foreach ($row as $row ) : ?>

              
 <div class="mdc-card demo-card card_div  " style="margin-top: 2rem ; height: 15rem">
  <div class="mdc-card__primary-action demo-card__primary-action"  tabindex="0">
 
    <div class="demo-card__primary " style="background-image: linear-gradient(to left,#dedede,lightblue);" >
      <h2 class="demo-card__title mdc-typography mdc-typography--headline6" style="font-size: 3rem; margin-left: 2rem; "><?php print_r($row['ptitle']) ;    ?>       </h2>
      
    
    </div>
    <div class="demo-card__secondary mdc-typography mdc-typography--body2 textarea" id="div-<?php echo $i ; ?>"  ><p  id="para-<?php echo $i ; ?>" style="font-size: 1.5rem; line-height: 1.5; padding-left: 1rem;height: 30rem">


<?php print_r($row['postdata']) ;    ?>




        </p></div>
  </div>
  <div class="mdc-card__actions" style="background-image: linear-gradient(to right,#dedede,lightblue);">
    <div class="mdc-card__action-buttons">
      <button class="mdc-button mdc-card__action mdc-card__action--button " onclick="readmore1(this.id)" id="<?php echo $i ;$i++; ?>" >Read More</button>
      <button class="mdc-button mdc-card__action mdc-card__action--button" >Read later</button>
    </div>
   
  </div>
</div>            
           
 <?php endforeach; ?>



            
            </td>
            <td>
            </td>
        </table>
      </div>
       
    
    </body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="script2.js"></script>
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

    <!--Change 2nd time-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</html>