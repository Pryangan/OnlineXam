<?php 
ob_start();
include("../database.php");
if(!empty($_GET['id']))
{
  $id=$_GET['id'];
}
  if(isset($_POST['update']))
  {
  $Subject_ID=$_POST['Subject_id'];
  $Test_name=$_POST['Test_name'];
  $Total_question=$_POST['Total_question'];
  $updated=mysql_query("UPDATE mst_test SET sub_id='$Subject_ID',test_name='$Test_name',total_que='$Total_question' WHERE test_id='".$id."'")or
   die(mysql_error());
  		if($updated)
  		{
  		$msg="Successfully Updated!!";
  		header('Location:\OnlineXam\admin\test_update&delete.php');
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
  $query = "SELECT * FROM mst_test WHERE test_id='".$id."'";
  $getselect=mysql_query($query) or die(mysql_error());
  $profile=mysql_fetch_assoc($getselect);
  
    $Subject_id=$profile['sub_id'];
	$testName=$profile['test_name'];
	$totalQuestion=$profile['total_que'];	
?>
<div class="display">
  <form action="" method="post" name="insertform">
    <p>
      <label for="name"  id="preinput"> Subject Id : </label>
      <input type="text" name="Subject_id" required placeholder="Enter Subject name" id="inputid" value="<?php echo $Subject_id; ?>"/>
    </p>
     <p>
      <label for="name"  id="preinput"> Test Name : </label>
      <input type="text" name="Test_name" required placeholder="Enter Subject name" 
      value="<?php echo $testName; ?>" id="inputid" />
    </p>
     <p>
      <label for="name"  id="preinput"> Total Question : </label>
      <input type="text" name="Total_question" required placeholder="Enter Subject name" 
      value="<?php echo $totalQuestion; ?>" id="inputid" />
    </p>
    <p>
      <input type="submit" name="update" value="Update" id="inputid1" />
    </p>
  </form>
</div>
<?php  } ?>
</body>
</html>