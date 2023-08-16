<?php
$title = "Edit Profile";
include('header.php');
include_once('../model/DatabaseConnection.php');
$isbn= $_GET['id'];
$viemyinfo = getbookbyisbn($isbn);
$User = getUserById($_COOKIE['id']);
$_SESSION['isbn'] = $isbn;
?>

<?php include('sideBar.php'); ?>
<td> 
  <fieldset>
    <legend>Request Book</legend>
    <form class="" action="../Controller/requestbookCheck.php"  method="post">
      <table>
        
        
      <tr>
          <td>Student id</td>
          <td>:</td>
          <td> <input type="number" id="id" name="id" value="<?php echo $User['id']; ?>"></td>
        </tr>

        <tr>
          <td>ISBN</td>
          <td>:</td>
          <td> <input type="number" id="isbn" name="isbn" value="<?php echo $viemyinfo['isbn']; ?>"></td>
        </tr>

        <tr>
          <td>TITLE</td>
          <td>:</td>
          <td> <input type="text" id="title" name="title" value="<?php echo $viemyinfo['title']; ?>"></td>
        </tr>

        <tr>
          <td>AUTHOR</td>
          <td>:</td>
          <td> <input type="text" id="author" name="author" value="<?php echo $viemyinfo['author']; ?>"></td>
        </tr>

        <tr>
          <td>EDITION</td>
          <td>:</td>
          <td> <input type="text" id="edition" name="edition" value="<?php echo $viemyinfo['edition']; ?>"></td>
        </tr>


      </table>
      <input type="submit" name="submit" value="Request">
    </form>
  </fieldset>

</td>
</tr>
<?php include('footer.php'); ?>