<?php include ROOT . '/views/layouts/header.php'?>

<div class="container-fluid">
	<div class="row">
		<div class="col">
			<a href="/create" class="btn btn-default back"><i class="fa fa-plus"></i>Добавить контакт</a>
		</div>
	</div>

	<div class="row">
        <div class="col">
            <br/>
            <h4>Список контактов</h4>
        </div>
    </div>

    <table class="table-bordered table-striped table">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Номер телефона</th>
            <th>Удалить</th>
        </tr>
        <?php foreach ($contactsList as $contact): ?>
            <tr>
                <td><?php echo $contact['id']; ?></td>
                <td><?php echo $contact['name']; ?></td>
                <td><?php echo $contact['number']; ?></td>
                <td><a href="/delete/<?php echo $contact['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include ROOT . '/views/layouts/footer.php'?>