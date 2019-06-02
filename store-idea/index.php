<html>
   <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="author" content="ARVIN">

        <link rel="stylesheet" href="LogIn.css">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <div class="page-container">
            <h1>ورود به سیستم</h1>
            <form action="login.php" method="post">
                <input type="text" name="username" class="username" placeholder="نام کاربری">
                <input type="password" name="password" class="password" placeholder="رمز عبور">
                <div class="message">
            		<?php
						if(isset($_GET['message'])){
							echo $_GET['message'];}
					?>
                    <!--<div class="error">
                  		<p><span>+</span></p>
                	</div>-->
                </div>
                <button type="submit">وارد شوید</button>
                <div>
                	<a class="registration" href="registration/SginUp.php" title="registration"></a>
                </div>
                
            </form>
            <div class="connect">
                <p>ورود سریع با شبکه های اجتماعی</p>
                <p>
                    <a class="facebook" href="#"></a>
                    <a class="twitter" href="#"></a>
                </p>
            </div>
        </div>
        
    </body>

</html>

