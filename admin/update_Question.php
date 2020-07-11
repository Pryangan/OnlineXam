<?php 
ob_start();
include("../database.php");
if(!empty($_GET['id']))
{
  $id=$_GET['id'];
}
  if(isset($_POST['update']))
  {
  $question=$_POST['eusername'];
  $answer_1=$_POST['answer_1'];
  $answer_2=$_POST['answer_2'];
  $answer_3=$_POST['answer_3'];
  $answer_4=$_POST['answer_4'];
  $true_answer=$_POST['true_answer'];
  $updated=mysql_query("UPDATE mst_question SET que_desc='$question',ans1='$answer_1',ans2='$answer_2',
  ans3='$answer_3',ans4='$answer_4',true_ans='$true_answer' WHERE que_id='".$id."'")or die(mysql_error());
  		if($updated)
  		{
  		$msg="Successfully Updated!!";
  		header('Location:\OnlineXam\admin\question_update&delete.php');
  		}
	}  //update ends here
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<?php 
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $query = "SELECT * FROM mst_question WHERE que_id='".$id."'";
  $getselect=mysql_query($query) or die(mysql_error());
  $profile=mysql_fetch_assoc($getselect);
  
    $question=$profile['que_desc'];
	$answer1=$profile['ans1'];
	$answer2=$profile['ans2'];
	$answer3=$profile['ans3'];
	$answer4=$profile['ans4'];
	$true_ans=$profile['true_ans'];
    
?>
<div class="display">
  <form action="" method="post" name="insertform">
    <p>
      <label for="name"  id="preinput"> Question : </label>
      <textarea rows="2" cols="40 "name="eusername" required placeholder="Enter Subject name" id="inputid"><?php echo $question; ?></textarea>
    </p>
     <p>
      <label for="name"  id="preinput"> Answer 1 : </label>
      <input type="text" name="answer_1" required placeholder="Enter Subject name" 
      value="<?php echo $answer1; ?>" id="inputid" />
    </p>
     <p>
      <label for="name"  id="preinput"> Answer 2 : </label>
      <input type="text" name="answer_2" required placeholder="Enter Subject name" 
      value="<?php echo $answer2; ?>" id="inputid" />
    </p>
     <p>
      <label for="name"  id="preinput"> Answer 3 : </label>
      <input type="text" name="answer_3" required placeholder="Enter Subject name" 
      value="<?php echo $answer3; ?>" id="inputid" />
    </p>
     <p>
      <label for="name"  id="preinput"> Answer 4 : </label>
      <input type="text" name="answer_4" required placeholder="Enter Subject name" 
      value="<?php echo $answer4; ?>" id="inputid" />
    </p>
     <p>
      <label for="name"  id="preinput"> True Answer : </label>
      <input type="text" name="true_answer" required placeholder="Enter Subject name" 
      value="<?php echo $true_ans; ?>" id="inputid" />
    </p>
    <p>
      <input type="submit" name="update" value="Update" id="inputid1" />
    </p>
  </form>
</div>
<?php  } ?>
</body>
</html>