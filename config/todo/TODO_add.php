<?php 
	session_start();
	$title = $_POST['title'];

	require 'TODO_db.php';

		$username = $_SESSION['session_username'];
        $sql = "INSERT INTO list(username, title) VALUES('$username' ,:title)";

	$query = $pdo->prepare($sql);
  
	$query->execute(['title' => $title]);

	header('Location: ../../index.php');

?>
