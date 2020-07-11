<?php
	require('database.php');
	
	if(isset($_POST['btnlogin'])){
		$username=mysql_escape_string($_POST['login']);
		$password=mysql_escape_string($_POST['password']);
		if(!$_POST['login'] | !$_POST['password'])
		{
			echo ("<script language='javascript'>
					window.alert('You did not complete all of the required field')
					window.location.href='indexA.php'
					</script>");
			exit();			
		}
		$sql=mysql_query("SELECT * FROM mst_user WHERE login='$username' AND pass='$password'");
		$data=mysql_fetch_array($sql);
		if(mysql_num_rows($sql) > 0)
		{
			$username1=$data['login'];
			$password1=$data['pass'];
			$type=$data['type'];
			$name=$data['username'];
			$status=$data['state'];
			if($username==$username1 && $password==$password1){
				session_start();
				$_SESSION["login"]=$username1;
				if($status=='0'){
					echo ("<script language='javascript'>
					window.alert('You are not permitted for Login Please Contact to admin!.')
					window.location.href='indexA.php'
					</script>");
			exit();
				}else{
				if($type=='admin'){
					$_SESSION["login"]=$username1;
			echo ("<script language='javascript'>
					window.alert('Login Succesfully!.')
					window.location.href='admin.php'
					</script>");
			exit();
				}else if($type=='user'){
					$_SESSION["login"]=$username1;
					echo ("<script language='javascript'>
					window.alert('Login Succesfully!.')
					window.location.href='index1.php'
					</script>");
			exit();
				}else{
					$_SESSION["login"]=$username1;
					echo ("<script language='javascript'>
					window.alert('Login Succesfully!.')
					window.location.href='editor.php'
					</script>");	
				}
			}
			}
		}
		else{
			echo ("<script language='javascript'>
					window.alert('Wrong username password combination.Please Re-enter')
					window.location.href='indexA.php'
					</script>");
			exit();	
		}
	}
	
	else
	{
			
	}
?>