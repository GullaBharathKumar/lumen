<html>
<head>
<title>Index</title>
<style>
.footer {
position: fixed;
left: 0;
bottom: 0;
font-weight:bold;
width: 100%;
background : #FF8C00;
color: white;
text-align: center;
}
table {
width:20%;
border-collapse: collapse;
text-align:center;
background-color:#F0F8FF;
}
th{
padding: 20px;
background-color:#7FFFD4;
}
td{
padding: 20px;
background-color#F0FFFF:
text-align:center;
}
</style>
</head>
<body>
<form name="form1" method="post">
<table align="center" width="70%" border="0" cellpadding="3" cellspacing="1">
<br/>
<tr>
<th>Name : </td>
<th><input name="uname" type="text" required</th>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" value="SUBMIT"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['Submit']))
{
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'h:i:s A', time () );
$uname=$_POST["uname"];
session_start();
$_SESSION["name"] = $_POST["uname"];
$_SESSION["stime"] = $currentTime;
header('Location: Home.php');
}
?>
<div class="footer" >
<p>&copy B.MADHUSUDHAN REDDY-19'553-19'553 - all rights --reserved</p>
</div>
</body>
</html>