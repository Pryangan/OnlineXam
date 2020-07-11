<?php
session_start();
require("../database.php");
$result=mysql_query("select pass from mst_user where login='$_SESSION[login]'");
$row=mysql_fetch_array($result);
if($row['pass']==$_POST['oldpass']){
	$rs=mysql_query("UPDATE mst_user SET pass='$_POST[newpass]' WHERE login='$_SESSION[login]' AND pass='$_POST[oldpass]'");
	echo "<script type='text/javascript'>window.alert('Password updated successfully..')
	window.location.href='/OnlineXam/admin.php'</script>";
	}
	else
	{
	echo "<script type='text/javascript'>window.alert('Your Old Password is Wrong')
	window.location.href='/OnlineXam/admin.php'</script>";
	}

?>