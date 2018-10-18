<?php 

return array (
	// Список контактов
	'create' => 'contact/create', // actionCreate в ContactController 
    'delete/([0-9]+)' => 'contact/delete/$1', // actionDelete в ContactController 
	'index.php' => 'contact/index', // actionIndex в ContactController 
	'' => 'contact/index', // actionIndex в ContactController
);

 ?>