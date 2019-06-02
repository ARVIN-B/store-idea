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

        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="../style.css">

</head>

    <body>

        <div class="header">
            <p class="top">
            	<form class="form" action="index.php" method="post">
                	<input class="Isearch" type="text" name="search" placeholder="search">
                	<button class="Bsearch" type="submit"></button>
				</form>
            </p>
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
            	<a class="ContactUs" href="../contact/ContactUs.php" title="Contact Us"></a>
            </div>
        	<div class="piece">
            	<a class="AboutUs" href="../about/AboutUs.php" title="About Us"></a>
            </div>
            <div class="piece">
            	<a class="LogOut" href="../index.php" title="Log Out"></a>
            </div>
        </div>
        
        <?php
			$user = $_SESSION['username']; 
			$dbc = mysqli_connect('localhost','root','','devil') or die('error connecting to database');
			if(!empty($_POST['search']))
			{
				$search = $_POST['search'];
				$query = "SELECT * FROM `idea` where name = '".$search."'";
			}
			else
			{
				$query = "SELECT * FROM `idea`";
			}
			$results = mysqli_query($dbc,$query);
			while($row = mysqli_fetch_array($results))
			{
				echo "<div class='container'><img src='../UserPanel/idea/".$row['pic']."' class='IdeaPic'><p>".$row['name']."</p><p>owner : ".$row['owner']."</p></br><p>".$row['description']."</p></div>";
			}
		?>
        
    </body>

</html>
