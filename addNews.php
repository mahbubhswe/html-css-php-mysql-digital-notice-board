<?php


$title = "";
$discription="";
$date = "";
$message= "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'notice');


if (isset($_POST['title']) && isset($_POST['discription'])) {

  // get all input values
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $discription = mysqli_real_escape_string($db, $_POST['discription']);
   $date = mysqli_real_escape_string($db, $_POST['date']);

  $query = "INSERT INTO `notice_store`(`title`, `description`, `date`) VALUES ('$title','$discription',' $date')";

 if(mysqli_query($db,$query)){
 	$message="This notice successfully added to notice bord.";
 }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add News</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="style.css" rel="stylesheet">

   
</head>
<body>

     <div class="container" id="addNewItems">

           <h1 class="text-center text-secondary">Add New Notice:</h1>
        <form action="addNews.php" method="POST" class="jumbotron" id="addNoticeForm">
      <?php 
        if($message!="")
        {echo '<div  class="alert alert-success">This notice successfully added to notice bord....!</div>';
}
        ?>
    <div class="form-group">
        <input type="text" name="title" id="title" placeholder="Notice Title" class="form-control">
    </div>

     <div class="form-group">
        <textarea type="text" style="min-height:300px" name="discription" id="discription" class="form-control" placeholder="Notice Discription"></textarea> 
    </div>

     <div class="form-group">
        <input type="Date" name="date" id="date"  class="form-control">
    </div>

    <button type="submit" id="addBtn" name="save" class="btn btn-primary btn-block" disabled>Publish Now</button>
     </form >

    </div>

<script type="text/javascript">
	        //add notic form validation
addNoticeForm.addEventListener('input',()=>{
    if(title.value.length>0 && discription.value.length>0 && date.value.length>0) {
        addBtn.removeAttribute("disabled"); 
    }else{
        addBtn.setAttribute("disabled",true);
    }
})
</script>

</body>
</html>
