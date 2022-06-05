<?php
//Giovane
include "cabecalho.php";
?>

<?php

$bd = new SQLite3("vanemovietheater.db");
$sql = "SELECT * FROM vanemovietheater";
$filmes = $bd->query($sql);

?>

<body>
    <nav class="nav-extended brown darken-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Vane Movie Theater</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent brown darken-4">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="row">

            <?php
            // fetchArray - pega cada um dos registros retornados pelo SELECT e armaneza em um array temporário
            //percorre todos filmes criados
            while ($filme = $filmes->fetchArray()) : ?>
                <div class="col s12 m6 l3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="<?= $filme["poster"] ?>">
                            <a class="btn-floating halfway-fab waves-effect waves-light red">
                                <i class="material-icons">favorite_border</i>
                            </a>
                        </div>
                        <div class="card-content">
                            <p class="valign-wrapper">
                                <i class="material-icons amber-text">star</i> <?= $filme["nota"] ?>
                            </p>
                            <span class="card-title"><?= $filme["titulo"] ?></span>
                            <p><?= $filme["sinopse"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>

    </div>

</body>

</html>