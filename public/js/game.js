console.log('Hello from game.js');

const sendAjax = function(url, methode = "POST", data = null) {
  return new Promise(function(resolve, reject) {
  // Création d'un objet "promise" en attente
  // Qui sera résolu avec la méthode "resolve"
  // ou en erreur avec la méthode "reject"
  const request = new XMLHttpRequest();
  request.addEventListener("readystatechange", function(e) {
    if(request.readyState === 4) {
      const data = JSON.parse(request.responseText);
      if(/^2[0-9]{2}$/.test(request.status)) {
      // Requete ajax terminé avec succes
        resolve(data);
      }
      else {
        // Requete en erreur (status code != "2xx")
        reject(data)
      }
    }
  })
  request.open(methode, url, true);
  request.send(data);
  })
 }
 const url = 'http://localhost/interface3/hackathon-quizz-musical/index.php?section=resultat';

sendAjax(url, 'POST', {
  playerId: 5,
  score: 3,
});

console.log('Re hello from game.js');
