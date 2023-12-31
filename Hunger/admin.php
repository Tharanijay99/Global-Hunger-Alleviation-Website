<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- bootstrap cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">


</head>
<body>
 
<header class="header fixed-top">

<div class="container">

   <div class="row align-items-center justify-content-between">

      <a href="#home" class="logo">The Hunger <span>Project</span></a>

      <a href="login/register.php" class="link-btn">Admin Registeration</a>
      

      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

</div>
</header>
<!-- Admin View data form -->

<section class="admin">
    <div class="container">
        <div class="row align-items-center">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Contact Number</th>
                    <th>Deposit Reference Number</th>
                    <th>Date Depositted</th>
                </tr>

                <!-- Get data from DB -->

                <?php
                $conn = mysqli_connect("localhost", "root", "", "newdb");
                if ($conn-> connect_error){
                    die("connection failed:". $conn-> connect_error);
                }
                $sql ="select * from sub_form";
                $result = $conn-> query($sql);

                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["id"]. "</td><td>". $row["name"]. "</td><td>". $row["email"]. "</td><td>". $row["number"]. "</td><td>". $row["reference"]. "</td><td>". $row["date"]. "</td></tr>";
                    }
                    echo "</table>";
                }else{
                    echo "0 result";
                } 
                $conn-> close();
                ?>
            </table>
        </div>
    </div> 

<!-- Logout -->

<div class="container">
    <div class="s">
    <p>
        <a href="login/index2.php" class="link-btn" style="background-color: #be3225; position: relative; float: right;"> Logout</a>
    </p>
    </div>
</div>

<!-- Footer -->

</section>
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

</body>
</html>