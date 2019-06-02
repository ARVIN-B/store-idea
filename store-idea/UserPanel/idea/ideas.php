<html>
	<?php
		session_start();
		if(!isset($_SESSION['username']))
		{
			header('location:../index.php?message=لطفا ابتدا وارد شوید');
		}
	?>
	<head>
        <meta charset="utf-8">
        <title>پنل کاربری</title>
        <meta name="author" content="ARVIN">

        <link rel="stylesheet" href="idea.css">
        <link rel="stylesheet" href="../../style.css">

	</head>

    <body>

        <div class="header">
        	<p class="ide_yab">
                <a href="../../main/index.php" class="ide">ide-yab.com</a>
            </p>
        </div>
        <div class="leftside">
        	<div class="piece1">
            	<p class="info">
                	<?php
						$username = $_SESSION['username'];
						$dbc = mysqli_connect('localhost','root','','devil') or die('error connecting to database');
						$query = "SELECT * FROM ver where username = '$username'";
						$results = mysqli_query($dbc,$query);
						$row = mysqli_fetch_array($results);
						$src = $row['image'];
			
                		echo "<img class='PersonPic' src='../$src'>";
                	?>
				</p>
            </div>
        	<div class="piece">
				<a class="UserPanel" href="../../userpanel/UserPanel.php" title="User Panel"></a>
                <p class="info1">
					<?php
                        $session = $_SESSION['username'];
						echo "$session";
                    ?>
                </p>
            </div>
        	<div class="piece">
				<a class="ChangeInfo" href="../../registration/SginUp.php" title="Change Info"></a>
            </div>
        	<div class="piece">
            	<a class="ContactUs" href="../../contact/ContactUs.php" title="Contact Us"></a>
            </div>
        	<div class="piece">
            	<a class="AboutUs" href="../../about/AboutUs.php" title="About Us"></a>
            </div>
        	<div class="piece">
            	<a class="Main" href="../../main/index.php" title="Main Page"></a>
            </div>
            <div class="piece">
            	<a class="LogOut" href="../../index.php" title="Log Out"></a>
            </div>
        </div>
        
        <div>
    		<form action="idea.php" method="post" enctype="multipart/form-data">
            	<div>
            		<p class="contact"><label class="file" for="file">: عکس ایده خود را وارد کنید</label></p>
                   	<input id="file" class="file" name="file" accept="image/jpeg" required type="file">
             	</div>
                
			<input name="name" placeholder="نام ایده" required type="text">
            
            <textarea name="description" placeholder="توضیحات" required rows="10" cols="25"></textarea>

            <div class="message">
            	<?php
					if(isset($_GET['message'])){
						echo $_GET['message'];}
				?>
            </div>


            <button name="submit" type="submit">ذخیره شود</button> 	 

            </form>
        </div> 
                    

    
	</body>
</html>