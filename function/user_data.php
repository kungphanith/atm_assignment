<?php 		
		session_start();
			
			$u_ids = $_SESSION['se_id'] ;
			$user = mysql_query("SELECT * FROM user  where uid = '".$u_ids."'");
			$user_account = mysql_query("SELECT * FROM user_account  where uid = '".$u_ids."'");
			
			
			$db_field = mysql_fetch_assoc($user);
				$uid = $db_field['uid'];
				$gender = $db_field['sex'];
				$user_name = $db_field['uname'];
				$card_number = $db_field['card_number'];
				$pin_code = $db_field['pin'];
				$email = $db_field['email'];
				$phone = $db_field['phone'];
				$dob = $db_field['dob'];
				
			$db_acc_field = mysql_fetch_assoc($user_account);
				$acc_id = $db_acc_field['acc_id'];
				$all_money = $db_acc_field['money_dl'];
				
		
?>
