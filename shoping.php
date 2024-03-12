<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dynamic1";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
}
else{
  
}
  $sql0= "select * from homesliderdata"; 
    $result0 = ($conn->query($sql0)); 
    //declare array to store the data of database 
    $row1 = [];  
  
    if ($result0->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row0 = $result0->fetch_all(MYSQLI_ASSOC);   
    }     

    


    $sql1= "select * from homecard1data"; 
    $result1 = ($conn->query($sql1)); 
    //declare array to store the data of database 
    $row1 = [];  
  
    if ($result1->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row1 = $result1->fetch_all(MYSQLI_ASSOC);   
    }  


    $sql2= "select * from homecard2data"; 
    $result2 = ($conn->query($sql2)); 
    //declare array to store the data of database 
    $row2 = [];  
  
    if ($result2->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row2 = $result2->fetch_all(MYSQLI_ASSOC);   
    }  


    $sql3= "select * from homecard3data"; 
    $result3 = ($conn->query($sql3)); 
    //declare array to store the data of database 
    $row3 = [];  
  
    if ($result3->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row3 = $result3->fetch_all(MYSQLI_ASSOC);   
    }  


    $sql4= "select * from homebanner1data"; 
    $result4 = ($conn->query($sql4)); 
    //declare array to store the data of database 
    $row3 = [];  
  
    if ($result4->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row4 = $result4->fetch_all(MYSQLI_ASSOC);   
    }

    
?> 



<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">
	.navbar-toggler {
      order: -1; /* Moves the toggle button to the left (side) */
    }
    li{
      padding: 0px 0px 0px 30px;
      font-family: revert-laye;
    }







    ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
  color: #ff5e14;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ff5e14;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}


.header{
  background: linear-gradient(#fc08ff,#6bfa6e);
}
.footerbg{
 
background:linear-gradient(#fc08ff,#6bfa6e, #1f177d);

}

</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light header">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <a class="navbar-brand" href="shoping.php">
    <img src="img/logo.png" style="filter: drop-shadow(2px 1px black);" width="110" height="auto" class="d-inline-block align-top" alt="logo">
  </a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link fa-bounce" href="shoping.php" style="border-bottom: 1px solid; black;">MOBILE<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="mens.php">MEN'S</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="womens.php">WOMEN'S</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="kids.php">KID'S</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="watches.php">WATCHE'S</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>






<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <?php
  foreach ($row0 as $values0) {
    ?>
    <?php
    if ($values0['id'] == 1) {
    ?>
    <div class="carousel-item active">
      <img src="image/<?php echo $values0['image']; ?>" class="d-block w-100" alt="..." width="100%">
    </div>
    <?php
    }
     else{
    ?>
    <div class="carousel-item">
      <img src="image/<?php echo $values0['image']; ?>" class="d-block w-100" alt="..." width="100%">
    </div>
    <?php
     }
    ?>
 
   <?php
  }
  ?>



  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div><br><br>


<div class="container">
<div class="row">
  <?php
foreach ($row1 as $values1) {
  

   ?>
<div class="col-md-4"><a href="#">
  <img src="image/<?php echo $values1['image'];?>" height="auto" width="100%" class="img-thumbnail" alt="...">
</a>
</div>

<?php 
}
   ?>
</div>
</div><br><br>


<div class="container-fluid " >
<div class="row">
<div class="col-md-12">
<center><p style="font-size: 40px; font-family: sans-serif;">Featured Products</p></center>
</div>
</div>
</div><br><br>


<div class="container-fluid">
<div class="row">
 <?php
foreach ($row2 as $values2) {
  

  ?>
<div class="col-md-4">
  <img src="img/<?php echo $values2['image']; ?>" height="auto" width="100%" class="rounded" alt="...">
  <center><p><?php echo $values2['phonename'];?></p>
  <p><?php echo $values2['price']; ?></p></center>
</div>

<?php
}
  ?>
</div>
</div><br><br>






<div class="container-fluid">
<div class="row">
  <?php 
foreach ($row3 as $values3) {
 
  ?>
<div class="col-md-2">
  <img src="image/<?php echo $values3['image']; ?>" height="auto" width="100%" class="rounded" alt="...">
  <center><p><?php echo $values3['phonename']; ?></p>
  <p><?php echo $values3['price']; ?> </p></center>
</div>
<?php
}
  ?>
</div>
</div><br><br>


<div class="container-fluid">
<div class="row">
  <?php
   foreach ($row4 as $values4) {
     
   ?>
<div class="col-md-12">
  <img src="image/<?php echo $values4['image']; ?>" class="rounded" height="auto" width="100%">
</div>
<?php
   }
   ?>
</div>
</div><br><br><br><br>




<div class="container-fluid">
<div class="row">
<div class="col-md-12"><center>
  <marquee direction="Right" width="100%" height="auto" scrollamount="50">
  

  <i class="fa-solid fa-truck fa-bounce h1" style="font-size: 250px; color: green;"></i>
</marquee></center>
</div> 
 
</div>
</div>













<footer class="footer-section  footerbg">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4 style="color: black;">Find us</h4>
                                <span style="color: black;">1010 Avenue, sw 54321, chandigarh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4 style="color: black;">Call us</h4>
                                <span style="color: black;">9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4 style="color: black;">Mail us</h4>
                                <span style="color: black;">mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="https://i.ibb.co/QDy827D/ak-logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p style="color: black;">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span style="color: black;">Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 style="color: black;">Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#" style="color: black;">Home</a></li>
                                <li><a href="#" style="color: black;">about</a></li>
                                <li><a href="#" style="color: black;">services</a></li>
                                <li><a href="#" style="color: black;">portfolio</a></li>
                                <li><a href="#" style="color: black;">Contact</a></li>
                                <li><a href="#" style="color: black;">About us</a></li>
                                <li><a href="#" style="color: black;">Our Services</a></li>
                                <li><a href="#" style="color: black;">Expert Team</a></li>
                                <li><a href="#" style="color: black;">Contact us</a></li>
                                <li><a href="#" style="color: black;">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 style="color: black;">Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p style="color: black;">Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p style="color: black;">Copyright &copy; 2018, All Right Reserved <a href="https://codepen.io/anupkumar92/">Anup</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#" style="color: black;">Home</a></li>
                                <li><a href="#" style="color: black;">Terms</a></li>
                                <li><a href="#" style="color: black;">Privacy</a></li>
                                <li><a href="#" style="color: black;">Policy</a></li>
                                <li><a href="#" style="color: black;">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>