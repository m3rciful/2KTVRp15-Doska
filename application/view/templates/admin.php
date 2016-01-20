<!-- Заголовок title -->
<?php $title = 'Административная часть'; ?>

<?php ob_start() ?>

<div class="row">
  <div class="col-md-6"><a class="btn btn-primary" href="add" role="button">Новое событие</a></div>
  <div class="col-md-6">
  <form method="POST" class="pull-right text-muted">Сортировать по: 
		<div class="btn-group">
		  <button type="button" class="btn btn-default dropdown-toggle disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    группам <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		    <li><a href="#">группам</a></li>
		    <li><a href="#">номеру курса</a></li>
		    <li><a href="#">времени рег.</a></li>
		    <li><a href="#">организации</a></li>
		  </ul>
		</div>
	</form>
  </div>
</div>
<br>
<div class="panel panel-default">
	<div class="panel-heading">Список событий</div>
	<ul class="list-group">
		<?php foreach ($events as $event): ?>
	  	<li class="list-group-item">
	  		<div class="row">
	  			<div class="col-xs-12 col-md-8">
	  			<h5>
	  				<?php echo '<a href="event?show='.$event['id_event'].'" '.' title="'.$event['short_desc_eventR'].'">' .$event['name_eventR'] .'</a>'; ?>
	  				<small>от <?php echo $event['sponsor_event']; ?></small>
	  			</h5>
	  			</div>
	  			<div class="col-xs-6 col-md-4">
	  			<form method="POST">
	  				<div class="btn-group btn-group-sm pull-right" role="group" aria-label="...">
	  					<button type="button" class="btn btn-default" title="Изменить" name="edit"><i class="fa fa-pencil"></i></button>
	  					<a class="btn btn-default" href="event?remove=<?php echo $event['id_event'];?>" role="button" title="Удалить"><i class="fa fa-trash"></i></a>
	  					<?php if($event['flag'] == 0)
	  							$btn = 'btn-danger';
	  						else 
	  							$btn = 'btn-success';
	  					?>
	  					<a class="btn <?php echo $btn; ?>" href="<?php echo 'event?lock=' .$event['id_event']. '&flag=' .$event['flag']; ?>" role="button" title="Открыть/Закрыть"><i class="fa fa-lock"></i></a>
					</div>
				</form>
	  			</div>
			</div>
	  	</li>
	  	<?php endforeach ?>
	</ul>
</div>

<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php";