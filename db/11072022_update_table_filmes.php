<?php

$bd = new SQLite3("vanemovietheater.db");

$sql = "ALTER TABLE vanemovietheater ADD COLUMN favorito INT DEFAULT 0";

if ($bd->exec($sql)) {
    echo "\nTabela vanemovietheater alterada com sucesso.\n";
}

else {
    echo "\nErro ao alterar tabela vanemovietheater.\n";
}