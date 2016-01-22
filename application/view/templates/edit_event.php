<!-- Заголовок title -->
<?php $title = 'Изменить событие'; ?>

<?php ob_start() ?>

<form method="POST" class="form-horizontal">
	<!-- Название -->
	<div class="form-group form-group-lg">
		<label for="name_event" class="col-sm-2 control-label text-primary">Название</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" name="name_event" value="<?php echo $event['name_eventR'];?>">
    	</div>
  	</div>
  	<!-- Полное описание -->
  	<div class="form-group form-group-sm">
    	<label for="description" class="col-sm-2 control-label text-primary">Описание</label>
    	<div class="col-sm-10">
    		<textarea class="form-control" name="description" rows="5"><?php echo $event['description_eventR'];?></textarea>
    	</div>
  	</div>
  	<!-- Краткое описание -->
  	<div class="form-group form-group-sm">
    	<p for="short_desc" class="col-sm-2 control-label text-primary"></label>
    	<div class="col-sm-10">
     		<input type="text" class="form-control" name="short_desc" value="<?php echo $event['short_desc_eventR']; ?>">
    	</div>
  	</div>
  	<!-- Спонсор -->
   	<div class="form-group form-group-sm">
    	<label for="sponsor" class="col-sm-2 control-label text-primary">Спонсор</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" name="sponsor" value="<?php echo $event['sponsor_event'];?>">
    	</div>
  	</div>
  	<!-- Дата и Время / Изображение (логотип) -->
    <div class="form-group form-group-sm">
    	<label for="date" class="col-sm-2 control-label text-primary">Дата/Время</label>
    	<div class="col-sm-10 row">
  			<div class="col-xs-3">
  				<label for="date"><small class="text-muted">день / месяц / год</small></label>
    			<input type="text" class="form-control" name="date" value="<?php echo date('d/m/Y', strtotime ($event['date_event'])); ?>">
  			</div>
  			<div class="col-xs-2">
  				<label for="time_start"><small class="text-muted">начало</small></label>
    			<input type="text" class="form-control" name="time_start" value="<?php echo date('H:i', strtotime ($event['time_start']));?>">
  			</div>
  			<div class="col-xs-2">
  				<label for="time_end"><small class="text-muted">конец</small></label>
     			<input type="text" class="form-control" name="time_stop" value="<?php echo date('H:i', strtotime ($event['time_stop']));?>">
  			</div>
  			<div class="col-xs-5">
  				<label for="image_logo"><small class="text-primary">Логотип</small></label>
     			<select class="form-control" name="image_logo">
  					<option selected><?php echo $event['image_logo']; ?></option>
				</select>
  			</div>
		</div>
  	</div><br>
  	<!-- Кнопки -->
  	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-4">
      		<button type="submit" class="btn btn btn-primary btn-block" name="save">Сохранить</button>
    	</div>
  	</div>
</form>

<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php";