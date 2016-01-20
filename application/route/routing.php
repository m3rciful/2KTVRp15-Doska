<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$uri  = explode('/', $host)[2];

// Проверка на уровень доступа
if (isset($_SESSION["event_admin"]) && isset($_SESSION["event_pass"]))
	$access_granted = true; else $access_granted = false;

if ($uri == '' OR $uri == 'index.php')
{
	// Главная страница
	$control = new EventsController();
	$response = $control->list_action();
}
elseif ($uri == 'pupils' AND isset($_REQUEST["event"]))
{
	if (empty($_REQUEST['order_by'])) $_REQUEST['order_by'] = 'id';
	// Список зарег. пользователей
	$control = new UsersController();
	$response = $control->plist_action($_REQUEST["event"], $_REQUEST['order_by']);
}
// ------ ВХОД -----------------------------------------------
elseif ($uri == 'login')
{
	// Форма входа
	$control = new UsersController();
	$response = $control->login_action();
}
elseif ($uri == 'logout')
{
	// Выход
	$control = new UsersController();
	$response = $control->logout_action();
}
// ------ АДМИНКА --------------------------------------------
elseif ($uri == 'admin' AND $access_granted)
{
	// Административная часть
	$control = new UsersController();
	$response = $control->admin_action();
}
elseif ($uri == 'add' AND $access_granted)
{
	// Новое мероприятие
	$control = new EventsController();
	$response = $control->add_action();
}
elseif ($uri == 'event' AND $access_granted AND isset($_REQUEST["remove"]))
{
	// Удаление мероприятия
	$control = new EventsController();
	$response = $control->remove_action($_REQUEST['remove']);
}
elseif ($uri == 'event' AND $access_granted AND isset($_REQUEST["lock"]))
{
	// Открытие/закрытие мероприятия
	$control = new EventsController();
	$response = $control->lock_action($_REQUEST['lock'], $_REQUEST['flag']);
}
elseif ($uri == 'event' AND $access_granted AND isset($_REQUEST["edit"]))
{
	// Изменить мероприятие
	$control = new EventsController();
	$response = $control->edit_action($_REQUEST['edit']);
}
// -----------------------------------------------------------
elseif ($uri == 'event' AND isset($_REQUEST["show"]))
{
	// Просмотр мероприятия
	$control = new EventsController();
	$response = $control->show_action($_REQUEST['show']);
}
else
{
	// Страница не существует
	$control = new EventsController();
	$response = $control->error_404();
}
?>