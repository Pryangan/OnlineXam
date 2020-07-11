<?php 
	session_start();
 	include("header.php");
	include("dropbox11.php");
	?>
    
    <script type="text/javascript" src="/OnlineXam/jquery/jquery.js"></script>
    <script type="text/javascript" src="/OnlineXam/jquery/selector.js"></script>
    <link rel="stylesheet" href="/OnlineXam/css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="/OnlineXam/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/OnlineXam/jquery/jquery-ui-1.10.4.custom.js"></script>
<head>
    
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
		nav {
    background-color:rgb(255,100,100);
    padding:10px 0;
	height:5%;
}
nav ul {
    list-style-type:none;
    margin:0;
    padding:0;
}
nav ul li {
    display:inline-block;
    position:relative;
}
/* sub navigation */
nav li ul {    
    background-color:rgb(225,75,75);
    position:absolute;
    left:0;
    top:40px; /* make this equal to the line-height of the links (specified below) */
    width:200px;
}
nav li li {
    position:relative;
    margin:0;
    display:block;
}
nav li li ul {
    position:absolute;
    top:0;
    left:200px; /* make this equal to the width of the sub nav above */
    margin:0;
}
/* style all links */
nav a {
    line-height:40px;
    padding:0 12px;
    margin:0 12px;
}
nav a {
    color:#fff;
    text-decoration:none;
    display:block;
}
nav a:hover,
nav a:focus,
nav a:active {
    color:rgb(50,50,50);
}

/* style sub level links */
nav li li a {
    border-bottom:solid 1px rgb(200,50,50);
    margin:0 10px;
    padding:0;
}
nav li li:last-child a {
    border-bottom:none;
}

/* show arrows for dropdowns */
nav li.dropdown > a {
    background-image:url('../img/arrow-down.png');
    background-position:right 20px;
    background-repeat:no-repeat;
}

nav li li.dropdown > a {
    background-image:url('../img/arrow-right.png');
    background-position:right 16px;
    background-repeat:no-repeat;
}
/* hide sub menu links */
ul.sub-menu {
    display:none;
}
.text3
{
box-shadow:1px 1px 45px #333;
transition: 200ms all ease;
border:none;
padding: 5px 5px;
}
.text3:hover
{

margin:-5px 0 0 -5px;
height:29px;
width:250px;

}
.text4
{
box-shadow:1px 1px 45px #333;
transition: 200ms all ease;
border:none;
padding: 5px 5px;
}
.text4:hover
{

margin:-5px 0 0 -5px;
height:100px;
width:250px;

}

	</style>
    
		
<script language="javascript">
function checkForm(form)
{
    if(form2.lid.value == "") {
      alert("Error: Username cannot be blank!");
      form2.lid.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form2.lid.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form2.lid.focus();
      return false;
    }

    if(form2.pass.value != "" && form2.pass.value == form2.cpass.value) {
      if(form2.pass.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form2.pass.focus();
        return false;
      }
      if(form2.pass.value == form2.lid.value) {
        alert("Error: Password must be different from Username!");
        form2.pass.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form2.pass.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pass.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form2.pass.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pass.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form2.pass.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form2.pass.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form2.pass.focus();
      return false;
    }

    alert("You entered a valid password: " + form2.pass.value);
    return true;

   return true;
  }
  
</script>


<style type="text/css">
.textbox_bg_col
{
	background-color:#FFFFC4;
}
.font
{
	font-family:"Times New Roman", Times, serif;
	font-size:30px;
}
#menu{
		background-color:rgb(255,100,100);;
		width:100%;
		height:40px;
	}
</style>
    <table width="100%" border="0" bgcolor="#ccf">
  <tr>
    <td width="61%" rowspan="2" valign="top"><div align="center">
        <h1 class="style8">STUDENT<br/>Welcome to Online Examination</h1>
      <img src="/OnlineXam/images/Slice32.jpg" height="200" width="300" />
            <blockquote>
          <p align="left" class="style5"><span class="style7">Wel Come to Online 
            exam. This Site will provide the quiz for various subject of interest. 
            You need to login for the take the online exam.</span></p>
      </blockquote>
    </div></td>
    <td width="39%"><form id="form1" name="form1" method="post" action="login.php">
   				<table width="100%" border="0px" style="border: 1px solid #96F;" bgcolor="#CC99FF">
                <tr><th colspan="2"><h2>Login Here</h2></th></tr>  
      <tr><td width="30%" align="center"> Login ID:</td><td width="70%" align="center">
      <input name="login" type="text" id="login" size="30"  class="textbox_bg_col"/></td></tr>
 		<tr><td align="center"> Password:</td><td align="center">   
       <input name="password" type="password" id="password" class="textbox_bg_col" size="30" /></td></tr>
    	<tr><td colspan="2" align="center">
      <input type="submit" name="btnlogin" id="btnlogin" value="Login" style="background-color:#00C; color:#FFF" /></td></tr>
     </table> </form></td>
  </tr>
    <tr>
    <td><form id="form2" name="form2" method="post"  action="signupuser.php" onsubmit="return checkForm(this);">
    <table width="100%" border="0" style="border: 1px solid #96F;" bgcolor="#CC99FF">
      <tr>
        <th scope="col" colspan="2"><h2>New User Signup</h2></th>
      </tr>
      <tr>
        <td width="30%" align="center">Login ID:</td>
        <td width="70%">
         <input type="text" name="lid" size="30" class="textbox_bg_col" required="required">
        </td>
      </tr>
      <tr>
        <td align="center">Password:</td>
        <td>
          <input type="password" name="pass" size="30" id="status" class="textbox_bg_col" required="required"> <span class="first"></span>
        </td>
      </tr>
      <tr>
        <td align="center">Confirm Password:</td>
        <td>       
          <input name="cpass" type="password" id="cpass" size="30" class="textbox_bg_col"  required="required">
        </td>
      </tr>
      <tr>
        <td align="center">Name:</td>
        <td>          
          <input name="name" type="text" id="name" size="30" class="textbox_bg_col" required="required">
       </td>
      </tr>
      <tr>
        <td align="center">Address:</td>
        <td>   
           <textarea name="address" id="address" cols="27" rows="4" class="textbox_bg_col" required="required"></textarea></td>
      </tr>
      <tr>
        <td align="center">City:</td>
        <td>          
          <input name="city" type="text" id="city"  size="30" class="textbox_bg_col" required="required">
        </td>
      </tr>
      <tr>
        <td align="center">Phone:</td>
        <td><input name="phone" type="text" id="phone" size="30" pattern="[0-9]*"  class="textbox_bg_col" required="required"></td>
      </tr>
      <tr>
        <td align="center">E-mail:</td>
        <td>
          <input name="email" type="email" id="email" size="30" class="textbox_bg_col" required="required">
        </td>
      </tr>
        <td  colspan="2" align="center"><input type="submit" name="Submit" value="SignUp" style="background-color:#00C; color:#FFF">&nbsp;<input type="reset" value="Clear" style="background-color:#00C; color:#FFF"></td>
       
      </tr>
    </table></td>
  </tr>
</form>     
        
<?php include("footer.php"); ?>