
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
 </head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #Contact {
        background-color: rgb(185, 129, 231);
        transition-duration: 0.4s;
        color: black;
    }
    </style>         
    <link rel="stylesheet" href="contact.css">   
    <link rel="stylesheet" href="Header-Footer.css">  
    <link rel="stylesheet" href="Footer2.css">                                                   
    <body>     
    <div class="bg_image">                                                          
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
              session_start();
              if (isset($_SESSION['email'])){
                echo "<a id='login' href='profile.php'>Profile</a>";
                echo" <a id='signup' href='logout.php'>Log out</a>";
              }  else{
                echo "<a id='login' href='login.php'>Log in</a>";
                echo" <a id='signup' href='signup.php'>Sign up</a>";
              }
            ?>
            </div>
          </div>
          <h3>Contact Form</h3>
          <div id="contact">
          <form action="mailto:alex.kaneki@yahoo.com" method="POST">
              <label for="nume">Full name: </label>
              <br>
              <input type="text" name="nume" id="text">
              <br><br><br>
              <label for="text">Your message here: </label>
              <br>
              <textarea type="textbox" name="text" id="textbox"></textarea>
              <br>
              <input id="submit" type="submit" name="submit" value="Submit">
              </form>
            </div>
            <br>
            <h1>Map</h1>
            <hr>
            <div id="mapcontainter">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.200837362935!2d21.2294211515458!3d45.74711947900274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d84610655bf%3A0xfd169ff24d29f192!2sUniversitatea%20de%20Vest%20din%20Timi%C8%99oara!5e0!3m2!1sro!2sro!4v1652810977164!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

