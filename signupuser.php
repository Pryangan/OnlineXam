<?php
include("indexA.php");
extract($_POST);
$login=$_POST['lid'];
include("database.php");
$rs=mysql_query("select * from mst_user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo ("<script language='javascript'>
					window.alert('Login Id Already Exists')
					window.location.href='indexA.php'
					</script>");
			exit();
	exit;
}
$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo ("<script language='javascript'>window.alert('ur Login ID  $lid Created Sucessfully Please Login using your Login ID to take Quiz')
		window.location.href='indexA.php' 
		</script>");

exit();

?>