<?php
session_start();

include("connection.php");
include("functions.php");

$user_data=check_login($con);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
 </head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="form_page.js"></script>
    <link rel="stylesheet" href="form_page.css">    
    <link rel="stylesheet" href="Header-Footer.css">  
    <link rel="stylesheet" href="Footer2.css">                                                 
    <body>                                                           
        <div class="header">
            <a href="home.php" class="logo">
              <img id="logo" alt="Logo" src="Apollo2.png">
            </a>
            <div class="header-right">
            <a id="Home" href="home.php">Home</a>
              <a id="Contact" href="contact.php">Contact</a>
            </div>
            <div class="loginsignup">
            <?php
              if (isset($_SESSION['email'])){
                echo "<a id='login' href='profile.php'>Profile</a>";
                echo" <a id='signup' href='logout.php'>Log out</a>";
              }  else{
                echo "<a id='login href='login.php'>Log in</a>";
                echo" <a id='signup' href='signup.php'>Sign up</a>";
              }
            ?>
            </div>
          </div>

          <div class="bg_image">
          
          <div id="form_limb">
          <label id="label_limb" for="limbaj">Pick a programming language:</label>
          <br>
          <form action="appointment.php" method="POST">
            <div id="dropdown">
              <select class="dropdown_limb" name="limbaj">
                  <option value="C/C++">C/C++</option>
                  <option value="Python">Python</option>
                  <option value="Java">Java</option>
                  <option value=".NET">.NET</option>
              </select>
            </div>
            <br><br>
            <label for="subiect">Pick a subject: </label>
            <br><br>
            <div id="dropdown_subj">
            <select class="dropdown_subj" name="subiect">
              <option value="Programming">Programming</option>
              <option value="ADS">Algorithms and Data Structures</option>
            </select>
            </div>
            <br>
            <br>
        <label for="day">Pick a day: </label>
        <div id="dropdown_day">
          <select class="dropdown_day" name="day">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
          </select>
        </div>
        <br><br>
        <label for="time">Pick a time: </label>
        <div id="dropdown_time">
          <select class="dropdown_time" name="time">
            <option value="9:00">9:00</option>
            <option value="11:00">11:00</option>
            <option value="13:00">13:00</option>
            <option value="15:00">15:00</option>
            <option value="17:00">17:00</option>
          </select>
        </div>
        <input type="submit" class="urmatorul_limb" value="Next">		
          </form>
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
    </body>
</html>