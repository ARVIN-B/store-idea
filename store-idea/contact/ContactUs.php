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

        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="../style.css">

</head>

    <body>

        <div class="header">
        	<p class="ide_yab">
                <a href="../main/index.php" class="ide">ide-yab.com</a>
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
			
                		echo "<img class='PersonPic' src='$src'>";
                	?>
				</p>
            </div>
        	<div class="piece">
				<a class="UserPanel" href="../userpanel/UserPanel.php" title="User Panel"></a>
                <p class="info1">
					<?php
                        $session = $_SESSION['username'];
						echo "$session";
                    ?>
                </p>
            </div>
        	<div class="piece">
				<a class="ChangeInfo" href="../registration/SginUp.php" title="Change Info"></a>
            </div>
        	<div class="piece">
            	<a class="AboutUs" href="../about/AboutUs.php" title="About Us"></a>
            </div>
        	<div class="piece">
            	<a class="Main" href="../main/index.php" title="Main Page"></a>
            </div>
            <div class="piece">
            	<a class="LogOut" href="../index.php" title="Log Out"></a>
            </div>
        </div>
        <div>
            <form action="contact.php" method="post" enctype="multipart/form-data">
            
                <p class="text">
                    <span>ممنون میشیم اگه پیشنهادات و انتقادات خود را به ما اطلاع دهید</span></br></br>
                </p>
            
            <textarea name="comment" placeholder="انتقادات و پیشنهادات" required rows="10" cols="25"></textarea>
            
            <button name="submit" type="submit">ارسال ایمیل</button> 	 

            </form>



        </div>
        
    </body>

</html>
