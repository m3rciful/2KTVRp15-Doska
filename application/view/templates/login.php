<!-- Заголовок title -->
<?php $title = 'Добро пожаловать, авторизуйтесь!'; ?>

<?php ob_start() ?>

<div class="container">

<form method="POST" class="form-horizontal">
  <div class="form-group">
    <div class="col-md-5 col-md-offset-3">
      <p>login: <b>admin</b>, pass: <b>12345</b></p>
      <input type="text" class="form-control" name="login" placeholder="Логин">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-5 col-md-offset-3">
      <input type="password" class="form-control" name="password" placeholder="Пароль">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-5 col-md-offset-3">
      <button type="submit" class="btn btn-default" name="login_button">Войти</button>
    </div>
  </div>
</form>

    </div> <!-- /container -->

<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php";