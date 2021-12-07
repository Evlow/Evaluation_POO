<h2>Liste des jeux</h2>

<table>
    <thead>
        <th>Nom du jeu</th>
        <th>Nombre de joueurs minimum</th>
        <th>Nombre de joueurs maximum</th>
    </thead>
    <tbody>
    <?php foreach($newGame as $game):?>
    <tr>
        <td><?= $game->getTitle();?></td>
        <td><?= $game->getMin_players();?></td>
        <td><?= $game->getMax_players();?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    <tfoot>
        <th>Nom du jeu</th>
        <th>Nombre de joueurs minimum</th>
        <th>Nombre de joueurs maximum</th>
    </tfoot>
</table>