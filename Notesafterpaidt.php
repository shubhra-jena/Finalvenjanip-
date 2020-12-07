<?php
$con = mysqli_connect('localhost','root');

if($con){
	//echo "Connection successfull";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'venjantut');

$result=mysqli_query($con,"select * from login");

$row=mysqli_fetch_array($result);
$user_e = $row['email'];
//echo $user_e;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Notes After paid Teachers</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="school">
 <meta name="author" content="VR">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="javascript/js.js"></script>

<style>
	.nt9, .nt10 {
		display:inline-block;
	}
</style>

</head>
<body class="body">
    <?php
		require_once('nav.php');
	?>	
<br>			
<p style="font-size:35px;">WELCOME!</p>
<!--<p style="font-size:18px; color:#C80B41;"></p>
<p style="font-size:18px; color:#C80B41;">Class: XII</p>	
<p style="font-size:18px; color:#C80B41;">School: DAV Public School</p>-->
<p style="font-size:18px; color:#C80B41;">Email: <?php echo $user_e ?></p>			
<br>	

<hr>

<div class="nt9">
<h1 style="text-align:center;">9th Class</h1>
<div class="gallery">
  <a target="_blank" href="https://docs.google.com/document/d/1D_QCM0HDpnXWtIPvRtGTwq13N-yZtLxBH2gHXji5QEQ/edit?usp=sharing">
    <img src="images/english.png" alt="CCT101" width="370" height="200">
  </a>
  <div class="desc">English</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://docs.google.com/document/d/1D_QCM0HDpnXWtIPvRtGTwq13N-yZtLxBH2gHXji5QEQ/edit?usp=sharing">
    <img src="images/3638977.jpg" alt="Html" width="300" height="200">
  </a>
  <div class="desc">Science</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://docs.google.com/document/d/1D_QCM0HDpnXWtIPvRtGTwq13N-yZtLxBH2gHXji5QEQ/edit?usp=sharing">
    <img src="images/MATHEMATICS.PNG" alt="Database" width="300" height="200">
  </a>
  <div class="desc">Maths</div>
</div>

</div>

<br>
<br>
<br>
<hr>


<div class="nt10">
<h1 style="text-align:center;">10th Class</h1>
<div class="gallery">
  <a target="_blank" href="https://docs.google.com/document/d/1D_QCM0HDpnXWtIPvRtGTwq13N-yZtLxBH2gHXji5QEQ/edit?usp=sharing">
    <img src="images/english.png" alt="CCT101" width="370" height="200">
  </a>
  <div class="desc">English</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://docs.google.com/document/d/1D_QCM0HDpnXWtIPvRtGTwq13N-yZtLxBH2gHXji5QEQ/edit?usp=sharing">
    <img src="images/3638977.jpg" alt="Html" width="300" height="200">
  </a>
  <div class="desc">Science</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://docs.google.com/document/d/1D_QCM0HDpnXWtIPvRtGTwq13N-yZtLxBH2gHXji5QEQ/edit?usp=sharing">
    <img src="images/MATHEMATICS.PNG" alt="Database" width="300" height="200">
  </a>
  <div class="desc">Maths</div>
</div>
</div>

<div id="fix"></div>

<script>
	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
</script>

<br>
<br>
<hr>


<footer class="mainFooter">

		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/aaryan.raina.7"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/aaryan_raina/"><i class="fa fa-instagram"></i></a>
				<a href="https://www.linkedin.com/in/hemkesh-raina-90a37a146/?originalSubdomain=in"><i class="fa fa-linkedin"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
				<a href="JobOppurtunities.php"> Job Opportunities</a>
				</p>

				<p id="cpy">Venjan Tutorials&copy; 2020<br><br>I am very passionate about sharing my knowledge to the students for free!</p>
			</div>

		</footer>
</footer>
<script type="text/javascript">
	document.title="Notes After Paid Teachers";
</script>
</body>
</html>