<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAAS-COMMANDE</title>
    <link rel="stylesheet" href="{{ asset('css/annuler.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}


</head>

<body>
    <main>
        <div class="top">
            <div class="header">
                <div class="retour">
                    {{-- <img src="{{ asset('images/direction.png') }}" alt="direction Icon" height="50"
                            width="50"> --}}
                    <i class="fa-solid fa-circle-left"style="font-size: 50px; color: #000;"></i>
                </div>
                <nav class="navbar">
                    <span class="menu-button">MENU</span>
                    <ul>
                        <li><a href="{{ route('bilan_commande') }}">Addition</a></li>
                        <li><a href="{{ route('annuler_commande') }}">Annuler une commande</a></li>
                        <li><a href="#">S'inscrire</a></li>
                        <li><a href="#">Se déconnecter</a></li>
                    </ul>
                </nav>
                <div class="account">
                    <div class="account_user" onmouseover="showDropdown()" onmouseout="hideDropdown()">
                        {{-- <i class="fa fa-user" style="font-size: 36px;"></i>
                        <span>John Doe</span>
                        <div class="dropdown" id="userDropdown"style="background-color: lightgray;">
                            <ul>
                                <li><a href="#">Profil</a></li>
                                <li><a href="#">Paramètres</a></li>
                                <li><a href="#">Déconnexion</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="main_content">
            </div>
        </div>
        <hr style="height:2px; border:none; border-top:5px dotted #000;">
        <div class="block_valide">
            <h1 style="font-size:35px;color: #000; background-color: #24e61d; font-weight: bold;">Votre commande à bien été annuler</h1>
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

    </main>
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
                numeroTableCommande.innerHTML = `<h1>Annulation de la commande pour la table ${tableNumber} </h1>`;
                btn_annule.style.display="block";

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
                btn_annule.style.display="none";
                numero_table_commande.style.display="none";
                block_valide.style.display="block";
            });
        }


    </script>
</body>

</html>
