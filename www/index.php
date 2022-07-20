<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello there</title>
        <style>
            body {
                font-family: "Arial", sans-serif;
                font-size: larger;
            }

            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <img src="https://tech.osteel.me/images/2020/03/04/hello.gif" alt="Hello there" class="center">
        <?php
	$dbname = 'pingcast';
	$user = 'root';
	$pass = 'QueroPontos';
        $connection = new PDO('mysql:host=mariadb;'.$dbname.';charset=utf8', $user, $pass);
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '".$dbname."'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo '<p class="center">Não há tabelas no banco de dados <code>'.$dbname.'</code>.</p>';
        } else {
            echo '<p class="center">O banco <code>'.$dbname.'</code> contém as seguintes tabelas:</p>';
            echo '<ul class="center">';
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo '</ul>';
        }
        ?>
    </body>
</html>
