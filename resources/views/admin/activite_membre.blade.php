@extends('admin.admin')
@section('title', 'L\' Administrateur | Activation')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Activité des membres</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('admin_2023') }}">Home</a></li>
              <li class="breadcrumb-item active">Activité des membres</li>
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
          <h3 class="card-title">Activité des membres</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> --}}
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 30%">
                          Nom
                      </th>
                      <th style="width: 10%">
                          Image
                      </th>
                      <th style="width: 10%">
                        heure d'arrivée
                      </th>
                      <th style="width: 10%">
                        heure du depart
                      </th>
                      <th style="width: 10%">
                        Temps du travail
                      </th>
                      <th style="width: 20%" class="text-center">
                        progression du jour
                      </th>
                      <th style="width: 10%" class="text-center">
                        Etat
                    </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td><a>Mike Smith</a></td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        07 H 00 mn
                      </td>
                      <td>
                        17 H 00 mn
                      </td>
                      <td>
                        8 H 00 mn
                      </td>
                      <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                        <small>
                            100% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                  </tr>
                  <tr>
                    <td><a>Mike Smith</a></td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        07 H 00 mn
                      </td>
                      <td>
                        Non définit
                      </td>
                      <td>
                        Non définit
                      </td>
                      <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-info">En cours...</span>
                    </td>>
                  </tr>
                  <tr>
                    <td><a>Mike Smith</a></td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                              </li>
                          </ul>
                      </td>
                      <td>
                        07 H 00 mn
                      </td>
                      <td>
                        Non définit
                      </td>
                      <td>
                        Non définit
                      </td>
                      <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                        </div>
                        <small>
                            20% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-info">En cours...</span>
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
