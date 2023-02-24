
<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password))
		{

			//read from database
			$query = "SELECT * from user where email = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_array($result);
					
					if($user_data[1] === $password)
					{

						$_SESSION['email'] = $user_data['email'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo "<script type='text/javascript'>alert('Wrong username or password!'); location.href='login.php'</script>";
		}else
		{
			echo "<script type='text/javascript'>alert('Wrong username or password!'); location.href='login.php'</script>";
		}
	}

?>


