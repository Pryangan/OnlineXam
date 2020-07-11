	<script type="text/javascript" src="/OnlineXam/jquery/jquery.js"></script>
    <link rel="stylesheet" href="/OnlineXam/css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="/OnlineXam/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/OnlineXam/jquery/jquery-ui-1.10.4.custom.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
$('.dropdown').hover(
function(){
$(this).children('.sub-menu').slideDown(200,stop()); 
},
function(){
$(this).children('.sub-menu').slideUp(200,stop()); 
}
);
function stop(){
$('.sub-menu').stop(true, true);
}
$( "#About" ).click(function( event ) {   //open by click add question
			$( "#about" ).dialog( "open" );
			event.preventDefault();
		});
		$('#about').dialog({      //this is main codes for dialog box which id is box ( Add Question )
			show:"bounce",
			hide:"fold",
			width:700,
			autoOpen: false,
			
			buttons: [				//button code for add question
				{
					text: "Cancel",
					type:"reset",
					form:"about",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
			
		});
		
		$( "#Contact" ).click(function( event ) {   //open by click add question
			$( "#contact" ).dialog( "open" );
			event.preventDefault();
		});
		$('#contact').dialog({      //this is main codes for dialog box which id is box ( Add Question )
			show:"bounce",
			hide:"fold",
			width:350,
			autoOpen: false,
			open: function() {
        	// On open, hide the original submit button
       		 $( this ).find( "[type=submit]" ).hide();
    			},
			buttons: [
			{
					text: "Submit",
            click: $.noop,
			type: "reset",
            type: "submit",
			form: "box"
				},				//button code for add question
				{
					text: "Cancel",
					type:"reset",
					form:"contact",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
			
		});

});
	</script>
	<style type="text/css">
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
	
	
		<nav>
    <ul>
        <li><a href="#" title="About Us" id="About">About Us</a></li>
        <li><a href="#" title="Contact Us" id="Contact">Contact Us</a></li>
       
    </ul>
	</nav>

 <form  id="about" name="about" title="About Us">
     
        	  <table>
        	   <tr><td>
               Smart Crack helps students to gain high confidence by giving a large number of Online Test. Online Test is the recent requirement for most of the IT students and freshers. It is also an upcoming trend for several others off campus and on campus. Programming skills provides Online Test papers and tutorials on programming languages like C, Java, .Net, PHP, HTML, and Aptitude etc. Here you can check your everyday increasing performance which will help you to grow your confidence and very helpful for your future enhancements. All the test papers and tutorials are very useful and important. Programming skills provide the opportunity for you to test your proficiency level in various programming languages. We have based this test on the java technologies, .Net technologies and web development technologies. We provides these tests for self evaluation purposes only. You will find that your result on this online test is not consistent with other tests you have already given. Smart Crack is very helpful for students especially whose belongs to computers fields. In Smart Crack you can check your knowledge. Here more than hundred online tests set on different programming languages (like C, java, PHP and HTML) and aptitude. Here you can find out many FAQ´s and also interview questions-answers, HR questions-answers. You can send queries regarding your subject doubts, you can contact us. Smart Crack has supported online tests successfully for several years, and have progressively improved the process over the years to accommodate more students and ensure a smoother online exam taking experience for students. You can save and view your result for checking your increasing performance. And many facilities are also here so let´s enjoy with Smart Crack.
               </td></tr>
      	    </table>
          </form>

      
        <form  id="contact" name="contact" title="Contact Us">
     
        	  <table>
        	   <tr><td align="center" width="30px" height="10" bgcolor="#DADADA"><span class="ui-icon ui-icon-person">></span></td><td><input type="text" name="t1" placeholder="Name" class="text3" /></td></tr>
               <tr><td align="center" width="10px" height="10" bgcolor="#DADADA"><span class="ui-icon ui-icon-mail-closed"></span></td><td><input type="email" name="t2" placeholder="Emali Address" class="text3"/></td></tr>
               <tr><td align="center" width="10px" height="10" bgcolor="#DADADA"><span class="ui-icon ui-icon-contact"></span></td><td><input type="text" pattern="[0-9]" name="t3" placeholder="Mobile No." class="text3"/></td></tr>
               <tr><td align="center" width="10px" height="10" bgcolor="#DADADA"><span class="ui-icon ui-icon-flag"></span></td><td><input type="text" name="t4" placeholder="Country" class="text3"/></td></tr>
               <tr><td align="center" width="10px" height="10" bgcolor="#DADADA"><span class="ui-icon ui-icon-clipboard"></span></td><td><input type="text" name="t5" placeholder="Subject" class="text3"/></td></tr>
               <tr><td align="center"  bgcolor="#DADADA"><span class="ui-icon ui-icon-comment"></span></td><td><textarea cols="22" placeholder="Enter Your massage for us here." class="text4"></textarea></td></tr>
               <tr><td align="center" colspan="2"><input type="submit"/></td></tr>
      	    </table>
          </form>
	