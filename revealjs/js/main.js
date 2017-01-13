/*
 Define variable
*/
var hash = window.location.hash.substr(1)
var button = document.getElementById('login')
var userInput = document.getElementById('username')

var listeUser = [
  '684172b5b0d7222a1ee49e0ce5693959b2febff661f198429fa23963cc9e1526e3cb8f5b9d99314123ca92213706772989404f54abfcab66d6345f6e3286f5de', // moi
  'fbcb7acce78e7c5178a9e5f2b4f8bd2df5d1d017fae90f2508e30b5ddc43512fa821a6ec4b4f6ba1c410185d3c712a46d35fa37b71ebc39a304c367c51837bc1', // lan
  '33afd882929b8d834fcf0fab7383eed94f4c9fc226a49434a09fb8b0dc7da1dee5116f32c0fe9010cf8ffd0475d8e3ea846fd0b6b5bca0ae9c61355dd2b92f98', // céline
  'e76242003ec82abb8d0685fc49e344a5269f328e93b6d7949304229caeb78107c98e0fb71beeb5886f427ed05c1a49c261680c8ed7a6104d94ecb58066c43143', // roberto
  '189a0fd009cefdab0bbf5233ffe6f28a92f62677897d63214f15d1f182a75500539c152677042215a21384711bae929d534c0879b5472cbd1e3cdcafcd5f4333', // antonio
]
var listeLink = [
  'slides-debug-outil-dev.html',
  'pdf/pdf-debug-outil-dev.pdf',

  'slides-firebase-basic.html',
  'pdf/pdf-firebase-basic.pdf',

  'slides-git-formation.html',
  'pdf/pdf-git-formation.pdf',

  'slides-formation-es6.html',
  'pdf/pdf-formation-es6.pdf',

  'slides-introduction-typescript.html'
]

/*
  LoadEvent & Event Listener
*/
window.onload = isAuth();
button.addEventListener('click', e =>{
  login(e)
})

/*
  Core Function
*/
function isAuth(){
  let userAuth = loadStorage()
  if(userAuth!= null
  && listeLink.find(link => {return link == hash})
  && listeUser.find(user => {return user == userAuth})){
    window.location = hash
  }
  else {
    console.log('user not auth')
  }
}

function login(e){
  //console.log(hash)
  e.preventDefault()
  var resultUser = listeUser.find(user => {return user == hashing(userInput.value)})
  var resultLink = listeLink.find(link => {return link == hash})

  if(hash == 'save'){
    console.log('new user hash-> ', hashing(userInput.value));
    return
  }
  if(!resultUser){
    alert('Error: User not found!');
    return;
  }
  if(!resultLink){
    alert('Error: Page not found!');
    return;
  }

  if(resultUser && resultLink){
    console.log('find->', resultUser, resultLink)
    saveStorage()
    window.location = hash
  }

}

function loadStorage(){
  return localStorage.getItem('cours-nomades')
}

function saveStorage(){
  localStorage.setItem('cours-nomades', hashing(userInput.value))
}

function hashing(data){
  var shaObj = new jsSHA("SHA-512", "TEXT");
  shaObj.update(data);
  var hash = shaObj.getHash("HEX");
  //console.log(hash)
  return hash
}
