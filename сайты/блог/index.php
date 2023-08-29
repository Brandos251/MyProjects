<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
    $website_title = 'Территория кода';
    require 'blocks/head.php' ?>
</head>
<body>
<!-- ШАПКА -->
<?php require 'blocks/header.php';?>

<main class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <?php
                // подключение к бд
                require_once 'database_connection.php';
                
                // выборка значений
                $sql = 'SELECT * FROM `articles` ORDER BY `date` DESC';

                // выборка из бд
                $query = $pdo->query($sql);

                // вывод инфы из бд в обратном порядке
                while($row = $query->fetch(PDO::FETCH_OBJ)){
                    echo "<h2>$row->title</h2>
                         <p>$row->begin_article</p>
                         <p><b>Автор статьи: </b><mark>$row->author</mark></p>
                         <a href='news.php?id=$row->id' title = '$row->title'>
                         <button class = 'btn btn-warning mb-5'>Прочитать больше</button>
                         </a>"
                         ;      
                }
                
            ?>
        </div>
        <!-- вспомогательная информация для основной страницы -->
        <?php require 'blocks/aside.php' ?>
    </div>
</main>

<!-- ПОДВАЛ -->
<?php require 'blocks/footer.php' ?>
</body>
</html>