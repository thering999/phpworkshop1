<?php
$host="localhost";
$user="root";
$pw="";
$dbname="db_photo";
$c = mysql_connect($host,$user,$pw);
if (!$c) {
	echo "<h3>�������ö�Դ��Ͱҹ��������</h3>";
	exit();
}
?>