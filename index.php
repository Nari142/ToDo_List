<?php

    session_start();

    if(!isset($_SESSION["session_username"])):
        header("location:config/login.php");
    else:
?>

<?php include("includes/header.php"); ?>
<div id="welcome">
 <h2>Добро пожаловать, <span> <?php echo $_SESSION['session_username'];?>! </span></h2>!
 <?php include("config/todo/TODO_list.php")?>
	<p><a href="config/logout.php">Выйти</a> из системы</p>
</div>
	
<?php endif; ?>