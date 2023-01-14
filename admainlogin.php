<?php

include('connect.php');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM admain";
    $result=mysqli_query($conn,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        $Admainemail=$row['Email'];
        $Admainpass=$row['Password'];

        if($email===$Admainemail &&  $password===$Admainpass){
            header('location:Admain.php');
        }
        else{
            header('location:admainlogin.php');

        }
    }
    else{
        die(mysqli_error($conn));
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alogin.css">
    <link rel="stylesheet"  href="css/all.min.css">
    <title>Login</title>
</head>
<body>  
  <div class="landing">
    <div class="sign">

        <div class="head">
        <h2>Admain:</h2>
        
           
    </div>
   
    <form class="info" action="" method="post">
     
    <label>Email:</label>
  
        <input type="email" placeholder="Enter your Email" name="email">

        <label>Password:</label>
    
        <input type="password" placeholder="Enter your Password" name="password">

        <button  type="submit" name="submit"> Login</button>
       
    </div>
    
</div>


    </form>
    
</body>
</html>