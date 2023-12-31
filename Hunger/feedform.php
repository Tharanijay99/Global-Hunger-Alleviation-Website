<!-- DB connection and insert data -->

<?php

$conn = mysqli_connect('localhost','root','','newdb') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);
   $stars = $_POST['stars'];


   $insert = mysqli_query($conn, "INSERT INTO `feedform`(name, feedback, stars) VALUES('$name','$feedback','$stars')") or die('query failed');

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

    <header class="header fixed-top" >

        <div class="container">
        
           <div class="row align-items-center justify-content-between">
        
           <a href="#home" class="logo">The Hunger <span>Project</span></a>
        
        
              <a href="index.php" class="link-btn">Back to Home</a>
        
              <div id="menu-btn" class="fas fa-bars"></div>
           </div>
        
        </div>
        
        </header>
        <section class="feed">
        
      <!-- Submit Feedback form with validations -->
        
        <section class="feedback" >
        <h1 class="heading" id="f1">Leave your Feedback</h1>
         <div class="box-container container">
        <div class="box">
               
               <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
               <?php 
                     if(isset($message)){
                        foreach($message as $message){
                           echo '<p class="message">'.$message.'</p>';
                        }
                     }
               ?>
                  <span>Your Name:</span>
                  <input type="text" name="name" pattern="[^0-9]*" placeholder="Enter Your Name" class="box" title="Name can only contain Letters!" required>
                  <span>Your Feedback:</span>
                  <textarea name="feedback" placeholder="Enter Your feedback here" class="box"  rows="5" required></textarea>
                  <span>Enter your star rating:</span>
                  <input type="number" name="stars"  min="1" max="5" placeholder="Enter star rating" class="box">
                  <input type="submit" value="Submit feedback" name="submit" class="link-btn">
            
               </form>
               </div>
            
                    
                    <div class="box">
                    <img src="images/fooddonation.jpg" alt="" width="600px" height="500px"> 
                    </div>
                  </div>
                    </section>
                  </section>
   <!-- Footer -->
            
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
         <p>20/11, Carron Place, Dehiwela. <br>Sri Lanka</p>
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