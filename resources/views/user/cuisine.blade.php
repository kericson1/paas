@extends('user.partials.main')
<link rel="stylesheet" href="{{ asset('css/cuisine.css') }}">
<style>
    .top {
        background-image: url("{{ asset('/images/cuisinier.jpg') }}");
        background-size: cover;
        background-position: center center;
        height: 563px;
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
    <div class="numero_table_group">
        <div class="numero_table">
            <a href="#" id="command_1"><button class="impair">Table 1</button></a>
            <a href="{{ route('cuisine_detail') }}"id="command_2"><button class="encour">Table 2</button></a>
            <a href="#"id="command_3"><button class="impair">Table 3</button></a>
            <a href="#"id="command_4"><button class="impair">Table 4</button></a>
        </div>
        <div class="numero_table">
            <a href="{{ route('cuisine_detail') }}"id="command_5"><button class="encour">Table 5</button></a>
            <a href="#"id="command_6"><button class="impair">Table 6</button></a>
            <a href="#"id="command_7"><button class="impair">Table 7</button></a>
            <a href="#"id="command_8"><button class="pair">Table 8</button></a>
        </div>
        <div class="numero_table">
            <a href="#"id="command_9"><button class="impair">Table 9</button></a>
            <a href="#"id="command_10"><button class="impair">Table 10</button></a>
            <a href="#"id="command_11"><button class="impair">Table 11</button></a>
            <a href="#"id="command_12"><button class="impair">Table 12</button></a>
        </div>
        <div class="numero_table">
            <a href="#"id="command_13"><button class="impair">Table 13</button></a>
            <a href="{{ route('cuisine_detail') }}"id="command_14"><button class="encour">Table 14</button></a>
            <a href="#"id="command_15"><button class="impair">Table 15</button></a>
            <a href="#"id="command_16"><button class="impair">Table 16</button></a>
        </div>

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
                const numeroTableCommande = document.querySelector(".numero_table_commande");
                numeroTableCommande.innerHTML = `<h1>La commande pour la table ${tableNumber} </h1>`;
                var menu = document.querySelector(".menu");
                menu.style.display = "block";

            });
        });
    </script>
@endsection
