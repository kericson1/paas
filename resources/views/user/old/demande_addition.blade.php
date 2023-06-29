<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAAS-COMMANDE</title>
    <link rel="stylesheet" href="{{ asset('css/bilan_commande.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}


</head>

<body>
    <main>
        <div class="top_additon">
            <div class="header">
                <div class="retour">
                    {{-- <img src="{{ asset('images/direction.png') }}" alt="direction Icon" height="50"
                            width="50"> --}}
                            <i class="fa-solid fa-circle-left"style="font-size: 50px; color: #fff;"></i>
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
        </div>
        <hr style="height:2px; border:none; border-top:5px dotted #000;">
        <div class="addition">
            <div class="numero_table">
                <div class="contenue">
                  <h1></h1>
                </div>
            </div>
            <div class="btn_addition_goup">
                <div class="contenue changer_contenue_individuelle">
                  <h1 class="changer_contenue_individuelle"> <i class="fa-solid fa-eye"></i> Voir l'addition individuelle</h1>
                </div>
            </div>
              <div class="nombre_personne">
                <div class="contenue">
                  <h1>6 personnes</h1>
                </div>
              </div>
            <div class="contenue_facture">
                  <table>
                    <thead>
                      <tr>
                        <th>
                            <div class="header_t">
                                <span>
                                    Repas
                                </span>
                            </div>
                            <hr>
                        </th>
                        <th>
                            <div class="header_t">
                                <span> Quantité</span>
                            </div>
                            <hr style="width: 120px;">
                        </th>
                        <th>
                            <div class="header_t">
                                <span>Prix HT</span>
                            </div>
                            <hr>
                        </th>
                        <th>
                            <div class="header_t">
                                <span>TVA</span>
                            </div>
                            <hr>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="width: 450px;">Plateau de fromages avec des crackers et des fruits secs
                        </td>
                        <td>
                            2
                        </td>
                        <td><span style="color: #E61D1D;">8,33 Fcfa</span>

                        </td>
                        <td>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 450px;"><hr>Salade de saumon grillé</td>
                        <td><hr style="width: 120px;">3</td>
                        <td><hr> <span style="color: #E61D1D;">12,5 Fcfa</span></td>
                        <td><span style="color: #E61D1D;">20%</span></td>
                      </tr>
                      <tr>
                        <td style="width: 450px;"><hr>Poulet rôti</td>
                        <td><hr style="width: 120px;">1</td>
                        <td><hr> <span style="color: #E61D1D;">6,67 Fcfa</span></td>
                        <td> </td>
                      </tr>

                    </tbody>
                    <tfoot>
                        <tr class="total">
                            <td>
                                <div class="highlight">
                                    Total
                                </div>
                            </td>
                            <td>6</td>
                            <td>73 Fcfa</td>
                            <td>20%</td>
                          </tr>
                    </tfoot>
                  </table>
                  <table class="recap">
                    <thead>
                      <tr>
                        <th></th>
                        <th>
                            <div class="header_t">
                                <span>
                                    TOTAL HT
                                </span>
                            </div>
                        </th>
                        <th>
                            <div class="header_t">
                                <span> TOTAL TVA</span>
                            </div>

                        </th>
                        <th>
                            <div class="header_t header_tM ">
                                <span>TOTAL HT &nbsp; 7240 Fcfa</span>
                            </div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TVA 20%</td>
                            <td>44 330 Fcfa</td>
                            <td>8866 Fcfa</td>
                            <td> <span>TVA 10% &nbsp;</span> <span style="color: #E61D1D;"> 8866 Fcfa</span></td>
                        </tr>
                        <tr>
                            <td>TVA 10%</td>
                            <td>44 330 Fcfa</td>
                            <td>4866 Fcfa</td>
                            <td> <span>TVA 10% &nbsp;</span> <span style="color: #E61D1D;"> 6866 Fcfa</span></td>
                        </tr>
                        <tr class="total">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="highlight_total">
                                Total TTC: 7240 Fcfa
                            </div>
                            </td>
                        </tr>
                    </tbody>
                  </table>
                  <div class="mode_selection">
                    <div class="custom-select">
                        <select id="payment-select">
                            <option value="">Sélectionner le mode de paiement</option>
                            <option value="espece" id="open-modal">Espèce</option>
                            <option value="mobile">Mobile</option>
                            <option value="wave">Wave</option>
                            <option value="credit-card">Carte de crédit</option>
                        </select>
                    </div>
                  </div>
                  <div id="payment_modal" class="modal">
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <h2>Le moyen de paiement choisir : <span id="selection-display"></span></h2>
                      <form>
                        <div class="form_group">
                            <label for="name">Nom</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="form_group">
                            <label for="number">Numero</label>
                            <input type="number" id="number" name="number">
                        </div>
                        <button type="submit">Sélectionner</button>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
        <div class="addition_individuel">
            <div class="numero_table">
              <div class="contenue_individuel" style="margin-bottom: 20px;">
                <h1></h1>
              </div>
              <div class="btn_addition_goup">
                <div class="contenue changer_contenue_collective">
                  <h1 class="changer_contenue_collective"><i class="fa-solid fa-eye"></i> Voir l'addition collective</h1>
                </div>
              </div>
            </div>
            <div class="detail">
                <div class="personne_nom">
                    <div class="contenue">
                    <h1>Client 01</h1>
                    </div>
                </div>
                <div class="contenue_facture">
                        <table>
                        <thead>
                            <tr>
                            <th>
                                <div class="header_t">
                                    <span>
                                        Repas
                                    </span>
                                </div>
                                <hr>
                            </th>
                            <th>
                                <div class="header_t">
                                    <span> Quantité</span>
                                </div>
                                <hr style="width: 120px;">
                            </th>
                            <th>
                                <div class="header_t">
                                    <span>Prix HT</span>
                                </div>
                                <hr>
                            </th>
                            <th>
                                <div class="header_t">
                                    <span>TVA</span>
                                </div>
                                <hr>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td style="width: 450px;">Plateau de fromages avec des crackers et des fruits secs
                            </td>
                            <td>
                                2
                            </td>
                            <td><span style="color: #E61D1D;">8,33 Fcfa</span>

                            </td>
                            <td>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 450px;"><hr>Salade de saumon grillé</td>
                            <td><hr style="width: 120px;">3</td>
                            <td><hr> <span style="color: #E61D1D;">12,5 Fcfa</span></td>
                            <td><span style="color: #E61D1D;">20%</span></td>
                            </tr>
                            <tr>
                            <td style="width: 450px;"><hr>Poulet rôti</td>
                            <td><hr style="width: 120px;">1</td>
                            <td><hr> <span style="color: #E61D1D;">6,67 Fcfa</span></td>
                            <td> </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr class="total">
                                <td>
                                    <div class="highlight">
                                        Total
                                    </div>
                                </td>
                                <td>6</td>
                                <td>73 Fcfa</td>
                                <td>20%</td>
                                </tr>
                        </tfoot>
                        </table>
                        <table class="recap">
                        <thead>
                            <tr>
                            <th></th>
                            <th>
                                <div class="header_t">
                                    <span>
                                        TOTAL HT
                                    </span>
                                </div>
                            </th>
                            <th>
                                <div class="header_t">
                                    <span> TOTAL TVA</span>
                                </div>

                            </th>
                            <th>
                                <div class="header_t header_tM ">
                                    <span>TOTAL HT &nbsp; 7240 Fcfa</span>
                                </div>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TVA 20%</td>
                                <td>44 330 Fcfa</td>
                                <td>8866 Fcfa</td>
                                <td> <span>TVA 10% &nbsp;</span> <span style="color: #E61D1D;"> 8866 Fcfa</span></td>
                            </tr>
                            <tr>
                                <td>TVA 10%</td>
                                <td>44 330 Fcfa</td>
                                <td>4866 Fcfa</td>
                                <td> <span>TVA 10% &nbsp;</span> <span style="color: #E61D1D;"> 6866 Fcfa</span></td>
                            </tr>
                            <tr class="total">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="highlight_total">
                                    Total TTC: 7240 Fcfa
                                </div>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        <div class="mode_selection">
                            <div class="custom-select">
                                <select id="payment-select-collective">
                                    <option value="">Sélectionner le mode de paiement</option>
                                    <option value="espece">Espèce</option>
                                    <option value="mobile">Mobile</option>
                                    <option value="wave">Wave</option>
                                    <option value="credit-card">Carte de crédit</option>
                                </select>
                            </div>
                        </div>
                        <div id="payment_modal_individuelle" class="modal">
                            <div class="modal-content">
                                <span class="close_collective">&times;</span>
                                <h2>Le moyen de paiement choisir : Mobile</h2>
                                <form>
                                <div class="form_group">
                                    <label for="name">Nom</label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div class="form_group">
                                    <label for="number">Numero</label>
                                    <input type="number" id="number" name="number">
                                </div>
                                <button type="submit">Sélectionner</button>
                                </form>
                            </div>
                        </div>
                </div>
                <hr style="height:2px; border:none; border-top:3px dotted #000;">
            </div>
            <div class="detail">
                <div class="personne_nom">
                    <div class="contenue">
                    <h1>Client 02</h1>
                    </div>
                </div>
                <div class="contenue_facture">
                        <table>
                        <thead>
                            <tr>
                            <th>
                                <div class="header_t">
                                    <span>
                                        Repas
                                    </span>
                                </div>
                                <hr>
                            </th>
                            <th>
                                <div class="header_t">
                                    <span> Quantité</span>
                                </div>
                                <hr style="width: 120px;">
                            </th>
                            <th>
                                <div class="header_t">
                                    <span>Prix HT</span>
                                </div>
                                <hr>
                            </th>
                            <th>
                                <div class="header_t">
                                    <span>TVA</span>
                                </div>
                                <hr>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td style="width: 450px;">Plateau de fromages avec des crackers et des fruits secs
                            </td>
                            <td>
                                2
                            </td>
                            <td><span style="color: #E61D1D;">8,33 Fcfa</span>

                            </td>
                            <td>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 450px;"><hr>Salade de saumon grillé</td>
                            <td><hr style="width: 120px;">3</td>
                            <td><hr> <span style="color: #E61D1D;">12,5 Fcfa</span></td>
                            <td><span style="color: #E61D1D;">20%</span></td>
                            </tr>
                            <tr>
                            <td style="width: 450px;"><hr>Poulet rôti</td>
                            <td><hr style="width: 120px;">1</td>
                            <td><hr> <span style="color: #E61D1D;">6,67 Fcfa</span></td>
                            <td> </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr class="total">
                                <td>
                                    <div class="highlight">
                                        Total
                                    </div>
                                </td>
                                <td>6</td>
                                <td>73 Fcfa</td>
                                <td>20%</td>
                                </tr>
                        </tfoot>
                        </table>
                        <table class="recap">
                        <thead>
                            <tr>
                            <th></th>
                            <th>
                                <div class="header_t">
                                    <span>
                                        TOTAL HT
                                    </span>
                                </div>
                            </th>
                            <th>
                                <div class="header_t">
                                    <span> TOTAL TVA</span>
                                </div>

                            </th>
                            <th>
                                <div class="header_t header_tM ">
                                    <span>TOTAL HT &nbsp; 7240 Fcfa</span>
                                </div>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TVA 20%</td>
                                <td>44 330 Fcfa</td>
                                <td>8866 Fcfa</td>
                                <td> <span>TVA 10% &nbsp;</span> <span style="color: #E61D1D;"> 8866 Fcfa</span></td>
                            </tr>
                            <tr>
                                <td>TVA 10%</td>
                                <td>44 330 Fcfa</td>
                                <td>4866 Fcfa</td>
                                <td> <span>TVA 10% &nbsp;</span> <span style="color: #E61D1D;"> 6866 Fcfa</span></td>
                            </tr>
                            <tr class="total">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="highlight_total">
                                    Total TTC: 7240 Fcfa
                                </div>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        <div class="mode_selection">
                        <div class="custom-select">
                            <select id="payment-select">
                                <option value="">Sélectionner le mode de paiement</option>
                                <option value="espece" id="open-modal">Espèce</option>
                                <option value="mobile">Mobile</option>
                                <option value="wave">Wave</option>
                                <option value="credit-card">Carte de crédit</option>
                            </select>
                        </div>
                        </div>
                        <div id="payment_modal_individuelle" class="modal">
                        <div class="modal-content">
                            <span class="close_collective">&times;</span>
                            <h2>Le moyen de paiement choisir : Mobile</h2>
                            <form>
                            <div class="form_group">
                                <label for="name">Nom</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="form_group">
                                <label for="number">Numero</label>
                                <input type="number" id="number" name="number">
                            </div>
                            <button type="submit">Sélectionner</button>
                            </form>
                        </div>
                        </div>
                </div>
                <hr style="height:2px; border:none; border-top:3px dotted #000;">
            </div>
            <div class="detail">
                <div class="personne_nom">
                    <div class="contenue">
                    <h1>Client 03</h1>
                    </div>
                </div>
                <div class="contenue_facture">
                        <table>
                        <thead>
                            <tr>
                            <th>
                                <div class="header_t">
                                    <span>
                                        Repas
                                    </span>
                                </div>
                                <hr>
                            </th>
                            <th>
                                <div class="header_t">
                                    <span> Quantité</span>
                                </div>
                                <hr style="width: 120px;">
                            </th>
                            <th>
                                <div class="header_t">
                                    <span>Prix HT</span>
                                </div>
                                <hr>
                            </th>
                            <th>
                                <div class="header_t">
                                    <span>TVA</span>
                                </div>
                                <hr>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td style="width: 450px;">Plateau de fromages avec des crackers et des fruits secs
                            </td>
                            <td>
                                2
                            </td>
                            <td><span style="color: #E61D1D;">8,33 Fcfa</span>

                            </td>
                            <td>
                            </td>
                            </tr>
                            <tr>
                            <td style="width: 450px;"><hr>Salade de saumon grillé</td>
                            <td><hr style="width: 120px;">3</td>
                            <td><hr> <span style="color: #E61D1D;">12,5 Fcfa</span></td>
                            <td><span style="color: #E61D1D;">20%</span></td>
                            </tr>
                            <tr>
                            <td style="width: 450px;"><hr>Poulet rôti</td>
                            <td><hr style="width: 120px;">1</td>
                            <td><hr> <span style="color: #E61D1D;">6,67 Fcfa</span></td>
                            <td> </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr class="total">
                                <td>
                                    <div class="highlight">
                                        Total
                                    </div>
                                </td>
                                <td>6</td>
                                <td>73 Fcfa</td>
                                <td>20%</td>
                                </tr>
                        </tfoot>
                        </table>
                        <table class="recap">
                        <thead>
                            <tr>
                            <th></th>
                            <th>
                                <div class="header_t">
                                    <span>
                                        TOTAL HT
                                    </span>
                                </div>
                            </th>
                            <th>
                                <div class="header_t">
                                    <span> TOTAL TVA</span>
                                </div>

                            </th>
                            <th>
                                <div class="header_t header_tM ">
                                    <span>TOTAL HT &nbsp; 7240 Fcfa</span>
                                </div>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TVA 20%</td>
                                <td>44 330 Fcfa</td>
                                <td>8866 Fcfa</td>
                                <td> <span>TVA 10% &nbsp;</span> <span style="color: #E61D1D;"> 8866 Fcfa</span></td>
                            </tr>
                            <tr>
                                <td>TVA 10%</td>
                                <td>44 330 Fcfa</td>
                                <td>4866 Fcfa</td>
                                <td> <span>TVA 10% &nbsp;</span> <span style="color: #E61D1D;"> 6866 Fcfa</span></td>
                            </tr>
                            <tr class="total">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="highlight_total">
                                    Total TTC: 7240 Fcfa
                                </div>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        <div class="mode_selection">
                        <div class="custom-select">
                            <select id="payment-select">
                                <option value="">Sélectionner le mode de paiement</option>
                                <option value="espece" id="open-modal">Espèce</option>
                                <option value="mobile">Mobile</option>
                                <option value="wave">Wave</option>
                                <option value="credit-card">Carte de crédit</option>
                            </select>
                        </div>
                        </div>
                        <div id="payment_modal_individuelle" class="modal payment_modal_individuelle">
                        <div class="modal-content">
                            <span class="close_collective">&times;</span>
                            <h2>Le moyen de paiement choisir : Mobile</h2>
                            <form>
                            <div class="form_group">
                                <label for="name">Nom</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="form_group">
                                <label for="number">Numero</label>
                                <input type="number" id="number" name="number">
                            </div>
                            <button type="submit">Sélectionner</button>
                            </form>
                        </div>
                        </div>
                </div>
                <hr style="height:2px; border:none; border-top:3px dotted #000;">
            </div>
        </div>
        <div class="numero_table_commande">
        </div>
        <div class="btn_voire_addition additionblock">
            <button class="btn_voir_addition" id="voir_addition">
                <i class="fa-solid fa-eye"></i>
                Voir l'addition collective
            </button>
            <button class="btn_voir_addition_individuel" id="voir_addition_individuel">
                <i class="fa-solid fa-eye"></i>
                Voir l'addition individuelle
            </button>
        </div>
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

        const changer_contenue_individuelle = document.querySelector('.changer_contenue_individuelle');
        changer_contenue_individuelle.addEventListener('click', () => {
            const btnVoireAddition = document.querySelector(".addition");
            const addition_individuel = document.querySelector(".addition_individuel");
            if (btnVoireAddition.style.display === "block") {
                btnVoireAddition.style.display = "none";
                addition_individuel.style.display = "block";
            } else if (addition_individuel.style.display === "block") {
                addition_individuel.style.display = "none";
                btnVoireAddition.style.display = "block";
            }
        });
        const changer_contenue_collective = document.querySelector('.changer_contenue_collective');
        changer_contenue_collective.addEventListener('click', () => {

            const btnVoireAddition = document.querySelector(".addition");
            const addition_individuel = document.querySelector(".addition_individuel");
            if (btnVoireAddition.style.display === "block") {
                btnVoireAddition.style.display = "none";
                addition_individuel.style.display = "block";
            } else if (addition_individuel.style.display === "block") {
                addition_individuel.style.display = "none";
                btnVoireAddition.style.display = "block";
            }
        });
        const retour = document.querySelector(".retour");
            if (retour) {
                retour.addEventListener('click', () => {
                    window.location.href = '{{ route('home') }}';
                });
            }


        // Sélection de l'élément select et de l'élément où afficher l'option sélectionnée
        const paymentSelect = document.getElementById("payment-select");
        const selectionDisplay = document.getElementById("selection-display");

        // Ajout d'un écouteur d'événements "change" sur l'élément select
        paymentSelect.addEventListener("change", function() {
        // Récupération du texte de l'option sélectionnée
        const selectedOption = paymentSelect.options[paymentSelect.selectedIndex].text;

        // Affichage du texte de l'option sélectionnée dans l'élément HTML
        selectionDisplay.textContent = selectedOption;
        });
        var numberTable = "3";
         // Afficher le numéro de table dans la section "numero_table_commande"
         const numeroTableCommande = document.querySelector(".numero_table_commande");
         numeroTableCommande.innerHTML = `<h1>La commande d'addition pour la table ${numberTable} est en cours de traitement... </h1>`;
            // Afficher le contenu de la commande dans la section "contenue"
            const contenue = document.querySelector(".contenue");
            const contenue_individuel = document.querySelector(".contenue_individuel");
            contenue.innerHTML = `<h1>Table N° ${numberTable}</h1>`;
            contenue_individuel.innerHTML = `<h1>Table N° ${numberTable}</h1>`;

        // Afficher le bouton après 5 secondes et cacher le texte
        setTimeout(() => {
         const btnVoireAddition = document.querySelector(".btn_voire_addition");
         btnVoireAddition.style.display="block";
         numeroTableCommande.innerHTML = "";
         }, 5000);



    </script>
</body>

</html>
