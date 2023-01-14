<?php
include ('connect.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];

    if(!empty($name && $email && $password  && $phone)){
    $sql="INSERT INTO signup (FName,Email,Password,Phone)
     VALUES('$name','$email','$password','$phone')";

     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:signup.php');
        
     }
     else{
            die(mysqli_error($conn));
     }
}
}







?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/all.min.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Login</title>
</head>
<body>  
  <div class="landing">
    <div class="sign">

        <div class="head">
        <h2>Register</h2>
           
    </div>
      
    <form class="info" method="post">
        <i class="fa-solid fa-user user"></i>
       <label>Name:</label>
        <input  type="text" placeholder="Enter your Name" name="name" >

        
       <label>email:</label>
       <i class="fa-solid fa-envelope email"></i>
        <input type="email" placeholder="Enter your Email" name="email">

        <label>Password:</label>
        <i class="fa-solid fa-key pass"></i>
        <input type="text" placeholder="Enter your Password" name="password">

        <label>Phone:</label>
        <i class="fa-solid fa-phone phone"></i>
        <input type="text" placeholder="Enter your Mobile" name="phone">


        <button  type="submit" name="submit"> Submit </button>



   


    </form>
    </div>
</div>
    
</body>
</html>