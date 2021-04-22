var div = document.getElementById("premierInput");
var champProduit = document.getElementById("produit");
console.log (champProduit);
var champSup = document.createElement('input');


var ecouteButton = document.getElementById ("champSuplmentaire");


ecouteButton.addEventListener("click", function(){
     div.appendChild(champSup);
});
