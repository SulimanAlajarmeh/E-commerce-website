<?php

include('connect.php');





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/admain.css">
    
    <title>Fashion Market</title>
</head>
<body>
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg head">
        <div class="container-fluid">
          <img src="img/suliman.jpeg">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white fs-5" aria-current="page" href="displayproduct.php"> Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white  fs-5" href="#user">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white  fs-5" href="#">Masseages</a>
              </li>

            


            </ul>
            <form class="d-flex" role="search">
              <button class="btn btn-outline-dark bg-white text-dark  fs-6" type="submit" ><a href="admainlogout.php">Logout</a></button>
            </form>
          </div>
        </div>
      </nav>
   <!--end navbar-->

   <!--start product-->










<!--end product-->
<!--start register-->
<h2 class="text-center mt-4" id="user">Users<h2>
<table class="table  table-bordered fs-4">
  <thead class="text-center">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th>Operation</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $sql="SELECT * FROM signup ";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $Name=$row['Fname'];
            $Email=$row['Email'];
            $Password=$row['Password'];
            $Phone=$row['Phone'];

            echo '<tr>
            <td>'.$id.'</td>
            <td>'. $Name.'</td>
            <td>'.$Email.'</td>
            <td>'.$Password.'</td>
            <td>'.$Phone.'</td>
            <td> <button class="btn btn-danger "> <a class=" ch text-light" href="delete.php?deleteid='.$id.'">Delete</a></button></td>
            </tr>';
        }

    }
    else{
        die(mysqli_error($conn));
    }



    ?>
   
  </tbody>
</table>
<!--end register-->


<!--Start massages-->
<h2 class="text-center mt-4 mb-4" id="mssages">Massages<h2>
<table class="table  table-bordered fs-4">
  <thead class="text-center">
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Massages</th>
      <th>Operation</th>

    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $sql2="SELECT *FROM  usermassage";
    $result2=mysqli_query($conn,$sql2);
    if($result2){
        while($row=mysqli_fetch_assoc($result2)){
           $id=$row['id'];
            $Name=$row['Fname'];
            $Email=$row['Email'];
            $Massage=$row['Massage'];
       

            echo '<tr>
            <td>'.$id.'</td>
            <td>'. $Name.'</td>
            <td>'.$Email.'</td>
            <td>'.$Massage.'</td>
            <td> <button class="btn btn-danger "> <a class=" ch text-light" href="delete.php?delete-massage='.$id.'">Delete</a></button></td>
           
         
            </tr>';
        }

    }
    else{
        die(mysqli_error($conn));
    }



    ?>
   
  </tbody>
</table>
<!--End massages-->


</body>
</html>