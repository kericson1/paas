@extends('user.partials.main')
<link rel="stylesheet" href="{{ asset('css/accueil_user.css') }}">
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
@section('content1')
    <div class="main_content">
        <div class="main_buttons">
            <h1>Prise de commande</h1>
        </div>
    </div>
@endsection
@section('content2')
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

    <script>
        const retour = document.querySelector(".retour");
        if (retour) {
            retour.addEventListener('click', () => {
                window.location.href = '{{ route('home') }}';
            });
        }
    </script>
@endsection
