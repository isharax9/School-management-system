<?php
$title = "Upload Document";
$javascript = "../Script/uploadval.js";
include('header.php');
?>

<?php include('sideBar.php'); ?>
 
<td align="center">
    <fieldset>
        <form class="" name="FilesUpload" action="../Controller/uploadCheck.php" onsubmit="return val()" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend class="textlegend">Upload assignments Answers</legend><br><br>
                <input type="file" id="picture" name="picture"><br>
                <hr>
                <input type="submit" name="submit" value="submit">
                
                <colspan="3">
                    <center>
                        <div id="error_messege">
                        </div>
                    </center>
                
            </fieldset>
            
               
        </form>
    </fieldset>
</td>
</tr>

<?php include('footer.php'); ?>