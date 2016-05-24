<?php
	
	
	$moneys = $_POST['txt_money'];
	$type =  $_POST['cbo_type'];

	$use_money = 0.0 ;
	
	include ('function/read_rate.php');
	include ('function/user_data.php');
	$u_ids = $_SESSION['se_id'] ;
	$old_money = $all_money;
	
	if ( $type =="1" ) {
		$use_money =  $old_money - $moneys ;
		$amount = $moneys;
	}
	else if( $type =="2"){
		//echo "reals";	
		$use_money =  $old_money - ( $moneys / $rate );
		$amount = ($moneys / $rate);
	}
	//echo ($use_money);
	//$insertdata = mysql_query("INSERT INTO account VALUES ($u_id, $str_date, $revenue, $expense, $income)  ");
	include ('db/connect.php');
	$insertdata = mysql_query("UPDATE user_account SET money_dl = $use_money WHERE uid = $u_ids ");
	$insertdata = mysql_query("INSERT INTO `atm`.`transaction` (`uid`, `tr_type`, `amount`, `date`) VALUES ($u_ids, 'withdrawal', $amount, '2014-12-02');");
		if($insertdata){
			//echo 'you have inserted sesefully';
			header ('location: withdrawal.php');
			
			
			
		}
		else
			//echo 'you have inserted unsecefully';
			header ('location: withdrawal.php');
?>