<?php
class EventsController extends RenderTemplate
{
	// Главная страница (список событий)
	function list_action()
	{
		$model = new EventsModel();
		$events = $model ->get_all_events(true);
		$html = $this->render_template('application/view/templates/list.php', array('events' => $events));
		return $html;
	}
	// Просмотр одного события
	function show_action($id)
	{
		$model = new EventsModel();
		$event = $model ->get_event($id);
	
		if (isset($_POST['reg_but'])) // Кнопка регистрации
		{
			$html = $this->render_template('application/view/templates/reg_user.php', array('event' => $event));
		}
		elseif (isset($_POST['subscribe'])) // Подписаться
		{
			$model = new UsersModel();
			$model->subscribe_to($id);
			header('Location: ./pupils?event='.$id);
			exit;
		}
		else
		{
	 		$html = $this->render_template('application/view/templates/show.php', array('event' => $event));
		}
		return $html;
	}
	// Добавлеие нового события
	function add_action()
	{
		if (isset($_POST['add']))
		{
			$model = new EventsModel();
			$result = $model ->add_new_event();

			if ($result)
			{
				header('Location: ./index.php');
				exit;
			}
			else echo 'Пропущена запись!';
		}

		$html = $this->render_template('application/view/templates/new_event.php', array());
		return $html;
	}
	// Удаление события
	function remove_action($id)
	{
		$model = new EventsModel();
		$model->remove_event($id);
		header('Location: ./admin');
	}
	// Закрытие/Открытие события
	function lock_action($id, $flag)
	{
		$model = new EventsModel();
		$model->lock_event($id, $flag);
		header('Location: ./admin');
	}
	// ОШИБКА 404
	function error_404()
	{
		$html = $this->render_template('application/view/templates/error_404.php', array());
		return $html;
	}
}
?>