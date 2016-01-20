<!-- Заголовок title -->
<?php $title = 'Статистика'; ?>

<?php ob_start() ?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Список участников</div>

  <!-- Table -->
	<table class="table">
	  	<tr>
	  		<th><a href="pupils?event=<?php echo $_REQUEST["event"]; ?>&order_by=id"> # </a></th>
	    	<th><a href="pupils?event=<?php echo $_REQUEST["event"]; ?>&order_by=name">Имя / Фамилия</a></th>
	    	<th><a href="pupils?event=<?php echo $_REQUEST["event"]; ?>&order_by=email">Почта</th>
	    	<th><a href="pupils?event=<?php echo $_REQUEST["event"]; ?>&order_by=org">Организация</th>
	    	<th><a href="pupils?event=<?php echo $_REQUEST["event"]; ?>&order_by=group">Группа</th>
	    	<th><a href="pupils?event=<?php echo $_REQUEST["event"]; ?>&order_by=class">Класс</th>
	  	</tr>
	  	<?php if(empty($pupils)) echo "<td colspan=6><p class='text-center'>Список пуст</p></td>"; ?>
	 	<?php foreach ($pupils as $pupil): ?>
		<tr>
			<td><?php echo $pupil['id_pupil']; ?></td>
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