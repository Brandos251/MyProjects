<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        // подключение к бд
        require_once 'database_connection.php';
                
        // выборка значений
        $sql = 'SELECT * FROM `articles` WHERE `id` = :id';

        // запрос к бд
        $query = $pdo->prepare($sql);
        $query->execute(['id' =>  $_GET['id']]);

        // получаем объект который содержит всю информацию по статье
        $article = $query->fetch(PDO::FETCH_OBJ);

        $website_title = $article->title;
        require 'blocks/head.php' ?>
</head>
<body>
<!-- ШАПКА -->
<?php require 'blocks/header.php';?>

<main class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <div class="jumbotron">
                <!-- название статьи -->
                <h1><?= $article->title?></h1>
                <p><b>Автор статьи: </b><mark><?= $article->author?></mark></p>
                <!-- переводим ДАТУ из секунд в нормальный вид -->
                <?php
                    // получаем день, когда была добавлена статья в бд
                    $date = date('d ', $article->date);
                    
                    $timeOfYear = ["Января", "Февраля", "Марта", "Апреля", "Майа", "Июня",
                              "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];

                    $date .= $timeOfYear[date('n', $article->date) - 1];
                    $date .= date(' H:i', $article->date);
                ?>
                <p><b>Опубликовано: </b><u><?=$date?></u></p>
                <!-- описание и основной текст статьи -->
                <p>
                    <?=$article->begin_article?>
                    <br>
                    <br>
                    <?=$article->text_article?>
                </p>
            </div>
            <!-- комментарии -->
            <h3>Комментарии</h3>
            <form action="news.php?id=<?=$_GET['id']?>" method="post">
                <label for="username">Ваше имя</label>
                <input type="text" name="username" value="<?=$_COOKIE['log']?>" id="username_id" class="form-control">

                
                <label for="comment">Сообщение</label>
                <textarea name="comment" id="comment_id" class="form-control" placeholder="Дайте нам знать, что у Вас на уме..."></textarea>
                
                <button type="submit" id="comment_btn" class="btn btn-success mt-2">Добавить комментарий</button>
            </form>
            <!-- отрпавляем данные в бд -->
            <?php
                if(!empty($_POST['username']) && !empty($_POST['comment'])){
                    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
                    $comment = trim(filter_var($_POST['comment'], FILTER_SANITIZE_STRING));

                    // заполняем таблицу
                    $sql = 'INSERT INTO comments(name, comment, article_id) VALUES(?, ?, ?)';

                    // создаем запрос
                    $query = $pdo->prepare($sql);

                    // выполняем запрос
                    $query->execute([$username, $comment, $_GET['id']]);
                }
                // вывод комментариев

                // выборка из бд
                $sql = 'SELECT * FROM `comments` WHERE `article_id` = :id ORDER BY `id` DESC';
                // подготавливаем запрос
                $query = $pdo->prepare($sql);
                // выполняем запрос
                $query->execute(['id' => $_GET['id']]);

                $comments_array = $query->fetchAll(PDO::FETCH_OBJ);

                foreach($comments_array as $comm){
                    echo "<div class='alert alert-info mt-2 mb-2'>
                        <h4>$comm->name</h4>
                        <p>$comm->comment</p>
                    </div>";
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