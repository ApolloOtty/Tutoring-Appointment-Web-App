<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
 </head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #Home {
        background-color: rgb(185, 129, 231);
        transition-duration: 0.4s;
        color: black;
    }
    </style>
    <link rel="stylesheet" href="Background.css">  
    <link rel="stylesheet" href="Header-Footer.css">             
    <link rel="stylesheet" href="Buton_Invat.css">   
    <link rel="stylesheet" href="home.css">                                                                       
    <body>     
      <div class="content">  
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
              <?php
              session_start();
              if (isset($_SESSION['email'])){
                echo "<a id='login' href='profile.php'>Profile</a>";
                echo" <a id='signup' href='logout.php'>Log out</a>";
              }  else{
                echo "<a id='login' href='login.php'>Log in</a>";
                echo" <a  id='signup' href='signup.php'>Sign up</a>";
              }
            ?>
            </div>
          </div>
          <table class="tabel" style= "float: right;">
              <td><img class="bg" src="bg.png">
                <div class="titlu">
                <?php
              if (isset($_SESSION['email'])){
                $nume_nou="";
                $nume=$_SESSION['email'];
                $array = str_split($nume);
                foreach ($array as $char){
                  if ($char=='.')
                    break;
                else{
                  $nume_nou = $nume_nou . $char;
                }
              }
                echo "<p id='ceau'><b>No ceau, </b><br>
                 <b>" . ucfirst($nume_nou) . "</b></p>";
              }else{
                echo "<p><b>Online tutoring </b><br>
                for <b>Computer Science</b></p>";
              }
            ?></div></td>
          </table>
          <div class="buton">
          <a href="invat.php"><button class="incepe">I want to learn!</button></a>
          </div>    
              <table class="table2">
                <tr>
                  <th id="th2">Levels of teaching</th>
                  <th id="th2">Subjects</th>
                </tr>
                <tr>
                  <td id="td2"><br>- Middle school<br>- Highschool<br>- College</td>
                  <td id="td2"><br>- Algorithms and Data Structures<br>- Programming</td>
                </tr>
              </table>
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
