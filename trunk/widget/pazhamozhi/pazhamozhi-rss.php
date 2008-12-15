<?php
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