@extends('user.partials.main')
<link rel="stylesheet" href="{{ asset('css/annuler.css') }}">
<style>
    .top {
        background-image: url("{{ asset('/images/accueil_clients.jpg')}}");
        background-size: cover;
        height: 560px;
        width: 100%;
        overflow: hidden;
        /* cache le contenu qui dépasse le conteneur */
    }
</style>
@section('logo')
    <div class="retour">
        <i class="fa-solid fa-circle-left"style="font-size: 50px; color: #fff;"></i>
    </div>
@endsection
@section('content2')
    <div class="block_valide">
        <h1 style="font-size:35px;color: #000; background-color: #24e61d; font-weight: bold;">Votre commande à bien été
            annuler</h1>
        <div class="btn_commande">
            <button class="retour retour_bouton" id="retour_bouton">Retour au menu</button>
        </div>
    </div>
    <div class="numero_table_group">
        <div class="numero_table">
            <a href="#" id="command_1"><button class="impair">Table 1</button></a>
            <a href="#"id="command_2"><button class="pair">Table 2</button></a>
            <a href="#"id="command_3"><button class="impair">Table 3</button></a>
            <a href="#"id="command_4"><button class="pair">Table 4</button></a>
        </div>
        <div class="numero_table">
            <a href="#"id="command_5"><button class="impair">Table 5</button></a>
            <a href="#"id="command_6"><button class="pair">Table 6</button></a>
            <a href="#"id="command_7"><button class="impair">Table 7</button></a>
            <a href="#"id="command_8"><button class="pair">Table 8</button></a>
        </div>
        <div class="numero_table">
            <a href="#"id="command_9"><button class="impair">Table 9</button></a>
            <a href="#"id="command_10"><button class="pair">Table 10</button></a>
            <a href="#"id="command_11"><button class="impair">Table 11</button></a>
            <a href="#"id="command_12"><button class="pair">Table 12</button></a>
        </div>

    </div>
    <div class="numero_table_commande">
    </div>
    <div class="btn_annule">
        <button class="btn_annuler" id="annuler_command">Annuler</button>
    </div>

    <script>
        function showDropdown() {
            var dropdown = document.querySelector(".account_user .dropdown");
            dropdown.style.display = "flex";
            dropdown.style.top = "50px"; /* positionne le menu déroulant en dessous du bouton utilisateur */
        }

        function hideDropdown() {
            document.querySelector(".account_user .dropdown").style.display = "none";
        }

        function toggleActive(element) {
            element.classList.toggle("active");
        }


        const retour = document.querySelector('.retour');
        retour.addEventListener('click', () => {
            window.location.href = '{{ route('home') }}';
        });
        // Déclarer une variable globale pour stocker le numéro de table
        var tableNumber;
        // Obtenir tous les boutons
        const buttons = document.querySelectorAll(".numero_table button");

        // Boucler à travers tous les boutons pour ajouter un gestionnaire d'événements
        buttons.forEach((button) => {
            button.addEventListener("click", () => {
                // Obtenir le numéro de table à partir du texte du bouton
                tableNumber = button.textContent.split(" ")[1];
                // Cacher les éléments avec la classe "numero_table_group" et afficher les éléments avec la classe "mee"
                const numeroTableGroups = document.querySelectorAll(".numero_table_group");
                numeroTableGroups.forEach((group) => {
                    group.style.display = "none";
                });

                const mees = document.querySelectorAll(".mee");
                mees.forEach((mee) => {
                    mee.style.display = "flex";
                });
                const numberTable = tableNumber;
                sessionStorage.setItem('numberTable', numberTable);
                // Afficher le numéro de table dans la section "numero_table_commande"
                const btn_annule = document.querySelector(".btn_annule");
                const numeroTableCommande = document.querySelector(".numero_table_commande");
                numeroTableCommande.innerHTML =
                    `<h1>Annulation de la commande pour la table ${tableNumber} </h1>`;
                btn_annule.style.display = "block";

            });
        });
        const retourCommande = document.querySelector(".retour_commande");
        if (retourCommande) {
            retourCommande.addEventListener('click', () => {
                window.location.href = '{{ route('bilan_commande') }}';
                // const topDiv = document.querySelector(".top");
                // topDiv.style.backgroundImage = "url('/images/nourriture.jpg')";
            });
        }
        const retour_bouton = document.querySelector(".retour_bouton");
        if (retour_bouton) {
            retour_bouton.addEventListener('click', () => {
                window.location.href = '{{ route('prise_commande') }}';
            });
        }

        const btn_annuler = document.querySelector(".btn_annuler");

        if (btn_annuler) {
            btn_annuler.addEventListener('click', () => {
                const btn_annule = document.querySelector(".btn_annule");
                const block_valide = document.querySelector(".block_valide");
                const numero_table_commande = document.querySelector(".numero_table_commande");
                btn_annule.style.display = "none";
                numero_table_commande.style.display = "none";
                block_valide.style.display = "block";
            });
        }
    </script>
@endsection
