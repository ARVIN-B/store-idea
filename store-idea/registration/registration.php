<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;   charset=utf-8" />
		<title>ایده یاب</title>
	</head>

	<body>
 		<?PHP
			 $name = $_POST['name'];
			 $email = $_POST['email'];
			 $username = $_POST['username'];
			 $password = $_POST['password'];
			 $BirthYear = $_POST['BirthYear'];
			 $BirthMonth = $_POST['BirthMonth'];
			 $BirthDay = $_POST['BirthDay'];
			 $gender = $_POST['gender'];			 
			 $phone = $_POST['phone'];
			 
			 session_start();
			 
			 $dbc = mysqli_connect('localhost','root','','devil') or die('error connecting to database');
			 
			 if($password == $_POST['repassword'])
			 {
				 $query = "SELECT * FROM `ver` WHERE username = '$username'";
				 $results = mysqli_query($dbc,$query);
				 $row = mysqli_fetch_array($results);
				 if(isset($_POST['submit']))
				 {
					 if($_FILES['file']['size'] > 20000000)
					 {
						 header('location:sginup.php?message=حجم عکس زیاد است');	 
					 }
					 elseif(file_exists("../img/UserPic/".$_FILES['file']['name']))
					 {
						 header('location:sginup.php?message=اسم عکس را تغییر دهید');	 
					 }
					 elseif($_FILES['file']['error'] == 0)
					 {
						 if(!isset($_SESSION['username']))
						 {
							 if(!isset($row['username']))
							 {
								 $_SESSION['username'] = $_POST['username'];
									 
								 move_uploaded_file($_FILES['file']['tmp_name'],"../img/UserPic/".$_FILES['file']['name']) or die("عکس آپلود نشد نام عکس را تغییر دهید");
								 $file_adress = "../img/UserPic/".$_FILES['file']['name'];
										 
								 $query = "INSERT INTO `ver` VALUES ('$name','$email','$username','$password',$BirthYear,$BirthMonth,$BirthDay,'$gender','$phone','$file_adress')";
								 mysqli_query($dbc,$query) or die(header('location:sginup.php?message=خطا در ذخیره اطلاعات'));
								 header('location:../UserPanel/UserPanel.php');
									 
							 }
							 else
							 {
								 header('location:sginup.php?message=نام کاربری قبلا انتخاب شده است');
							 }
						 }
						 elseif(isset($_SESSION['username']))
						 {
							 $_SESSION['username'] = $_POST['username'];
							 
							 move_uploaded_file($_FILES['file']['tmp_name'],"../img/UserPic/".$_FILES['file']['name']) or die("عکس آپلود نشد نام عکس را تغییر دهید");
							 $file_adress = "../img/UserPic/".$_FILES['file']['name'];
								 
							 $query = "UPDATE `ver` SET name='$name',email='$email', username='$username', password='$password', birthyear=$BirthYear, birthmonth=$BirthMonth, birthday=$BirthDay, sex='$gender', tell='$phone', image='$file_adress' WHERE username='$username'";
							 mysqli_query($dbc,$query) or die(header('location:sginup.php?message=خطا در ذخیره اطلاعات'));
							 header('location:../UserPanel/UserPanel.php');
						 }
					 }
				 }
			 }
			 else
			 {
				 header('location:sginup.php?message=رمز ها یکسان نیستند');
			 }
			 
			 mysqli_close($dbc);
		?>
  
	</body>
</html>
