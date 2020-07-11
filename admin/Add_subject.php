<?php
session_start();
require("../database.php");
extract($_POST);
$rs=mysql_query("select * from mst_subject where sub_name='$subname'");
if (mysql_num_rows($rs)>0)
{	echo ("<script language='javascript'>
					window.alert('Subject is Already Exists')
					window.location.href='/OnlineXam/admin.php'
					</script>");
	exit;
}

mysql_query("insert into mst_subject(sub_name) values ('$subname')",$cn) or die(mysql_error());
echo ("<script language='javascript'>
					window.alert('Subject   \"$subname \" Added Successfully.')
					window.location.href='/OnlineXam/admin.php'
					</script>");
$submit="";

?>