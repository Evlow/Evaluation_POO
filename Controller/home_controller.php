<?php

require_once '../Dao/GameDao.php';

try {
    $dao = new GameDao();
    $results = $dao->getAll();
} catch (PDOException $e) {
    echo $e->getMessage();
}

require "../view/home.html.php";


require_once '../Dao/PlayerDao.php';

try {
    $dao = new PlayerDao();
    $results = $dao->getAll();
} catch (PDOException $e) {
    echo $e->getMessage();
}

require "../view/home.html.php";

require_once '../Dao/ContestDao.php';

try {
    $dao = new ContestDao();
    $results = $dao->getAll();
} catch (PDOException $e) {
    echo $e->getMessage();
}

require "../view/home.html.php";