<?php
	 $con = mysql_connect("localhost", "masterpi_ares", "mcrrots03");
	 if (!$con){
		 die ("Cannot connect to " . mysql_error());
	 }
	 mysql_select_db("masterpi_mpWEB", $con);
?>