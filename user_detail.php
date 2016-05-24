
<?php 
	include 'db/connect.php'; 
	include 'function/user_data.php';
	include 'function/read_rate.php';  ?>
<html>
	<head>
    	<title>
        	ATM HappyBank
        </title>
        <link rel="stylesheet" href="css/style.css"/>
        
    </head>
   	<body>
    		<div class = "header">
            	<h3> <a href="main.php"> Home </a> គណនីសមតុល្យ <?php echo $user_name ?> </h3>
            </div>
    	
        	<div id="contain_menu">
             <b> ទឹកប្រាក់ក្នុងគណនីរបស់អ្នកគឺ : <?php  echo $all_money. ' $'  ?> </b> <br> អត្រាប្តូប្រាក់គឺ  <?php echo $rate ?> <hr>	
              
             
            </div>

            
            
            
        	<div class="footer">
            	Footer
            </div>
            
    </body>
</html>
