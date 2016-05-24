<?php
	
	
	$old_pass = $_POST['txt_oldpass'];
	$new_pass1 = $_POST['txt_newpass1'];
	$new_pass2 = $_POST['txt_newpass2'];
	include ('db/connect.php');
	include ('function/user_data.php');
	if ($new_pass1 == $new_pass2 ) {
		$true_pass = "".$new_pass1;

		if ($old_pass == $pin_code){
			//echo ("true");
			$update_data = mysql_query("UPDATE user SET pin = '".$true_pass."' WHERE uid = $u_ids ");
			//$insertdata = mysql_query("INSERT INTO `atm`.`transaction` (`uid`, `tr_type`, `amount`, `date`) VALUES ($u_ids, 'withdrawal', $amount, '2014-12-02');");
			//echo ("you has been changed your password");
			if($update_data){
				$_SESSION['error_msg'] = "You have changed your password secefully !";
				header ('location: main.php');
			}
			else{ 
				//echo 'you have inserted unsecefully';
				header ('location: security.php');
				$_SESSION['error_msg'] = "you cannot chang password !";
			}
			
		}
		else{
				header ('location: security.php');
				$_SESSION['error_msg'] = " Incorected Password !";
		}
	}
	else{ 
		header ('location: security.php');
		$_SESSION['error_msg'] = " Please keep the same as of new password !";
	}
?>