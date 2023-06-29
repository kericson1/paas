@extends('admin.mainAdmin')
@section('title', 'La caisse | Acceuil')
@section('content')
  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">La caisse</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>04</h3>

                <p>Commande en attente de la facture</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-invoice-dollar"></i>
              </div>
              <a href="{{ Route('admin_2023_commande_attend') }}" class="small-box-footer">Aller voir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>50<sup style="font-size: 20px">%</sup></h3>

                <p>Facture réglée du jour</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-invoice-dollar"></i>
              </div>
              <a href="#" class="small-box-footer">Aller voir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>50<sup style="font-size: 20px">%</sup></h3>

                <p>Facture non réglée du jour</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-receipt"></i>
              </div>
              <a href="#" class="small-box-footer">Aller voir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65000 F<sup style="font-size: 20px">CFA</sup></h3>

                <p>Montant total cumulé du jour</p>
              </div>
              <div class="icon">
                <i class="fas fa-calculator"></i>
              </div>
              <a href="#" class="small-box-footer">Aller voir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <section class="col-lg-12 connectedSortable">
            <div class="col-lg-12 text-center mb-5">
              <h1 style="text-decoration: underline;">La liste des tables</h1>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0">
                      <strong>Table 01</strong>
                    </h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text">
                      <strong>Statut:</strong> Demande de facture...
                    </p>
                    <a href="#" class="btn btn-info"><i class="fas fa-check-square"></i> Faire la facture</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0">
                      <strong>Table 02</strong>
                    </h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> La table est vide</p>
                    <a href="#" class="btn btn-secondary disabled" disabled><i class="fas fa-times-circle"></i> Aucune action</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0"><strong>Table 03</strong></h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> Commande en cours</p>
                    <a href="#" class="btn btn-warning text-white"><i class="fas fa-eye"></i> Voir la commande</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0"><strong>Table 04</strong></h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> Table non libérée</p>
                    <a href="#" class="btn btn-success"><i class="fas fa-lock"></i> Libérer la table</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0"><strong>Table 05</strong></h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> Commande en cours</p>
                    <a href="#" class="btn btn-warning text-white"><i class="fas fa-eye"></i> Voir la commande</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0">
                      <strong>Table 06</strong>
                    </h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text">
                      <strong>Statut:</strong> Demande de facture...
                    </p>
                    <a href="#" class="btn btn-info"><i class="fas fa-check-square"></i> Faire la facture</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0"><strong>Table 07</strong></h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> Table non libérée</p>
                    <a href="#" class="btn btn-success"><i class="fas fa-lock"></i> Libérer la table</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0">
                      <strong>Table 08</strong>
                    </h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> La table est vide</p>
                    <a href="#" class="btn btn-secondary disabled" disabled><i class="fas fa-times-circle"></i> Aucune action</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0">
                      <strong>Table 09</strong>
                    </h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text">
                      <strong>Statut:</strong> Demande de facture...
                    </p>
                    <a href="#" class="btn btn-info"><i class="fas fa-check-square"></i> Faire la facture</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0">
                      <strong>Table 10</strong>
                    </h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> La table est vide</p>
                    <a href="#" class="btn btn-secondary disabled" disabled><i class="fas fa-times-circle"></i> Aucune action</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0"><strong>Table 11</strong></h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> Commande en cours</p>
                    <a href="#" class="btn btn-warning text-white"><i class="fas fa-eye"></i> Voir la commande</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0"><strong>Table 12</strong></h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> Table non libérée</p>
                    <a href="#" class="btn btn-success"><i class="fas fa-lock"></i> Libérer la table</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0"><strong>Table 13</strong></h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> Commande en cours</p>
                    <a href="#" class="btn btn-warning text-white"><i class="fas fa-eye"></i> Voir la commande</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0">
                      <strong>Table 14</strong>
                    </h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text">
                      <strong>Statut:</strong> Demande de facture...
                    </p>
                    <a href="#" class="btn btn-info"><i class="fas fa-check-square"></i> Faire la facture</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card bg-light mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0"><strong>Table 15</strong></h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> Table non libérée</p>
                    <a href="#" class="btn btn-success"><i class="fas fa-lock"></i> Libérer la table</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card mb-3">
                  <div class="card-header text-center">
                    <h5 class="card-title mb-0">
                      <strong>Table 16</strong>
                    </h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>Statut:</strong> La table est vide</p>
                    <a href="#" class="btn btn-secondary disabled" disabled><i class="fas fa-times-circle"></i> Aucune action</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
