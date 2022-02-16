<?php


//database connection
$db = mysqli_connect('localhost', 'root', '', 'notice');

$sql="SELECT * FROM `notice_store`";

$result = mysqli_query($db, $sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wellcome to notice board</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" >

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  

</head>
<body>

<div class="container">
	  <div class="card bg-info">
    <div class="card-body">
    	<h3 class="text-white">Wellcome to digital notice board </h3>
       <h6 class="text-right"><a class="text-secondary" href="login.php">Login</a></h6>
       <marquee behavior="scrolling " scrolldelay="100">
Students are advised to check notice board in every day. Don't miss any update from today!
</marquee>
    </div>
  </div>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- The slideshow -->
  <div class="carousel-inner">
  	 <div class="carousel-item text-center active" >
      <img src="img/slide1.jpg" alt="Los Angeles" width="1110" height="400">
    </div>
    <div class="carousel-item text-center " >
      <img src="img/slide2.jpg" alt="Los Angeles" width="1110" height="400">
    </div>
    <div class="carousel-item text-center">
      <img src="img/slide3.jpg" alt="Chicago" width="1110" height="400">
    </div>
    <div class="carousel-item text-center ">
      <img src="img/slide4.jpg" alt="New York" width="1110" height="400">
    </div>
  </div>
  
</div>

<div class="card bg-secondary text-white">
    <div class="card-body">
      <h3>Notice List</h3></div>

  </div>
       <?php
  while($notice = mysqli_fetch_assoc($result)):?>

<!-- display all notice-->
  <div class="card bg-light text-dark mt-3">
    <div class="card-body">
    	<h3 class="text-info"><?php echo $notice['title']; ?></h3>
    	<span><?php echo substr_replace($notice['description'], " ", 20);
?>
</span><a href="noticeViwer.php?id=<?php echo $notice['id']; ?>">Read More...</a><br>
    	
    	<strong>Published:</strong> <?php echo $notice['date']; ?>
    		
    	</div>
  </div>

<?php endwhile; ?>
</div>




</body>
</html>



