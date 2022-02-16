<?php


$userName = "";
$password="";
$message= "";


if (isset($_POST['userName']) && isset($_POST['password'])) {

  // get all input values
  $userName = $_POST['userName'];
  $password = $_POST['password'];


 if( $userName=="admin" && $password=="admin"){
   header('location: addNews.php');
 }
 else{
  $message= "Not matched";
 }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Syetem</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="style.css" rel="stylesheet">

   
</head>
<body>

     <div class="container">

           <h1 class="text-center text-secondary">Login System:</h1>
        <form action="login.php" method="POST" class="jumbotron" id="loginForm">

      <?php 
        if($message!="")
        {echo '<div  class="alert alert-danger">Username or password not matched...!</div>';}
        ?>

    <div class="form-group">
        <input type="text" name="userName" id="userName" placeholder="Username" class="form-control">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
    </div>


    <button type="submit"  id="logBtn" class="btn btn-primary btn-block" disabled="">Login</button>

     </form >

    </div>
<script type="text/javascript" src="app.js"></script>
</body>
</html>
