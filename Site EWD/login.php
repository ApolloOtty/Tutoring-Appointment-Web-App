<!DOCTYPE html>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #login {
        background-color: rgb(185, 129, 231);
        transition-duration: 0.4s;
        color: black;
    }
    </style>
    <script src="validate_login.js"></script>
    <link rel="stylesheet" href="Header-Footer.css">           
    <link rel="stylesheet" href="Background.css">  
    <link rel="stylesheet" href="login.css">      
    <link rel="stylesheet" href="Footer2.css">                                                  
    <body>    
      <div class="bg_image">  
        <video autoplay muted loop id="myVideo">
  <source src="videowall.mp4" type="video/mp4">
</video>                    
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
          <form action="autentificare.php" method="POST">
          <div class="login_box">
            <p id="text">Log in</p>
            <p id="ifempty"></p>
          <div class="username">
            <img id="user" src="user.png">
            <input type="username" class="username_input" placeholder="Email" onchange="validate()" name="username">
          </div>
          <p id="ifmailwrong"></p>
          <div class="password">
            <img id="password_img" src="password.png">
            <input type="password" class="login_input" onchange="validate()" placeholder="Password" name="password">
          </div>
          <input class="button login__submit" type="submit" value="Log in" disabled>			
         </form>
          <p id="noacc">Don't have an account? <a href="signup.php" id="signuplink">Sign up</a></p>
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
        <script src="validate_login.js"></script>
    </body>
</html>

