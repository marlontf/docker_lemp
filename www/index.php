<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Lista de tarefas</title>
</head>
<!-- Fonts Awesome -->
<script src="https://kit.fontawesome.com/53cccf545a.js" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
<body>
   <div class="container">
      <div class="title">
         <h3>Lista de tarefas
            <span style="float:right; padding:1px; ">
               <i class="fas fa-plus-square"></i>
            </span>
         </h3>
         
      </div>
      <div class="item">
         Fazer compras adsfasdf asdaasfasdfa  sdfa  asdfasdfas asfas sadf asdfsdfasdd
         <span class="controls">
            <i class="fas fa-pen-square"></i>
            <i class="fas fa-minus-square"></i>
         </span>
      </div>
      <div class="item">
         Fazer compras
         <span class="controls">
            <i class="fas fa-pen-square"></i>
            <i class="fas fa-minus-square"></i>
         </span>
      </div>
      <div class="item">
         Fazer compras
         <span class="controls">
            <i class="fas fa-pen-square"></i>
            <i class="fas fa-minus-square"></i>
         </span>
      </div>
   </div>
   <script src="assets/js/scripts.js"></script>
</body>
</html>



<!-- 
<?php
        $connection = new PDO('mysql:host=mariadb;dbname=demo;charset=utf8', 'root', 'root');
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
        } else {
            echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
            echo '<ul class="center">';
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo '</ul>';
        }
        ?> -->

