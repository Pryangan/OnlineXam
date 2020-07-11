<?php 
session_start();
require("database.php");
?>
<html>
	<head>
	<script type="text/javascript" src="/OnlineXam/jquery/jquery.js"></script>
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
	</style>
	</head>
	<?php $result=mysql_query("select * from mst_subject");
			?>
	<body>
		<nav>
    <ul>
        <li><a href="/OnlineXam/index1.php">Home</a></li><!--End Home-->
		<?php while($row=mysql_fetch_array($result)){
			$p=$row['sub_id'];
			$result1=mysql_query("select * from mst_test where sub_id=$p");
		?>
        <li class="dropdown">
            <a href="#" name="<?php echo $p;?>"><?php echo $row['sub_name'];?></a>
			<?php 
		
			while($row1=mysql_fetch_array($result1)){
				$p1=$row1['test_id'];
			?>	
            <ul class="sub-menu">
                 <li class="dropdown">
                    <a href="/OnlineXam/justtry.php?id=<?php echo $p1;?>"><?php echo $row1['test_name'];?></a>
                
                </li>
            </ul>
			<?php } ?>
        </li><?php } ?>
		<li><a href="/OnlineXam/signout.php">logout</a></li>
        ...
            </ul>
        
	</nav>
</html>	