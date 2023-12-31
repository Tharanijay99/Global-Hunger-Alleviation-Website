<!-- DB Connect and Insert data -->

<?php

$conn = mysqli_connect('localhost','root','','newdb') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $reference = mysqli_real_escape_string($conn, $_POST['reference']);
   $date = $_POST['date'];


   $insert = mysqli_query($conn, "INSERT INTO `sub_form`(name, email, number, reference, date) VALUES('$name','$email','$number','$reference','$date')") or die('query failed');

   if($insert){
      $message[] = 'Submission was successfully!';
   }else{
      $message[] = 'Submission failed';
   }

   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hunger Project</title>
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- bootstrap cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
</head>

<body>
<header class="header fixed-top">

 <!-- Navigation Bar -->

<div class="container">

   <div class="row align-items-center justify-content-between">

      <a href="#home" class="logo">The Hunger <span>Project</span></a>

      <nav class="nav">
         <a href="#home">Home</a>
         <a href="#about">About</a>
         <a href="#services">Services</a>
         <a href="#process">Process</a>
         <a href="#feedback">Feedback</a>
         <a href="#donations">Donations</a>
      </nav>

      <a href="login/index2.php" class="link-btn">Admin Login</a>

      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

</div>

</header>

<!-- Home page -->

<section class="home" id="home">
   <div class="container">
      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Rise Against Hunger</h3>
            <p> In 2019, 1 in 8 of our national survey respondents was experiencing food insecurity.
               The COVID-19 pandemic compounded the issue, causing that number to rise to 1 in 5, shown by results released in 2021.
               Now, our research released in 2022 shows that 1 in 6 military families are food insecure. </p>

               <a href="#donations" class="link-btn">Make Donations</a>
         </div>
      </div>  
   </div>
</section>

<!-- About Us section -->

<section class="about" id="about">
<h1 class="heading">About Us</h1>
   <div class="container">
      <div class="row">

         <div class="col-md-6 image">
            <img src="images/image2.jpg" alt="" class="w-100 mb-5 mb-md-0">
         </div>

         <div class="col-md-6 content">
            <h3>Lets end world hunger.</h3>
            <p>Rather than making small contributions at the periphery, The Hunger Project works at the heart of the problem building self-reliance
               at the grassroots level, empowering women as key change agents, and forging effective partnerships with local government. </p>
            <p>We believe that every person has the right to nutritious food regardless of their economic or political situation. This belief drives us to provide hunger 
               relief to those in need around the world.</p>
               <p>Let’s work together to provide the life-sustaining help they need.  <br>
               Bank Name    : Commercial Bank of Ceylon PLC <br>
               Bank Account : 2590026974</p>
         </div>
      </div>
   </div>
</section>

<!-- Serrvices section -->

<section class="services" id="services">
   <h1 class="heading">Our Services</h1> 
   <div class="box-container container">
      
      <div class="box">
         <img src="images/icon1.png" alt="">
         <h3>Cooked Food</h3>
         <p>Our company reaches to those remote areas to provide freshly prepared meals for people in need.</p>
      </div>

      <div class="box">
         <img src="images/icon2.png" alt="">
         <h3>Dry Rations</h3>
         <p>We reach to those remote areas to distribute the dry food to the needy people.</p>
      </div>

      <div class="box">
         <img src="images/icon3.png" alt="">
         <h3>Money</h3>
         <p>Our company allows donors to donate money to people in poverty with no strings attached.</p>
      </div>

      <div class="box">
         <img src="images/icon4.png" alt="">
         <h3>Health Camps</h3>
         <p> nutrition programmes for people who are at risk of protein-energy malnutrition.</p>
      </div>

      <div class="box">
         <img src="images/icon5.png" alt="">
         <h3>Plants</h3>
         <p>Providing plants to improve their personal food security by being self-sufficient. </p>
      </div>

      <div class="box">
         <img src="images/icon6.png" alt="">
         <h3>Guidance</h3>
         <p>We give people the necessary advices and guidance to live healthy and wholesome.</p>
      </div>
   </div>

</section> 

<!-- Process of the organization -->

<section class="process" id="process">
   <h1 class="heading">Work Process</h1>
   <div class="cont">
         <img src="images/processimg.JPG" alt="">      
   </div>
</section>

<!-- Reviews Section  -->

<section class="reviews" id="feedback">
   <h1 class="heading">Feedback</h1>
   <div class="box-container container">

      <div class="box">
         <img src="images/man1.jpg" alt="">
         <p>I've been contributing Food For the Poor for over 20 years. We love to make donations to charities. 
            I must say, Keep up the great work. I highly recommend this charity.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
                
            </div>
            <h3>Chathuranga Abeysingha</h3>
            <span>Satisefied Donor</span>
      </div>

      <div class="box">
         <img src="images/man2.jpg" alt="">
         <p>I believe and trust this charity. I've donated to them for many years but off and on. God bless the people at Food For the Poor.
             I have seen and experienced their generosity. For many years they have provided food to feed the poor and needy in a poor community.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
                
            </div>
            <h3>Ayesha Fernando</h3>
            <span>Satisefied Donor</span>
      </div>

      <div class="box">
         <img src="images/man3.jpg" alt="">
         <p>I have been giving to this organization for over 2 years. But this charity sends inappropriate goods with used donations to poor people.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Monika Almeida</h3>
            <span>Unsatisefied Donor</span>
      </div>

   </div>

   <!-- Link to Submit feedback page -->

   <div class="f">
   <a href="feedform.php" name="submit" class="link-btn" id="feedback"> Leave your feedback</a>
</div>
</section>

<!-- Donation Submission Info form -->

<section class="donations" id="donations">

   <h1 class="heading">Submit Donation Info</h1>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name = "form1">
   <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
   ?>
      <span>Your Name:</span>
      <input type="text" name="name" pattern="[^0-9]*" placeholder="Enter Your Name" class="box" title="Name can only contain Letters!" required>
      <span>Your E-Mail:</span>
      <input type="Email" name="email" placeholder="Enter Your E-mail" class="box" required>
      <span>Your Contact Number:</span>
      <input type="tel" name="number" placeholder="Enter Your Mobile Number" class="box" pattern="07[1,2,5,6,7,8][0-9]{7}" title="Invalid mobile number!" maxlength="10" required>
      <span id="messages" style="color:red;"></span>
      <span>Your Deposit Reference Number:</span>
      <input type="text" name="reference" placeholder="Enter Your deposit reference number" class="box" required>
      <span>Your Depositted Date:</span>
      <input type="date" name="date" class="box" required>
      <input type="submit" value="Submit Donation Info" name="submit" class="link-btn">

   </form>
</section>

<!-- footer -->

<section class="footer">
   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
            <h3>Phone Number</h3>
            <p>0713303042</p>
            <p>0112955655</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Our Address</h3>
         <p>20/11, Carron Place, Dehiwela.<br> Sri Lanka</p>
      </div>
      
      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>Opening Hours</h3>
         <p>09.00 AM to 04.00 PM</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
            <h3>E-Mail Address</h3>
            <p>thehungerproject@gmail.com</p>
            <p>thpadmin@gmail.com</p>
      </div>

   </div>

</section>


<script src="js/javascript.js"></script>

</body>
</html>



