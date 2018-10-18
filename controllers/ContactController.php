<?php 

class ContactController
{
	public function actionIndex() 
    {
        // Получаем список контактов
        $contactsList = Contact::getContacts();
        // Подключаем вид
	    require_once(ROOT . '/views/contact/index.php');
	    return true;
	}

	/**
     * Action для страницы "Добавить контакт"
     */
    public function actionCreate()
    {
        // Обработка формы
        if (isset($_POST['submit'])) 
        {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $number = $_POST['number'];
            // Флаг ошибок в форме
            $errors = false;
            // При необходимости можно валидировать значения нужным образом
            if (!isset($name) || empty($name)) 
            {
                $errors[] = 'Заполните поле имя';
            }
            if (!isset($number) || empty($number))
            {
                $errors[] = 'Заполните поле номер телефона';
            }
            if ($errors == false) 
            {
                // Если ошибок нет
                // Добавляем новую категорию
                Contact::createContact($name, $number);
                // Перенаправляем пользователя на страницу управлениями контактами
                header("Location: /");
            }
        }
        require_once(ROOT . '/views/contact/create.php');
        return true;
    }

    /**
     * Action для страницы "Удалить контакт"
     */
    public function actionDelete($id)
    {
        // Обработка формы
        if (isset($_POST['submit'])) 
        {
            // Если форма отправлена
            // Удаляем категорию
            Contact::deleteContactById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /");
        }
        // Подключаем вид
        require_once(ROOT . '/views/contact/delete.php');
        return true;
    }
}

 ?>