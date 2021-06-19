<?php
$insert=false;
if(isset($_POST['name'])){


$server = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($server, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
  $sql="INSERT INTO `form`.`frm` (`name`, `phone`, `email`, `message`) VALUES ('$name', '$phone', '$email', '$message');
  ";

if($con->query($sql)==true){
$insert=true;
  }
  else{
  echo "Error: $sql <br> $con->error Query is Not Inserted";
  $not_insert=true;
}
  $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Education</title>
    
    
    <link rel="stylesheet" media="screen and (max-width: 1920px)" href="res1.css">
    <link rel="stylesheet" media="screen and (max-width: 860px)" href="mac.css">
    <link rel="stylesheet" media="screen and (max-width: 416px)" href="phone.css">
    
   
</head>
<body>
    <nav class="navbar background h-nav">

        <ul class="navul v-hid">
            <div class="logo"><img src="graduation1[1].gif" alt="logo"></div>
            <li><a href="#home">Home</a></li>
            <li><a href="#home">About </a></li>
            <li><a href="#home">Contact Us</a></li>
            <li><a href="#home">Service</a></li>
        </ul>
        <div class="rightnav v-hid">
            <input type="text" name="search" id="search">
            <button class="btn">Search</button>
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    
  

    <section class="background firstsection">
        <div class="box-main">
            <div class="firsthalf">
           <p class="textbig">Lorem ipsum dolor sit amet consectetur </p>
           <p class="smalltext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis beatae saepe quo nostrum</p>
          <div class="button">
              <button id="btn1">Subscribe Now</button>
              <button id="btn2">Watch Video</button>
          </div>
            </div>
            <div class="secondhalf">
<img src="graduation1[1].gif" alt="edu">
            </div>
        </div>
    </section>
    <section class="sec">
        <div class="text">
        <p class="textbig1">Lorem ipsum dolor sit amet consectetur</p>
        <p class="smalltext1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi iusto beatae voluptas sed dolores adipisci earum amet rem autem quia provident, minima cum placeat cupiditate porro eius nobis recusandae. Reprehenderit.</p>
    </div>
        <div class="image"><img src="https://source.unsplash.com/900x900/?coding,apple
    " alt="apple">
</div>
    </section>
    <section class="sec-left">
        <div class="text">
        <p class="textbig1">Lorem ipsum dolor sit amet consectetur</p>
        <p class="smalltext1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi iusto beatae voluptas sed dolores adipisci earum amet rem autem quia provident, minima cum placeat cupiditate porro eius nobis recusandae. Reprehenderit.</p>
    </div>
        <div class="image"><img src="https://source.unsplash.com/900x900/?technical,seo
    " alt="apple">
</div>
    </section>
    <section class="sec">
        <div class="text">
        <p class="textbig1">Lorem ipsum dolor sit amet consectetur</p>
        <p class="smalltext1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi iusto beatae voluptas sed dolores adipisci earum amet rem autem quia provident, minima cum placeat cupiditate porro eius nobis recusandae. Reprehenderit.</p>
    </div>
        <div class="image"><img src="https://source.unsplash.com/900x900/?nature,food
    " alt="apple">
</div>
    </section>
    <br>
    <hr>
    <br>
    <br>
    <div class="conti">
    <contact class="con">
        <p id="head">Contact Us</p>

        <?php  
if($insert=true){
        echo "Thanks for Submitmiting Information";
    }
    ?>

    
        <form action="res.php" method="post" class="frm" >
<input type="text" class="frm-input" id="name" name="name" placeholder="Enter Your Name">
<input type="text" class="frm-input" id="phone" name="phone" placeholder="Enter Your Phone">
<input type="text" class="frm-input" id="email" name="email" placeholder="Enter Your Email"> 
<textarea name="message" id="message" cols="5" rows="3">Enter Your Message</textarea>
<button id="btn3">Submit Now</button>
</form>
    </contact>
</div>
<br>
<br>
<br>
<br>
    <footer class="foot">
        <p id=footi><b>Copyright</b> @ 2019-2021 Credit to <a href="https://AllCouponFree.com">AllCouponfree</a></p>
    </footer>
    <script src="res.js"></script>

</body>
</html>

