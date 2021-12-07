<?php
class ContestDao
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
     * Récupères tous les matchs de la BDD
     *
     * @return Contest[]
     */
    public function getAll(): array
    {
        $sth = $this->dbh->prepare("SELECT * FROM contest");
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        require_once '../Model/Contest.php';

        foreach ($results as $key => $contest) {
            $results[$key] = (new Contest())
                ->setContestId($contest['contest_id'])
                ->setGameId($contest['game_id'])
                ->setStartDate($contest['start_date'])
                ->setWinnerId($contest['winner_id']);
        }

        return $results;
    }
}