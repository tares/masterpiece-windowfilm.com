<?php
	include("../include/sys_inc/estcon.inc.php");
date_default_timezone_set("Asia/Jakarta");

//ambil data dari form
$name = $_REQUEST['tb_name'];
$telp = "No telp number";
$email = $_REQUEST['tb_email'];

$subject = "A new message from Customer";
$message = $_REQUEST['tb_message'];

$date = date('Y-m-d H:i:s');
$MyName = "Masterpiece Windowfilm COntact US";
$MyEmail = "info@masterpiece-windowfilm.com";

//end ambil data dari form

/// Email Script Begin
$from =     "From \t\t: ".$name."\n";
$conTelp =  "Telp \t\t: ".$telp."\n";
$conEmail = "E-Mail \t\t: ".$email."\n\n";
$emailBody = $from.$conTelp.$email.$message; 
mail($MyName." <".$MyEmail.">",$subject, $emailBody, "From: ".$name." <".$email.">");
// Email Script End*/


//isi table data_dealer
//mysql_query("INSERT INTO record_mail VALUES ('','$date','$name','$telp','$email','$subject','$message')");
echo '<meta http-equiv="refresh" content="0;url=../index.php?location=thanks">';
?>