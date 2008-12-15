<?php
require("config.php");

$sql="select id,kural from kural order by rand() limit 5";

$result=mysql_query($sql);

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0">
  <channel>
    <title>மின்னஞ்சல் திருக்குறள்  1.0</title>
    <link>http://www.ulagam.net/</link>
    <description>Template for random Thirukkural</description>
	<?php
	while($row=mysql_fetch_row($result)){
		$kural=str_replace("\r\n"," ",$row[1]);
		$id=$row[0];
	?>
	 <item>
	  <title>&quot;<?=$kural?>&quot; - குறள் எண் : <?=$id?> </title>
	</item>
	<? } ?>
  </channel>
</rss> 