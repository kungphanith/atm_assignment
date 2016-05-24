
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
            	
            	<h3><a href="main.php"> Home </a> ដាក់ប្រាក់ទៅក្នុង គណនី <?php echo $user_name ?>  </h3> 
            </div>
    	
        	<div id="contain_menu">
             <b> ដាកប្រាក់  ||  ទឹកប្រាក់ក្នុងគណនីរបស់អ្នកគឺ : <?php  echo $all_money . '$' ;   ?> </b> <br> អត្រាប្តូប្រាក់គឺ  <?php echo $rate ?>   <hr>	
              <div id="menu_box">
              	 <form action="add_m.php" method="post" id="add_money_form" >
                    <br>
                 តើអ្នកចង់ដាកប្រាក់ប៉ុន្មានបន្ថែមទៅក្នុង គណនី?<br>
                  <input type="text" name="txt_money"/>
                    <br><br>
           		  ចង់ដាកសាច់ប្រាក់ជាៈ 
                  <select name="cbo_type"  >
                  		<option value= "1" > Dollar </option>
                        <option value="2"> Real	</option>
                  </select>		
                  
                  <input id="button" type="submit" name="btn_add" value="ដាក់ប្រាក់"/>
                 </form>
                
              </div>
             
            </div>

            
            
            
        	<div class="footer">
            	Footer
            </div>
            
    </body>
</html>
