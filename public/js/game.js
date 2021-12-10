console.log('Hello from game.js');

const _endGameFakeBtn = document.getElementById('end-with-js');
const _gameForm = document.getElementById('game-form');

_endGameFakeBtn.addEventListener('click', function(e) {
  console.log('Game Form :::', _gameForm);
});
