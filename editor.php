<?php
session_start();
require("database.php");
include("header.php");
?>
<?php 
if(isset($_POST['submit']))
{
if($submit=='submit'|| strlen($subname)>0 )
{
$rs=mysql_query("select * from mst_subject where sub_name='$subname'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
	exit;
}
}
mysql_query("insert into mst_subject(sub_name) values ('$subname')",$cn) or die(mysql_error());
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<link rel="stylesheet" href="/OnlineXam/css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="/OnlineXam/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/OnlineXam/jquery/jquery-ui-1.10.4.custom.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		
	    $('#one').accordion({	//accordian for add question (dialog box = id==box)
			event:"mouseover"
		});
		
		$( "#click" ).click(function( event ) {   //open by click add question
			$( "#box" ).dialog( "open" );
			event.preventDefault();
		});
		$( "#password" ).click(function( event ) {   //open by click add question
			$( "#pass_box" ).dialog( "open" );
			event.preventDefault();
		});

		$( "#click1" ).click(function( event ) {  //open by click add subject
			$( "#box1" ).dialog( "open" );
			event.preventDefault();
		});
		$( "#click2" ).click(function( event ) {  //open by click add subject
			$( "#box2" ).dialog( "open" );
			event.preventDefault();
		});
		$('#box').dialog({      //this is main codes for dialog box which id is box ( Add Question )
			show:"bounce",
			hide:"fold",
			width:500,
			autoOpen: false,
			open: function() {
        	// On open, hide the original submit button
       		 $( this ).find( "[type=submit]" ).hide();
    			},
			buttons: [				//button code for add question
				{
					text: "Add",
            click: $.noop,
			type: "reset",
            type: "submit",
			form: "box"
				},
				{
					text: "Cancel",
					type:"reset",
					form:"box",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
			
		});
		//---END first dialog box add question--
		$('#pass_box').dialog({      //this is main codes for dialog box which id is box ( Add Question )
			show:"bounce",
			hide:"fold",
			width:500,
			autoOpen: false,
			open: function() {
        	// On open, hide the original submit button
       		 $( this ).find( "[type=submit]" ).hide();
    			},
			buttons: [				//button code for add question
				{
					text: "Update Password",
            click: $.noop,
			type: "reset",
            type: "submit",
			form: "pass_box"
				},
				{
					text: "Cancel",
					type:"reset",
					form:"pass_box",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
			
		});
		//---END first dialog box add question--
		
		$('#box1').dialog({      //this is main codes for dialog box 2 which id is box1 ( Add Subject )
			show:"bounce",
			hide:"fold",
			width:440,
			autoOpen: false,
			open: function() {
        	// On open, hide the original submit button
       		 $( this ).find( "[type=submit]" ).hide();
    			},
			buttons: [				//button code for add Subject
				{
					text: "Add",
            click: $.noop,
			type: "reset",
            type: "submit",
			form: "box1"
				},
				{
					text: "Cancel",
					type:"reset",
					form:"box1",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
			
		});
		
		//---END second dialog box add Subject--
		
		$('#box2').dialog({      //this is main codes for dialog box 3 which id is box1 ( Add Test )
			show:"bounce",
			hide:"fold",
			width:440,
			autoOpen: false,
			open: function() {
        	// On open, hide the original submit button
       		 $( this ).find( "[type=submit]" ).hide();
    			},
			buttons: [				//button code for add Test
				{
					text: "Add",
            click: $.noop,
			type: "reset",
            type: "submit",
			form: "box2"
				},
				{
					text: "Cancel",
					type:"reset",
					form:"box2",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
			
		});
		//---END last dialog box add test --
		
		 $('#click').tooltip({		// for title  (Add Subject)
			show:'slideDown',
			hide:'explode'	 
		 });
		 $('#password').tooltip({		// for title  (Add Subject)
			show:'slideDown',
			hide:'explode'	 
		 });

		 $('#click1').tooltip({		// for title  (Add Question)
			show:'slideDown',
			hide:'explode'	 
		 });
		 $('#click2').tooltip({		// for title  (Add Test)
			show:'slideDown',
			hide:'explode'	 
		 });
		 $('#logout').tooltip({		// for title  (Add Test)
			show:'slideDown',
			hide:'explode'	 
		 });
		 $('#click').draggable();
		 $('#password').draggable();
		 $('#click1').draggable();
		 $('#click2').draggable();
		 $('#logout').draggable();
    });
</script>


<style type="text/css">
	
	.demoHeaders {
		margin-top: 2em;
	}
	#click {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position:relative;
	}
	#click span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#click1 {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position:relative;
	}
	#click1 span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#password {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position:relative;
	}
	#password span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}

	#click2 {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position:relative;
	}
	#click2 span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#logout {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position:relative;
	}
	#logout span.ui-icon {
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
		width:450px;
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
<body>
	<table id="menu">
    	<tr>
        <td><p><a href="#" title="Change password" id="password" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-wrench"></span>Change Password</a></p></td><td><p><a href="#" title="Please add Subject name" id="click1" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Add Subject</a></p></td>
        <td><p><a href="#" title="Please add Question name" id="click" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Add Question</a></p></td>
        <td><p><a href="#" title="Please add Test name" id="click2" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Add Test</a></p></td>
        <td><p><a href="/OnlineXam/admin/signout.php" title="Logout Here" id="logout" class="ui-state-default ui-corner-all" title=".ui-icon-locked">
        <span class="ui-icon ui-icon-locked"></span>Logout</a></p></td></tr>
    </table>
	<iframe src="/OnlineXam/editor/list.php" scrolling="no" width="20%" height="350" name="f1"></iframe>
	  <iframe src="/OnlineXam/Editor/editor_info.php"scrolling="yes" width="79%" height="350" name="f2"></iframe> 

	<form id="box" title="Add Question" method="post" onSubmit="return check(this);" action="/OnlineXam/try_jquery_ui1.php">
	<div id="one">
    <h2>Select Test Name </h2>
    <div><select name="testid" id="testid">
    <option value="">--Select--</option>
<?php
$rs=mysql_query("Select * from mst_test order by test_name",$cn);
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?>
      </select></div>
   	<h2>Enter Question</h2>
    <div><textarea name="addque" cols="60" rows="2" id="addque" name="form1"></textarea></div>
	<h2>Enter Answer1 </h2>
    <div><input name="ans1" type="text" id="ans1" size="35" maxlength="85"></div>
    <h2>Enter Answer2 </h2>
    <div><input name="ans2" type="text" id="ans2" size="35" maxlength="85"></div>
    <h2>Enter Answer3 </h2>
    <div><input name="ans3" type="text" id="ans3" size="35" maxlength="85"></div>
    <h2>Enter Answer4</h2>
    <div><input name="ans4" type="text" id="ans4" size="35" maxlength="85"></div>
    <h2>Enter True Answer </h2>
    <div><input name="anstrue" type="text" id="anstrue" size="35" maxlength="50" pattern="[1-4]*" placeholder="1 to 4"></div>
	</div>
    <button type="submit">Add</button>
    </form>
    
    <!--End add question form-->
   <form id="box1" method="post" name="form1" action="/OnlineXam/admin/Add_subject.php" title="Add Subject">
   		<table width="100%"  border="0">
    <tr>
     <td><strong>Enter Subject Name </strong></td>
      
        <td><input name="subname" type="text" id="subname"></td>
    
      <input type="submit" name="submit" value="Add" >
    </tr>
  </table>
   </form>
   <!--End add subject form-->
   
   <form name="form2" method="post" action="/OnlineXam/admin/Add_test.php" id="box2" title="Add Test">
  <table width="100%"  border="0" align="center">
    <tr>
      <td>Enter Subject ID</td>
      <td><select name="subid">
      <option value="">--Select--</option>
<?php
$rs=mysql_query("Select * from mst_subject order by  sub_name",$cn);
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
       </td>
       </tr> 
    <tr>
        <td>Enter Test Name</td>
	  <td><input name="testname" type="text" id="testname" required></td>
    </tr>
    <tr>
      <td>Enter Total Question</td>
      <td><input name="totque" type="text" id="totque" required></td>
    </tr>
   <input type="submit" name="submit" value="Add" >
  </table>
</form>

<?php
if(isset($_POST["button"]))
{
mysql_query("UPDATE mst_user SET pass='$_POST[newpass]' WHERE user_id='$_SESSION[login]' AND pass='$_POST[oldpass]'");
	if(mysql_affected_rows() == 1)
	{
	echo "<script type='text/javascript'>alert('Password updated successfully..');</script>";
	}
	else
	{
	echo "<script type='text/javascript'>alert('Failed to update Password');</script>";
	}
}

?>
<script type="text/javascript">
function valid()
{
	if(document.form1.loginid.value=="")
	{
		alert("INVALID LOGIN ID");
		return false;
	}
   if(document.form1.oldpassword.value=="")
	{
		alert("INVALID OLD PASSWORD");
		return false;
	}
	if(document.form1.newpassword.value=="")
	{
		alert("INVALID NEW PASSWORD");
		return false;
	}
	if(document.form1.confpassword.value=="")
	{
		alert("INVALID CONFIRM PASSWORD");
		return false;
	}
}
</script>
<?php
//coding to change password
session_start();
?>
        	<form  id="pass_box" method="post" action="" title="Change Password">
     
        	  <table>
        	    <tr>
        	      <th colspan="2" scope="row">
			
				    <?php 
				echo $ctrow;	
				  ?>				  
		</th>
       	        </tr>
        	    <tr>
        	      <th scope="row">LOGIN ID</th>
        	      <td><input name="loginid" type="text" readonly value="<?php echo $_SESSION[login]; ?>"/></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">OLD PASSWORD</th>
        	      <td><input name="oldpass" type="password" required /></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">
        	        NEW PASSWORD</th>
        	      <td><input name="newpass" type="password" required/></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">
					CONFIRM PASSWORD
        	</th>
        	      <td><input name="confpass" type="password" required /></td>
      	      </tr>
        	   <input type="submit" name="button" id="button" value="UPDATE PASSWORD" />
      	    </table>
          </form>
        
      
      <?php include("footer.php"); ?>