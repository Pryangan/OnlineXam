<?php 
session_start();
include("../database.php");
?>
<link rel="stylesheet" href="/OnlineXam/css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="/OnlineXam/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/OnlineXam/jquery/jquery-ui-1.10.4.custom.js"></script>
<style type="text/css">
	font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#edit {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position:relative;
	}
	#edit span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#delete {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position:relative;
	}
	#delete span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position:relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}#one{
		width:400px;
	}
	#menu{
		background-color:rgb(255,100,100);;
		width:100%;
		height:40px;
	}
	.ui-tooltip{
		background:#B8F1A9;
		color:#FFF;
	}
</style>

<?php
$x=0;
$select=mysql_query("select * from mst_user where type like 'editor'");
$num_rows = mysql_num_rows($select);
echo "<table border='1'>
    <tr>
	<th>Editor Id</th>
	<th>Login</th>
	<th>Editor Name</th>
	<th>Address</th>
	<th>City</th>
	<th>Phone</th>
	<th>Email</th>
	<th colspan='2'>Total Editor:" . $num_rows. "</th>
	</tr>";

while($row=mysql_fetch_array($select))
{
		$x=$x+1;
		 if($x%2==0){
			 $col="#F5BCA9";
		 }else{
			 $col="#E1F5A9";
		 }
	$id=$row['user_id'];
$login=$row['login'];
$username=$row['username'];
$address=$row['address'];
$city=$row['city'];
$phone=$row['phone'];
$email=$row['email'];
$status=$row['state'];
?>
<tr bgcolor="<?php echo $col;?>"><td><?php echo $id?> </td>
<td><?php echo $login?> </td>
<td><?php echo $username?> </td>
<td><?php echo $address?> </td>
<td><?php echo $city?> </td>
<td><?php echo $phone?> </td>
<td><?php echo $email?> </td>
<td height="40">
<?php
if(($status)=='0')
{
?>
<a href="/OnlineXam/admin/Action_Editor.php?status=<?php echo $id;?>" 
  onclick="return confirm('Activate <?php echo $username;?>');" id="delete" class="ui-state-default ui-corner-all"> Deactivate </a>
<?php
}
if(($status)=='1')
{
?>
<a href="/OnlineXam/admin/Action_Editor.php?status=<?php echo $id;?>"
 onclick="return confirm('De-activate <?php echo $username;?>');" id="edit" class="ui-state-default ui-corner-all"> Activate</a>
<?php
}
?>
</td>
<?php }?> 
</tr></table>
