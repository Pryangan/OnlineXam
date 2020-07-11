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
$result = mysql_query("SELECT * FROM mst_result");
$num_rows = mysql_num_rows($result);
	echo "<table border='1'>
    <tr>
	<th>Login</th>
	<th>Test Id</th>
	<th>Test Name</th>
	<th>Right Answer</th>
	<th>Wrong Answer</th>
	<th>Unanswered</th>
	<th>Total Result:". $num_rows."</th>
	</tr>";
	
	while($record=mysql_fetch_array($result)){
		 $id=$record['sl_no'];
		 $x=$x+1;
		 if($x%2==0){
			 $col="#F5BCA9";
		 }else{
			 $col="#E1F5A9";
		 }
		echo "<tr bgcolor=".$col.">";
		echo "<td>" .  $record['login']. " </td>";
		echo "<td>" . $record['test_id']. "</td>";
		echo "<td>" . $record['test_name']. "</td>";
		echo "<td>" . $record['right_answer']. "</td>";
		echo "<td>" . $record['wrong_answer']. "</td>";
		echo "<td>" . $record['unanswered']. "</td>";
		?>
		<td height="40" bgcolor="<?php echo $col; ?>"> <a href="\OnlineXam\admin\result_delete.php?id=<?php echo $id; ?>" onClick="return confirm('Are you sure you wish to delete this Record?');" id="delete" class="ui-state-default ui-corner-all">
            <span class="ui-icon ui-icon-trash" title="Delete"></span></a></td>
        <?php
		echo "</tr>";
	}
	echo "</table>";
	mysql_close();
?>