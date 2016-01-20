<!-- Заголовок title -->
<?php $title = 'Страница не найдена'; ?>

<?php ob_start() ?>

<p>
	<h3>404 ошибка - что это такое?</h3>
	Когда человек хочет перейти на новую страницу, браузер обращается к серверу чтобы тот передал ему её содержимое. Если сайт работает, но по запрашиваемому URL страница не найдена, то сервер сообщает о 404 ошибке.
<P>
<p class="text-danger">
	<?php 
		$url1 = '/'. explode('/', $_SERVER['REQUEST_URI'])[1];
		$url2 = '/'. explode('/', $_SERVER['REQUEST_URI'])[2];
	?>
	<b>Адрес:</b> <?php echo $_SERVER['HTTP_HOST'] .$url1 . '<b>' .$url2. '</b>'; ?>
</p>


<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php";