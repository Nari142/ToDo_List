
    <body>
        <form action="config/todo/TODO_add.php" method="POST">
            <input type="text" name="title" required>
            <input type="submit" value="Add">
        </form>
        <ul>
            <?php
                session_start();
                $username = $_SESSION['session_username'];
                require 'TODO_db.php';

                $query = $pdo->query("SELECT * FROM `list` WHERE `username`= '$username' ORDER BY `id`");

                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo '<div><li>'. $row->title .' <a href="config/todo/TODO_delete.php?id='.$row->id.'" id="card-link-click">X</a></li>' . ' </div>';

                }
            ?>
        </ul>
    </body>
