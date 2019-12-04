<?php

$mysql_hostname = "localhost";

$mysql_user = "yook6442";

$mysql_password = "yug6442!";

$mysql_database = "yook6442";

$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");

mysql_select_db($mysql_database, $con) or die("db connect error");

?>
