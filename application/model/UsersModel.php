<?php 
class UsersModel extends DBH // Наследование
{
	// АВТОРИЗАЦИЯ АДМИНА
	public function user_authentication()
	{
		if(isset($_POST['login']) && isset($_POST['password']))
		{
			$login = strtolower($_POST['login']);
			$password = $_POST['password'];

			if ($login == 'admin' && $password == '12345')
			{
				$_SESSION["event_admin"] = $login;
				$_SESSION["event_pass"] = $password;

				header('Location: ./admin');
				exit;
			}
		}
	}
	// ВЫХОД ИЗ АДМИНКИ
	public function user_logout()
	{
		session_destroy();
		unset($_SESSION['event_admin']);
		unset($_SESSION['event_pass']);

		header('Location: ./admin');
		exit;
	}
	// ПОДПИСКА НА СОБЫТИЕ
	public function subscribe_to($id)
	{
		$name 	= $_REQUEST['name'];
		$email	= $_REQUEST['email'];
		$org 	= $_REQUEST['organisation'];
		$group	= $_REQUEST['group'];
		$class  = $_REQUEST['class'];

		$sql = 'INSERT INTO pupils (name_pupil, mail_pupil, organization, group_pupil, class_pupil, id_events) 
				VALUES (?, ?, ?, ?, ?, ?)';
		$stmt = $this->getDBH()->prepare($sql);
		$stmt->execute(array($name, $email, $org, $group, $class, $id));
	}
	// СПИСОК ПОЛЬЗОВАТЕЛЕЙ
	public function get_pupils($id, $sort_by)
	{
		switch ($sort_by)
		{
			case 'id': $sort = 5;
			break;
		}

		$sql = 'SELECT * FROM pupils WHERE id_events=? ORDER BY ? ASC';

		$stmt = $this->getDBH()->prepare($sql);
		$stmt->execute(array($id, $sort));

		$pupils = array();
		while ($row =$stmt-> fetch())
		{
			$pupils[]=$row;
		}
		return $pupils;
	}
}
?>