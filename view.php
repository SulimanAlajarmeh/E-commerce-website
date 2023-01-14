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
    <link rel="stylesheet" href="css/user.css">
    
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
                <a class="nav-link active text-white fs-5" aria-current="page" href="user.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white  fs-5" href="user.php">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white  fs-5" href="user.php">About Us</a>
              </li>

            
              <li class="nav-item">
                <a class="nav-link text-white  fs-5 " href="user.php">Contact Us</a>
              </li>


              <li class="nav-item">
                <a class="nav-link text-white  fs-5 " href="#">Total Price:</a>
              </li>

              

            </ul>
            <form class="d-flex" role="search">
              <button class="btn btn-outline-dark bg-white text-dark  fs-6" ><a href="logout.php "class="logout">Logout</a></button>
            </form>
          </div>
        </div>
      </nav>
   <!--end navbar-->

   <div class="spacial" id="Contact">
  <h2>View</h2>
  <p> View More for Product</p>
</div>
   
<?php
$id=$_GET['product-id'];

$sql="SELECT * FROM product WHERE id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
  $id=$row['id'];
  $name=$row['Product_name'];
  $info=$row['product_info'];
  $price=$row['Price'];
  $img=$row['imge_name'];

  echo'
  <div class="col-sm-4">
    <div class="card m-4 " >
      <img src="uplodimge/'. $img.'" height="350px" >
      <div class="card-body">
        <h5 class="card-title">'.$name.'</h5>
        <p class="card-text">'.$info.'</p>
        <p class="card-price">Price:$'.$price.'</p>
        <button class="btn btn-outline-dark text-white  card-btn"><a href="addchart.php?product_id='.$id.'">Add to Chart</a></button>
        <button class="btn btn-outline-dark text-white  card-btn"><a href="view.php?product-id='.$id.'& product-name='.$name.'" >View More</a></button>
      </div>
    </div>
  </div>';

  ?>

<?php

};
};
?>

<div class="row">
<?php
$product=$_GET['product-name'];
$id_product=$_GET['product-id'];
$select="SELECT * FROM product WHERE Product_name='$product'";
$result2=mysqli_query($conn,$select);
if($result){
    echo '
    <hr>
    <div class="spacial" >
    <h2>Same Product</h2>
    
  </div>';
    while($row=mysqli_fetch_assoc($result2)){
  $id=$row['id'];
  $name=$row['Product_name'];
  $info=$row['product_info'];
  $price=$row['Price'];
  $img=$row['imge_name'];

  if($id==$id_product){
    continue;
  }

  echo'
  <div class="col-sm-4">
    <div class="card m-4 " >
      <img src="uplodimge/'. $img.'" height="350px" >
      <div class="card-body">
        <h5 class="card-title">'.$name.'</h5>
        <p class="card-text">'.$info.'</p>
        <p class="card-price">Price:$'.$price.'</p>
        <button class="btn btn-outline-dark text-white  card-btn"><a href="addchart.php?product_id='.$id.'">Add to Chart</a></button>
        <button class="btn btn-outline-dark text-white  card-btn"><a href="view.php?product-id='.$id.'& product-name='.$name.'" >View More</a></button>
      </div>
    </div>
  </div>';

  ?>

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