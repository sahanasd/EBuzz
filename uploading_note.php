<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> E College Buzz</title>
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


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Uploading study materials</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Uploading study materials</label><br/></br/>

<div id="body">
	<div id="main">
<!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="uploading_notes.php?subject=c" class="dashboard-module">
                	<img src="images/c.jpg" width="100" height="100" alt="edit" />
                	<span>C</span>
                </a>
                             
                <a href="uploading_notes.php?subject=cpp" class="dashboard-module">
                	<img src="images/c++.png"  width="100" height="100" alt="edit" />
                	<span>C++</span>
                </a>
	            <a href="uploading_notes.php?subject=java" class="dashboard-module">
                	<img src="images/java.png" width="100" height="100" alt="edit" />
                	<span>JAVA</span>
                </a>
				<a href="uploading_notes.php?subject=ds" class="dashboard-module">
                	<img src="images/ds.jpg" width="100" height="100" alt="edit" />
                	<span>DS</span>
                </a>
				<a href="uploading_notes.php?subject=cg" class="dashboard-module">
                	<img src="images/cg.jpg" width="100" height="100" alt="edit" />
                	<span>CG</span>
                </a>
				<a href="uploading_notes.php?subject=unix" class="dashboard-module">
                	<img src="images/unix.png" width="100" height="100" alt="edit" />
                	<span>UNIX</span>
                </a>
				<a href="uploading_notes.php?subject=dotnet" class="dashboard-module">
                	<img src="images/.net.png" width="100" height="100" alt="edit" />
                	<span>.NET</span>
                </a>
              </div>
</div>
</div>



</div>

<center><div id="footer" align="Center"> E College Buzz 2017. Copyright All Rights Reserved @ PESIAMS, SHIMOGA</div></center>
</div>


</body>
</html>
