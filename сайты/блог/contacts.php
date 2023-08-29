<!DOCTYPE html>
<html lang="ru">
<head>
   <?php 
   $website_title = 'Свяжитесь с нами';
   require 'blocks/head.php' ?>
</head>
<body>
<!-- ШАПКА -->
<?php require 'blocks/header.php';?>

<main class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <h4>Связаться с нами</h4>
            <form action="" method="post">
                <label for="username">Ваше имя</label>
                <input type="text" name="username" id="username_id" class="form-control">

                <label for="Email">Ваш Email</label>
                <input type="Email" name="Email" id="email_id" class="form-control">

                <label for="mess">Сообщение</label>
                <textarea name="mess" id="mess_id" class="form-control"></textarea>
                
                <!-- блок для вывода ошибки -->
                <div class="alert alert-danger mt-2" id="errorBlock"></div>
                <!-- блок для вывода успешной регистрации -->
                <div class="alert alert-success mt-2" id="successBlock"></div>

                <button type="button" id="mess_send" class="btn btn-success mt-2">Отправить сообщение</button>
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
    $("#mess_send").click(function(){
        // получаем данные
        let name = $('#username_id').val();
        let email = $('#email_id').val();
        let mess = $('#mess_id').val();

        // отправка Ajax запроса
        $.ajax({
            url: 'form-backend/mail.php',
            type: 'POST',
            cache: false, 
            data: {'username' : name,
                   'email' : email, 
                   'mess' : mess 
                },
            dataType: 'html',
            success: function(data){
                if(data.trim() === "Готово"){
                    $("#successBlock").text("Сообщение успешно отправлено").show()
                    // после успешной отправки обнуляем поля
                    $("#username_id").val("")
                    $("#email_id").val("")
                    $("#mess_id").val("")
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

