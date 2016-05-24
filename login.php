<?php
	session_start();
	$card_number = $_POST['txt_card_number'];
	$pin_code = "".$_POST['txt_pin_code'];
	$GLOBALS;
	if ($card_number =="" or $pin_code==""){
		$error = "Please Input input all field";
		require('index.php');
	}
	else{
		include('db/connect.php');
		$card_number_log = mysql_query("SELECT * FROM user WHERE card_number = '".$card_number."' ");	
		$my_field = mysql_fetch_assoc($card_number_log);
		$u_id = $my_field['uid'];
		$u_name = $my_field['card_number'];
		$u_pin = $my_field['pin'];
		
		if( $card_number == $u_name and $pin_code == $u_pin){
			$_SESSION['se_id'] = $u_id;
			header ('location: main.php');
			echo 'You have loged in';
			$_SESSION['error_msg'] = "Loged in! welcome !";
		}
		else{
			$error = '<p style = "color: white ;"> Incorected card_number and pin_code !</p> <br> Don\'have an account<br> <a href ="new.html" > create an account. ';
			require('index.php');
		}
		
	}
	

?>