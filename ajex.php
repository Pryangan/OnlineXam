<?php
session_start();
require("database.php");
include("header.php");
	include("dropbox.php");
	?>
    <link rel="stylesheet" type="text/css" href="/OnlineXam/css/div.css">
    <style type="text/css">
	body{
		font: 100% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
		.red{
			color:white;
			background:red;
			padding:0px 10px;
		}
		.orange{
			color:white;
			background:orange;
			padding:0px 10px;
		}
		.green{
			color:white;
			background:green;
			padding:0px 10px;
		}
	</style>
 <?php
 $a=$_GET['id'];
	
	$test_name=mysql_query("select test_name from mst_test where test_id=$a");
	 $result_test_name=mysql_fetch_array($test_name);
	$response=mysql_query("select * from mst_question where test_id=$a");
	 $i=1;
	 $right_answer=0;
	 $wrong_answer=0;
	 $unanswered=0;
	 while($result=mysql_fetch_array($response)){ 
	       if($result['true_ans']==$_POST[$result['que_id']]){
		       $right_answer++;
		   }else if($_POST[$result['que_id']]==5){
		       $unanswered++;
		   }
		   else{
		       $wrong_answer++;
		   }
		   $i++;  
	 }
	 echo "<div id='main'>
    <div class='content'>
<table width='100%' height='300px' border='0' class='main_table'>
	<tr valign='top'><td>"; 

	 echo "<div id='answer'>";
	 echo "Hello ".$_SESSION[login]."<br> Your Result:<br>Test Name: $result_test_name[test_name]<br><br>";
	 echo " Right Answer  : <span class='highlight'>". $right_answer."</span><br>";

	 echo " Wrong Answer  : <span class='highlight'>". $wrong_answer."</span><br>";

	 echo " Unanswered Question  : <span class='highlight'>". $unanswered."</span><br>";
	 echo "</div>";
	 echo "</td></tr></table>
</div>
</div>";

	 
	 $insert_result=mysql_query("insert into mst_result (login,test_id,test_name,right_answer,wrong_answer,unanswered) values('$_SESSION[login]','$a','$result_test_name[test_name]','$right_answer','$wrong_answer','$unanswered')") or die("Could not perform the query");

 include("footer.php");
?>