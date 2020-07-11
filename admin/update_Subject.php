<?php 
ob_start();
include("../database.php");
if(!empty($_GET['id']))
{
  $id=$_GET['id'];
}
  if(isset($_POST['update']))
  {
  $eusername=$_POST['eusername'];
  $updated=mysql_query("UPDATE mst_subject SET sub_name='$eusername'WHERE sub_id='".$id."'")or die(mysql_error());
  		if($updated)
  		{
  		$msg="Successfully Updated!!";
  		header('Location:/OnlineXam/admin/Subject_update&delete.php');
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
  $query = "SELECT * FROM mst_subject WHERE sub_id='".$id."'";
  $getselect=mysql_query($query) or die(mysql_error());
  $profile=mysql_fetch_assoc($getselect);
  
    $username=$profile['sub_name'];
    
?>
<div class="display">
  <form action="" method="post" name="insertform">
    <p>
      <label for="name"  id="preinput"> Subject NAME : </label>
      <input type="text" name="eusername" required placeholder="Enter Subject name" 
      value="<?php echo $username; ?>" id="inputid" />
    </p>
    
    <p>
      <input type="submit" name="update" value="Update" id="inputid1" />
    </p>
  </form>
</div>
<?php  } ?>
</body>
</html>