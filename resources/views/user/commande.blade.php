@extends('user.partials.main')
<link rel="stylesheet" href="{{ asset('css/commande.css') }}">
@section('logo')
    <div class="retour">
        <i class="fa-solid fa-circle-left"style="font-size: 50px; color: #fff;"></i>
    </div>
@endsection
@section('content2')
    <div class="block_valide">
        <h1 style="font-size:35px;color: #000; font-weight: bold;">Votre commande à bien été enregister</h1>
        <div class="btn_commande">
            <button class="btn_commande retour_commande" id="retour_commande">Voir bilan des commandes</button>
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
    <div class="menu">
        <ul class="tabs">
            <li onclick="changeTab(0)">Ajouter le nombre de personne</li>
            <li onclick="changeTab(1)">Prise de commande</li>
        </ul>
        <div class="tab-content" id="tab1">
            <div class="form-container">
                <h2>Ajouter le nombre de personne</h2>
                <form>
                    <div class="input-container">
                        <i class="fa fa-users"></i>
                        <label for="nbPersonnes">Nombre de personnes :</label>
                        <input type="number" id="nbPersonnes" min="1" max="10" required>
                    </div>
                    <button class="ajout_person" id="btnSubmit" disabled>Valider</button>
                </form>
            </div>

        </div>
        <div class="tab-content" id="tab2">
            <div class="mee">
                <div class="nourriture">
                    <div class="header_nourriture">
                        <h1>PLATS</h1>
                    </div>
                    <div class="content_nourriture">
                        <div class="choix_nourriture">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Choix 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Salade César</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Steak-frites</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Escalope de poulet</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Hamburger ou Cheeseburger</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Choix 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Pâtes à la carbonara</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Pizza margherita</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Poisson-frites</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Filet mignon</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Choix 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Pizza</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Salade de saumon grillé</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Poulet rôti</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Escalope de veau</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="raffraisse">
                    <div class="header_raffraisse">
                        <h1>RAFRAICHISSEMENTS</h1>
                    </div>
                    <div class="content_raffraisse">
                        <div class="choix_raffraisse">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Choix 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Eau fraîche avec des glaçons</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Thé glacé ou thé vert</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Jus de fruits frais</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Smoothie</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Granité</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Choix 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Limonade</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Eau infusée avec des fruits ou des herbes
                                                fraîches</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Boissons gazeuses légères ou diététiques</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Yaourt glacé ou sorbet</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="nourri_fa">
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span class="food-name">Café glacé ou frappé</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btn_nouvel_valder">
        <button class="btn_nouvel_valider" id="valid_nouvel_command">Ajouter une commande</button>
    </div>
    <div class="btn_valder">
        <button class="btn_valider" id="valid_command">Enregister</button>
    </div>

    <script>
        // Récupérer les éléments du formulaire
        var nbPersonnesInput = document.getElementById('nbPersonnes');
        var btnSubmit = document.getElementById('btnSubmit');

        // Activer le bouton de soumission si le champ de nombre de personnes est valide
        nbPersonnesInput.addEventListener('input', function() {
            if (nbPersonnesInput.checkValidity()) {
                btnSubmit.removeAttribute('disabled');
            } else {
                btnSubmit.setAttribute('disabled', 'disabled');
            }
        });

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
        var validajout_person = document.querySelector(".ajout_person");
        if (validajout_person) {
            validajout_person.addEventListener("click", () => {
                changeTab(1);
            });
        }
        const validNouvelCommand = document.querySelector('.btn_nouvel_valider');
        validNouvelCommand.addEventListener('click', (event) => {
            event.preventDefault();
            const numeroTableGroups = document.querySelectorAll(".numero_table_group");
            const btnNouvelValder = document.querySelectorAll(".btn_nouvel_valder");
            let numberTable = sessionStorage.getItem('numberTable');
            if (numberTable) {
                numeroTableGroups.forEach((content) => {
                    content.style.display = "none";
                });

                // window.location.href = '{{ route('prise_commande') }}';
                // Afficher le numéro de table dans la section "numero_table_commande"
                const numeroTableCommande = document.querySelector(".numero_table_commande");
                numeroTableCommande.innerHTML = `<h1>La commande pour la table ${numberTable} </h1>`;
                var menu = document.querySelector(".menu");
                menu.style.display = "block";

                // Afficher les éléments correspondants à la nouvelle commande
                const contentNourriture = document.querySelectorAll(".content_nourriture");
                const contentRafraichisse = document.querySelectorAll(".content_raffraisse");

                contentNourriture.forEach((content) => {
                    content.style.display = "block";
                });

                contentRafraichisse.forEach((content) => {
                    content.style.display = "block";
                });
                const checkedIcons = document.querySelectorAll('.checked');
                checkedIcons.forEach(icon => {
                    icon.classList.remove('checked');
                });
                validNouvelCommand.style.display = "none";
            }

        });


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
        const retourCommande = document.querySelector(".retour_commande");
        if (retourCommande) {
            retourCommande.addEventListener('click', () => {
                window.location.href = '{{ route('recap_commande') }}';
                // const topDiv = document.querySelector(".top");
                // topDiv.style.backgroundImage = "url('/images/nourriture.jpg')";
            });
        }

        // Fonction pour changer d'onglet
        function changeTab(tabIndex) {
            // Cacher tous les contenus des onglets
            var tabContents = document.getElementsByClassName("tab-content");
            for (var i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove("active");
            }

            // Afficher le contenu de l'onglet sélectionné
            document.getElementById("tab" + (tabIndex + 1)).classList.add("active");

            // Mettre à jour la classe active sur l'onglet sélectionné
            var tabs = document.getElementsByClassName("tabs")[0].getElementsByTagName("li");
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove("active");
            }
            tabs[tabIndex].classList.add("active");
        }
        // Activer la première tab par défaut
        changeTab();

        const retour_bouton = document.querySelector(".retour_bouton");
        if (retour_bouton) {
            retour_bouton.addEventListener('click', () => {
                window.location.href = '{{ route('prise_commande') }}';
            });
        }
    </script>
@endsection
