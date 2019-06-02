<html>
	<head>
		<meta charset="utf-8">
		<title>ثبت نام</title>
		<link type="text/css" rel="stylesheet" href="../style.css">
		<link type="text/css" rel="stylesheet" href="registration.css" media="all"/>
	</head>
    
	<body>
    
		<div class="container">
			<a href="../index.php"  class="login" target="_self" title="LogIn"></a>
			<div  class="form">
    			<form action="registration.php" method="post" enctype="multipart/form-data"> 
                    
    			    <input id="name" name="name" placeholder="نام و نام خانوادگی" required type="text"> 

    				<input id="email" name="email" placeholder="ایمیل" required type="email" title="example@domain.com"> 
                
    				<input id="username" name="username" placeholder="نام کاربری" required type="text">
    			 
    				<input type="password" id="password" name="password" placeholder="رمز عبور" required> 
                    
    				<input type="password" id="repassword" name="repassword" placeholder="تکرار رمز عبور" required> 
                    
                    <p class="contact"><label>:تاریخ تولد</label></p>
               		<fieldset>
                 		
                        <input class="birthyear" maxlength="4" name="BirthYear" placeholder="سال" required></label>
                  		<label class="month"> 
                  			<select class="select-style" name="BirthMonth" >
                                <option value="">ماه</option>
                                <option value="01">اردیبهشت</option>
                                <option value="02">فروردین</option>
                                <option value="03">خرداد</option>
                                <option value="04">تیر</option>
                                <option value="05">مراد</option>
                                <option value="06">شهریور</option>
                                <option value="07">مهر</option>
                                <option value="08">آبان</option>
                                <option value="09">آذر</option>
                                <option value="10">دی</option>
                                <option value="11">بهمن</option>
                                <option value="12">اسفند</option>
                 			</select>
                  		</label>    
                        <input class="birthday" maxlength="2" name="BirthDay"  placeholder="روز" required>
					</fieldset>
  
                    <select class="select-style gender" name="gender">
                    	<option value="">جنسیت</option>
                    	<option value="male">مرد</option>
                    	<option value="female">زن</option>
                    	<option value="other">غیره</option>
                    </select><br>

                  	<div>
                   		<p class="contact"><label class="file" for="file"> :عکس خود را اپلود کنید</label></p>
                      	<input id="file" class="file" name="file" accept="image/jpeg" required type="file">
                    </div>

            		<input name="phone" placeholder="شماره تماس" required type="text"> <br>
                    
            		<p class="error"><span><?php
						if(isset($_GET['message'])){
							echo $_GET['message'];}
					?></span></p>

            		<button name="submit" type="submit">ثبت شود</button> 	 
   				</form> 
			</div>      
		</div>

	</body>
</html>
