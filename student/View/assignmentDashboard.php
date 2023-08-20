<?php
$title = "Download Assignment";

include('header.php');
?>

<?php include('sideBar.php'); ?>
<td>
    <?php $assignments = [
        ['title' => 'Assignment 1', 'filename' => 'assignment1.pdf'],
        ['title' => 'Assignment 2', 'filename' => 'assignment2.pdf']
        // Add more assignments here
    ]; ?>

    <legend class="textlegend">Download assignment </legend>
    <ul>
        <?php foreach ($assignments as $assignment) : ?>
            <li>
                <strong><?php echo $assignment['title']; ?></strong><br>
                <a href="download.php?filename=<?php echo $assignment['filename']; ?>">Download</a>
            </li>
        <?php endforeach; ?>
    </ul>
</td>
<td><img height="400px" weight="50%" src="../Resources/downloading.png"></td>
</body>
<?php include('footer.php'); ?>
</html>