
document.addEventListener("DOMContentLoaded", function () {
    require("./bootstrap");
    let username = sessionStorage.getItem('username');
    var topElement = document.querySelector(".top");
    var cardFormEmployeDiv = document.querySelector(".card_form_employe");
    var homeDiv = document.querySelector(".home");
    var accountUserDiv = document.querySelector(".account_user");
    var loginAdminDiv = document.querySelector(".login_admin");
    var actionDiv = document.querySelector(".action");
    var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
    var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");

    if (username== null) {
        console.log("pas de username");
    } else {

            // Vérifier si l'élément existe
                if (cardFormEmployeDiv !== null) {
                    // Masquer l'élément
                    cardFormEmployeDiv.style.display = 'none';
                }
                if (accountUserDiv !== null) {
                    // Masquer l'élément
                    accountUserDiv.style.position = "relative";
                    accountUserDiv.style.display = "flex";
                }

                // Vérifier si l'élément existe
                if (loginAdminDiv !== null) {
                    // Masquer l'élément
                    loginAdminDiv.style.display = 'none';
                }
                if (homeDiv !== null) {
                    homeDiv.style.display = 'block';
                }
                if (actionDiv !== null) {
                    actionDiv.style.display = 'flex';
                    actionDiv.style.flexDirection = "row";
                    actionDiv.style.justifyContent = "space-evenly";
                    actionDiv.style.marginTop = "70px";
                    actionDiv.style.marginBottom = "42px";
                }
                if (cardFormEmployeInscriptionDiv !== null) {
                    cardFormEmployeInscriptionDiv.style.display = 'none';
                }
                if (cardFormAdminInscriptionDiv !== null) {
                    cardFormAdminInscriptionDiv.style.display = 'none';
                }
    }

    // récupération de tous les boutons dropdown
    const dropdowns = document.querySelectorAll('.dropdown-btn');

    // boucle sur chaque bouton dropdown pour ajouter un événement de clic
    dropdowns.forEach(dropdown => {
    // récupération des icônes ouvrir et fermer pour chaque bouton dropdown
    const ouvrirIcon = dropdown.querySelector('.ouvrir');
    const fermerIcon = dropdown.querySelector('.fermer');

    // ajout de l'événement de clic sur l'icône ouvrir
    ouvrirIcon.addEventListener('click', () => {
        // cache l'icône ouvrir et affiche l'icône fermer
        ouvrirIcon.style.display = 'none';
        fermerIcon.style.display = 'block';

        // récupération de la liste déroulante correspondante pour ce bouton dropdown
        const dropdownContent = dropdown.querySelector('.dropdown-content');
        if (dropdownContent) {
            // affiche la liste déroulante
        dropdownContent.style.display = 'block';
        }


    });

    // ajout de l'événement de clic sur l'icône fermer
    fermerIcon.addEventListener('click', () => {
        // cache l'icône fermer et affiche l'icône ouvrir
        fermerIcon.style.display = 'none';
        ouvrirIcon.style.display = 'block';

        // récupération de la liste déroulante correspondante pour ce bouton dropdown
        const dropdownContent = dropdown.querySelector('.dropdown-content');
        if (dropdownContent) {
        // cache la liste déroulante
            dropdownContent.style.display = 'none';
        }


    });
    });


    const menuButton = document.querySelector(".menu-button");
    const menuList = document.querySelector("ul");
    if (menuButton) {
        menuButton.addEventListener("click", function () {
            menuButton.style.display = "none";
            menuList.style.display = "flex";
            if (window.innerWidth <= 600) {
                /* si l'écran est un mobile */
                menuList.style.flexDirection =
                    "column"; /* affiche la liste verticalement */
            }
        });
    }

    // Get the link inside the "ADMINISTRATEUR" div by its ID
    var adminLink = document.getElementById("admin-link");
    var topElement = document.querySelector(".top");
    var accountElement = document.querySelector(".account_user");
    if (adminLink) {
        adminLink.addEventListener("click", function () {
            // Get the "home" and "login_admin" divs
            var cardFormAdminDiv = document.querySelector(".card_form_admin");
            var homeDiv = document.querySelector(".home");
            var loginAdminDiv = document.querySelector(".login_admin");
            var actionDiv = document.querySelector(".action");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");

            // Hide the "home" div and show the "login_admin" div
            homeDiv.style.display = "none";
            actionDiv.style.display = "none";
            cardFormEmployeInscriptionDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "none";
            cardFormAdminDiv.style.display = "block";
            loginAdminDiv.style.display = "flex";
            loginAdminDiv.style.flexDirection = "row-reverse";
            topElement.style.backgroundImage = "url('/images/bg_login_admin.png')";
            accountElement.style.display = "none";
        });
    }

    // Get the link inside the "ADMINISTRATEUR" div by its ID
    var employLink = document.getElementById("employ_link");

    var accountElement = document.querySelector(".account_user");
    if (employLink) {
        employLink.addEventListener("click", function () {
            // Get the "home" and "login_admin" divs
            var cardFormAdminDiv = document.querySelector(".card_form_admin");
            var homeDiv = document.querySelector(".home");
            var loginAdminDiv = document.querySelector(".login_admin");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            var actionDiv = document.querySelector(".action");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");

            // Hide the "home" div and show the "login_admin" div
            homeDiv.style.display = "none";
            actionDiv.style.display = "none";
            cardFormEmployeInscriptionDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "none";
            cardFormAdminDiv.style.display = "none";
            cardFormEmployeDiv.style.display = "block";
            loginAdminDiv.style.display = "flex";
            loginAdminDiv.style.flexDirection = "row-reverse";
            topElement.style.backgroundImage = "url('/images/bg_login_admin.png')";
            accountElement.style.display = "none";
        });
    }

    var acceuilLink = document.getElementById("acceuil-link");
    if (acceuilLink){
        acceuilLink.addEventListener("click", function (){
            var homeDiv = document.querySelector(".home");
            var loginAdminDiv = document.querySelector(".login_admin");
            var actionDiv = document.querySelector(".action");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            cardFormEmployeDiv.style.display = "none";
            loginAdminDiv.style.display = "none";
            homeDiv.style.display = "block";
            actionDiv.style.display = "flex";
            cardFormEmployeInscriptionDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "none";
            topElement.style.backgroundImage = "url('/images/bg.jpg')";
        });
    }

    var isConnectionEmploy = document.getElementById("is_connection_employ");
    if (isConnectionEmploy){
        isConnectionEmploy.addEventListener("click", function(event){
            event.preventDefault();
            var homeDiv = document.querySelector(".home");
            var accountUserDiv = document.querySelector(".account_user");
            var loginAdminDiv = document.querySelector(".login_admin");
            var actionDiv = document.querySelector(".action");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            // Obtenir la référence à l'élément d'entrée du nom d'utilisateur et au bouton de connexion
            const usernameInput = document.querySelector('#username');
            // Obtenir la valeur de l'entrée du nom d'utilisateur
            const username = usernameInput.value;
            // Stocker le nom d'utilisateur dans une variable de session
            sessionStorage.setItem('username', username);

            cardFormEmployeDiv.style.display = "none";
            accountUserDiv.style.position = "relative";
            accountUserDiv.style.display = "flex";
            loginAdminDiv.style.display = "none";
            homeDiv.style.display = "block";
            actionDiv.style.display = "flex";
            actionDiv.style.flexDirection = "row";
            actionDiv.style.justifyContent = "space-evenly";
            actionDiv.style.marginTop = "188px";
            actionDiv.style.marginBottom = "42px";
            cardFormEmployeInscriptionDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "none";
            topElement.style.backgroundImage = "url('/images/bg.jpg')";
        });
    }

    var btnEmpl = document.getElementById("btn_empl");
    if (btnEmpl){
        btnEmpl.addEventListener("click", function (){
            var cardFormAdminDiv = document.querySelector(".card_form_admin");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");
            cardFormAdminDiv.style.display = "none";
            cardFormEmployeDiv.style.display = "block";
            cardFormEmployeInscriptionDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "none";
        });
    }
    var btnAdm = document.getElementById("btn_adm");

    if (btnAdm){
        btnAdm.addEventListener("click", function (){
            var cardFormAdminDiv = document.querySelector(".card_form_admin");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");
            cardFormAdminDiv.style.display = "block";
            cardFormEmployeDiv.style.display = "none";
            cardFormEmployeInscriptionDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "none";
        });
    }
    var inscrireAdmin = document.getElementById("inscrire_admin");
    if (inscrireAdmin){
        inscrireAdmin.addEventListener("click", function (){
            var cardFormAdminDiv = document.querySelector(".card_form_admin");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");
            cardFormAdminDiv.style.display = "none";
            cardFormEmployeDiv.style.display = "none";
            cardFormEmployeInscriptionDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "block";
        });
    }

    var seConnecterAdmin = document.getElementById("se_connecter_admin");
    if (seConnecterAdmin){
        seConnecterAdmin.addEventListener("click", function (){
            var cardFormAdminDiv = document.querySelector(".card_form_admin");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");

            cardFormAdminDiv.style.display = "block";
            cardFormEmployeDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "none";
            cardFormEmployeInscriptionDiv.style.display = "none";
        });
    }
    /**
        * Created by User on 28/03/2023.
    */
    var btnEmplInscription = document.getElementById("btn_empl_inscription");
    if (btnEmplInscription){
        btnEmplInscription.addEventListener("click", function (){
            var cardFormAdminDiv = document.querySelector(".card_form_admin");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");

            cardFormAdminDiv.style.display = "none";
            cardFormEmployeDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "none";
            cardFormEmployeInscriptionDiv.style.display = "block";
        });
    }


    var btnAdminInscription = document.getElementById("btn_admin_inscription");
    if (btnAdminInscription){
        btnAdminInscription.addEventListener("click", function (){
            var cardFormAdminDiv = document.querySelector(".card_form_admin");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");

            cardFormAdminDiv.style.display = "none";
            cardFormEmployeDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "block";
            cardFormEmployeInscriptionDiv.style.display = "none";
        });
    }

    var seconnecterEmployer = document.getElementById("seconnecter_employer");
    if (seconnecterEmployer){
        seconnecterEmployer.addEventListener("click", function (){
            var cardFormAdminDiv = document.querySelector(".card_form_admin");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");

            cardFormAdminDiv.style.display = "none";
            cardFormEmployeDiv.style.display = "block";
            cardFormAdminInscriptionDiv.style.display = "none";
            cardFormEmployeInscriptionDiv.style.display = "none";
        });
    }

    var inscrireEmploy = document.getElementById("inscrire_employ");

    if (inscrireEmploy){
        inscrireEmploy.addEventListener("click", function (){
            var cardFormAdminDiv = document.querySelector(".card_form_admin");
            var cardFormEmployeDiv = document.querySelector(".card_form_employe");
            var cardFormAdminInscriptionDiv = document.querySelector(".card_form_admin_inscription");
            var cardFormEmployeInscriptionDiv = document.querySelector(".card_form_employe_inscription");

            cardFormAdminDiv.style.display = "none";
            cardFormEmployeDiv.style.display = "none";
            cardFormAdminInscriptionDiv.style.display = "none";
            cardFormEmployeInscriptionDiv.style.display = "block";
        });
    }

    var validCommand = document.getElementById("valid_command");
    if (validCommand){
        validCommand.addEventListener("click", function (){
            var blockValideDiv = document.querySelector(".block_valide");
            var btnNouvelValderDiv = document.querySelector(".btn_nouvel_valder");
            var btnNouvelValiderDiv = document.querySelector(".btn_nouvel_valider");
            var btnValderDiv = document.querySelector(".btn_valder");
            var contentNourritureDiv = document.querySelector(".content_nourriture");
            var menu = document.querySelector(".menu");
            var contentRaffraisseDiv = document.querySelector(".content_raffraisse");
            blockValideDiv.style.display = "block";
            btnNouvelValderDiv.style.display = "block";
            btnNouvelValiderDiv.style.display = "inline-block";
            btnValderDiv.style.display = "none";
            contentNourritureDiv.style.display = "none";
            contentRaffraisseDiv.style.display = "none";
            menu.style.display = "none";
        });
    }
    let checkIcons = document.querySelectorAll(".nourri_fa");
    if (checkIcons) {
    checkIcons.forEach(icon => {
        icon.addEventListener("click", function() {
        this.classList.toggle("checked");
        var btnValder = document.querySelectorAll(".btn_valder");
        btnValder.forEach(btn => {
            btn.style.display = "block";
        });
        });
    });
    }
    // // Déclarer une variable globale pour stocker le numéro de table
    // var tableNumber;
    // // Obtenir tous les boutons
    //  const buttons = document.querySelectorAll(".numero_table button");

    //  // Boucler à travers tous les boutons pour ajouter un gestionnaire d'événements
    //  buttons.forEach((button) => {
    //  button.addEventListener("click", () => {
    //      // Obtenir le numéro de table à partir du texte du bouton
    //      tableNumber = button.textContent.split(" ")[1];
    //      const numeroTableGroups = document.querySelectorAll(".numero_table_group");
    //      numeroTableGroups.forEach((group) => {
    //      group.style.display = "none";
    //      });
    //      const guideTableCommande = document.querySelector(".guide_table_commande");
    //      guideTableCommande.style.display="none";

    //      var numberTable = tableNumber;
    //      sessionStorage.setItem('numberTable', numberTable);
    //      // Afficher le numéro de table dans la section "numero_table_commande"
    //      const numeroTableCommande = document.querySelector(".numero_table_commande");
    //      numeroTableCommande.innerHTML = `<h1>La commande d'addition pour la table ${tableNumber} est en cours de traitement... </h1>`;
    //         // Afficher le contenu de la commande dans la section "contenue"
    //         const contenue = document.querySelector(".contenue");
    //         const contenue_individuel = document.querySelector(".contenue_individuel");
    //         contenue.innerHTML = `<h1>Table N° ${tableNumber}</h1>`;
    //         contenue_individuel.innerHTML = `<h1>Table N° ${tableNumber}</h1>`;

    //      // Afficher le bouton après 5 secondes et cacher le texte
    //      setTimeout(() => {
    //      const btnVoireAddition = document.querySelector(".btn_voire_addition");
    //      btnVoireAddition.style.display="block";
    //      numeroTableCommande.innerHTML = "";
    //      }, 5000);
    //  });
    //  });
    /**afficher la facture collective */
    var voirAddition = document.getElementById("voir_addition");
    if (voirAddition){
        voirAddition.addEventListener("click", function (){
            var additionDiv = document.querySelector(".addition");
            var btnVoireAdditionDiv = document.querySelector(".btn_voire_addition");
            additionDiv.style.display = "block";
            btnVoireAdditionDiv.style.display = "none";

        })
    }
    /**afficher la facture individuel */
    var voirAdditionIndividuel = document.getElementById("voir_addition_individuel");
    if (voirAdditionIndividuel){
        voirAdditionIndividuel.addEventListener("click", function (){
            var additionIndividuelDiv = document.querySelector(".addition_individuel");
            var btnVoireAdditionIndividuelDiv = document.querySelector(".btn_voir_addition_individuel");
            var btnVoireAdditionDiv = document.querySelector(".btn_voire_addition");
            additionIndividuelDiv.style.display = "block";
            btnVoireAdditionIndividuelDiv.style.display = "none";
            btnVoireAdditionDiv.style.display = "none";

        })
    }

    /**afficher mode de paiement */
 const paymentSelect = document.querySelector('#payment-select');
 const paymentSelectCollective = document.querySelector('#payment-select-collective');
 const modal = document.querySelector('#payment_modal');
 const modal1 = document.querySelector('.payment_modal_individuelle');
 const closeBtn = document.querySelector('.close');
 const closeCollectiveBtn = document.querySelector('.close_collective');
if (paymentSelect) {
    paymentSelect.addEventListener('change', function() {
        const selectedValue = paymentSelect.value;

        if (selectedValue) {
          modal.style.display = 'block';
        } else {
          modal.style.display = 'none';
        }
      });
}
if (paymentSelectCollective) {
    paymentSelectCollective.addEventListener('change', function() {
        const selectedValue = paymentSelectCollective.value;
        console.log("clik");
        if (selectedValue) {
            modal1.style.display = 'block';
        } else {
            modal1.style.display = 'none';
        }
      });
}
if (closeBtn) {
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
      });
}
if (closeCollectiveBtn) {
    closeCollectiveBtn.addEventListener('click', function() {
        modal1.style.display = 'none';
      });
}



 window.addEventListener('click', function(event) {
   if (event.target == modal) {
     modal.style.display = 'none';
   }
 });
//  Vue.component('home', require('./components/accueil.vue').default);



});
// Vue.component('home', require('./components/accueil.vue').default);



