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
        <h1>Tableau des commandes de nourriture</h1>
        <table>
            <tr>
                <th>Plat</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
            <tr>
                <td>Burger</td>
                <td>Un délicieux burger avec des frites</td>
                <td>$10</td>
            </tr>
            <tr>
                <td>Pizza</td>
                <td>Une pizza garnie de pepperoni, de fromage et de légumes</td>
                <td>$12</td>
            </tr>
            <tr>
                <td>Sushi</td>
                <td>Assortiment de sushis frais</td>
                <td>$15</td>
            </tr>
            <tr>
                <td>Salade César</td>
                <td>Salade verte avec du poulet, des croûtons et une sauce césar</td>
                <td>$8</td>
            </tr>
        </table>
        <div class="button-container">
            <button class="button valider">Valider</button>
        </div>
    </div>

    <style>
        .numero_table_group {
            text-align: center;
        }

        table {
            margin: 40px auto;
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ca6d6d;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .button-container {
            margin-top: 16px;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #E6CB1D;
            color: white;
            text-align: center;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #f9d801;
        }
    </style>

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
        const retour = document.querySelector(".retour");
        if (retour) {
            retour.addEventListener('click', () => {
                window.location.href = '{{ route('home') }}';
            });
        }
        const valider = document.querySelector(".valider");
        if (valider) {
            valider.addEventListener('click', () => {
                var message = "Commande validée !";
                var encodedMessage = encodeURIComponent(message);
                window.location.href = '{{ route('prise_commande') }}';
            });
        }
    </script>
@endsection
