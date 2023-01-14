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
    <link rel="stylesheet" href="css/Index.css">
    
    <title>Fashion Market</title>
</head>
<body>
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg head">
        <div class="container-fluid">
          <img src="img/fashion-logos.jpg">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white fs-5" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white  fs-5" href="signup.php">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white  fs-5" href="signup.php">About Us</a>
              </li>

            
              <li class="nav-item">
                <a class="nav-link text-white  fs-5 " href="signup.php">Contact Us</a>
              </li>


              

            </ul>
            <form class="d-flex" role="search">
            <button class="btn btn-outline-dark  bg-white text-dark  fs-6" type="submit" ><a href="signup.php "class="text-dark ">Login</a></button>
            </form>
          </div>
        </div>
      </nav>
   <!--end navbar-->

<!--start title-->
   <div class="container mt-3 ">
    <h3 class="text-center">Fashion Shop</h3>
    <p class="text-center">A store displaying the sale of men's and women's clothing and accessories</p>
   </div>
<!--end title-->


<div class="row">
<?php
$select="SELECT * FROM product";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result) > 0){
while($row=mysqli_fetch_assoc($result)){
  $name=$row['Product_name'];
  $info=$row['product_info'];
  $price=$row['Price'];
  $img=$row['imge_name'];


?>
  
  
    
  
  <div class="col-sm-4">
      <div class="card m-4 " >
        <img src="uplodimge/<?php echo $img;?>" height="350px"  >
        <div class="card-body">
          <h5 class="card-title"><?php echo $name;?></h5>
          <p class="card-text"><?php echo $info; ?></p>
          <p class="card-price">Price:$<?php echo $price;?></p>
          <button style="background-color: #fe3f40;" class="btn"><a class="text-white" href="signup.php" >Add to Chart</a></button>
        <button style="background-color: #fe3f40;" class="btn"><a class="text-white" href="signup.php" >View More</a></button>

        </div>
      </div>
    </div>
   

        
 
<?php
};
};
?>
 </div>
 




<!--start bottoom-->
<div class="container-fluid text-center mb-0">
    <div class="row bg-dark">
      <div class="col bottom-info">
        <h3>Get In Touch</h3>
        <p><i class="fa-solid fa-location-dot"></i>Amann ,Jordan</p>
        <p><i class="fa-solid fa-envelope"></i>Suliman@Email.Com</p>
        <p><i class="fa-solid fa-phone"></i>+962789993533</p>
      </div>
      <div class="col bottom-info">
        <h3>Social Media</h3>
        <span><i class="fa-brands fa-facebook fa-xl "></i></span>
        <span><i class="fa-brands fa-twitter fa-xl"></i></span>
        <span><i class="fa-brands fa-instagram fa-xl"></i></span>
        <span><i class="fa-brands fa-youtube fa-xl"></i></span>
      </div>
      <div class="col bottom-info">
       <h3>Opening Hours</h3> 
       <p><i class="fa-solid fa-chevron-right"></i> 8AM – 11PM</p>
       <p><i class="fa-solid fa-chevron-right"></i> Friday: Closed</p>
      </div>
      <div class="col bottom-info">
        <h3>Advantages offered</h3>
        <p> <i class="fa-solid fa-chevron-right"></i>Service Policy</p>
        <p> <i class="fa-solid fa-chevron-right"></i>Shipping Policy</p>
        <p> <i class="fa-solid fa-chevron-right"></i>Secure Payment</p>
      </div>
    </div>
  </div>
<!--End bottoom-->



</body>
</html>