<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylePage.css">
    <link rel="icon" href="img/ico/chip.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/ico/chip.ico" type="image/x-icon">
    <title>Телемастер</title>
</head>
<body>
    <section>
         <div class="form-box">
            <div class="form-value">
                <form action="includes/sendForm.php" method="post">
                    <h2>Контакты</h2>
                    <h4>Ваша первая заявка</h4>
                    <div class="form-contact">
                        <input type="text" name="name" required>
                        <label>Имя</label>
                    </div>
                    <div class="form-contact">
                        <input type="tel" name="phone" required>
                        <label>Номер телефона</label>
                    </div>
                    <div class="form-contact">
                        <input type="email" name="email" required>
                        <label>Почта</label>
                    </div>
                    <h2>Описание проблемы</h2>
                    <div class="error-desc">
                        <textarea name="problem" required></textarea>
                        <label>Опишите проблему</label>
                    </div>
                    <button>Отправить</button>
                </form>
            </div>
        </div> 
    </section>
</body>
</html>

