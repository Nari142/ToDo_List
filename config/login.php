<!DOCTYPE html>
<html lang="en">
	<head>
    
        <?php 
            session_start();
        ?>

        <?php include("db.php"); ?>
        <?php include("../includes/header.php"); ?>

        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $link = mysqli_connect("localhost","root","root","userlistdb");
            if(isset($_SESSION["session_username"])){
                header("Location: index.php");
            }

            if(isset($_POST["login"])){

                if(!empty($_POST['username']) && !empty($_POST['password'])) {
                    $username=htmlspecialchars($_POST['username']);
                    $password=htmlspecialchars($_POST['password']);
                    $query=mysqli_query($link, "SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");
                    $numrows=mysqli_num_rows($query);
                    if($numrows!=0){
                        while($row=mysqli_fetch_assoc($query)){
                            $dbusername=$row['username'];
                        $dbpassword=$row['password'];
                        }
                        if($username == $dbusername && $password == $dbpassword){
                            $_SESSION['session_username']=$username;	 
                            header("Location: ../index.php");
                        }
                    } else {
                        echo  "Неправильное имя пользователя или пароль!";
                    }
                } else {
                    $message = "Все поля обязательны для заполнения!";
                }
            }
        ?>

    </head> 
    <body>
        
        <div class="container mlogin">
            <div id="login">
            <h1>Вход</h1>
                <form action="" id="loginform" method="post"name="loginform">
                    <p><label for="user_login">Имя опльзователя<br>
                    <input class="input" id="username" name="username"size="20"
                    type="text" value=""></label></p>
                    <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password"size="20"
                    type="password" value=""></label></p> 
                    <p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
                    <p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>
                </form>
            </div>
        </div>
    </body>
</html>