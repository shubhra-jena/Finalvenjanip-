<?php
$con = mysqli_connect('localhost','root');

if($con){
	//echo "Connection successfull";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'venjantut');

$result=mysqli_query($con,"SELECT * from register where email in (select email from login)");

$row=mysqli_fetch_array($result);
$user_e = $row['email'];
$user_n = $row['username'];
$user_class = $row['class'];
$user_school= $row['school'];
$user_type = $row['user_type'];
$payment = $row['payement'];
$phone = $row['phoneno'];

$result1=mysqli_query($con,"SELECT * from response where PHONENO = ".$phone."");
$row=mysqli_fetch_array($result1);
$txid = $row['TXNID'];
$amount = $row['TXNAMOUNT'];
//echo $user_e;
?>
<!DOCTYPE html> 
<html lang="en">
<head>
	<title>My Profile</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="Venjan Tutorials, Jammu">
 <meta name="author" content="Venjan Kumar Raina">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="javascript/js.js="></script>

</head>
<body class="body">
    <?php
		require_once('nav.php');
	?>
<h1><i>My Account</i></h1>

<table>
  <thead>
    <tr>
	  <th scope="col">Name</th>
	  <th scope="col">Email-id</th>
	  <th scope="col">Mobile No.</th>
	  <th scope="col">Class</th>
      <th scope="col">School</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	  <td data-label="Name"><?php echo $user_n ?></td>
      <td data-label="Email-id"><?php echo $user_e ?></td>
      <td data-label="Mobile"><?php echo $phone ?></td>
      <td data-label="Class"><?php echo $user_class ?></td>
	  <td data-label="School"><?php echo $user_school ?></td>
 </tr>
  </tbody>
</table>
<br>
<br>
<a href= "changepassword.php"><input type="button" style="width:190px;float:right; !important;" value="Change Password"></a>

<br>
<br>
<table>
	<caption>Subscriptions</caption>
	<thead>
	  <tr>
		<th scope="col">Study Material</th>
		<th scope="col">Live Session</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
	  <?php
						if ($payment=="yes"){
							echo '<td data-label="Study Material">yes</td>';
							echo '<td data-label="Live Session">yes</td>';
							}
						else{
							echo '<td data-label="Study Material">no</td>';
							echo '<td data-label="Live Session">no</td>';
						}
	?>
   </tr>
	</tbody>
</table>
<br>
<table>
	<caption>Previous Transactions</caption>
	<thead>
	  <tr>
		<th scope="col">Transaction ID</th>
		<th scope="col">Transaction Amount</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
		<td data-label="Transaction ID"><?php echo $txid ?></td>
		<td data-label="Transaction Amount"><?php echo $amount ?></td>
   </tr>
	</tbody>
</table>


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
	document.title="My Profile";
</script>
</body>
</html>