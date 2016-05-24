
<?php 
	include 'db/connect.php'; 
	include 'function/user_data.php';
	include 'function/read_rate.php' ?>
<html>
	<head>
    	<title>
        	ATM HappyBank
        </title>
        <link rel="stylesheet" href="css/style.css"/>
        
    </head>
   	<body>
    		<div class = "header">
            	
            	<h3><a href="main.php"> Home </a> កំណត់សុវត្ថិភាពរបស់លោកអ្នក   </h3> 
            </div>
    	
        	<div id="contain_menu">
             <b>ប្តូលេខសំងាត់   </b> <br> សូមរក្សា លេខសំងាត់នេះ យ៉ាងសំងាត់បំផុត ដើមជៀសវៀង ហានិភ័យ នានាកើតមានឡើង សូមអគុណ   <hr>	
              <div id="menu_box">
              	 <form action="sec.php" method="post" id="add_money_form" >
                    
                 សូមបញ្ចូលលេខសម្ងាត់ចាស់ <br>
                  <input type="password" name="txt_oldpass"/>
                    <br>
           		 សូមបញ្ចូលលេខសម្ងាត់ថ្មី​ <br>
                 <input type="password" name="txt_newpass1"/>
                 <br>
                 សូមបញ្ចូលលេខសម្ងាត់ថ្មី​ ម្តងទៀត<br>
                 <input type="password" name="txt_newpass2"/>
                  
                  <input id="button" type="submit" name="btn_chang" value="យល់ព្រម"/>
                 </form>
                
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
