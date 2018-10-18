<?php 

class Contact
{
	public static function getContacts()
	{
		// Соединение с БД
        $db = Db::getConnection();
        // Запрос к БД
        $result = $db->query('SELECT id, name, number FROM note ORDER BY id ASC');
        // Получение и возврат результатов
        $contactsList = array();
        $i = 0;
        while ($row = $result->fetch()) 
        {
        	$contactsList[$i]['id'] = $row['id'];
        	$contactsList[$i]['name'] = $row['name'];
            $contactsList[$i]['number'] = $row['number'];
            $i++;
        }
        return $contactsList;
	}
	/**
     * Добавляет новый контакт
     */
    public static function createContact($name, $number)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO note (name, number) ' . 'VALUES (:name, :number)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':number', $number, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Удаляет категорию с заданным id
     */
    public static function deleteContactById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'DELETE FROM note WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}

 ?>