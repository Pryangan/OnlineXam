<?php $a=$_GET['id']; 
	require("database.php");
	include("header.php");
	include("dropbox.php");
	?>
    <link rel="stylesheet" href="/OnlineXam/css/jquery-ui-1.10.4.custom.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/OnlineXam/css/div.css">
<script type="text/javascript" src="/OnlineXam/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/OnlineXam/jquery/jquery-ui-1.10.4.custom.js"></script>
<style type="text/css">
body{
		font: 100% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
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
		position: relative;
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
	}
	</style>	
<div id="main">
    <div class="content">
    <table width="100%" border="0" class="main_table"> 
    <tr>
    <td>
    <?php
	$b="select * from mst_question where test_id=$a";
	$test_name="select * from mst_test where test_id=$a";
	$result_test=mysql_query($test_name);
	$row_1=mysql_fetch_array($result_test);
 $result=mysql_query($b);
 echo "<h1>Test Name: <strong>".$row_1['test_name']."</strong></h1>";
 $X=0;
 echo "<form method='post' style='margin-top: 1em;' id='quiz_form' action='/OnlineXam/ajex.php?id=".$a."'>";
 while($row=mysql_fetch_array($result)){ 
 $X=$X+1;
 ?>
 	<div id="question_<?php echo $row['que_id'];?>" class='questions'>
<h2 id="question_<?php echo $row['que_id'];?>"><?php echo $X.".".$row['que_desc'];?></h2>
<div class='align'>
<input type="radio" value="1" id='radio1_<?php echo $row['que_id'];?>' name='<?php echo $row['que_id'];?>'>
<label id='ans1_<?php echo $row['que_id'];?>' for='1'><?php echo $row['ans1'];?></label>
<br/>
<input type="radio" value="2" id='radio2_<?php echo $row['que_id'];?>' name='<?php echo $row['que_id'];?>'>
<label id='ans2_<?php echo $row['que_id'];?>' for='1'><?php echo $row['ans2'];?></label>
<br/>
<input type="radio" value="3" id='radio3_<?php echo $row['que_id'];?>' name='<?php echo $row['que_id'];?>'>
<label id='ans3_<?php echo $row['que_id'];?>' for='1'><?php echo $row['ans3'];?></label>
<br/>
<input type="radio" value="4" id='radio4_<?php echo $row['que_id'];?>' name='<?php echo $row['que_id'];?>'>
<label id='ans4_<?php echo $row['que_id'];?>' for='1'><?php echo $row['ans4'];?></label>
<input type="radio" checked='checked' value="5" style='display:none' id='radio4_<?php echo $row['que_id'];?>' name='<?php echo $row['que_id'];?>'>
<br/>

<script type="text/javascript">
$(document).ready(function() {
    $('#downup<?php echo $row['que_id'];?>').click(function(){
        $('#<?php echo $row['que_id'];?>').slideToggle(200);
	});
});
</script>
<input type="button" value="Workspace" id="downup<?php echo $row['que_id'];?>"/><br/>
		<textarea id="<?php echo $row['que_id'];?>" style="display:none" cols="100" rows="6"></textarea>	
</div>

 <?php
 } 
 ?>
 <br/>
 <div align="center">
<input type="submit" id='next<?php echo $row['que_id'];?>' value='Submit Test!' name='question' class='butt' />
</div>
</div>
</form>
</td>
</tr>
</table>
</div>
</div>
<?php include("footer.php"); ?>