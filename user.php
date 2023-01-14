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
                <a class="nav-link active text-white fs-5" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white  fs-5" href="#product">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white  fs-5" href="#About us">About Us</a>
              </li>

            
              <li class="nav-item">
                <a class="nav-link text-white  fs-5 " href="#Contact">Contact Us</a>
              </li>



              <li class="nav-item">
                <a class="nav-link text-white  fs-5 " href="#">Total Price:</a>
              </li>

              
              

            </ul>
            <form class="d-flex" role="search">
              <button class="btn btn-outline-dark bg-white text-dark  fs-6" type="submit" ><a href="logout.php "class="logout">Logout</a></button>
            </form>
          </div>
        </div>
      </nav>
   <!--end navbar-->

   <!--start service-->

   <div class="spacial" id="">
  <h2>Service</h2>
  <p>Services provided by the store </p>
</div>


<div class="d-flex justify-content-evenly" style="background-color: #f8f9fa;
height: 153px;">

  <div class="onservice" style="background-color: white;
  border-radius: 15px;
  width: 250px;
  height: 150px;
  text-align: center;
  box-shadow: 5px 5px 20px 0px black;">

    <i class="fa-solid fa-circle-check  fa-2xl" style="color: #fe3f40; margin-top: 50px;"></i>
    <p style="margin-top: 10px;
    font-size: 19px;"> Quality Product</p>
  </div>

  <div class="" style="background-color: white;
  border-radius: 15px;
  width: 250px;
  height: 150px;
  text-align: center;
  box-shadow: 5px 5px 20px 0px black;">
    <i class="fa-solid fa-truck-fast fa-2xl" style="color: #fe3f40; margin-top: 50px;"></i>
    <p style="margin-top: 10px;
    font-size: 19px;">Free Shipping</p>
  </div>
  
  <div class="onservice" style="background-color: white;
  border-radius: 15px;
  width: 250px;
  height: 150px;
  text-align: center;
  box-shadow: 5px 5px 20px 0px black;">
    <i class="fa-solid fa-right-left fa-2xl" style="color: #fe3f40; margin-top: 50px;"></i>
    <p style="margin-top: 10px;
    font-size: 19px;"> 14-Day Return</p>
  </div>
  
  <div class="onservice " style="background-color: white;
  border-radius: 15px;
  width: 250px;
  height: 150px;
  text-align: center;
  box-shadow: 5px 5px 20px 0px black;">
    <i class="fa-solid fa-tag fa-2xl" style="color: #fe3f40; margin-top: 50px;"></i>
    <p style="margin-top: 10px;
    font-size: 19px;">Discount Product</p>
  </div>

</div>



<!--end service-->



<!--start title-->
<div class="spacial" id="product">
  <h2>Product</h2>
  <p>All Product on Fashion </p>
</div>
<!--end title-->
<div class="content">
<div class="row " >
<?php
$select="SELECT * FROM product";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result) > 0){
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
</div>
</div>


<!--start contactus-->

<?php
if(isset($_POST['submit-massage'])){
$mname=$_POST['name'];
$memail=$_POST['email'];
$massage=$_POST['massage'];
  if(!empty($mname)){
    if(!empty($memail)){
      if(!(empty($massage))){
        $sql2="INSERT INTO usermassage (Fname,Email,Massage) VALUES ('$mname','$memail','$massage')";
        $result2=mysqli_query($conn,$sql2);
        if($result2){
             
      
          }
          else{
                die(mysqli_error($conn));
        }
        }
      }
    }

  }






?>


<div class="spacial" id="Contact">
  <h2>Contact us</h2>
  <p>To send feedback about the site</p>
</div>
<div class="content">
            <form action="" method="post">
                <input class="main-input" type="text" name="name" placeholder="Your Name">
                <input class="main-input" type="email" name="email" placeholder="Your Email">
                <textarea class="main-input" name="massage" placeholder="Your Masseage" ></textarea>
                <button type="submit" name="submit-massage" class="btn btn-outline-dark  card-btn send">Send Massage</button>
            </form>
            </div>
        </div>
   

 

<!---end contactus-->
<!---start About us-->
<div class="row  border border-2  pl-5 shadow-lg p-3 mb-5 bg-white rounded " style="width:99%; margin-left:5px" >
<div class="spacial" id="About us">
  <h2>About Us</h2>
  <p>My Information </p>
</div>
<div class="col-sm-4 text-center">
<h4>About Me</h4>
<p class="m-5">I am a web developer and I am a junior programmer with good knowledge of front end technologies
I hope you like this site and provide you with the best services</p>
</div>

<div class="col-sm-4 text-center">
<h4>My Picture</h4>
<img class="rounded-circle shadow-lg m-1" src="img/suliman.JPEG" width="150px">
</div>

<div class="col-sm-4 text-center">
<h4>Details</h4>
<p>Name:Suliman Bassam Alajarmeh</p>
<p>Age:21 Year</p>
<p>Location: Jordan , Amman</p>
<p>Email:Suliman@gmail.com</p>
</div>
</div>


<!---end About us-->



<!--start bottoom-->
<div class="container-fluid text-center mb-0 mt-5">
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
