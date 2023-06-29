 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <i class="fas fa-user-shield"></i>
         <span class="brand-text font-weight-light">Administrateur</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Alexander Pierce</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                 <li class="nav-item">
                     <a href="{{ Route('administration') }}"
                         class="nav-link {{ request()->routeIs('administration') ? ' active' : '' }}">
                         <i class="fas fa-tachometer-alt"></i>
                         <p>Tableau de bord</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#"
                         class="nav-link {{ request()->routeIs('admin_2023_activation') ? ' active' : '' }} {{ request()->routeIs('admin_2023_active') ? ' active' : '' }} {{ request()->routeIs('admin_2023_banni') ? ' active' : '' }} {{ request()->routeIs('admin_2023_droit_accès') ? ' active' : '' }}{{ request()->routeIs('admin_2023_activite_membre') ? ' active' : '' }}">
                         <i class="fas fa-user"></i>
                         <p>
                             Personnel
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ Route('admin_2023_activation') }}"
                                 class="nav-link {{ request()->routeIs('admin_2023_activation') ? ' active' : '' }}">
                                 <i class="fas fa-user-check"></i>
                                 <p>Activation compte</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ Route('admin_2023_active') }}"
                                 class="nav-link {{ request()->routeIs('admin_2023_active') ? ' active' : '' }}">
                                 <i class="fas fa-trash-alt"></i>
                                 <p> Bannir compte</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ Route('admin_2023_banni') }}"
                                 class="nav-link {{ request()->routeIs('admin_2023_banni') ? ' active' : '' }}">
                                 <i class="fas fa-trash-alt"></i>
                                 <p> Réactivé compte</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ Route('admin_2023_droit_accès') }}"
                                 class="nav-link {{ request()->routeIs('admin_2023_droit_accès') ? ' active' : '' }}">
                                 <i class="fas fa-key"></i>
                                 <p>Droits d’accès</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ Route('admin_2023_activite_membre') }}" class="nav-link{{ request()->routeIs('admin_2023_activite_membre') ? ' active' : '' }}">
                                 <i class="fas fa-running"></i>
                                 <p>Activité</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 {{-- <li class="nav-item">
                     <a href="#" class="nav-link">

                         <p>
                             Produits
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="fas fa-plus"></i>
                                 <p>Ajouter</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="fas fa-trash-alt"></i>
                                 <p> Suppression</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="fas fa-edit"></i>
                                 <p>Modification</p>
                             </a>
                         </li>
                     </ul>
                 </li> --}}
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="fas fa-warehouse"></i>
                         <p>
                             Gestion du stock
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                 <p>Produits </p>
                             </a>
                         </li>
                         <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-plus-square"></i>
                                <p>Quantité de stock entrée </p>
                            </a>
                        </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="fas fa-arrow-down"></i>
                                 <p> Quantité de Stock sortie</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="fas fa-credit-card"></i>
                         <p>
                             système de paiement
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ Route('admin_2023_type_paiement') }}" class="nav-link">
                                 <i class="fas fa-university"></i>
                                 <p>
                                     Type de paiement
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ Route('admin_2023_devise') }}" class="nav-link">
                                 <i class="fas fa-money-bill"></i>
                                 <p> Devises</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="fas fa-percent"></i>
                                 <p> TVA</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <p>
                            Statistiques
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-utensils fa-lg text-primary"></i>
                                <p>
                                    Repas
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-calendar-day"></i>
                                        <p>
                                            Jour
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-calendar-alt"></i>
                                        <p> Semaine</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-calendar"></i>
                                        <p> Mois</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-calendar-check"></i>
                                        <p> Année</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user fa-lg text-primary"></i>
                                <p>
                                    Client
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-calendar-day"></i>
                                        <p>
                                            Jour
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-calendar-alt"></i>
                                        <p> Semaine</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-calendar"></i>
                                        <p> Mois</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-calendar-check"></i>
                                        <p> Année</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link ">
                         <i class="fas fa-sign-out-alt"></i>
                         <p>
                             Déconnexion
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
