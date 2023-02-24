<?php
    include("connection.php");
    include("functions.php");
    
    $user_name = $_POST['username_input'];
    $username=$_POST['username_input'];
    $pass=$_POST['password'];
    $query = "SELECT * from user where email = '$user_name' limit 1";
		$result = mysqli_query($con, $query);
    if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['email'] === $user_name)
					{
            echo "<script type='text/javascript'>alert('An account with this email is already in use!'); location.href='signup.php'</script>";
					}
				}else{

        $sql = "INSERT INTO user (email, authentication_string) VALUES ('$user_name','$pass')";
        mysqli_query($con, $sql);

        $array=array(2);
        for($i=0; $i<1; $i++){
            $array[$i]=$_POST['username_input'];
            $array[$i+1]=$_POST['password'];
        }
    $file=fopen("user.csv", "a");
    fputcsv($file, $array);
    fclose($file);
      }
    }
?>

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
    <link rel="stylesheet" href="Footer2.css">      
    <link rel="stylesheet" href="signup.css">                                                  
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
          <div id="success">
        <h1>Account succesfully created!
          <br>
          <a id="loginacc" href="login.php">Log in</a>
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
        <script src="validate_login.js"></script>
    </body>
</html>
