<?php
	session_start();
	require_once('../Model/usersmodel.php'); 
	if(isset($_POST['updatebookinfo']))
	{
		
	$serialno = $_SESSION['serialno'];
    $booktitle = $_POST['booktitle'];
    $categories = $_POST['categories'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];
	$bookcopy = $_POST['bookcopy'];

		$UpdateBookinfo = array('booktitle' => $booktitle, 'categories' => $categories, 'author' => $author, 'edition' => $edition, 'bookcopy' => $bookcopy);$check = updateBookInfo($serialno, $UpdateBookinfo);
		if($check)
		{
			echo "Book info updated!";
			header('location: ../View/allBooksInfo.php');
		}
		else
		{
			echo "Can't update the book Information!";
		}
		
	}
?>