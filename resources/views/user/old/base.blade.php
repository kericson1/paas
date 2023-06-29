<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAAS</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}


</head>

<body>
    <main>
        <div class="top">
            <div class="header">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
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
                        <img src="{{ asset('images/account.png') }}" alt="Person Icon">
                        <div class="dropdown">
                            <ul>
                                <li><a href="#">Option 1</a></li>
                                <li><a href="#">Option 2</a></li>
                                <li><a href="#">Option 3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home">
                <div class="title">
                </div>
                <div class="waper">
                    <div class="commencer">
                        <h3>Commencer ici</h3>
                    </div>
                    <div class="indication">
                        <div class="column">
                            <div class="admin" id="admin-link">
                                <h3>ADMINISTRATEUR</h3>
                                <p>vous connecter et accéder aux services en tant qu'administrateur</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="employ" id="employ_link">
                                <h3>EMPLOYE</h3>
                                <p>vous connecter et accéder aux services en tant qu'employé</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login_admin">
                <div class="formulaire_admin">
                    <div id="acceuil-link">
                        <img src="{{ asset('images/direction.png') }}" alt="direction Icon" height="20"
                            width="20">
                        {{-- <i class="far fa-circle"><i class="fas fa-paper-plane"></i></i> --}}
                        <span style="font-size: 1.8rem">Retour</span>
                    </div>
                    <div class="card_form_admin" id="card_form_admin">
                        <h1 style="text-align: center;">
                            CONNEXION <br>
                            ADMINISTRATEUR
                        </h1>
                        <form class="formul_admin" action="{{ route('administration') }}">
                            <div class="form-input">
                                <i class="fa fa-user"></i>
                                <input type="text" id="usernameadmin" placeholder="Nom d'utilisateur">
                            </div>
                            <div class="form-input">
                                <i class="fa fa-lock"></i>
                                <input type="password" id="passwordadmin" placeholder="Mot de passe">
                            </div>
                            <div class="mot_de_pass_oubli">
                                <a href="#">Mot de passe oublié ?</a>
                            </div>
                            <button type="submit">Se connecter</button>
                            <div class="register" id="inscrire_admin">
                                <a href="#">
                                    <span>Pas encore de compte ? nouveau compte </span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>

                            </div>
                            <div class="role-buttons">
                                <div class="check-icon-admin">
                                    <i class="fa fa-check"></i>
                                </div>
                                <button class="btn_admin" type="button">Administrateur</button>
                                <button class="btn_employe" type="button" id="btn_empl">Employé</button>
                                <div class="check-icon-employe">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card_form_admin_inscription" id="card_form_admin_inscription">
                        <h1 style="text-align: center;">
                            S'INSCRIPTION <br>
                            ADMINISTRATEUR
                        </h1>
                        <form class="formul_admin_inscription" action="{{ route('administration') }}">
                            <div class="form-input">
                                <i class="fa fa-user"></i>
                                <input type="text" id="name_admin_inscription" placeholder="Nom">
                            </div>
                            <div class="form-input">
                                <i class="fa fa-user"></i>
                                <input type="text" id="user_nameadmin_inscription" placeholder="Prenom">
                            </div>
                            <div class="form-input">
                                <i class="fa fa-envelope"></i>
                                <input type="email" id="email_admin_inscription" placeholder="Email">
                            </div>
                            <div class="form-input">
                                <i class="fa fa-lock"></i>
                                <input type="password" id="password_admin_inscription" placeholder="Mot de passe">
                            </div>
                            <div class="form-input">
                                <i class="fa fa-lock"></i>
                                <input type="password" id="password_confirm_admin_inscription"
                                    placeholder="Confirmer mot de passe">
                            </div>
                            <button type="submit">S'inscrire</button>
                            <div class="register"id="se_connecter_admin">
                                <a href="#">
                                    <span>Déja un compte ? Se connecter </span>
                                </a>
                            </div>
                            <div class="role-buttons">
                                <div class="check-icon-admin">
                                    <i class="fa fa-check"></i>
                                </div>
                                <button class="btn_admin" type="button">Administrateur</button>
                                <button class="btn_employe" type="button" id="btn_empl_inscription">Employé</button>
                                <div class="check-icon-employe">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card_form_employe" id="card_form_employe">
                        <h1 style="text-align: center;">
                            CONNEXION <br>
                            EMPLOYE
                        </h1>
                        <form class="formul_admin" method="#">
                            <div class="form-input">
                                <i class="fa fa-user"></i>
                                <input type="text" id="username" placeholder="Nom d'utilisateur">
                            </div>
                            <div class="form-input">
                                <i class="fa fa-lock"></i>
                                <input type="password" id="password" placeholder="Mot de passe">
                            </div>
                            <div class="mot_de_pass_oubli">
                                <a href="#">Mot de passe oublié ?</a>
                            </div>
                            <button type="submit" id="is_connection_employ">Se connecter</button>
                            <div class="register">
                                <a href="#" id="inscrire_employ">
                                    <span>Pas encore de compte ? nouveau compte </span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="role-buttons">
                                <div class="check-icon-admin">
                                    <i class="fa fa-check"></i>
                                </div>
                                <button class="btn_admin" type="button" id="btn_adm">Administrateur</button>
                                <button class="btn_employe" type="button">Employé</button>
                                <div class="check-icon-employe">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card_form_employe_inscription" id="card_form_employe_inscription">
                        <h1 style="text-align: center;">
                            S'INSCRIPTION <br>
                            EMPLOYER
                        </h1>
                        <form class="formul_employe_inscription" action="{{ route('administration') }}">
                            <div class="form-input">
                                <i class="fa fa-user"></i>
                                <input type="text" id="name_employe_inscription" placeholder="Nom">
                            </div>
                            <div class="form-input">
                                <i class="fa fa-user"></i>
                                <input type="text" id="user_name_employe_inscription" placeholder="Prenom">
                            </div>
                            <div class="form-input">
                                <i class="fa fa-envelope"></i>
                                <input type="email" id="email_employe_inscription" placeholder="Email">
                            </div>
                            <div class="form-input">
                                <i class="fa fa-lock"></i>
                                <input type="password" id="password_employe_inscription" placeholder="Mot de passe">
                            </div>
                            <div class="form-input">
                                <i class="fa fa-lock"></i>
                                <input type="password" id="password_confirm_employe_inscription"
                                    placeholder="Confirmer mot de passe">
                            </div>
                            <button type="submit">S'inscrire</button>
                            <div class="register"id="btn_empl">
                                <a href="#" id="seconnecter_employer">
                                    <span>Déja un compte ? Se connecter </span>
                                </a>
                            </div>
                            <div class="role-buttons">
                                <div class="check-icon-admin">
                                    <i class="fa fa-check"></i>
                                </div>
                                <button class="btn_admin" type="button"
                                    id="btn_admin_inscription">Administrateur</button>
                                <button class="btn_employe" type="button">Employé</button>
                                <div class="check-icon-employe">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <hr style="height:2px; border:none; border-top:5px dotted #000;">
        <div class="action" id="action">
            <div class="accueil_user">
                <a href="{{ Route('accueil_client') }}" id="accueil_client">
                    <div class="card">
                        <div class="card-img">
                            <img srcset="images/bouton_accueil_client.jpg 500w, images/bouton_accueil_client.jpg 1000w, images/bouton_accueil_client.jpg 1500w"
                                sizes="(max-width: 500px) 100vw, 500px" src="{{ asset('images/bouton_accueil_client.jpg') }}"
                                alt="Image description">
                            <h1>Accueil client</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="commande">
                <a href="{{ Route('prise_commande') }}">
                    <div class="card">
                        <div class="card-img">
                            <img srcset="images/bouton_commande.jpg 500w, images/bouton_commande.jpg 1000w, images/bouton_commande.jpg 1500w"
                                sizes="(max-width: 500px) 100vw, 500px" src="{{ asset('images/bouton_commande.jpg') }}"
                                alt="Image description">
                            <h1>PRISE DE COMMANDE</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="livraison">
                <a href="#">
                    <div class="card">
                        <div class="card-img">
                            <img srcset="images/repa.jpg 500w, images/repa.jpg 1000w, images/repa.jpg 1500w"
                                sizes="(max-width: 500px) 100vw, 500px" src="{{ asset('images/repa.jpg') }}"
                                alt="Image description">
                            <h1>LIVRAISON</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="action_cuisine">
            <div class="cuisine">
                <a href="{{ Route('cuisine') }}">
                    <div class="card">
                        <div class="card-img">
                            <img srcset="images/cuisine.jpg 500w, images/cuisine.jpg 1000w, images/cuisine.jpg 1500w"
                                sizes="(max-width: 500px) 100vw, 500px" src="{{ asset('images/cuisine.jpg') }}"
                                alt="Image description">
                            <h1>CUISINE</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="action_barman">
            <div class="barman">
                <a href="#">
                    <div class="card">
                        <div class="card-img">
                            <img srcset="images/bar.jpeg 500w, images/bar.jpeg 1000w, images/bar.jpeg 1500w"
                                sizes="(max-width: 500px) 100vw, 500px" src="{{ asset('images/bar.jpeg') }}"
                                alt="Image description">
                            <h1>BARMAN</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="action_caissier">
            <div class="caissier">
                <a href="{{ Route('admin_2023') }}">
                    <div class="card">
                        <div class="card-img">
                            <img srcset="images/caisse.jpg 500w, images/caisse.jpg 1000w, images/caisse.jpg 1500w"
                                sizes="(max-width: 500px) 100vw, 500px" src="{{ asset('images/caisse.jpg') }}"
                                alt="Image description">
                            <h1>CAISSIER</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <footer>
            <div class="footer-container">
                <div class="left-column">
                    <h3>A propos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique rutrum sem sit amet
                        eleifend. Nam feugiat laoreet leo, eget consequat mauris bibendum vel. Donec posuere nibh non
                        lectus euismod egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada
                        fames ac turpis egestas. Nam aliquam massa eu elit tincidunt laoreet.</p>
                </div>
                <div class="right-column">
                    <h3>Contactez-nous</h3>
                    <form>
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" placeholder="Entrez votre nom">

                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre email">

                        <label for="message">Message :</label>
                        <textarea id="message" name="message" placeholder="Entrez votre message"></textarea>

                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
            <div class="bottom-row">
                <p>&copy; 2023 - Tous droits réservés</p>
            </div>
        </footer>

    </main>
</body>

</html>
