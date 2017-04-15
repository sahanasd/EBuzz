<?php
include_once('connect_db.php');

?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> - E College Buzz</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>
#left_column{
height: 470px;
}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="images/hd_logo.JPG"></a> E College Buzz</h1></div>


<?php
include_once('connect_db.php');
$subject= $_GET["subject"];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<hr>


<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="4">your files on...<label style="text-transform: uppercase;"><?php echo $subject; ?></label></th>
    </tr>
    <tr>
    <th>File Name</th>
    <th>File Type</th>
    <th>File Size(KB)</th>
    <th>View</th>
    </tr>
    <?php
	$sql="SELECT * FROM tbl_uploads where subject='".$subject."'";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
		</tr>
        <?php
	}
	?><tr>
		<td cellpadding=4 align="center" colspan=4 rowspan=2><a href="teacher.php"><b>Back</b></a></td></tr>
        
    </table>
    
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="footer" align="Center"><center> E College Buzz 2017. Copyright All Rights Reserved @ PESIAMS, SHIMOGA</center></div>
</div>
</body>
</html>