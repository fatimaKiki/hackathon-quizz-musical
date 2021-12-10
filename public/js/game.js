console.log('Hello from game.js');

// ===================================================
// =============== ELEM from the DOM =================
// ===================================================

const _startBtn = document.getElementById('start-game');
const _lyrics = document.getElementById('lyrics');
const _answerContainer = document.getElementById('answer-container');
const _playerId = document.getElementById('player-id');
const _score = document.getElementById('score');
const _artist = document.getElementById('artist');
const _title = document.getElementById('title');
const _radioInputs = document.querySelectorAll('input[type="radio"]');
const _result = document.getElementById('result');



const playGame = () => {
  console.log('hello');
  const lyrics0 = fetch(urls[0])
  // .then(response => response.text())
            .then(data => {
            // console.log('LYRICS ::', data.text());
              data.json()
                  .then((v) => {
                          // console.log('V ::', v);  
                          
                          SONGS = [
                            { title: 'All I Have To Give', artist: 'Backstreet Boys', lyrics: v.lyrics },
                            { title: 'Fake 1', artist: '1 Boys', lyrics: v.lyrics },
                            { title: 'Fake 2', artist: '2 Boys', lyrics: v.lyrics },
                          ];

                          CURRENT_SONG = SONGS[0];

                          gameState = Object.assign(gameState, { score: 0, playerId:  4});
                          _playerId.innerText = gameState.playerId;

                          const { correctAnswer } = initGame2();

                          setTimeout(() => {
                            console.log('Times Up ! Now choose...');
                            makeAndDisplayAnswers(correctAnswer, tokenizeLyrics(CURRENT_SONG.lyrics));
                            listenToAnswers();
                          }, 3000);
    
                  });

            });
          };
playGame();