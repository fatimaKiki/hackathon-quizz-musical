<?php 
    echo 'This is GAME page';
    // TODO : rename this page
?>
<h3>Start Game</h3>

<!-- btn START game -->
<!-- <button id="start-game">Start Game</button> -->

<!-- Player -->
<div style="background: lightgrey; width: 40rem; display: flex; justify-content: space-around;">
<p style="margin-inline: 1.5rem;">Player <span id="player-id"></span></p>
<p>Score : <span id="score">0</span></p>
</div> 

<!-- Song -->
<div style="background: lightgrey; width: 40rem; display: flex; justify-content: space-around;">
<p style="margin-inline: 1.5rem;"><span id="artist"></span></p>
<p><span id="title"></span></p>
</div> 

<!-- Lyrics -->
<div id="lyrics" style="height: 150px; overflow-y: scroll; padding-block: 1rem; background: lightblue; width: 40rem;"></div> 

<!-- Answers -->
<div id="answer-container" style="margin: 1.5rem;" hidden>
<div class="answer-item">
    <input type="radio" id="a" name="a" value="a">
    <label for="a">answer A</label></div>
<div class="answer-item">
    <input type="radio" id="b" name="b" value="b">
    <label for="b">answer B</label></div>
<div class="answer-item">
    <input type="radio" id="c" name="c" value="c">
    <label for="c">answer C</label></div>
<div class="answer-item">
    <input type="radio" id="d" name="d" value="d">
    <label for="d">answer D</label></div>
</div>

<!-- Message Well Done / Too Bad -->
<div id="result"></div>

<form
    action="#"
    method="post"
    id="game-form">
    <div id="hidden-inputs" hidden>
        <input type="score" name="score" id="score" placeholder="score" value="10">
        <input type="playerId" name="playerId" id="playerId" placeholder="playerId" value="8">
        <button type="submit">Fake end Game</button>
    </div>
    <button id="end-with-js" type="submit" hidden>End game with JS</button>
</form>
<script src="public/js/songsData.js"></script>
<script src="public/js/gameState.js"></script>
<script src="public/js/gameUtils.js"></script>
<script src="public/js/game.js"></script>

<!-- <a href="?section=resultat">End Game</a> -->