<!-- <script src="public/js/game.js"></script> -->
<?php 
    echo 'This is GAME page';
    // TODO : rename this page
?>
<h3>Start Game</h3>

<!-- <a href="?section=resultat">Afficher les résultat</a> -->

<form
    action="#"
    method="post">
        <input type="score" name="score" id="score" placeholder="score">
        <input type="playerId" name="playerId" id="playerId" placeholder="playerId">
        <button type="submit">End Game</button>
        <!-- TODO: replace this form by JS form.submit() -->
</form>

<!-- <a href="?section=resultat">End Game</a> -->