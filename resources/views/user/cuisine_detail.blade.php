@extends('user.partials.main')
<link rel="stylesheet" href="{{ asset('css/cuisine_detail.css') }}">
@section('logo')
    <div class="retour">
        <i class="fa-solid fa-circle-left"style="font-size: 50px; color: #fff;"></i>
    </div>
@endsection
@section('content2')
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
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Pizza"
                                onchange="toggleStrikeThrough(this)"></td>
                    </tr>
                    <tr>
                        <td>Burger</td>
                        <td>Savoureux burger avec du bœuf juteux, du fromage, des légumes et une sauce spéciale.</td>
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Burger"
                                onchange="toggleStrikeThrough(this)"></td>
                    </tr>
                    <tr>
                        <td>Sushi</td>
                        <td>Délicats sushis préparés avec du poisson frais et du riz assaisonné.</td>
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Sushi"
                                onchange="toggleStrikeThrough(this)"></td>
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
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Pizza"
                                onchange="toggleStrikeThrough(this)"></td>
                    </tr>
                    <tr>
                        <td>Burger</td>
                        <td>Savoureux burger avec du bœuf juteux, du fromage, des légumes et une sauce spéciale.</td>
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Burger"
                                onchange="toggleStrikeThrough(this)"></td>
                    </tr>
                    <tr>
                        <td>Sushi</td>
                        <td>Délicats sushis préparés avec du poisson frais et du riz assaisonné.</td>
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Sushi"
                                onchange="toggleStrikeThrough(this)"></td>
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
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Pizza"
                                onchange="toggleStrikeThrough(this)"></td>
                    </tr>
                    <tr>
                        <td>Burger</td>
                        <td>Savoureux burger avec du bœuf juteux, du fromage, des légumes et une sauce spéciale.</td>
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Burger"
                                onchange="toggleStrikeThrough(this)"></td>
                    </tr>
                    <tr>
                        <td>Sushi</td>
                        <td>Délicats sushis préparés avec du poisson frais et du riz assaisonné.</td>
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Sushi"
                                onchange="toggleStrikeThrough(this)"></td>
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
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Pizza"
                                onchange="toggleStrikeThrough(this)"></td>
                    </tr>
                    <tr>
                        <td>Burger</td>
                        <td>Savoureux burger avec du bœuf juteux, du fromage, des légumes et une sauce spéciale.</td>
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Burger"
                                onchange="toggleStrikeThrough(this)"></td>
                    </tr>
                    <tr>
                        <td>Sushi</td>
                        <td>Délicats sushis préparés avec du poisson frais et du riz assaisonné.</td>
                        <td class="checkbox"><input type="checkbox" name="commande[]" value="Sushi"
                                onchange="toggleStrikeThrough(this)"></td>
                    </tr>
                </tbody>
            </table>
            <hr style="height:1px; border:none; border-top:3px dotted #E61D1D; margin-bottom:20px;">
        </div>
        <a href="{{ Route('home') }}" class="submit-btn">Servir</a>
    </div>
@endsection
