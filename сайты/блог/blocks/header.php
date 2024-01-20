<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">HackersHaven</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/">Главная</a>
    <a class="p-2 text-dark" href="/contacts.php">Контакты</a>
    <!-- если куки не пустые то добавим новую ссылку -->
    <?php
      if(!empty($_COOKIE['log']))
        echo '<a class="p-2 text-dark" href="/article.php">Добавить статью</a>'
    ?>
  </nav>
    <!-- если куки пустые -->
    <?php
      if(empty($_COOKIE['log'])):
    ?>
  <a class="btn btn-outline-primary mr-2" href="/auth.php">Войти</a>
  <a class="btn btn-outline-primary" href="/register">Регистрация</a>
   <!-- иначе -->
  <?php
    else:
  ?>
  <a class="btn btn-outline-primary" href="/auth.php">Кабинет пользователя</a>
  <?php
    endif;
  ?>
</div>

