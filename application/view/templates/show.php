<!-- Заголовок title -->
<?php $title = 'Мероприятие #' .$event['id_event']; ?>

<?php ob_start() ?>

<div class="row">
	<div class="col-xs-6 col-md-4">
	<p class="text-center">
		<img class="img-circle " src="public/images/<?php echo $event['image_logo']; ?>" alt="Event Logo" title="<?php echo $event['short_desc_eventR'];?>" width="160" height="160"><br><br>
		<form method="POST" class="text-center">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registration">Регистрация <i class="fa fa-user-plus"></i></button><br><br>
			<a href="pupils?event=<?php echo $event['id_event']; ?>" role="button">Статистика </a>
		</form>
	</p>
	</div>
  	<div class="col-xs-12 col-sm-6 col-md-8">
  		<h2><?php echo $event['name_eventR'];?><br>
  		 <small><?php echo $event['sponsor_event'];?></small></h2>
  		<p><?php echo $event['description_eventR'];?></p>
  		<hr>
  		<p>Мероприятия состоится: <b><?php echo date('d.m.Y', strtotime ($event['date_event']));?></b> - с <?php echo date('H:i', strtotime ($event['time_start']));?> до <?php echo date('H:i', strtotime ($event['time_stop']));?></p>
  	</div>
</div>

<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Регистрация</h4>
      </div>
      <div class="modal-body">

		<form id="RegForm" method="POST">
			<div class="form-group">
			  <label for="name">Имя Фамилия</label>
			    <input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
			  <label for="email">Эл. почта</label>
			    <input type="email" class="form-control" name="email" placeholder="">
			</div>
			<div class="form-group">
			  <label for="organisation">Организация</label>
			    <input type="text" class="form-control" name="organisation" placeholder="Школа / Предприятие"	>
			</div>
			<div class="form-group">
			  <label for="group">Отделение</label>
			    <input type="text" class="form-control" name="group" placeholder="Группа / Отделение / Класс"	>
			</div>
			<div class="form-group">
			  <label for="class">Номер курса</label>
			    <input type="text" class="form-control" name="class" placeholder="Для учащихся IVKHK">
			</div>
			</div>
	
			<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        		<button type="submit" class="btn btn-primary" id="subscribe" name="subscribe">Отправить</button>
      		</div>
    	</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php"; ?>