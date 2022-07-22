<?php

include "cabecalho.php";

?>

<?php
session_start();
require "./util/Mensagem.php";

$controller = new FilmesController();
$filmesFavorito = $controller->indexFavorito();
?>

<body>

    <nav class="nav-extended brown darken-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li><a href="/novo">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Vane Movie Theater</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent brown darken-4">
                <li class="tab"><a href="/">Todos</a></li>
                <li class="tab"><a class="active" href="/favoritos">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class=container>
        <div class=row>
            <?php if (!$filmesFavorito) echo "<p class='card-panel red lighten-4'>Nenhum filme favoritado</p>" ?>

            <?php foreach ($filmesFavorito as $filme) : ?>
                <div class="col s7 m4 l4 xl3">
                    <div class="card hoverable card-serie">
                        <div class="card-image">
                            <img src="<?= $filme->poster ?>" class="activator" />
                        </div>
                        <div class="card-content">
                            <p class="valign-wrapper">
                                <i class="material-icons amber-text">star</i> <?= $filme->nota ?>
                            </p>
                            <span class="card-title activator truncate">
                                <?= $filme->titulo ?>
                            </span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?= $filme->titulo ?><i class="material-icons right">close</i></span>
                            <p><?= substr($filme->sinopse, 0, 500) . "..." ?></p>
                    
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>