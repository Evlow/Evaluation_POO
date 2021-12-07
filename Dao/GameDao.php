<?php
class GameDao
{
    private PDO $dbh;

    public function __construct()
    {
        try{
            $this->dbh = new PDO("mysql:host=localhost;dbname=wf3_php_final_mathilde;charset=utf8","root","",
            [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
        }
        catch(PDOException $e){
            echo (("Erreur de connexion a la base de donnée ") . ($e->getMessage()));
            header("Location:../View/error.html.php");
        }
    }

    /**
     * Récupères tous les jeux de la BDD
     *
     * @return Game[]
     */
    public function getAll(): array
    {
        $sth = $this->dbh->prepare("SELECT * FROM game");
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        require_once '../Model/Game.php';

        foreach ($results as $key => $game) {
            $results[$key] = (new Game())
                ->setGameId($game['game_id'])
                ->setTitle($game['title'])
                ->setMinPlayers($game['min_players'])
                ->setMaxPlayers($game['max_players']);
        }

        return $results;
    }
}