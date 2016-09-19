// Exo 1

let a = 2011;
let b = '5';
let debuggerTest1 = document.getElementsByClassName('debuggerTest1')[0];
debuggerTest1.innerHTML = '<h1>'+a+b+'</h1>';
console.log( 'Exo1: résoudre bug de calcule');

// Exo 2
let debuggerTest2 = document.getElementsByClassName('debuggerTest2')[0];
let variable = 'Hello world!'
debuggerTest2.innerHTML = '<h1>'+'variable'+'<br> Welcome in Chrome DevTools!'+'</h1>';
console.log( `Exo2: résoudre bug d'affichage`);
// Exo 3
class DebuggerTest{
  constructor(){
    this.title = 'Yeah! Javascript is cool!';
  }
  displayTitle(){

    setTimeout(function(){
      let debuggerTest3 = document.getElementsByClassName('debuggerTest3')[0];
      debuggerTest3.innerHTML = `<h1>${this.title}</h1>`
      console.log( 'Exo3: bug avec this.title ->', this.title);
    }, 100);
  }
}
