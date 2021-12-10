<!-- <script src="public/js/game.js"></script> -->
<?php 
    echo 'This is GAME page';
    // TODO : rename this page
?>
<h3>Start Game</h3>

<!-- <a href="?section=resultat">Afficher les résultat</a> -->

<form
    action="#"
    method="post"
    id="game-form">
    <div id="hidden-inputs" hidden>
        <!-- <label for="score"></label> -->
        <input type="score" name="score" id="score" placeholder="score" value="155">
        <input type="playerId" name="playerId" id="playerId" placeholder="playerId" value="1">
        <button type="submit">Fake end Game</button>
        <!-- TODO: replace this form by JS form.submit() -->
    </div>
        <button id="end-with-js" type="submit">End game with JS</button>
</form>

<!-- <a href="?section=resultat">End Game</a> -->