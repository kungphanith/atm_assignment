<html>
	<head>
    	<title>
        	ATM HappyBank
        </title>
        <link rel="stylesheet" href="css/style.css"/>
        
    </head>
   	<body>
    		<div class = "header">
            	<h3> Happybank </h3>
            </div>
    	
        	<div id="login_form">
              ATM Check <hr>	
              <form action="login.php" method="post" >
            	<input type="text" name="txt_card_number" placeholder ="Card Number..." />
                <input type="password" name="txt_pin_code" placeholder ="PIN code..." /><br>
                <input type="submit" name="btn_submit" value="Log In"/>
              </form>
            </div>
            <div id="message">
             	<?php error_reporting(0); echo $error ; ?>
            </div>
            
            
            
        	<div class="footer">
            	Footer
            </div>
            
    </body>
</html>