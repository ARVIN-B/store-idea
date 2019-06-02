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

        <link rel="stylesheet" href="panel.css">
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
				<a class="ChangeUser" href="../index.php" title="Change User"></a>
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
            	<a class="ContactUs" href="../contact/ContactUs.php" title="Contact Us"></a>
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
        
        
        <?php
			$user = $_SESSION['username']; 
			$dbc = mysqli_connect('localhost','root','','devil') or die('error connecting to database');
			$query = "SELECT * FROM `idea` WHERE owner = '$user'";
			$results = mysqli_query($dbc,$query);
			while($row = mysqli_fetch_array($results))
			{
				echo "<div class='container'><img src='idea/".$row['pic']."' class='IdeaPic'><p>".$row['name']."</p></br><p>".$row['description']."</p><p class'remove'>-</p></div>";
			}
		?>        
        
        
        <div class="add">
        	<a class="AddItem" href="idea/ideas.php" title="Add Item"></a>
        </div>

        
        
        
    </body>

</html>

