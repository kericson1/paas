 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <i class="fa-solid fa-money-check-dollar"></i>
      <span class="brand-text font-weight-light">Caisse</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{ Route('admin_2023') }}" class="nav-link {{ request()->routeIs('admin_2023') ? ' active' : '' }}">
                <i class="fas fa-tachometer-alt"></i>
                <p>Tableau de bord</p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{ Route('admin_2023_commande_attend') }}" class="nav-link {{ request()->routeIs('admin_2023_commande_attend') ? ' active' : '' }}">
                <i class="fa-solid fa-receipt"></i>
              <p>
                Faire la facture
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ Route('admin_2023_paiement_commande') }}" class="nav-link {{ request()->routeIs('admin_2023_paiement_commande') ? ' active' : '' }}">
                <i class="fa-solid fa-receipt"></i>
              <p>
                Confirmer le paiement
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ Route('admin_2023_liberer_commande') }}" class="nav-link {{ request()->routeIs('admin_2023_liberer_commande') ? ' active' : '' }}">
                <i class="fa-solid fa-receipt"></i>
              <p>
                Liberer la table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa-solid fa-receipt"></i>
              <p>
                Annuler la commande
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa-solid fa-receipt"></i>
              <p>
                Inventaire
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa-solid fa-receipt"></i>
              <p>
                Ajout menu jour
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
