<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
$select='select * from markstable where marks_id="'.$_REQUEST['id'].'"';
$query=mysql_query($select);
$fetch=mysql_fetch_array($query); ?>
<!doctype html>
<html>
<head>
<style>
body{
	background:url(worldmap3.png);
	background-size:cover;
	margin:0px;
}
.header{
background:rgba(191, 64, 26, 0.31);
	margin-top:0px;
	padding:10px;
	color:#336;
	height:40px;
}
.logimg{
	float:right;
}
td{
	color:#933;
}
.for{
margin-left:400px;
margin-top:120px;
}
</style>
</head>

<body>
<div class="header">
<img src="logo.png" />
<div class=logimg>       
<a href="logout1.php"><img src="logout.png" alt="" ></a>  
</div>
</div>
<div class=for> 
<form   method="post" action="marksupdate.php">
Roll Number:<?php echo $_REQUEST['roll_num']?>
<input type="hidden" name="marks_id" value="<?php echo $_REQUEST['id'];?>">
<input type="text" name="marks">

<input  type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>
