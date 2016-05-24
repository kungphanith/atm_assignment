
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
            	<h3> <a href="main.php"> Home </a> ដកប្រាក់ចេញពីគណនី <?php echo $user_name ?> </h3>
            </div>
    	
        	<div id="contain_menu">
             <b> ដកប្រាក់  ||  ទឹកប្រាក់ក្នុងគណនីរបស់អ្នកគឺ : <?php  echo $all_money. ' $'  ?> </b> <br> អត្រាប្តូប្រាក់គឺ  <?php echo $rate ?> <hr>	
              <div id="menu_box">
              	 <form action="wd.php" method="post" id="add_money_form" >
                    <br>
                 តើអ្នកចង់ដកប្រាក់ប៉ុន្មានចេញពី គណនី?<br>
                  <input type="text" name="txt_money"/>
                    <br><br>
           		  ចង់ដកសាច់ប្រាក់ជាៈ 
                  <select name="cbo_type"  >
                  		<option value= "1" > Dollar </option>
                        <option value="2"> Real	</option>
                  </select>			
                  
                  <input id="button" type="submit" name="btn_add" value="ដកប្រាក់"/>
                 </form>
                
              </div>
             
            </div>

            
            
            
        	<div class="footer">
            	Footer
            </div>
            
    </body>
</html>
