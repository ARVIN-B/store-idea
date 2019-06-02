<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;   charset=utf-8" />
        <title>ایده یاب</title>
    </head>
    
    <body>
     
		<?php
			$username = $_POST['username'];
			$password = $_POST['password'];
			echo $username;
			
			
			$dbc = mysqli_connect('localhost','root','','devil') or die('error connecting to database');
			$query = "SELECT * FROM ver where username = '$username'";
			$results = mysqli_query($dbc,$query);
			$row = mysqli_fetch_array($results);
			if(!isset($row['password']))
			{
				header('location:index.php?message=نام کاربری یا پسورد اشتباه است');
			}
			elseif($password!=$row['password'])
			{
				header('location:index.php?message=نام کاربری یا پسورد اشتباه است');
			}
			else
			{
				header('location:UserPanel/UserPanel.php');
				session_start();
				$_SESSION['username'] = $_POST['username'];
			}
			 
			mysqli_close($dbc);
        ?>
     
      
    </body>
</html>
