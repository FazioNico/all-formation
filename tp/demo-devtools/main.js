// Exo 1

let a = 10;
let b = '5';
let debuggerTest1 = document.getElementsByClassName('debuggerTest1')[0];
debuggerTest1.innerHTML = `<h1>${a+b}</h1>`;

// Exo 2
class DebuggerTest{
  constructor(){
    this.title = 'Hello and welcome in Chrome DevTools!';
  }
  displayTitle(){

    setTimeout(function(){
      let debuggerTest2 = document.getElementsByClassName('debuggerTest2')[0];
      debuggerTest2.innerHTML = `<h1>${this.title}</h1>`
      console.log( 'this.title ->', this.title);
    }, 100);
  }
}
