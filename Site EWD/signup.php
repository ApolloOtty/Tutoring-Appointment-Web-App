
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="Header-Footer.css">           
   <link rel="stylesheet" href="Background.css">     
   <link rel="stylesheet" href="signup.css">   
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
    
        <div class="login_box">
          <p id="text">Sign up</p>
          <p id="ifempty"></p>
          <form action="signup_csv.php" method="POST">
        <div class="username">
          <img id="user" src="user.png">
          <input type="username" class="username_input" name="username_input" placeholder="Email" onchange="validate()">
        </div>
        <p id="ifmailwrong"></p>
        <div class="password">
          <img id="password_img" src="password.png">
          <input type="password" class="login_input" name="password" placeholder="Password" onchange="validate()">
        </div>
        <p id="ifpasswordwrong"></p>
        <div class="password_verify">
          <img id="password_img2" src="password.png">
          <input type="password" class="login_input_verify" name="password_verif" placeholder="Confirm password" onchange="validate()">
        </div>
        <p id="ifverifywrong"></p>
        <input type="submit" class="button login__submit" value="Sign up" disabled>				
        </form>
        <p id="noacc">Already have an account? <a href="login.php" id="signuplink">Log in</a></p>
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

