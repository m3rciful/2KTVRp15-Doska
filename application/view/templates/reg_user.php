<!-- Заголовок title -->
<?php $title = 'Мероприятие #' .$event['id_event']; ?>

<?php ob_start() ?>

<div class="row">

  <div class="col-xs-6 col-md-4">
  <p class="text-center">
    <img class="img-circle" src="public/images/<?php echo $event['image_logo']; ?>" alt="Event Logo" title="<?php echo $event['short_desc_eventR'];?>" width="160" height="160"><br><br>
    <p class="text-muted"><?php echo $event['description_eventR'];?></p>
  </p>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-8">
    <h2><?php echo $event['name_eventR'];?> 
    <small><?php echo $event['sponsor_event'];?></small></h2>
    <hr>
    <form method="POST" class="col-xs-12 col-sm-6 col-md-8">
      <div class="form-group">
        <label for="name">Имя / Фамилия</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="email">Эл. почта</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="form-group">
        <label for="organisation">Организация</label>
        <input type="text" class="form-control" name="organisation" placeholder="Школа / Предприятие">
      </div>
      <div class="form-group">
        <label for="group">Отделение</label>
        <input type="text" class="form-control" name="group" placeholder="Группа / Отделение / Класс">
      </div>
      <div class="form-group">
        <label for="class">Номер курса</label>
        <input type="text" class="form-control" name="class" placeholder="Для учащихся IVKHK">
      </div>
      <button type="submit" class="btn btn-default" name="subscribe">Регистрация</button>
    </form>
  </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php";