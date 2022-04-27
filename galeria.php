<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Vane Movie Theater</title>
</head>

<body>
    <nav class="nav-extended brown darken-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
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
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/original/etJHvVsM9aefWWrW23r5BXgVK1F.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">favorite_border</i>
                    </a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i> 9.7</p>
                    <span class="card-title">Matrix</span>
                    <p>Em um futuro próximo, Thomas Anderson (Keanu Reeves), um jovem programador de computador que mora em um cubículo escuro,
                        é atormentado por estranhos pesadelos nos quais encontra-se conectado por cabos e contra sua vontade, em um imenso sistema de computadores do futuro.
                        Em todas essas ocasiões, acorda gritando no exato momento em que os eletrodos estão para penetrar em seu cérebro.</p>
                </div>
            </div>

        </div>

        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/original/tptjnB2LDbuUWya9Cx5sQtv5hqb.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">favorite_border</i>
                    </a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i> 9.7</p>
                    <span class="card-title">Pulp Fiction - Tempo de Violência</span>
                    <p>Vincent Vega (John Travolta) e Jules Winnfield (Samuel L. Jackson) são dois assassinos profissionais que trabalham fazendo cobranças para Marsellus Wallace (Ving Rhames),
                        um poderosos gângster. Vega é forçado a sair com a garota do chefe, temendo passar dos limites. Enquanto isso, o pugilista Butch Coolidge (Bruce Willis) se mete em
                        apuros por ganhar uma luta que deveria perder.</p>
                </div>
            </div>

        </div>
    </div>

</body>

</html>