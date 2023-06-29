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
            <h1>Activation du compte</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('admin_2023') }}">Home</a></li>
              <li class="breadcrumb-item active">Activation du compte</li>
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
          <h3 class="card-title">Activation du compte</h3>

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
                      <th style="width: 40%">
                          Nom
                      </th>
                      <th style="width: 10%">
                          Image
                      </th>
                      <th style="width: 20%" class="text-center">
                        Role
                      </th>
                      <th style="width: 30%" class="text-center">
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
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project-actions text-center">
                        <div class="form-group">
                            <select class="form-control select2 text-center">
                              <option selected="selected">Alabama</option>
                              <option>Alaska</option>
                              <option>California</option>
                              <option>Delaware</option>
                              <option>Tennessee</option>
                              <option>Texas</option>
                              <option>Washington</option>
                            </select>
                        </div>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Activé</span>
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
                      <td class="project-actions text-center">
                        <div class="form-group">
                            <select class="form-control select2 text-center">
                              <option selected="selected">Alabama</option>
                              <option>Alaska</option>
                              <option>California</option>
                              <option>Delaware</option>
                              <option>Tennessee</option>
                              <option>Texas</option>
                              <option>Washington</option>
                            </select>
                        </div>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Activé</span>
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
                      <td class="project-actions text-center">
                        <div class="form-group">
                            <select class="form-control select2 text-center">
                              <option selected="selected">Alabama</option>
                              <option>Alaska</option>
                              <option>California</option>
                              <option>Delaware</option>
                              <option>Tennessee</option>
                              <option>Texas</option>
                              <option>Washington</option>
                            </select>
                        </div>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Activé</span>
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
