<?php
include("../includes/header.php");
    $userName = $_POST['username'];
    $pswd = $_POST['password'];
    //authenticate user
    if(($userName == "she8") && ($pswd == "2020"))
    {
        session_start(); //start a session
        $_SESSION['dwq2as1sa'] = session_id(); //name of the session
        if(isset($_POST['submit'])){
            header("Location: edit.php");
        }
        
    }else{
        if($userName != "" && $pswd != "")
        {
            $msg = "Invalid Login";
        }
        else{
            $msg = "Please enter a Username and Password";
        }
    }
?>
<h2>Please Login</h2>
<form id="myform" name="myform" method="post" action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<label for="submit">&nbsp;</label>
			<input type="submit" name="submit" class="btn btn-info" value="Submit">
		</div>



</form>
<?php
    if(isset($msg)){
        echo "<div>$msg</div>";
    }

	include("../includes/footer.php");
?>