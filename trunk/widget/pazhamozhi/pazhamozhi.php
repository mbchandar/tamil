<?php
/*
This file is part of Project Tamil - Pazhamozhi.

Copyright (C) 2008  Balachandar Muruganantham

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/
require("config.php");

$sql="select id,pazhamozhi from pazhamozhi order by rand() limit 1";

$result=mysql_query($sql);

while($row=mysql_fetch_row($result)){
	$pazhamozhi=$row[1];
	$id=$row[0];
}

$link="<a href='http://ulagam.net/%e0%ae%9a%e0%af%87%e0%ae%b5%e0%af%88%e0%ae%95%e0%ae%b3%e0%af%8d/' target='_blank' style='text-decoration:none'>பழமொழி widget by உலகம்.net</a>";
$id="பழமொழி எண்:".$id;

switch($_GET["format"]){
case "js":
	echo "document.write(\"<table><tr><td style='border:solid 1px #ccc;padding:8px;font-size:12px;' colspan='2'>".$pazhamozhi."</td></tr><tr style='padding:2px;font-family: Verdana;font-size:9px;'><td>".$id."</td><td align='right'>".$link."</td></tr></table>\");";
	break;
 default:
	 echo "<table><tr><td style='border:solid 1px #ccc;padding:8px;font-size:12px;' colspan='2'>".$pazhamozhi."</td></tr><tr style='padding:2px;font-family: Verdana;font-size:9px;'><td>".$id."</td><td align='right'>".$link."</td></tr></table>";
}
 ?>
