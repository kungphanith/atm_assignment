<?php
	
	
	$moneys = $_POST['txt_money'];
	$type =  $_POST['cbo_type'];
	$code_re = $_POST['txt_code'];
	include ('function/read_rate.php');
	include ('function/user_data.php');
	include ('function/read_re.php');
	$sender_code = $card_number;

	$str1 = "Transfer to ".$code_re;
	$str2 = "Recieved from ".$sender_code;
	//$date_now = "2014-12-08";
	$date_now = date("Y-m-d");
	
	$use_money = 0.0 ;
	$re_money = 0.0;
	
	
	$u_ids = $_SESSION['se_id'];
	$old_money = $all_money;
	
	if ( $type =="1" ) {
		$use_money =  $old_money - $moneys ;
		$amount = $moneys;
		$re_money = $all_money_re + $moneys ;
	}
	else if( $type =="2"){
		//echo "reals";	
		$use_money =  $old_money - ( $moneys / $rate );
		$amount = ($moneys / $rate);
		$re_money = $all_money_re + ( $moneys / $rate );
		
	}
	//echo ($use_money);
	//$insertdata = mysql_query("INSERT INTO account VALUES ($u_id, $str_date, $revenue, $expense, $income)  ");
	//echo $all_money_re;

	include ('db/connect.php');
	$insertdata = mysql_query("UPDATE user_account SET money_dl = $use_money WHERE uid = $u_ids ");
	
	//$insertdata = mysql_query("INSERT INTO `atm`.`transaction` (`uid`, `tr_type`, `amount`, `date`) VALUES ($u_ids, $str1, $amount, '2014-12-02');");
	$insertdata = mysql_query("INSERT INTO `atm`.`transaction` (`uid`, `tr_type`, `amount`, `date`) VALUES ($u_ids, '".$str1."', $amount , '".$date_now."');");
	$insertdata = mysql_query("INSERT INTO `atm`.`transaction` (`uid`, `tr_type`, `amount`, `date`) VALUES ($uid_re, '".$str2."', $amount , '".$date_now."');");
	
	
	$insertdata = mysql_query("UPDATE user_account SET money_dl = $re_money WHERE uid = $uid_re ");
		if($insertdata){
			//echo 'you have inserted sesefully';
			header ('location: transfer_money.php');
		}
		else
			//echo 'you have inserted unsecefully';
			header ('location: transfer_money.php');
?>