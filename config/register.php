<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("db.php"); ?>
        <?php include("../includes/header.php"); ?>

    </head>
    <body>

        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $link = mysqli_connect("localhost","root","root","userlistdb");
        if(isset($_POST["register"])){
        
            if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                $email=htmlspecialchars($_POST['email']);
                $username=htmlspecialchars($_POST['username']);
                $password=htmlspecialchars($_POST['password']);
                $query=mysqli_query($link, "SELECT * FROM usertbl WHERE username = '$username'");
                $row_cnt = mysqli_num_rows($query);

                if($row_cnt==0)
                {
                    $result=mysqli_query($link, "INSERT INTO usertbl (email, username, password) VALUES('$email', '$username', '$password')");
                    if($result){
                        $message = "Аккаунт успешно создан";
                    } else {
                        $message = "Не удалось записать информацию о данных!";
                    }

                } else {
                    $message = "Такое имя пользователя уже существует! Пожалуйста, попробуйте другой!";
                }

            } else {
                $message = "Все поля обязательны для заполнения!";
            }
            
        }
        ?>

        <div class="container mregister">
            <div id="login">
            <h1>Регистрация</h1>
                <form action="register.php" id="registerform" method="post"name="registerform">
                    <p><label for="user_pass">E-mail<br>
                    <input class="input" id="email" name="email" size="32"type="email" value=""></label></p>
                    <p><label for="user_pass">Имя пользователя<br>
                    <input class="input" id="username" name="username"size="20" type="text" value=""></label></p>
                    <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>
                    <p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
                    <p class="regtext">Уже зарегистрированы? <a href= "login.php">Введите имя пользователя</a>!</p>
                </form>
            </div>
        </div>

        <?php if (!empty($message)) {echo "<p>" . "MESSAGE: ". $message . "</p>";} ?>
    </body>
</html>