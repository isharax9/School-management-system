<?php
$title= "Request for Books";
$javascript = "../Script/requestbook.js";
include('header.php');
?>

<?php include('sideBar.php'); ?> 
        <td align="center">
            <fieldset>
                <legend class="textlegend">Request for Books </legend>
              

            <form class="" action="" method="post">
               <table>  
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="STUDENT ID" value="<?php echo $_COOKIE['id']; ?>"> </td>
                </tr>
                <tr>
                    <td>Book Name</td> 
                    <td><input type="text" onkeyup="ajax()" name="name" id="name"> </td>
                </tr>
    
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="Request" value="Request"> 
                    </td>
                </tr>
    
               </table>
    
            </form>
            </fieldset>
            <div id="myh1" class="">
            </div>

        </td>
        
      </tr>

      <?php include('footer.php'); ?>