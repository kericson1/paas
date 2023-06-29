// Créer une variable de session pour stocker les données
sessionStorage.setItem('connecterUser', 'JohnDoe');

// Pour accéder aux données, utiliser getItem()
let données = sessionStorage.getItem('connecterUser');
console.log(connecterUser); // affichera "JohnDoe"

// Pour vider les données, utiliser removeItem()
sessionStorage.removeItem('connecterUser');
