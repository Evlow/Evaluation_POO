<!-- <?php require_once 'header.html.php'; ?> -->


<form action="" method="post">
    <label for="title">Titre du jeu </label>
    <input type="text" name="title" id="title">
    <label for="min_player ">Nombre de joueurs minimum</label>
    <input type="number" name="min_player" id="min_player">
    <label for="max_player ">Nombre de joueurs maximum</label>
    <input type="number" name="max_player" id="max_player">
    <button type="submit">Ajouter un jeu</button>
</form>

<?php require_once 'footer.html.php'; ?>

