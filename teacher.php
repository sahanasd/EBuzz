<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['pharmacist_id'];
$fname=$_SESSION['first_name'];
$lname=$_SESSION['last_name'];
$sid=$_SESSION['staff_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
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
<div id="left_column">
<div id="button">
<ul>
			<li><a href="teacher.php">Dashboard</a></li>
			<li><a href="uploading_note.php">Upload</a></li>
			<li><a href="viewupfiles.php">View</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
</div>
<div id="main">
<!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="teacher.php" class="dashboard-module">
                	<img src="images/dashboard.jpg" width="100" height="100" alt="edit" />
                	<span>Dashboard</span>
                </a>
                             
                <a href="uploading_note.php" class="dashboard-module">
                	<img src="images/download.jpg"  width="100" height="100" alt="edit" />
                	<span>Upload</span>
                </a>
	            <a href="viewupfiles.php" class="dashboard-module">
                	<img src="images/view-image.jpg" width="100" height="100" alt="edit" />
                	<span>View</span>
                </a>
              </div>
</div>
<div id="footer" align="Center"> E College Buzz 2017. Copyright All Rights Reserved @ PESIAMS, SHIMOGA</div>
</div>
</body>
</html>
