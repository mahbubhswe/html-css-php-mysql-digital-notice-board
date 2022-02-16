<?php
//get paramiter value from url
$id = intval($_GET['id']);

//database connection
$db = mysqli_connect('localhost', 'root', '', 'notice');

$sql="SELECT * FROM `notice_store` WHERE id='$id'";

$result = mysqli_query($db, $sql);
$notice = mysqli_fetch_assoc($result);
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Read Notice Here</title>
	 <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="container">
	  <div class="card bg-info">
    <div class="card-body">
    	<h3 class="text-white">
    		<a href="index.php" class="text-white">Back to home</a>
    	</h3>
      
    </div>
  </div>


  <!-- display notice-->
  <div class="card bg-light text-dark mt-3">
    <div class="card-body">
    	<h3 class="text-info"><?php echo $notice['title']; ?></h3>

    	<strong>Published:</strong> <?php echo $notice['date']; ?>
    	<hr>
    	<p><?php echo $notice['description'];?></p>

    	
    	
    		
    	</div>
  </div>
</div>
</body>
</html>