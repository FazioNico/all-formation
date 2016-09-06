class DebuggerTest{
  constructor(){
    this.title = 'Hello and welcome in Chrome DevTools!';
  }
  displayTitle(){

    setTimeout(function(){
      document.getElementsByClassName('debuggerTest')[0].innerHTML = `<h1>${this.title}</h1>`
      console.log( 'this.title ->', this.title);
    }, 100);
  }
}
