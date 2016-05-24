
<?php 
	session_start();
	if ($_SESSION['se_id'] == 0) {
		header ('location: index.php');	
		
	}
	include 'db/connect.php'; 
	include 'function/user_data.php';

	 ?>
    
<html>
	<head>
    	<title>
        	ATM HappyBank
        </title>
        <link rel="stylesheet" href="css/style.css"/>
        
    </head>
   	<body>
    		<div class = "header">
            	<h3> Mr. <?php echo $user_name ?> <a href="logout.php" style="font-size:16px; text-decoration:none; color:black;"><b> Logout </b></a> </h3> 
            </div>
    	
        	<div id="contain_menu">
              Main <hr>	
              <div id="menu_box">
              	 <a href="add_money.php">
              		<div id="list">
                    <b>	ដាក់ប្រាក់ </b>
                    </div>
                 </a>
                 <a href="withdrawal.php">
              		<div id="list">
                    <b>	ដកប្រាក់ </b>
                    </div>
                 </a>
                 <a href="transfer_money.php">
              		<div id="list">
                    <b>	សេវាផ្ទេរប្រាក់ </b>
                    </div>
                 </a>
                 <a href="user_detail.php">
              		<div id="list">
                    <b>	គណនីសមតុល្យ </b>
                    </div>
                 </a>
                 
                 <a href="security.php">
              		<div id="list">
                    <b>	សុវត្ថិភាពផ្ទាល់ខ្លួន​ </b>
                    </div>
                 </a>
              </div>

            </div>
			<div id="message_box">
            	<?php echo($_SESSION['error_msg']);   ?>
            </div>
            
            
            
        	<div class="footer">
            	Footer
            </div>
            
    </body>
</html>
