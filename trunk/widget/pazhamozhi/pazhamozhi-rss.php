<?php
/*
This file is part of Project Tamil - Pazhamozhi RSS.

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

$sql="select id,pazhamozhi from pazhamozhi order by rand() limit 5";

$result=mysql_query($sql);

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0">
  <channel>
    <title>மின்னஞ்சல் பழமொழி 1.0</title>
    <link>http://www.ulagam.net/</link>
    <description>Template for random Pazhamozhi</description>
	<?php
	while($row=mysql_fetch_row($result)){
		$pazhamozhi=$row[1];
		$id=$row[0];
	?>
	 <item>
	  <title>&quot;<?=$pazhamozhi?>&quot; - பழமொழி எண்:<?=$id?> </title>
	</item>
	<? } ?>
  </channel>
</rss> 