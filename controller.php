<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Récupération des Models
require_once __DIR__ . "/model/Diplomes.php";
require_once __DIR__ . "/model/Competences.php";
require_once __DIR__ . "/model/Soft.php";

// Récupération des constantes d'accès pour la base de données
require_once "./config.php";

//récupère le chemin appelé
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


//Choisir le controller a appelé en fonction du chemin
if (preg_match('#^/cv_informatique/diplomes#', $uri)) {
    $res = manageDiplomes();
} elseif(preg_match('#^/cv_informatique/competences#', $uri)) {
    $res = manageCompetences();
} else{
    $res = manageSofts();
}

echo (json_encode($res));


function manageDiplomes()
{

    //initialiser un objet diplomes
    $dip = new Diplomes();

    //method pour la base de données
    $method =  $_SERVER['REQUEST_METHOD'];

    //RéCUPéRER L'ID dans l'url
    parse_str($_SERVER['QUERY_STRING'], $query);
    $id = isset($query['id']) ? $query['id'] : '';

    //récupérer les pages de diplomes
    $queryPerPage = isset($query['per_page']) ? $query['per_page'] : '';
    $queryPage = isset($query['page']) ? $query['page'] : '';

    switch ($method) {
        case 'GET':
            if ($id) {
                $diplome = $dip->readDiplome($id);
                return $diplome;
            } else {
                if ($queryPerPage) {
                    $queryLimit = $queryPerPage;
                    if ($queryPage) {
                        $queryOffset = $queryPage;
                    } else {
                        $queryOffset = 0;
                    }
                } else {
                    $queryLimit = 50;
                    $queryOffset = 0;
                }
                $diplomes = $dip->searchDiplomes($queryLimit, $queryOffset);
                return $diplomes;
            }
    }
}

function manageCompetences()
{

    //initialiser un objet competences
    $comp = new Competences();

    //method pour la base de données
    $method =  $_SERVER['REQUEST_METHOD'];

    //RéCUPéRER L'ID dans l'url
    parse_str($_SERVER['QUERY_STRING'], $query);
    $id = isset($query['id']) ? $query['id'] : '';

    //récupérer les pages de diplomes
    $queryPerPage = isset($query['per_page']) ? $query['per_page'] : '';
    $queryPage = isset($query['page']) ? $query['page'] : '';

    switch ($method) {
        case 'GET':
            if ($id) {
                $competence = $comp->readCompetence($id);
                return $competence;
            } else {
                if ($queryPerPage) {
                    $queryLimit = $queryPerPage;
                    if ($queryPage) {
                        $queryOffset = $queryPage;
                    } else {
                        $queryOffset = 0;
                    }
                } else {
                    $queryLimit = 50;
                    $queryOffset = 0;
                }
                $competences = $comp->searchCompetences($queryLimit, $queryOffset);
                return $competences;
            }
    }
}

function manageSofts()
{

    //initialiser un objet competences
    $soft = new Soft();

    //method pour la base de données
    $method =  $_SERVER['REQUEST_METHOD'];

    //RéCUPéRER L'ID dans l'url
    parse_str($_SERVER['QUERY_STRING'], $query);
    $id = isset($query['id']) ? $query['id'] : '';

    //récupérer les pages de diplomes
    $queryPerPage = isset($query['per_page']) ? $query['per_page'] : '';
    $queryPage = isset($query['page']) ? $query['page'] : '';

    switch ($method) {
        case 'GET':
            if ($id) {
                $soft = $soft->readSoft($id);
                return $soft;
            } else {
                if ($queryPerPage) {
                    $queryLimit = $queryPerPage;
                    if ($queryPage) {
                        $queryOffset = $queryPage;
                    } else {
                        $queryOffset = 0;
                    }
                } else {
                    $queryLimit = 50;
                    $queryOffset = 0;
                }
                $soft = $soft->searchSofts($queryLimit, $queryOffset);
                return $soft;
            }
    }
}
