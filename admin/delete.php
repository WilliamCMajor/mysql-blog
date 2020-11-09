<?php
include("../includes/logincheck.php");
include("../includes/header.php");

$charID = $_GET['id'];
if(!isset($charID))
{
    echo "No ID is existing";
    exit();
}

$result = mysqli_query($con, "DELETE FROM blog WHERE bid=$charID") or die(mysqli_error($con));
header("Location: edit.php");
?>