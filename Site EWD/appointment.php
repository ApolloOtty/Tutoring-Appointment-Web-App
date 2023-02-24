<?php
session_start();
include("connection.php");

$name=$_SESSION['email'];
$lang=$_POST['limbaj'];
$subj=$_POST['subiect'];
$day=$_POST['day'];
$time=$_POST['time'];



$user_name=$_SESSION['email'];
$query = "SELECT * from appointment where Name = '$user_name' limit 1";
$result = mysqli_query($con, $query);

if($result)
  {
    if($result && mysqli_num_rows($result) > 0)
    {

      $user_data = mysqli_fetch_assoc($result);
      
      if($user_data['Name'] === $name && $user_data['Language']==$lang && $user_data['Subject']==$subj && $user_data['Day']==$day && $user_data['Time']==$time)
      {
        echo "<script type='text/javascript'>alert('You already have an appointment with the same data!'); location.href='invat.php'</script>";
      }else{
        $sql = "INSERT INTO appointment (Name, Language, Subject, Day, Time) VALUES ('$name', '$lang', '$subj', '$day', '$time')";
        mysqli_query($con, $sql);
      }
    }else{
      $sql = "INSERT INTO appointment (Name, Language, Subject, Day, Time) VALUES ('$name', '$lang', '$subj', '$day', '$time')";
    mysqli_query($con, $sql); 
    }
  }

        $array=array(5);
        for($i=0; $i<1; $i++){
            $array[$i]=$_SESSION['email'];
            $array[$i+1]=$_POST['limbaj'];
            $array[$i+2]=$_POST['subiect'];
            $array[$i+3]=$_POST['day'];
            $array[$i+4]=$_POST['time'];
        }
    $file=fopen("appointment.csv", "a");
    fputcsv($file, $array);
    fclose($file);


?>




<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <?php header('Content-Type: text/html; charset=utf-8'); ?>
</head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #signup {
        transition-duration: 0.4s;
        color: black;
    }
    </style>
   <link rel="stylesheet" href="Header-Footer.css">           
   <link rel="stylesheet" href="Background.css">     
   <link rel="stylesheet" href="signup.css">   
   <link rel="stylesheet" href="Footer2.css">                                                    
   <body>    
    <div class="bg_image">                     
      <div class="header">
          <a href="home.html" class="logo">
            <img id="logo" alt="Logo" src="Apollo2.png">
          </a>
          <div class="header-right">
            <a id="Home" href="home.php">Home</a>
            <a id="Contact" href="contact.html">Contact</a>
            <a id="About" href="about.html">About</a>
          </div>
          <div class="loginsignup">
               <a id='login' href='profile.php'>Profile</a>
               <a id='signup' href='logout.php'>Log out</a>
          </div>
        </div>
        <div id="success">
        <h1>Appointment successfully created!
          <br>
          <a id="loginacc" href="profile.php">See it here</a>
        </h1>
        </div>
        <footer class="footer">
            <p id="nume">© Diaconu Mihai Alexandru
              <br>
              <br>
              <a href="https://www.instagram.com/fmi_uvt/" target="_blank">
                <img id="insta" alt="instagram" src="instagram-icon.png">
              </a>
              ㅤㅤ
              <a href="https://www.facebook.com/fmi.uvt" target="_blank">
                <img id="facebook" alt="facebook" src="facebook.png">
              </a>
            </p>
            <br>
            <div id="contact1">
              <p id="contact2">Contact</p>
              <p id="mail">Email : mihai.diaconu02@e-uvt.ro</p>
            </div>
          </footer>
      </div>   
      <script src="validate_signup.js"></script>
  </body>
</html>

