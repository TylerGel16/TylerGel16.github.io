<?php
$link = mysql_connect('tf2tokencom.fatcowmysql.com', 'tylergel', 'TylerGel@16'); 
if (!$link) {
   die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_select_db(top_buyer);
?>
