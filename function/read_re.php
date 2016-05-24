<?php 		
		
			$user_re = mysql_query("SELECT * FROM user  where card_number = '".$code_re."'");
			
			$db_field_re = mysql_fetch_assoc($user_re);
				$uid_re = $db_field_re['uid'];
				$user_name_re = $db_field_re['uname'];
				
			$user_account_re = mysql_query("SELECT * FROM user_account  where uid = '".$uid_re."'");
			
			$db_acc_field_re = mysql_fetch_assoc($user_account_re);
				$acc_id_re = $db_acc_field_re['acc_id'];
				$all_money_re = $db_acc_field_re['money_dl'];
				echo $all_money_re;
		
?>
