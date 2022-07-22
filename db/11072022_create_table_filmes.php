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
        nota DECIMAL(2,1),
        favorito INT DEFAULT 0
    )
";

if ($bd->exec($sql)) {
    echo "\nTabela vanemovietheater criada.\n";
} else {
    echo "\nErro ao criar tabela vanemovietheater.\n";
}


