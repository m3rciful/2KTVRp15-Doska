<?php
class EventsModel extends DBH // Наследование
{
	// ЗАГРУЗКА СПИСКА МЕРОПРИЯТИЙ
	public function get_all_events($flags)
	{
		if ($flags)
			$sql = 'SELECT * FROM events WHERE flag=1';
		else
			$sql = 'SELECT * FROM events';

		$stmt = $this->getDBH()->query($sql);

		$events = array();
		while ($row =$stmt-> fetch())
		{
			$events[]=$row;
		}
		return $events;
	}

	// ЗАГРУЗКА ОДНОГО МЕРОПРИЯТИЯ ПО 'ID'
	public function get_event($id)
	{
		$sql = 'SELECT * FROM events WHERE id_event=?';
		$stmt = $this->getDBH()->prepare($sql);
		$stmt->execute([$id]);
		$event = $stmt->fetch();
		return $event;
	}
	// ДОБАВЛЕНИЕ НОВОГО СОБЫТИЯ В ТАБЛИЦУ 'EVENTS'
	public function add_new_event()
	{
		if (empty($_REQUEST['name_event']) OR empty($_REQUEST['description']) 
			OR empty($_REQUEST['short_desc']) OR empty($_REQUEST['sponsor']) 
			OR empty($_REQUEST['date']) OR empty($_REQUEST['time_start']) 
			OR empty($_REQUEST['time_stop']))
		{
			return false;
		}
		else
		{
			$name 			= $_REQUEST['name_event'];
			$desc 			= $_REQUEST['description'];
			$short_desc 	= $_REQUEST['short_desc'];
			$sponsor 		= $_REQUEST['sponsor'];
			$date 			= explode('/', $_REQUEST['date']); 
			$mysql_date 	= $date[2].'-'.$date[1].'-'.$date[0];
			$start 			= $_REQUEST['time_start'];
			$stop 			= $_REQUEST['time_stop'];
			$logo 			= $_REQUEST['image_logo'];
	
			
			$sql = 'INSERT INTO events (name_eventR, short_desc_eventR, description_eventR, 
						sponsor_event, date_event, time_start, time_stop, image_logo, flag) 
					VALUES (?, ?, ?, ?, ?, ?, ?, ?, 1)';
			$stmt = $this->getDBH()->prepare($sql);
			$stmt->execute(array($name, $short_desc, $desc, $sponsor, $mysql_date, $start, $stop, $logo));
			
			return true;
		}
	}
	// УДАЛЕНИЕ СОБЫТИЯ ИЗ ТАБЛИЦЫ 'EVENTS'
	public function remove_event($id) 
	{
		$sql='DELETE FROM events WHERE id_event=?';
		$stmt = $this->getDBH()->prepare($sql);
		$stmt->execute([$id]);
	}
	// ОТКРЫТИЕ/ЗАКРЫТИЕ СОБЫТИЯ ИЗ ТАБЛИЦЫ 'EVENTS'
	public function lock_event($id, $flag) 
	{
		if ($flag == 1) $flag = false; else $flag = true;

		$sql = 'UPDATE events SET flag=? WHERE id_event=?';
		$stmt = $this->getDBH()->prepare($sql);
		$stmt->execute(array($flag, $id));
		return true;
	}
	// ДОБАВЛЕНИЕ ИЗМЕНЕНИЯ В ТАБЛИЦУ 'EVENTS'
	public function edit_event($id)
	{
		if (empty($_REQUEST['name_event']) OR empty($_REQUEST['description']) 
			OR empty($_REQUEST['short_desc']) OR empty($_REQUEST['sponsor']) 
			OR empty($_REQUEST['date']) OR empty($_REQUEST['time_start']) 
			OR empty($_REQUEST['time_stop']))
		{
			return false;
		}
		else
		{
			$name 			= $_REQUEST['name_event'];
			$desc 			= $_REQUEST['description'];
			$short_desc 	= $_REQUEST['short_desc'];
			$sponsor 		= $_REQUEST['sponsor'];
			$date 			= explode('/', $_REQUEST['date']); 
			$mysql_date 	= $date[2].'-'.$date[1].'-'.$date[0];
			$start 			= $_REQUEST['time_start'];
			$stop 			= $_REQUEST['time_stop'];
			$logo 			= $_REQUEST['image_logo'];
			$flag 			= $_REQUEST['flag'];
	
			
			$sql = 'UPDATE events SET (name_eventR, short_desc_eventR, description_eventR, 
						sponsor_event, date_event, time_start, time_stop, image_logo, flag) 
					VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) WHERE id=?';
			$stmt = $this->getDBH()->prepare($sql);
			$stmt->execute(array($name, $short_desc, $desc, $sponsor, $mysql_date, $start, $stop, $logo, $flag, $id));
			
			return true;
		}
	}
}
?>