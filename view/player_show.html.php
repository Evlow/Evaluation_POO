<h2>Liste des joueurs</h2>

<table>
    <thead>
        <th>Email du joueur</th>
        <th>Pseudo du joueur</th>

    </thead>
    <tbody>
        <?php foreach ($newPlayer as $player) : ?>
            <tr>
                <td><?= $player->getEmail(); ?></td>
                <td><?= $player->getNickname(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <th>Email du joueur</th>
        <th>Pseudo du joueur</th>
    </tfoot>
</table>