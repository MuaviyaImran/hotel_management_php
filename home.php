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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Hotel </title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
    <style>
      body{
        background:black !important;
      }
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
      #firstsection{
        width:80% !important;
        
      }
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

.home-container {
  width:90%;
  
  background-color:black;
  color:white;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin: 60px auto;
}

.blogPost {
 
  margin: 10px;
  padding: 20px;
  width: 100%;
  text-align: left;
  display: flex;
}

.post-image {
  max-width: 500px;
  height: auto;
  border-radius: 8px;
  margin-right: 20px;
}

.post-details {
  flex: 1;
}

.post-title {
  font-size: 2rem;
  margin-bottom: 10px;
}

.post-content {
  font-size: 1.2rem;
  color: white;
}
.action-button {
  margin-right: 10px;
  padding: 8px 16px;
  font-size: 1rem;
  background-color: #3498db;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.action-button:hover {
  background-color: #2980b9;
}


.sec-icon {
  position: relative;
  display: inline-block;
  padding: 0;
  margin: 0 auto;
}

.sec-icon::before {
  content: "";
  position: absolute;
  height: 1px;
  left: -70px;
  margin-top: -5.5px;
  top: 60%;
  background: #333333;
  width: 50px;
}

.sec-icon::after {
  content: "";
  position: absolute;
  height: 1px;
  right: -70px;
  margin-top: -5.5px;
  top: 60%;
  background: #333;
  width: 50px;
}

.advertisers-service-sec {
  background-color: black;
  color:white;
}

.advertisers-service-sec span {
  color: rgb(255, 23, 131);
}

.advertisers-service-sec .col {
  padding: 0 1em 1em 1em;
  text-align: center;
}

.advertisers-service-sec .service-card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  border-radius: 5px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  transition: 0.5s;
  position: relative;
  z-index: 2;
  overflow: hidden;
  background: #fff;
}

.advertisers-service-sec .service-card::after {
  content: "";
  width: 100%;
  height: 100%;
  background: linear-gradient(#0dcaf0, rgb(255, 23, 131));
  position: absolute;
  left: 0%;
  top: -98%;
  z-index: -2;
  transition: all 0.4s cubic-bezier(0.77, -0.04, 0, 0.99);
}

.advertisers-service-sec h3 {
  font-size: 20px;
  text-transform: capitalize;
  font-weight: 600;
  color: #1f194c;
  margin: 1em 0;
  z-index: 3;
}

.advertisers-service-sec p {
  color: #575a7b;
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.03em;
  z-index: 3;
}

.advertisers-service-sec .icon-wrapper {
  background-color: #2c7bfe;
  position: relative;
  margin: auto;
  font-size: 30px;
  height: 2.5em;
  width: 2.5em;
  color: #ffffff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  transition: 0.5s;
  z-index: 3;
}

.advertisers-service-sec .service-card:hover:after {
  top: 0%;
}

.service-card .icon-wrapper {
  background-color: #ffffff;
  color: rgb(255, 23, 131);
}

.advertisers-service-sec .service-card:hover .icon-wrapper {
  color: #0dcaf0;
}

.advertisers-service-sec .service-card:hover h3 {
  color: #ffffff;
}

.advertisers-service-sec .service-card:hover p {
  color: #f0f0f0;
}




    </style>
</head>

<body>
 <?php include 'navbar.php'; ?>


  
  <div class="home-container">
        <div class="blogPost">
            <img src="image/swimingpool.jpg" alt="Sample Blog Post 1" class="post-image" />
             <div class="post-details">
         <h2 class="post-title">Sample Blog Post 1</h2>
        <p class="post-content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec velit nec augue tincidunt elementum. Integer sit amet dui ac elit suscipit convallis. Fusce lacinia, velit nec cursus interdum, augue est eleifend libero, ut suscipit turpis lectus nec metus. Quisque fermentum, dolor et consectetur pharetra, est leo rhoncus neque, vel pulvinar augue turpis nec tellus. Curabitur bibendum sem in bibendum ullamcorper. Nulla facilisi. Proin id cursus odio. Sed eu ligula vel arcu bibendum fringilla. Donec hendrerit dapibus quam, eu volutpat sem fringilla id. Integer et elit nec mauris rhoncus vestibulum. Duis auctor nisl eu augue vehicula, eget venenatis purus blandit. Sed facilisis, justo vel sagittis dictum, libero nunc laoreet orci, vel feugiat est elit vel nunc.
      </p>
      
      <div class="post-actions">
        <button class="action-button">Book now</button>
        
      </div>
    </div>
  </div>
  <!-- Add more blog posts here -->
</div>
    
  

  <!-- ADVERTISERS SERVICE CARD -->
<section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="section-header text-center">
        <h2 class="fw-bold fs-1">
          Our
          <span class="b-class-secondary">Advertiser </span>Services
        </h2>
        <p class="sec-icon"><i class="fa-solid fa-gear"></i></p>
      </div>
    </div>
    <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-1 row-cols-md-3 justify-content-center">
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <h3>Tracking Lead</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa-solid fa-arrows-down-to-people"></i>
          </div>
          <h3>Advanced Targeting solution</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa-solid fa-globe"></i>
          </div>
          <h3>Global Reach & Quality Traffic</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa-solid fa-money-check-dollar"></i>
          </div>
          <h3>Flexible pricing models</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa-regular fa-circle-check"></i>
          </div>
          <h3>Advanced optimization technologies & methodologies</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa-solid fa-people-group"></i>
          </div>
          <h3>Dedicated account management team</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ADVERTISERS SERVICE CARD ENDED -->





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


  
</body>

<script>

    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () =>{
      bookbox.style.display = "flex";
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>
</html>