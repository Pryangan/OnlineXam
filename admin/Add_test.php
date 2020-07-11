<?php
session_start();
require("../database.php");
extract($_POST);
mysql_query("insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')",$cn) or die(mysql_error());
echo ("<script language='javascript'>
					window.alert('Test \"$testname\" Added Successfully.')
					window.location.href='/OnlineXam/admin.php'
					</script>");
unset($_POST);
?>