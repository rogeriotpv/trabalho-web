<?php

 	function DBConnect(){
 		$sql = mysql_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die(mysql_error($sql));
 		mysql_set_charset($sql, CHARSET)or die(msql_error($sql));
 		return $sql;
 	}

 		function DBClose($sql){
 			@mysql_close($sql) or die (msql_error($sql));
 		}


 ?>