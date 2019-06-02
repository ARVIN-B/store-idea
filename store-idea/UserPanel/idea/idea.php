<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;   charset=utf-8" />
		<title>ایده یاب</title>
	</head>

	<body>
 		<?PHP
			 $name = $_POST['name'];
			 $description = $_POST['description'];
			 session_start();
			 $owner = $_SESSION['username'];

			 $dbc = mysqli_connect('localhost','root','','devil') or die('error connecting to database');

			 $query = "SELECT * FROM `idea` WHERE username = '$username'";
			 $results = mysqli_query($dbc,$query);
			 $row = mysqli_fetch_array($results);
			 
			 if(isset($_POST['submit']))
			 {
			 
				 if($_FILES['file']['size'] > 20000000)
				 {
					 header('location:ideas.php?message=حجم عکس زیاد است');	 
				 }
				 elseif(file_exists("../img".$_FILES['file']['name']))
				 {
					 header('location:ideas.php?message=اسم عکس را تغییر دهید');	 
				 }
				 elseif($_FILES['file']['error'] == 0)
				 {
					 $query = "SELECT * FROM `idea`";
			 		 $results = mysqli_query($dbc,$query);
			 		 $row2 = mysqli_fetch_array($results);

					 if(0)
					 {
					 }
					 else
					 {
						 move_uploaded_file($_FILES['file']['tmp_name'],"img/".$_FILES['file']['name']) or die("عکس آپلود نشد نام عکس را تغییر دهید");
						 $file_adress = "img/".$_FILES['file']['name'];
													 
						 $query = "INSERT INTO `idea` VALUES ('$owner','$file_adress','$name','$description')";
						 mysqli_query($dbc,$query) or die(header('location:ideas.php?message=خطا در ذخیره اطلاعات'));
						 header('location:../UserPanel.php');
					 }
				 }
			 }
		?>
	</body>
</html>