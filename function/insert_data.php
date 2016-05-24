<?php
  	session_start();
	$u_id = $_SESSION['se_id'];
	
	$revenue = $_POST['txt_revenue'];
	$expense = $_POST['txt_expense'];
	$income = 0.0;
	$error = "";
	$today = getdate();
	$str_date = $today['year'].$today['mon'].$today['mday'];
	
	if ($revenue == "" or $expense == "" ){
		$error = '<p style="color:red;" > Please input value in the box!</p>';
	}
	else if (ctype_alpha($revenue )=== true ){
		$error = '<p style="color:red;" > Please input as Number!</p>';
	}
	else {
		$error = '<p style="color:green;" > Ready to insert to database!</p>';
		include ('../db/connect.php');
		$income = $revenue - $expense;
		$insertdata = mysql_query("INSERT INTO tbl_ev_re VALUES ($u_id, $str_date, $revenue, $expense, $income)  ");
		if($insertdata){
			$error = '<p style="color:blue;" > You have saved to your details!</p>';
		}
		else
			$error ='uncesefully';
	}
	$_SESSION['ms_error'] = $error;
	header ('location: ../user_loged.php');	
	$_SESSION['ms_error'] = '';
	//echo 'Data is : Date = '.$str_date.', id :'.$u_id.', Revenue : '.$revenue.', Expense : '.$expense.', Income : '.$income ;
	
?>