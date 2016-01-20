<?php
class UsersController extends RenderTemplate
{
	// Форма авторизации админа
	function login_action()
	{
		$model = new UsersModel();
		$model->user_authentication();
		$html = $this->render_template('application/view/templates/login.php', array());
		return $html;
	}
	function logout_action()
	{
		$model = new UsersModel();
		$model->user_logout();
	}
	// Административная часть
	function admin_action()
	{
		$model = new EventsModel();
		$events = $model ->get_all_events(false);
		$html = $this->render_template('application/view/templates/admin.php', array('events' => $events));
		return $html;
	}
	// Список подписчиков
	function plist_action($id, $sort_by)
	{
		$model = new UsersModel();
		$pupils = $model ->get_pupils($id, $sort_by);
		$html = $this->render_template('application/view/templates/pupils.php', array('pupils' => $pupils));
		return $html;
	}
}
?>