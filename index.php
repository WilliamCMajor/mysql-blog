<?php
include("includes/header.php");
include("includes/_functions.php");
?>

<div class="row">
  <div class="col-md-12">
    <h1><?php echo APP_NAME; ?></h1>

<?php //pagination 
      $getcount = mysqli_query ($con,"SELECT COUNT(*) FROM blog"); 
      $postnum = mysqli_result($getcount,0);// this needs a fix for MySQLi upgrade; see custom function below 
      $limit = 5; 

      if($postnum > $limit){ 
          $tagend = round($postnum % $limit,0); 
          $splits = round(($postnum - $tagend)/$limit,0); 
          if($tagend == 0)
          {
            $num_pages = $splits; 
          }else
          { 
            $num_pages = $splits + 1; 
          } 
          if(isset($_GET['pg']))
          { 
            $pg = $_GET['pg']; 
          }else
          { 
            $pg = 1; 
          } 
          $startpos = ($pg*$limit)-$limit; 
          $limstring = "LIMIT $startpos,$limit"; 
      }else
      { 
        $limstring = "LIMIT 0,$limit"; 
      } // MySQLi upgrade: we need this for mysql_result() equivalent

      function mysqli_result($res, $row, $field=0) { 
        $res->data_seek($row); 
        $datarow = $res->fetch_array(); 
        return $datarow[$field]; 
      }
      $result = mysqli_query($con,"SELECT * FROM blog ORDER BY bid DESC $limstring");
      
?>

<?php while($row = mysqli_fetch_array($result)): ?>
    <div class="card">
        <h3 class="card-header"><?php echo $row['she_title']; ?></h3>
        <div class="card-body">
            <div class="timedate pull-right">
                <?php
                    $date = strtotime($row['she_timedate']); /* fixes niggly MySQL to PHP date problem */
                    echo date("F j, Y - g:i a", $date);
                ?>
            </div>
    
            <div class="card-text">
                <?php
                    echo addEmoticons(makeClickableLinks($row['she_message']));
                ?>
            </div>
        </div>
    </div> <!-- end of blog-entry -->
<?php endwhile; ?>

<nav aria-label="Page navigation">
    <ul class="pagination pagination-nav">
        <?php //pagination links: perhaps put these BELOW where your results are echo'd out. 
        if($postnum > $limit)
        { 
        echo "<li class=\"page-item page-link\"><strong>Pages:</strong> &nbsp;&nbsp;&nbsp;</li>"; 
        $n = $pg + 1; 
        $p = $pg - 1; 
        $thisroot = $_SERVER['PHP_SELF']; 
        if($pg > 1){ 
            echo "<li class=\"page-item\"><a class=\"page-link\" href=\"$thisroot?pg=$p\"><< prev</a></li>"; 
            } 
            for($i=1; $i<=$num_pages; $i++){
    
            if($i!= $pg){ 
                echo "<li class=\"page-item\"><a class=\"page-link\" href=\"$thisroot?pg=$i\">$i</a></li>"; 
            }else{ 
                echo "<li class=\"page-item active\"><a class=\"page-link\" href=\"#\">$i</a></li>"; 
                } 
            } 
            if($pg < $num_pages){
    
            echo "<li class=\"page-item\"><a class=\"page-link\" href=\"$thisroot?pg=$n\">next >></a></li>";
    
            } 
            echo "&nbsp;&nbsp;"; 
        } // ambitious students may want to reformat this. Perhaps use Bootstraps pagination markup. ////////////// end pagination 
        ?>
    </ul>
</nav>

  </div>
</div>

<?php

include("includes/footer.php");
?>