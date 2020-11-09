<?php
include("../includes/logincheck.php");
include("../includes/header.php");

echo "<h2>Edit Blog</h2>";
$blogID = $_GET['bid'];
if(!isset($blogID)){
    $result = mysqli_query($con,"SELECT * FROM blog LIMIT 1") or die (mysqli_error($con));
    while($row = mysqli_fetch_array($result))
    {
        $blogID = $row['bid'];
    }
}  

// IF user submits changes, then get the new info and update to database
if(isset($_POST['submit']))
{
    $newtitle = $_POST['title'];
    $newMessage = $_POST['message'];
    
    $sql = "UPDATE blog
            SET she_title = '$newtitle',
                she_message = '$newMessage'
                WHERE bid = '$blogID'";
    $x = mysqli_query($con,$sql) or die(mysqli_error($con));
    
} 

// IF user click delete button, then delete info and update to database
if(isset($_POST['delete']))
{   
    $sql = "DELETE blog
            WHERE bid = '$blogID'";
    $x = mysqli_query($con,$sql) or die(mysqli_error($con));
    header("Location:edit.php");
    
} 

// Get all existing records and create dynamic nav system
$result = mysqli_query($con,"SELECT * FROM blog ORDER BY bid DESC") or die(mysqli_error($con));
while($row = mysqli_fetch_array($result)){
    $thisTitle = $row['she_title'];
    $thisID = $row['bid'];
    $thisDate = strtotime($row["timedate"]);// retrieve data from DB 
    $thisDate = date("F j, Y g:i a",$thisDate); // modify using date() function
    $allLinks .= "\n\t\t<a href=\"edit.php?bid=$thisID\" >$thisTitle</a><br />";
    $thisPage = $_SERVER['PHP_SELF']."?bid=".$thisID;

    if($thisID == $blogID)
    {
        $thisLink .= "\n<option value=\"$thisPage\" selected=\"selected\">$thisTitle | $thisDate </option>\n"; 

    }else
    {
        $thisLink .= "\n<option value=\"$thisPage\">$thisTitle | $thisDate </option>\n"; 
    }
    
}

// Get the existing content for the selected character to prepopulate form fields
$result2 = mysqli_query($con,"SELECT * FROM blog WHERE bid = $blogID");
while($row = mysqli_fetch_array($result2)){
    $charTitle = $row['she_title'];
    $charDesc = $row['she_message'];
    
}

?>

<div class="row">
    <div class="col-md-12">      
        <form id="myform" name="myform" method="post" action="">

            <div class="form-group">
                <div>Select a Blog Entry to edit</div>
                <select name="entryselect" class="form-control" onchange="go()">
                    <?php echo $thisLink; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="<?php echo $charTitle; ?>">
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" class="form-control"><?php echo $charDesc; ?></textarea>
                <div class="pull-right">
                    <a href="javascript:emoticon(':)')"><img src="../emoticons/001-happy.svg" alt="" width="25" height="25" border="0"></a>
                    <a href="javascript:emoticon(':D')"><img src="../emoticons/002-laughing.svg" alt="" width="25" height="25" border="0"></a>
                    <a href="javascript:emoticon('t.t')"><img src="../emoticons/003-crying.svg" alt="" width="25" height="25" border="0"></a>
                    <a href="javascript:emoticon('#angry')"><img src="../emoticons/004-angry.svg" alt="" width="25" height="25" border="0"></a>
                    <a href="javascript:emoticon('#tongue')"><img src="../emoticons/005-tongue.svg" alt="" width="25" height="25" border="0"></a>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info" value="Update Blog">
            </div>                    
        </form>
    </div>

</div>

<button class="btn btn-danger" name="delete" onclick="if((confirm('Are you sure?'))!= false) {return location.href = 'delete.php?id=<?php echo $blogID;?>'};">Delete Blog</button>

<?php
	include("../includes/footer.php");
?>