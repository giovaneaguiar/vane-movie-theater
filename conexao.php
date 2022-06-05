<?php

$bd = new SQLite3("vanemovietheater.db");

$sql = "DROP TABLE IF EXISTS vanemovietheater";

if ($bd->exec($sql)) {
    echo "\nTabela vanemovietheater excluída.\n";
}

$sql = "CREATE TABLE vanemovietheater (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(2,1)
    )
";

if ($bd->exec($sql)) {
    echo "\nTabela vanemovietheater criada.\n";
} else {
    echo "\nErro ao criar tabela vanemovietheater.\n";
}

$sql = "INSERT INTO vanemovietheater (id,titulo,poster,sinopse,nota) VALUES (
    0, 
    'Matrix',
    'https://www.themoviedb.org/t/p/original/etJHvVsM9aefWWrW23r5BXgVK1F.jpg',
    'Em um futuro próximo, Thomas Anderson (Keanu Reeves), um jovem programador de computador que mora em um cubículo escuro,
    é atormentado por estranhos pesadelos nos quais encontra-se conectado por cabos e contra sua vontade, em um imenso sistema de computadores do futuro.
    Em todas essas ocasiões, acorda gritando no exato momento em que os eletrodos estão para penetrar em seu cérebro.',
    9.7
)";

if ($bd->exec($sql)) {
    echo "\nFilmes inseridos com sucesso.\n";
} else {
    echo "\nErro ao inserir filmes.\n";
}

$sql = "INSERT INTO vanemovietheater (id,titulo,poster,sinopse,nota) VALUES (
    1, 
    'Pulp Fiction: Tempo de Violência',
    'https://www.themoviedb.org/t/p/original/tptjnB2LDbuUWya9Cx5sQtv5hqb.jpg',
    'Vincent Vega (John Travolta) e Jules Winnfield (Samuel L. Jackson) são dois assassinos profissionais que trabalham fazendo cobranças para Marsellus Wallace (Ving Rhames), 
    um poderosos gângster. Vega é forçado a sair com a garota do chefe, temendo passar dos limites. Enquanto isso, o pugilista Butch Coolidge (Bruce Willis) 
    se mete em apuros por ganhar uma luta que deveria perder.',
    9.1
)";

if ($bd->exec($sql)) {
    echo "\nFilmes inseridos com sucesso.\n";
} else {
    echo "\nErro ao inserir filmes.\n";
}
