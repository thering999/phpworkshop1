<?
$host="localhost";
$user="root";
$pw="";
$dbname="db_mailinglist";

$c = mysql_connect($host,$user,$pw);
if (!$c) {
	echo "<h3>ERROR : �������ö�Դ��Ͱҹ��������</h3>";
	exit();
}
?>