<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Facilities</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
      <link rel="stylesheet" href="css/facilities.css">
<style>
  

.footer-container {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  font-size:16px;
}

.footer-content {
  display: flex;
  justify-content: space-around;
  
  
  
}

.footer-section {
  max-width: 300px;
}

h3 {
  color: #3498db;
}



.social-icons a {
  color: #fff;
  margin-right: 10px;
  font-size: 20px;
}

.footer-bottom {
  text-align: center;
  padding-top: 10px;
  border-top: 1px solid #555;
  margin-top: 20px;
  
}
</style>
</head>
<body>
<?php include 'navbar.php'; ?>
<header>
  <h1 class="title">Unwind & Recharge at Our Top-Notch Facilities</h1>
</header>
<section id="facilities">
    <div class="facility-item">
      <h3>Fitness Center</h3>
      <img src="image/gym.jpg" alt="Fitness Center">
      
      <p>Our fitness center is equipped with state-of-the-art exercise equipment, including treadmills, ellipticals, stationary bikes, and free weights. The fitness center is open 24 hours a day, seven days a week, and is accessible to all hotel guests.</p>
      <div class="list">
       
        <ul>
          <li><span>Lorem ipsum dolor sit amet</span></li>
          <li><span>Consectetur adipisicing elit</span></li>
          <li><span>Ut labore et dolore magna aliqua</span></li>
          <li><span>Ut enim ad minim veniam</span></li>
          <li><span>Quis nostrud exercitation ullamco</span></li>
          <li><span>Laboris nisi ut aliquip ex</span></li>
        </ul>
      </div>
    </div>
    <div class="facility-item">
      <img src="image/swimingpool.jpg" alt="Outdoor Pool">
      <h3>Outdoor Pool</h3>
      <p>Our outdoor pool is the perfect place to relax and soak up the sun. The pool is open from 9:00 am to 9:00 pm, and towels are provided for all hotel guests.</p>
      <div class="list">
        
        <ul>
          <li><span>Lorem ipsum dolor sit amet</span></li>
          <li><span>Consectetur adipisicing elit</span></li>
          <li><span>Ut labore et dolore magna aliqua</span></li>
          <li><span>Ut enim ad minim veniam</span></li>
          <li><span>Quis nostrud exercitation ullamco</span></li>
          <li><span>Laboris nisi ut aliquip ex</span></li>
        </ul>
      </div>
    </div>
    <div class="facility-item">
      <img src="image/food.jpg" alt="On-Site Restaurant">
      <h3>On-Site Restaurant</h3>
      <p>Our on-site restaurant serves delicious cuisine for breakfast, lunch, and dinner. The restaurant is open from 6:00 am to 10:00 pm, and room service is available for guests who prefer to dine in the comfort of their room.</p>
      <div class="list">
        
        <ul>
          <li><span>Lorem ipsum dolor sit amet</span></li>
          <li><span>Consectetur adipisicing elit</span></li>
          <li><span>Ut labore et dolore magna aliqua</span></li>
          <li><span>Ut enim ad minim veniam</span></li>
          <li><span>Quis nostrud exercitation ullamco</span></li>
          <li><span>Laboris nisi ut aliquip ex</span></li>
        </ul>
      </div>
    </div>
    <div class="facility-item">
      <img src="image/spa.jpg" alt="Spa and Wellness Center">
      <h3>Spa and Wellness Center</h3>
      <p>Our spa and wellness center offers a range of treatments and services designed to help you relax and rejuvenate. The spa is open from 10:00 am to 8:00 pm, and appointments can be made by contacting the spa directly.</p>
      <div class="list">
        
        <ul>
          <li><span>Lorem ipsum dolor sit amet</span></li>
          <li><span>Consectetur adipisicing elit</span></li>
          <li><span>Ut labore et dolore magna aliqua</span></li>
          <li><span>Ut enim ad minim veniam</span></li>
          <li><span>Quis nostrud exercitation ullamco</span></li>
          <li><span>Laboris nisi ut aliquip ex</span></li>
        </ul>
      </div>
    </div>
  </section>
  
  <footer class="footer-container" id="contact">
  <div class="footer-content">
    <div class="footer-section">
      <h3>About Us</h3>
      <p>Your company description goes here. Keep it concise and engaging.</p>
    </div>
    <div class="footer-section">
      <h3>Contact</h3>
      <p>Email: contact@example.com</p>
      <p>Phone: +1 (123) 456-7890</p>
    </div>
    <div class="footer-section">
      <h3>Follow Us</h3>
      <div class="social-icons">
      <div class="social">
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-solid fa-envelope"></i>
    </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 Your Website. All Rights Reserved.</p>
  </div>
</footer>
<script src="script.js"></script>
</body>
</html>
