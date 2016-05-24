<?php
	
	
	$moneys = $_POST['txt_money'];
	$type =  $_POST['cbo_type'];
	
	$acc_id = 1;
	$use_money = 0.0 ;
	
	include ('function/read_rate.php');
	include ('function/user_data.php');
	$u_ids = $_SESSION['se_id'] ;
	$old_money = $all_money;
	$tr_type = "Add money";
	$amount = "";
	$mydate = "";
	
	
	if ( $type =="1" ) {
		$use_money = $moneys + $old_money ;
		$amount = $moneys;
	}
	else if( $type =="2"){
		//echo "reals";	
		$use_money = ( $moneys / $rate ) + $old_money;
		$amount = ($moneys / $rate);
	}
	//echo ($use_money);
	//$insertdata = mysql_query("INSERT INTO account VALUES ($u_id, $str_date, $revenue, $expense, $income)  ");
	include ('db/connect.php');
	$updatedata = mysql_query("UPDATE user_account SET money_dl = $use_money WHERE uid = $u_ids ");
	$insertdata = mysql_query("INSERT INTO `atm`.`transaction` (`uid`, `tr_type`, `amount`, `date`) VALUES ($u_ids, 'add_money', $amount, '2014-12-02');");
	
		if($updatedata){
			//echo 'you have inserted sesefully';
			header ('location: add_money.php');
		}
		else
			//echo 'you have inserted unsecefully';
			header ('location: add_money.php');
			
?>