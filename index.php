<?php
	session_start();
	require 'includes/databases.php';
	if(isset($_SESSION['username']))
    {
        header('Location:redirect/index1.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">\

    <title>Signin Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
		<?php
	      if(isset($_GET['logout']))
		  {
			  session_destroy();
			  header('Location:index.php');
		  }
		?>
    <form class="form-signin" method = "post">
      <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8d/National_Board_of_Accreditation.svg/1200px-National_Board_of_Accreditation.svg.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <input name="login" class="btn btn-lg btn-primary btn-block" type="submit" value="Log in" id = "login"</button>
	  
      <p class="mt-5 mb-3 text-muted">&copy; 29/08/2018<br> Made by <a href="https://github.com/RV-Tech-Projects" target="_blank">RV Tech</a></p>
    </form>
	
	<?php
		if(isset($_POST["login"]))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = "select * from users where email = '$username' and hashedPassword = '$password'";
			
			$query_run = mysqli_query($con, $query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				$_SESSION['username'] = $username;
				header('location:redirect/index1.php');
			}
			else
			{
				echo '<script type="text/javascript"> alert("Invalid credentials...") </script>';
			}
		}
	?>
  </body>
</html>
