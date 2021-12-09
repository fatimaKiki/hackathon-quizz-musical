'use strict'
console.log('Hello from JS !!');
// const sendAjax = function(url, methode = "POST", data = null) {
//   return new Promise(function(resolve, reject) {
//   // Création d'un objet "promise" en attente
//   // Qui sera résolu avec la méthode "resolve"
//   // ou en erreur avec la méthode "reject"
//   const request = new XMLHttpRequest();
//   request.addEventListener("readystatechange", function(e) {
//     if(request.readyState === 4) {
//       console.log('Req STATUS ::', request.status);
//       console.log('Req STATUS ::', request);
//       // const data = JSON.parse(request.responseText);
//       if(/^2[0-9]{2}$/.test(request.status)) {
//       // Requete ajax terminé avec succes
//         resolve(data);
//       }
//       else {
//         // Requete en erreur (status code != "2xx")
//         reject(data);
//       }
//     }
//   })
//   request.open(methode, url, true);
//   request.send(data);
//   })
// };

// // const url = 'http://localhost/interface3/hackathon-quizz-musical/index.php?section=resultat';
// const url = 'http://localhost/interface3/hackathon-quizz-musical/?section=resultat';


// sendAjax(url, 'POST', {
//   id: 5,
//   score: 3,
// })
const sendRequest = function() {
  // Test de garde - Vérification avant la requete
  // if(!score || score.trim() === '') {
      // result.innerHTML = 'La demande n\'est pas correcte !!!';
      // console.log('Score manquant');
      // return;
  // }

  const url = 'http://localhost/interface3/hackathon-quizz-musical/index.php?section=resultat';
  // const url = URL_AGIFY.replace('__score__', score);
  console.log('Request to', url); 

  // axios.post(url)
  //     .then((response) => {
  //         console.log(response.data);
          
  //         const {score, age} = response.data;
  //         result.innerHTML = `L'age moyen des personnes qui se nomme "${score}" est de ${age} ans`;
  //     })
  //     .catch((error) => {
  //         console.log(error);
          
  //         result.innerHTML = 'Il y a eu une erreur :o';
  //     });

      axios.post(url, {
        id: 5,
        score: 3
      })
      .then(function (response) {
        console.log('response ::', response);
      })
      .catch(function (error) {
        console.log('error::', error);
      });

  // axios.get(url)
  //     .then((response) => {
  //         console.log(response.data);
          
  //         const {score, age} = response.data;
  //         result.innerHTML = `L'age moyen des personnes qui se nomme "${score}" est de ${age} ans`;
  //     })
  //     .catch((error) => {
  //         console.log(error);
          
  //         result.innerHTML = 'Il y a eu une erreur :o';
  //     });
};

sendRequest(); 