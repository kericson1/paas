<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAAS-COMMANDE</title>
    <link rel="stylesheet" href="{{ asset('css/cuisine_detail.css') }}">
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
                    </div>
                </div>
            </div>
            <div class="main_content">
            </div>
        </div>
        <hr style="height:2px; border:none; border-top:5px dotted #000;">

        <div class="numero_table">
            <h1>Commandes de Nourriture de la table 2</h1>
            <div class="detail_commande">
                <table>
                    <thead>
                        <tr>
                            <th colspan="4" class="text-center">client 1</th>
                        </tr>
                        <tr>
                            <th>Plat</th>
                            <th>Description</th>
                            <th class="checkbox">Terminer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pizza</td>
                            <td>Délicieuse pizza garnie de fromage, de pepperoni et de légumes.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Pizza" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                        <tr>
                            <td>Burger</td>
                            <td>Savoureux burger avec du bœuf juteux, du fromage, des légumes et une sauce spéciale.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Burger" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                        <tr>
                            <td>Sushi</td>
                            <td>Délicats sushis préparés avec du poisson frais et du riz assaisonné.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Sushi" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                    </tbody>
                </table>
                <hr style="height:1px; border:none; border-top:3px dotted #E61D1D;">
            </div>
            <div class="detail_commande">
                <table>
                    <thead>
                        <tr>
                            <th colspan="4" class="text-center">client 2</th>
                        </tr>
                        <tr>
                            <th>Plat</th>
                            <th>Description</th>
                            <th class="checkbox">Terminer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pizza</td>
                            <td>Délicieuse pizza garnie de fromage, de pepperoni et de légumes.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Pizza" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                        <tr>
                            <td>Burger</td>
                            <td>Savoureux burger avec du bœuf juteux, du fromage, des légumes et une sauce spéciale.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Burger" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                        <tr>
                            <td>Sushi</td>
                            <td>Délicats sushis préparés avec du poisson frais et du riz assaisonné.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Sushi" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                    </tbody>
                </table>
                <hr style="height:1px; border:none; border-top:3px dotted #E61D1D;">
            </div>
            <div class="detail_commande">
                <table>
                    <thead>
                        <tr>
                            <th colspan="4" class="text-center">client 3</th>
                        </tr>
                        <tr>
                            <th>Plat</th>
                            <th>Description</th>
                            <th class="checkbox">Terminer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pizza</td>
                            <td>Délicieuse pizza garnie de fromage, de pepperoni et de légumes.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Pizza" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                        <tr>
                            <td>Burger</td>
                            <td>Savoureux burger avec du bœuf juteux, du fromage, des légumes et une sauce spéciale.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Burger" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                        <tr>
                            <td>Sushi</td>
                            <td>Délicats sushis préparés avec du poisson frais et du riz assaisonné.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Sushi" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                    </tbody>
                </table>
                <hr style="height:1px; border:none; border-top:3px dotted #E61D1D;">
            </div>
            <div class="detail_commande">
                <table>
                    <thead>
                        <tr>
                            <th colspan="4" class="text-center">client 4</th>
                        </tr>
                        <tr>
                            <th>Plat</th>
                            <th>Description</th>
                            <th class="checkbox">Terminer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pizza</td>
                            <td>Délicieuse pizza garnie de fromage, de pepperoni et de légumes.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Pizza" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                        <tr>
                            <td>Burger</td>
                            <td>Savoureux burger avec du bœuf juteux, du fromage, des légumes et une sauce spéciale.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Burger" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                        <tr>
                            <td>Sushi</td>
                            <td>Délicats sushis préparés avec du poisson frais et du riz assaisonné.</td>
                            <td class="checkbox"><input type="checkbox" name="commande[]" value="Sushi" onchange="toggleStrikeThrough(this)"></td>
                        </tr>
                    </tbody>
                </table>
                <hr style="height:1px; border:none; border-top:3px dotted #E61D1D; margin-bottom:20px;">
            </div>
                <a href="{{ Route('home') }}" class="submit-btn">Servir</a>
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

        function toggleStrikeThrough(checkbox) {
                var row = checkbox.parentNode.parentNode;
                var nameCell = row.cells[0];
                var descCell = row.cells[1];

                if (checkbox.checked) {
                    nameCell.classList.add('strike-through');
                    descCell.classList.add('strike-through');
                } else {
                    nameCell.classList.remove('strike-through');
                    descCell.classList.remove('strike-through');
                }
            }

    </script>
</body>

</html>
