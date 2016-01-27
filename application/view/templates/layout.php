<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация на мероприятие</title>
    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/jumbotron-narrow.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
          <?php 
            if (isset($_SESSION["event_admin"]) && isset($_SESSION["event_pass"]) )
            {
              echo '<li role="button"><a href="admin">Управление <i class="fa fa-cog"></i></a></li>';
              echo '<li role="button"><a href="logout">Выйти <i class="fa fa-sign-out"></i></a></li>';
            }
            else
            {
              echo '<li role="button"><a href="login">Войти <i class="fa fa-sign-in"></i>
</a></li>';
            }
          ?>
          </ul>
        </nav>
        <h3 class="text-muted">
          <?php echo '<a href="'.$_SERVER['PHP_SELF'].'">Главная</a>';
          if(!empty($title)) echo ' &#187 ' .$title; ?>
        </h3>
      </div>


      <div class="row marketing">

        <?php echo $content; ?>

      </div>

      <footer class="footer">
        <p>&copy; 2015 2KTVRp. Sergei Novitskov <i class="fa fa-child"></i></p>
      </footer>

    </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="public/js/jquery-2.2.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
  </body>

</html>