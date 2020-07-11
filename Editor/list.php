<link rel="stylesheet" href="/OnlineXam/css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="/OnlineXam/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/OnlineXam/jquery/jquery-ui-1.10.4.custom.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#wrapper').sortable();
});
</script>
<style type="text/css">
ul#wrapper{
	list-style-type:none;	
}
ul#wrapper li{
	border:1px solid red;
	width:150px;
	height:25px;
	line-height:25px;
	background:#333;
	text-align:center
}
/* unvisited link */
a:link {
    color: #FF0000;
}

/* visited link */
a:visited {
    color:#FFF;
}

/* mouse over link */
a:hover {
    color: #FF00FF;
}

/* selected link */
a:active {
    color: #0000FF;
}

</style>
<body bgcolor="#CCCCFF"><h3><B>Editor Dashboard</B></h3>
<ul type="1" id="wrapper">
<li><a href="/OnlineXam/admin/Subject_update&delete.php" target="f2">Subject</a></li>
<li><a href="/OnlineXam/admin/test_update&delete.php" target="f2">Test</a></li>
<li><a href="/OnlineXam/admin/question_update&delete.php" target="f2">Question</></li>
</ul>

</body>