<?php
require("config.php");

$sql="select id,kural from kural order by rand() limit 1";

if($_GET["id"]){
	$sql= sprintf("SELECT id,kural FROM kural where id='%s'",mysql_real_escape_string($_GET["id"]));
	//$sql="select id,kural from kural where id=".$_GET["id"];	
}

$result=mysql_query($sql);

while($row=mysql_fetch_row($result)){
	$kural=str_replace("\r\n","<br>",$row[1]);
	$id=$row[0];
}


switch($_GET["format"]){
case "js":
	echo "document.write(\"<table><tr><td style='border:solid 1px #ccc;padding:8px;font-size:12px;' colspan='2'>".$kural."</td></tr><tr style='padding:2px;font-family: Verdana;font-size:9px;'><td><img src='http://api.ulagam.net/images/valluvar16x16.jpg' align='absmiddle'/> குறள் எண் :".$id."</td><td align='right'><a href='http://ulagam.net/%e0%ae%9a%e0%af%87%e0%ae%b5%e0%af%88%e0%ae%95%e0%ae%b3%e0%af%8d/' target='_blank' style='text-decoration:none'>kural widget by உலகம்.net</a></td></tr></table>\");";
	break;
 default:
	 echo "<table><tr><td style='border:solid 1px #ccc;padding:8px;font-size:12px;' colspan='2'>".$kural."</td></tr><tr style='padding:2px;font-family: Verdana;font-size:9px;'><td><img src='http://api.ulagam.net/images/valluvar16x16.jpg' align='absmiddle'/> குறள் எண் :".$id."</td><td align='right'><a href='http://ulagam.net/%e0%ae%9a%e0%af%87%e0%ae%b5%e0%af%88%e0%ae%95%e0%ae%b3%e0%af%8d/' target='_blank' style='text-decoration:none'>kural widget by உலகம்.net</a></td></tr></table>";	 
	 //echo "<script language='javascript'>document.write(\"<table><tr><td style='border:solid 1px #ccc;padding:8px;font-size:12px;' colspan='2'>".$kural."</td></tr><tr style='padding:2px;font-family: Verdana;font-size:9px;'><td><img src='images/valluvar16x16.jpg' align='absmiddle'/> குறள் எண் :".$id."</td><td align='right'><a href='http://api.ulagam.net/' target='_blank' style='text-decoration:none'>kural widget by உலகம்.net</a></td></tr></table>\");</script>";

}
 ?>
