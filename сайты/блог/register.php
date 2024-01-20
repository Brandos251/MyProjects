<!DOCTYPE html>
<html lang="ru">
<head>
   <?php 
   $website_title = 'Регистрация';
   require 'blocks/head.php' ?>
</head>
<body>
<!-- ШАПКА -->
<?php require 'blocks/header.php';?>

<main class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <h4>Форма регистрации</h4>
            <form action="" method="post">
                <label for="username">Ваше имя</label>
                <input type="text" name="username" id="username_id" class="form-control">

                <label for="Email">Ваш Email</label>
                <input type="email" name="Email" id="email_id" class="form-control">

                <label for="login">Ваш Логин</label>
                <input type="text" name="login" id="login_id" class="form-control">

                <label for="password">Ваш пароль</label>
                <input type="password" name="password" id="password_id" class="form-control">
                
                <!-- блок для вывода ошибки -->
                <div class="alert alert-danger mt-2" id="errorBlock"></div>
                <!-- блок для вывода успешной регистрации -->
                <div class="alert alert-success mt-2" id="successBlock"></div>

                <button type="button" id="reg_user" class="btn btn-success mt-2">Зарегистрироваться</button>
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
    $("#reg_user").click(function(){
        // получаем данные
        let name = $('#username_id').val();
        let email = $('#email_id').val();
        let login = $('#login_id').val();
        let password = $('#password_id').val();

        // отправка Ajax запроса
        $.ajax({
            url: 'form-backend/submit.php',
            type: 'POST',
            cache: false, 
            data: {'username' : name,
                   'email' : email, 
                   'login' : login, 
                   'password' : password
                },
            dataType: 'html',
            success: function(data){
                if(data.trim() === "Готово"){
                    $("#successBlock").text("Регистрация прошла успешно").show()
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

