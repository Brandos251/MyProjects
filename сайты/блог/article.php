<?php
    if(empty($_COOKIE['log'])){
        header('Location: /register.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
   <?php 
   $website_title = 'Редактирование';
   require 'blocks/head.php' ?>
</head>
<body>
<!-- ШАПКА -->
<?php require 'blocks/header.php';?>

<main class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <h4>Добавить статью</h4>
            <form action="" method="post">
                <label for="title">Заголовок публикации</label>
                <input type="text" name="title" id="title_id" class="form-control">

                <label for="begin_article">Описание статьи</label>
                <textarea name="begin_article" id="begin_article_id" class="form-control"></textarea>

                <label for="text_article">Текст статьи</label>
                <textarea name="text_article" id="text_article_id" class="form-control"></textarea>
                
                <!-- блок для вывода ошибки -->
                <div class="alert alert-danger mt-2" id="errorBlock"></div>
                <!-- блок для вывода успешной регистрации -->
                <div class="alert alert-success mt-2" id="successBlock"></div>

                <button type="button" id="article_btn" class="btn btn-success mt-2">Добавить</button>
            </form>
        </div>
        <!-- вспомогательная информация для основной страницы -->
        <?php require 'blocks/aside.php' ?>
    </div>
</main>

<!-- ПОДВАЛ -->
<?php require 'blocks/footer.php' ?>

<!-- подключение framework Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<!-- отправка данных по Ajax -->
<script>
    $("#article_btn").click(function(){
        // получаем данные
        let title = $('#title_id').val();
        let begin_article = $('#begin_article_id').val();
        let text_article = $('#text_article_id').val();

        // отправка Ajax запроса
        $.ajax({
            url: 'form-backend/add_article.php',
            type: 'POST',
            cache: false, 
            data: {'title' : title,
                   'begin_article' : begin_article, 
                   'text_article' : text_article
                },
            dataType: 'html',
            success: function(data){
                if(data.trim() === "Готово"){
                    $("#successBlock").text("Статья успешно добавлена").show()
                }else{
                    // вывод ошибки
                    $("#errorBlock").text(data).show()
                }
            }
        });

    });
</script>
</body>
</html>

