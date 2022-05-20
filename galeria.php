<?php
//Giovane
include "cabecalho.php";
?>

<?php

//cria filme1
$filme1 = [
    "titulo" => "Pump Fiction - Tempo de Vingança",
    "nota" => 9.5,
    "sinopse" => "Vincent Vega (John Travolta) e Jules Winnfield (Samuel L. Jackson) são dois assassinos profissionais que trabalham fazendo cobranças para Marsellus Wallace (Ving Rhames),
    um poderosos gângster. Vega é forçado a sair com a garota do chefe, temendo passar dos limites. Enquanto isso, o pugilista Butch Coolidge (Bruce Willis) se mete em
    apuros por ganhar uma luta que deveria perder.",
    "poster" => "https://www.themoviedb.org/t/p/original/tptjnB2LDbuUWya9Cx5sQtv5hqb.jpg"
];


//cria filme2
$filme2 = [
    "titulo" => "Matrix",
    "nota" => 9.7,
    "sinopse" => "Em um futuro prÃ³ximo, Thomas Anderson (Keanu Reeves), um jovem programador de computador que mora em um cubÃ­culo escuro,
    Ã© atormentado por estranhos pesadelos nos quais encontra-se conectado por cabos e contra sua vontade, em um imenso sistema de computadores do futuro.
    Em todas essas ocasiÃµes, acorda gritando no exato momento em que os eletrodos estÃ£o para penetrar em seu cÃ©rebro.",
    "poster" => "https://www.themoviedb.org/t/p/original/etJHvVsM9aefWWrW23r5BXgVK1F.jpg"
];

$filmes = [$filme1, $filme2];

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

    <div class="row">

        <?php 
        //percorre todos filmes criados
        foreach ($filmes as $filme) : ?>
            <div class="col s3">
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
        <?php endforeach ?>
    </div>

</body>

</html>