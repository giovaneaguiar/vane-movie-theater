<?php

require "Conexao.php";

class FilmesRepositoryPDO
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::criar();
    }

    public function listarTodos(): array
    {

        $filmesLista = array();
        $sql = "SELECT * FROM vanemovietheater";
        $filmes = $this->conexao->query($sql);
        while ($filme = $filmes->fetchObject()) {
            array_push($filmesLista, $filme);
        }
        return $filmesLista;
    }

    public function listarFavoritos(): array
    {
        $filmesFavorito = array();
        $sql = "SELECT * FROM vanemovietheater WHERE favorito IS NOT 0";
        $filmes = $this->conexao->query($sql);
        while ($filme = $filmes->fetchObject()) {
            array_push($filmesFavorito, $filme);
        }

        return $filmesFavorito;
    }
    public function salvar($filme): bool
    {

        $sql = "INSERT INTO vanemovietheater (titulo,poster,sinopse,nota) VALUES (
            :titulo, :poster, :sinopse, :nota)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':titulo', $filme->titulo, PDO::PARAM_STR);
        $stmt->bindValue(':poster', $filme->poster, PDO::PARAM_STR);
        $stmt->bindValue(':sinopse', $filme->sinopse, PDO::PARAM_STR);
        $stmt->bindValue(':nota', $filme->nota, PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function favoritar($id)
    {

        $sql = "UPDATE vanemovietheater SET favorito = NOT favorito WHERE id=:id";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    public function delete($id)
    {

        $sql = "DELETE from vanemovietheater WHERE id=:id";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }
}
