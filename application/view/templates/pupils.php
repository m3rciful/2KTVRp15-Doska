<!-- Заголовок title -->
<?php $title = 'Статистика'; ?>

<?php ob_start() ?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Список участников</div>

  <!-- Table -->
	<table class="table">
	  	<tr>
	    	<th>Имя / Фамилия</th>
	    	<th>Почта</th>
	    	<th>Организация</th>
	    	<th>Группа</th>
	    	<th>Класс</th>
	  	</tr>
	 	<?php foreach ($pupils as $pupil): ?>
		<tr>
	    	<td><?php echo $pupil['name_pupil']; ?></td>
	    	<td><?php echo $pupil['mail_pupil']; ?></td>
	    	<td><?php echo $pupil['organization'];?></td>
	    	<td><?php echo $pupil['group_pupil']; ?></td>
	    	<td><?php echo $pupil['class_pupil']; ?></td>
	  	</tr>
	    <?php endforeach ?>
	</table>
</div>


<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php";