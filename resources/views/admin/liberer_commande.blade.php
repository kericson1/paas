@extends('admin.mainAdmin')
@section('title', 'La caisse | Commande attend')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Commande en attente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('admin_2023') }}">Home</a></li>
              <li class="breadcrumb-item active">Commande en attente</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Commande en attente</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 20%">
                          N° table
                      </th>
                      <th style="width: 30%">
                          Nombre de client
                      </th>
                      <th style="width: 10%" class="text-center">
                          Etat de commande
                      </th>
                      <th style="width: 20%"class="text-center">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          <a>
                              01
                          </a>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-info">Demande facture</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                            <i class="fa-sharp fa-solid fa-eye"></i>
                              Voir Commande
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Faire Facture
                          </a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <a>
                              06
                          </a>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project-state">
                        <span class="badge badge-info">Demande facture</span>
                      </td>
                      <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fa-sharp fa-solid fa-eye"></i>
                            Voir Commande
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Faire Facture
                        </a>
                    </td>
                  </tr>
                  <tr>
                      <td>
                          <a>
                              09
                          </a>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project-state">
                        <span class="badge badge-info">Demande facture</span>
                      </td>
                      <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fa-sharp fa-solid fa-eye"></i>
                            Voir Commande
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Faire Facture
                        </a>
                    </td>
                  </tr>
                  <tr>
                      <td>
                          <a>
                              14
                          </a>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project-state">
                        <span class="badge badge-info">Demande facture</span>
                      </td>
                      <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fa-sharp fa-solid fa-eye"></i>
                            Voir Commande
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Faire Facture
                        </a>
                    </td>
                  </tr>

              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
