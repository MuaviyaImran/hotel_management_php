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
    <link rel="stylesheet" href="./css/rooms.css">
    <title>Rooms </title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
    
    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
      /* CSS for styling the paragraph */
      

.ourroom .description{
  width:80%;
  margin:0 auto;
}






#facilities {
    display: flex;
    flex-direction: column;
    gap: 30px;
    padding: 20px;
    color: white;
    width: 90%;
    margin: 0 auto;

}

.facility-item {
  display: flex;
  flex-direction: column; /* Change flex-direction to column */
  width: 100%;
  padding: 20px;
  
  border-radius: 5px;
  background-color: black;
  margin-bottom: 30px;
}

.facility-item img {
  width: 50%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 20px; /* Add margin to create space between image and paragraph */
}

.facility-item h3 {
  margin: 0 0 10px; /* Add margin to create space below h3 */
}

.facility-item p {
  margin: 0;
  font-size: 16px;
}

.list {
  width: 100%;
  margin-top: 20px; /* Add margin to create space between paragraph and list */
}




.list h2 {
  color: #fff;
  font-weight: 700;
  letter-spacing: 1px;
  margin-bottom: 10px;
}
.list ul {
  position: relative;
}
.list ul li {
  position: relative;
  left: 0;
  color: #fce4ec;
  list-style: none;
  margin: 4px 0;
  border-left: 2px solid #f50057;
  transition: 0.5s;
  cursor: pointer;
}
.list ul li:hover {
  left: 10px;
}
.list ul li span {
  position: relative;
  padding: 8px;
  padding-left: 12px;
  display: inline-block;
  z-index: 1;
  transition: 0.5s;
}
.list ul li:hover span {
  color: #111;
}
.list ul li:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #f50057;
  transform: scaleX(0);
  transform-origin: left;
  transition: 0.5s;
}
.list ul li:hover:before {
  transform: scaleX(1);
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
    </style>
</head>

<body>
<?php include 'navbar.php'; ?>

<div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                    <input type="text" name="Name" placeholder="Enter Full name">
                    <input type="email" name="Email" placeholder="Enter Email">

                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput">
						<option value selected >Select your country</option>
                        <?php
							foreach($countries as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';
                            //close your tags!!
							endforeach;
						?>
                    </select>
                    <input type="text" name="Phone" placeholder="Enter Phoneno">
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation information</h4>
                    <select name="RoomType" class="selectinput">
						<option value selected >Type Of Room</option>
                        <option value="Superior Room">SUPERIOR ROOM</option>
                        <option value="Deluxe Room">DELUXE ROOM</option>
						<option value="Guest House">GUEST HOUSE</option>
						<option value="Single Room">SINGLE ROOM</option>
                    </select>
                    <select name="Bed" class="selectinput">
						<option value selected >Bedding Type</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
						<option value="Triple">Triple</option>
                        <option value="Quad">Quad</option>
						<option value="None">None</option>
                    </select>
                    <select name="NoofRoom" class="selectinput">
						<option value selected >No of Room</option>
                        <option value="1">1</option>
                        <!-- <option value="1">2</option>
                        <option value="1">3</option> -->
                    </select>
                    <select name="Meal" class="selectinput">
						<option value selected >Meal</option>
                        <option value="Room only">Room only</option>
                        <option value="Breakfast">Breakfast</option>
						<option value="Half Board">Half Board</option>
						<option value="Full Board">Full Board</option>
					</select>
                    <div class="datesection">
                        <span>
                            <label for="cin"> Check-In</label>
                            <input name="cin" type ="date">
                        </span>
                        <span>
                            <label for="cin"> Check-Out</label>
                            <input name="cout" type ="date">
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>

        <!-- ==== room book php ====-->
        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $Bed = $_POST['Bed'];
                $NoofRoom = $_POST['NoofRoom'];
                $Meal = $_POST['Meal'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == "" || $Email == "" || $Country == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                    $sta = "NotConfirm";
                    $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
                    $result = mysqli_query($conn, $sql);

                    
                        if ($result) {
                            echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                        } else {
                            echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
                        }
                }
            }
            ?>
          </div>

    </div>
          
    

  
    
  <section id="secondsection"> 
    <img src="./image/homeanimatebg.svg">
    <div class="ourroom">
      <div class="description">
      <h1 class="head">Availabale Rooms you can book </h1>
      <p>Welcome to our hotel! We offer a variety of rooms to suit your needs, whether you're traveling solo, as a couple, or with family. Each room is designed with your comfort in mind, featuring modern amenities and stylish decor.</p>
      <p>Welcome to our hotel! We offer a variety of rooms to suit your needs, whether you're traveling solo, as a couple, or with family. Each room is designed with your comfort in mind, featuring modern amenities and stylish decor.</p>
      </div>
      <div class="roomselect">
        <div class="roombox">
          <div class="hotelphoto h1"></div>
          <div class="roomdata">
            <h2>Superior Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
              <i class="fa-solid fa-person-swimming"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h2"></div>
          <div class="roomdata">
            <h2>Delux Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h3"></div>
          <div class="roomdata">
            <h2>Guest Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h4"></div>
          <div class="roomdata">
            <h2>Single Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="facilities">
    <div class="facility-item">
      <h2>Why choose us?</h2>

      <p>Welcome to our hotel! We offer a variety of rooms to suit your needs, whether you're traveling solo, as a couple, or with family. Each room is designed with your comfort in mind, featuring modern amenities and stylish decor.</p>
      <div class="list">
        
        <ul>
          <li><span>Comfortable beds with high-quality linens</span></li>
          <li><span>Flat-screen TVs with cable channels</span></li>
          <li><span>Free high-speed Wi-Fi</span></li>
          <li><span>Restaurant serving delicious meals</span></li>
          <li><span>Conference rooms for business meetings</span></li>
          <li><span>Concierge services</span></li>
        </ul>
      </div>
    </div>
    
    
  </section>
  
  <!--div class="room-description">
    <h2>Our Rooms and Facilities</h2>
    <p>Welcome to our hotel! We offer a variety of rooms to suit your needs, whether you're traveling solo, as a couple, or with family. Each room is designed with your comfort in mind, featuring modern amenities and stylish decor.</p>
    <p>Our facilities include:</p>
    <ul>
      <li>Comfortable beds with high-quality linens</li>
      <li>Flat-screen TVs with cable channels</li>
      <li>Free high-speed Wi-Fi</li>
      <li>En-suite bathrooms with luxury toiletries</li>
      <li>In-room coffee and tea making facilities</li>
      <li>24-hour room service</li>
      <li>Fitness center</li>
      <li>Swimming pool</li>
      <li>Restaurant serving delicious meals</li>
      <li>Conference rooms for business meetings</li>
      <li>Concierge services</li>
    </ul>
    <p>Experience comfort and convenience at our hotel. Book your stay with us today!</p>
  </div-->

  
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