<!-- Заголовок title -->
<?php $title = 'Мероприятие #' .$event['id_event']; ?>

<?php ob_start() ?>

<div class="row">
	<div class="col-xs-6 col-md-4">
	<p class="text-center">
		<img class="img-circle " src="public/images/<?php echo $event['image_logo']; ?>" alt="Event Logo" title="<?php echo $event['short_desc_eventR'];?>" width="160" height="160"><br><br>
		<form method="POST" class="text-center">
			<button class="btn btn-primary" type="submit" name="reg_but">Регистрация <i class="fa fa-user-plus"></i></button><br><br>
			<a href="pupils?event=<?php echo $event['id_event']; ?>" role="button">Статистика </a>
		</form>
	</p>
	</div>
  	<div class="col-xs-12 col-sm-6 col-md-8">
  		<h2><?php echo $event['name_eventR'];?><br>
  		 <small><?php echo $event['sponsor_event'];?></small></h2>
  		<p><?php echo $event['description_eventR'];?></p>
  		<hr>
  		<p>Мероприятия состоится: <b><?php echo $event['date_event'];?></b> - с <?php echo $event['time_start'];?> до <?php echo $event['time_stop'];?></p>
  	</div>
</div>


<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php"; ?>