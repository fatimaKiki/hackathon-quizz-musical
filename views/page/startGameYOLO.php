<?php 
    echo 'This is GAME page';
    // TODO : rename this page
?>
<h3>Start Game</h3>

<!-- btn START game -->
<!-- <button id="start-game">Start Game</button> -->

<!-- Player -->
<div>
<p>Player <span id="player-id"></span></p>
<p>Score : <span id="score">0</span></p>
</div> 

<!-- Song -->
<div>
<p><span id="artist"></span></p>
<p><span id="title"></span></p>
</div> 

<!-- Lyrics -->
<div id="lyrics"></div> 

<!-- Answers -->
<div id="answer-container" hidden>
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
        <input type="score" name="score" id="scoreInput" placeholder="score">
        <!-- <input type="playerId" name="playerId" id="playerInput" placeholder="playerId"> -->
        <!-- <button type="submit">Fake end Game</button> -->
    </div>
    <!-- <button id="end-with-js" type="submit" hidden>End game with JS</button> -->
</form>
<script src="public/js/songsData.js"></script>
<script src="public/js/gameState.js"></script>
<script src="public/js/gameUtils.js"></script>
<script src="public/js/game.js"></script>

<!-- <a href="?section=resultat">End Game</a> -->