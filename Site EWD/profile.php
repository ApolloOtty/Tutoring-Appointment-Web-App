<!DOCTYPE html>
<html>
  <head>
  <style>
        .active {
        background-color: #04AA6D;
        transition-duration: 0.4s;
        color: black;
    }
    </style>
    <meta charset="UTF-8">
 </head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Header-Footer.css">                  
    <link rel="stylesheet" href="sidenav.css">                                       
    <body>     
        <div id="content-wrap">                                             
        <div class="header">
        <a href="home.php" class="logo">
              <img id="logo" alt="Logo" src="Apollo2.png">
            </a>
            <div class="header-right">
              <a id="Home" href="home.php">Home</a>
              <a id="Contact" href="contact.php">Contact</a>
            </div>
            <div class="loginsignup">
                <a id='login' href='profile.php'>Profile</a>
                <a id='signup' href='logout.php'>Log out</a>
            </div>
          </div>
          
        <div class="sidebar2">
        </div>
        <div class="sidebar">
          <br><br>
          <a class="active" href="profile.php">Appointments</a>
          <a href="news.html">News</a>
        </div>

<div class="content2">
  <table>
<?php
$nr=0;
$nr2=0;
session_start();
include("connection.php");
$query = "SELECT * FROM appointment";
$results=mysqli_query($con, $query);
$row_count=mysqli_num_rows($results);
$row_users = mysqli_fetch_array($results);
do{
  if($row_users[0]==$_SESSION['email']){
    $nr=$nr+1;
    if($nr==1){
      echo "<h1>Your appointments: <br></h1>";
      echo "<tr><th>Language</th><th>Subject</th><th>Day</th><th>Time</th></tr>";
    }
  //output a row here
  echo "<tr><td>".($row_users[1]) . "</td><td>" . ($row_users[2]) ."</td><td>" . ($row_users[3]) . "</td><td>" . ($row_users[4]) . "</tr></td>";
}
}while($row_users = mysqli_fetch_array($results));
if($nr==0){
  echo "<h1>You don't have any appointments!</h1>";
}


?>
        </table>
        </div>   
                                  
    </body>
</html>