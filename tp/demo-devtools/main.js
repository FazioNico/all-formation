// Exo 1

console.info( 'Exo1: résoudre bug de calcule => but: aditionner a+b');
var a = 2011;
var b = 5;
console.log('<h1>'+ (a + b) +'</h1>')

// Exo 2
console.info( `Exo2: résoudre bug d'affichage => but: remplacer 'text' par le contenu de la variable text`);
var text = 'Hello world!'
console.log('<h1>'+text+'<br> Welcome in Chrome DevTools!'+'</h1>');

// Exo 3
console.info(`Exo3: résoudre bug de la function => elle trouve des element qui n'existe pas... trouver pourquoi et corriger `);
function trouverElementDansTableau(tableau, valeur){
  for (var i = 0; i < tableau.length; i++) {
    if(tableau[i] == valeur){
      return 'Trouvé! => ' + tableau[i]
    }
    else {
      return 'Pas Trouvé!'
    }
  }
}
