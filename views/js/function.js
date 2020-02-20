function charLeft(){
    document.getElementById('r').innerHTML='Le message doit contenir 50 caractères minimum et 2000 au maximum. Il vous reste '+(document.getElementById('msg').maxLength-document.getElementById('msg').value.length)+' caractères disponibles.'
}