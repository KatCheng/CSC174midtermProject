<?php
  // Step 1: Create a database connection
  $dbhost = "66.147.242.186";
  $dbuser = "urcscon3_xcheng5";
  $dbpass = "coffee1N";
  $dbname = "urcscon3_xcheng5";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  $email = Trim(stripslashes($_POST['email']));
  // Step 2: Perform teh database query
  $query = "INSERT INTO email (email) VALUES ('$email')";
  $result = mysqli_query($connection, $query);
?>

<?php $currentTitle = 'RECEIPT'; include "inc/html-top.inc"; ?>
<div class="navigation">
  <span class="navigation-image">
<img src="media/Shin_chan.gif" alt="header" title="header">
</span>
<?php include "inc/nav.inc" ?>
<?php include "inc/thanks.inc" ?>
</div>

<div class="receipt">
<p>Thank you for signing up!</p>
<p>You will start receiving messages from Shin-chan at:</p>
<p><?php echo $email; ?></p>
<p>Shin-chan will mail you a box of cookie every month!</p>
<p>You may unsubscribe at anytime by clicking the link in the email.</p>
<p>Hope you have a great time with Shin-chan!</p>

<a href="index.php">Go Back</a>
</div>

<?php include "inc/scripts.inc"; ?>
		</body>
</html>
