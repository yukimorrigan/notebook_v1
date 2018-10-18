<?php include ROOT . '/views/layouts/header.php' ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <br/>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="/admin" class="nav-link">Контакты</a></li>
                        <li class="nav-item"><a href="#" class="nav-link active">Удалить контакт</a></li>
                    </ul>
                </div>
            </nav>
            <br/>
            <h4>Удалить контакт #<?php echo $id; ?></h4>
            <p>Вы действительно хотите удалить этот контакт?</p>
            <form method="post">
                <input type="submit" name="submit" value="Удалить" class="btn btn-primary" />
            </form>
            <br/>
        </div>
    </div>
    
</div>

<?php include ROOT . '/views/layouts/footer.php' ?>