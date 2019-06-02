<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;   charset=utf-8" />
		<title>ایده یاب</title>
	</head>

	<body>
		<?php
			$msg = $_POST['comment'];
			$subject = 'comments';
			$to = "arvin.k.beheshti@gmail.com";
			
			session_start();
            $username = $_SESSION['username'];

			$dbc = mysqli_connect('localhost','root','','devil') or die('error connecting to database');
			$query = "SELECT * FROM ver where username = '$username'";
			$results = mysqli_query($dbc,$query);
			$row = mysqli_fetch_array($results);
			$from = $row['email'];
			echo "$from";
			
			mail($to,$subject,$msg,'From:'.$from) or die('nashod');

			//header('location:../index.php');

		?>
	</body>
</html>