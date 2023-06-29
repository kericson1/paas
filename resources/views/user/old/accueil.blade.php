<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAAS</title>
    <link rel="stylesheet" href="{{ asset('css/accueil_user.css') }}">
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
                    <i class="fa-solid fa-circle-left"style="font-size: 50px; color: #fff;"></i>
                    {{-- <i class="fa-sharp fa-solid fa-circle-arrow-left"style="font-size: 36px; color: #fff;"></i> --}}
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
                    <div class="account_user">
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
                <div class="main_buttons">
                    <h1>Prise de commande</h1>
                </div>
            </div>
        </div>
        <hr style="height:2px; border:none; border-top:5px dotted #000;">
        <form action="" class="formul_accueil_client">
        <div class="contenue">
            <div class="dropdown-container">
                <div class="dropdown-item btn_jaune">
                    <div class="dropdown-btn">
                        <i class="fa fa-paint-brush"></i>
                        Numérotation &nbsp;
                        <div class="ouvrir">
                            <i class="fa-solid fa-caret-right"></i>
                        </div>
                        <div class="fermer">
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="dropdown-content">
                        <div class="form-group">
                            <label for="num" class="form-label">Numéro de la table:</label>
                            <div class="input-group">
                                <select class="form-control" name="" id="num">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                          </div>
                    </div>
                </div>
                <div class="dropdown-item btn_rouge">
                    <div class="dropdown-btn">
                        <i class="fa-sharp fa-solid fa-clock"></i>
                        Heure d'arrivée &nbsp;
                        <div class="ouvrir">
                            <i class="fa-solid fa-caret-right"></i>
                        </div>
                        <div class="fermer">
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="dropdown-content">
                        <div class="input_group">
                            <label for="heure">Heure d'arrivé :</label>
                            <input type="time" id="heure" name="heure">
                        </div>
                    </div>
                </div>

                <div class="dropdown-item btn_jaune">
                    <div class="dropdown-btn">
                        <i class="fa fa-users"></i>
                        Nombre de clients &nbsp;
                        <div class="ouvrir">
                            <i class="fa-solid fa-caret-right"></i>
                        </div>
                        <div class="fermer">
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="dropdown-content">
                        <label for="clients">Nombre de client :</label>
                            <div class="input-group">
                                <select class="form-control" name="" id="num">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                    </div>
                </div>
                <div class="dropdown-item btn_rouge">
                    <div class="dropdown-btn">
                        <i class="fa fa-cutlery"></i>
                        Choix du apéro &nbsp;
                        <div class="ouvrir">
                            <i class="fa-solid fa-caret-right"></i>
                        </div>
                        <div class="fermer">
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="dropdown-content">
                        <div class="input_group">
                            <label>
                                <input type="checkbox" name="couleur" value="Aucun">
                                Aucun
                              </label>
                              <label>
                                <input type="checkbox" name="couleur" value="Plateau">
                                Plateau de fromages avec des crackers et des fruits secs
                              </label>
                              <label>
                                <input type="checkbox" name="couleur" value="Olives">
                                Olives marinées et mélanges de noix grillées
                              </label>
                              <label>
                                <input type="checkbox" name="couleur" value="Mini-quiches">
                                Mini-quiches et bouchées de pâté
                              </label>
                              <label>
                                <input type="checkbox" name="couleur" value="Houmous">
                                Houmous avec des crudités et des chips de pita
                              </label>
                              <label>
                                <input type="checkbox" name="couleur" value="Tartinades">
                                Tartinades de poissons (saumon fumé, thon) sur du pain grillé
                              </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn_valide">
            <a href="{{ route('home') }}" class="btn_rouge">Valider</a>
        </div>
    </form>
    <style>
        /* Styles pour la boîte de sélection */
        .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        /* Styles pour la boîte de sélection lorsqu'elle est en focus */
        .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

    </style>
    </main>
    <script>
        function showDropdown() {
            var dropdown = document.querySelector(" .dropdown");
            dropdown.style.display = "flex";
            dropdown.style.top = "50px"; /* positionne le menu déroulant en dessous du bouton utilisateur */
        }

        function hideDropdown() {
            document.querySelector(".dropdown").style.display = "none";
        }
        const retour = document.querySelector('.retour');
        retour.addEventListener('click', () => {
        window.location.href = '{{ route('home') }}';
    });
    </script>
</body>

</html>
