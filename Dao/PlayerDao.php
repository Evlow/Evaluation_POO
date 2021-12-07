<?php
class PlayerDao
{
    private PDO $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new PDO(
                "mysql:host=localhost;dbname=wf3_php_final_mathilde;charset=utf8",
                "root",
                "",
                [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            echo (("Erreur de connexion à la base de donnée ") . ($e->getMessage()));
            header("Location:../View/error.html.php");
        }
    }
    /**
     * Récupères tous les joueurs de la BDD
     *
     * @return Player[]
     */
    public function getAll(): array
    {
        $sth = $this->dbh->prepare("SELECT * FROM player");
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        require_once '../Model/player.php';

        foreach ($results as $key => $player) {
            $results[$key] = (new Player())
                ->setPlayerId($player['player_id'])
                ->setEmail($player['email'])
                ->setNickanme($player['nickname']);
        }

        return $results;

    }
}
