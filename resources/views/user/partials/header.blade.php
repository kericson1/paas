<div class="header">
    @yield('logo')
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
