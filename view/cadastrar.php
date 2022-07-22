<?php
include "cabecalho.php";
?>

<body>
    <nav class="nav-extended brown darken-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Vane Movie Theater</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent brown darken-4">
                <li class="tab"><a class="active" href="/">Todos</a></li>
                <li class="tab"><a href="/favoritos">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <form method="POST" enctype="multipart/form-data">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Filme</span>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Título do Filme</label>
                            </div>
                        </div>

                        <div class="row">

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea" name="sinopse"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col s4">
                                <input id="nota" type="number" step=".1" min=0 max=10 class="validate" name="nota" required>
                                <label for="nota">Nota</label>
                            </div>
                        </div>


                        <div class="file-field input-field">
                            <div class="btn brown lighten-2">
                                <span>Capa</span>
                                <input type="file" name="poster_file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="poster">
                            </div>
                        </div>

                    </div>
                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="/">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light btn brown">Confirmar</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
</body>