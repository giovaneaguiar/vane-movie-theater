<?php
//Giovane
include "cabecalho.php";
?>

<?php

session_start();


require "./util/Mensagem.php";

$controller = new FilmesController();
$filmes = $controller->index();

?>

<body>
    <nav class="nav-extended brown darken-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="/">Galeria</a></li>
                <li><a href="/novo">Cadastrar</a></li>
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
            //percorre todos filmes criados
            foreach ($filmes as $filme) : ?>
                <div class="col s12 m6 l3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="<?= $filme->poster ?>">
                            <button data-id="<?= $filme->id ?>" class="btn-fav btn-floating halfway-fab waves-effect waves-light red">
                                <i class="material-icons"><?= ($filme->favorito) ? "favorite" : "favorite_border" ?></i>
                            </button>
                        </div>
                        <div class="card-content">
                            <p class="valign-wrapper">
                                <i class="material-icons amber-text">star</i> <?= $filme->nota ?>
                            </p>
                            <span class="card-title"><?= $filme->titulo ?></span>
                            <p><?= $filme->sinopse ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>

    <?= Mensagem::mostrar(); ?>

    <script>
        document.querySelectorAll(".btn-fav").forEach(btn => {
            btn.addEventListener("click", evento => {
                const id = btn.getAttribute("data-id");
                //requisição ajax
                fetch(`/favoritar/${id}`)
                //convertendo para json
                .then(response => response.json()
                //se o atributo sucesso for ok, faço a troca do botão
                .then(response => {
                    if (response.success === "ok") {
                        if (btn.querySelector("i").innerHTML === "favorite") {
                            btn.querySelector("i").innerHTML = "favorite_border";
                        } else {
                            btn.querySelector("i").innerHTML = "favorite";
                        }
                    }
                }))
                .catch(error => {
                    M.toast({html: 'Erro ao favoritar'});
                })

            });
        });
    </script>

</body>

</html>