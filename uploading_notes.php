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
<h1><a href="#"><img src="images/hd_logo.jpg"></a> E College Buzz</h1></div>


<?php
include_once('connect_db.php');
$subject=$_GET["subject"];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Uploading study materials</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label >Uploading study materials for subject:<b style="text-transform: uppercase;">
<?php echo $subject; ?></b></label><br/></br/>

<div id="body">
<?php  if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
		
        <?php
	}
	else
	{
	?>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<input type="text" name="subject" style="display:none;"value="<?php echo $subject; ?>">
	<button type="submit" name="btn-upload">upload</button>
	
	</form>
    <br /><br />
	<?php }
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully... <a href="viewupfiless.php">click here to view file.</a></label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)&nbsp;&nbsp;&nbsp;<a href="teacher.php"><b>Back</b></a></label></div>
        <?php
	}
	?>
</div>



</div>

<center><div id="footer" align="Center"> E College Buzz 2017. Copyright All Rights Reserved @ PESIAMS, SHIMOGA</div></center>
</div>


</body>
</html>
