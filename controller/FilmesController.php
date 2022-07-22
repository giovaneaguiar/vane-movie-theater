<?php

session_start();

require "./repository/FilmesRepositoryPDO.php";
require "./model/Filme.php";


class FilmesController
{
    public function save($request)
    {
        $filmesRepository = new FilmesRepositoryPDO();

        //$filme->titulo = $request["titulo"];
        //$filme->sinopse = $request["sinopse"];
        //$filme->nota = $request["nota"];
        //$filme->poster = $request["poster"];
        $filme = (object) $request;

        $upload = $this->savePoster($_FILES);

        if (gettype($upload) == "string") {
            $filme->poster = $upload;
        }

        $_FILES["poster_file"];

        if ($filmesRepository->salvar($filme)) {

            $_SESSION["msg"] = "Filme cadastrado com sucesso";
        } else {
            $_SESSION["msg"] = "Erro ao cadastrar filme";
        }


        header("Location: /");
    }

    public function index()
    {
        $filmesRepository = new FilmesRepositoryPDO();
        return $filmesRepository->listarTodos();
    }

    private function savePoster($file)
    {
        $posterDir = "imagens/posters/";
        $posterPath = $posterDir . basename($file["poster_file"]["name"]);
        $posterTmp = $file["poster_file"]["tmp_name"];

        if (move_uploaded_file($posterTmp, $posterPath)) {
            return $posterPath;
        } else {
            return false;
        }
    }

    public function favorite($id){
        $filmesRepository = new FilmesRepositoryPDO();
        $result = ['success' => $filmesRepository->favoritar($id)];
        //o servidor vai responder com json, então mudando a reposta para json.
        header('Content-type: application/json');
        echo json_encode($result);
    }

    public function delete($id){
        $filmesRepository = new FilmesRepositoryPDO();
        $result = ['success' => $filmesRepository->delete($id)];
        //o servidor vai responder com json, então mudando a reposta para json.
        header('Content-type: application/json');
        echo json_encode($result);
    }


}
