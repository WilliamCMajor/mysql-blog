<?php
	include("../includes/logincheck.php");
	include("../includes/header.php");
	echo "<h2>Insert New Blog</h2>";
	$title = $_POST['title'];
	$message = $_POST['message'];

	if(isset($_POST['submit']))
	{
		if(($title != "") && ($message != ""))
		{
			$sql = "INSERT INTO blog(she_title,she_message) VALUES ('$title', '$message')";
			$result = mysqli_query($con,$sql) or die (mysqli_error($con));
			$userPrompt = "New Characters Inserted!";
		}
		else{
			$userPrompt = "Please fill out all fields";
		}
	}
?>

<form id="myform" name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
		</div>

		<div class="form-group">
			<label for="message">Message:</label>
			<textarea name="message" class="form-control"><?php //echo $message; ?></textarea>
			<div class="pull-right">
				<a href="javascript:emoticon(':)')"><img src="../emoticons/001-happy.svg" alt="" width="25" height="25" border="0"></a>
				<a href="javascript:emoticon(':D')"><img src="../emoticons/002-laughing.svg" alt="" width="25" height="25" border="0"></a>
				<a href="javascript:emoticon('t.t')"><img src="../emoticons/003-crying.svg" alt="" width="25" height="25" border="0"></a>
				<a href="javascript:emoticon('#angry')"><img src="../emoticons/004-angry.svg" alt="" width="25" height="25" border="0"></a>
				<a href="javascript:emoticon('#tongue')"><img src="../emoticons/005-tongue.svg" alt="" width="25" height="25" border="0"></a>
			</div>
		</div>

		<div class="form-group">
			<label for="submit">&nbsp;</label>
			<input type="submit" name="submit" class="btn btn-info" value="Add Message">
		</div>

	<?php	
		if($userPrompt){
			echo "<div>$userPrompt</div>";
		}
	?>


</form>
<?php
	include("../includes/footer.php");
?>