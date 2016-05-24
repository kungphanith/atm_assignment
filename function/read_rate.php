<?php 		
			include('db/connect.php');
			$read_rate = mysql_query("SELECT * FROM rate ");
			$db_field = mysql_fetch_assoc($read_rate);
				$rate = $db_field['khmer'];
		
?>
