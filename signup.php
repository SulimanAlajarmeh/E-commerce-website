<?php

include ('connect.php');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pasword=$_POST['password'];
    if(empty($email ||$pasword) ){
        header('Location:signup.php');
    }
    else{


    
    $sql="SELECT * FROM signup WHERE (Email='$email'AND Password='$pasword')";
    $result=mysqli_query($conn,$sql);

    if($result){
        if(mysqli_num_rows($result) === 1){
            $row=mysqli_fetch_assoc($result);
            if($row['Email'] ===$email && $row['Password']===$pasword ){
            
                
                header('location:user.php');
                exit();
            }
            
        }
        else{
            header('location:signup.php');
        }
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
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet"  href="css/all.min.css">
    <title>Login</title>
</head>
<body>  
  <div class="landing">
    <div class="sign">

        <div class="head">
        <h2>Sign up</h2>
        
           
    </div>
   
    <form class="info" action="" method="post">
     
    <label>Email:</label>
  
        <input type="email" placeholder="Enter your Email" name="email">

        <label>Password:</label>
    
        <input type="password" placeholder="Enter your Password" name="password">

        <button  type="submit" name="submit"> Login</button>
        
        <div class="register"><button  type="submit" ><a  href="register.php">Register<a> </button></div>
            <span class="admain"><a  href="admainlogin.php">Admain!!</a></span>



    </div>
    
</div>


    </form>
    
</body>
</html>