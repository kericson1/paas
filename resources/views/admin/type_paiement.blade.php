@extends('admin.admin')
@section('title', 'L\' Administrateur | Type paiement')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Type de paiement</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('admin_2023') }}">Home</a></li>
              <li class="breadcrumb-item active">Type de paiement</li>
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
          <h3 class="card-title">Type de paiement</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#modal-lg">
                <i class="fas fa-plus"></i>
              Ajouter
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 40%">
                          Nom
                      </th>
                      <th style="width: 20%" class="text-center">
                        type
                      </th>
                      <th style="width: 30%" class="text-center">
                            Etat
                    </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td><a>Espèce</a></td>
                      <td class="project-actions text-center">
                        Espèce
                    </td>
                    <td class="project-state">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                              <input type="checkbox" class="custom-control-input" id="customSwitch1">
                              <label class="custom-control-label" for="customSwitch1">activer</label>
                            </div>
                          </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a>Orange</a></td>
                      <td class="project-actions text-center">
                        Mobile money
                    </td>
                    <td class="project-state">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                              <input type="checkbox" class="custom-control-input" id="customSwitch2">
                              <label class="custom-control-label" for="customSwitch2">activer</label>
                            </div>
                          </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a>MTN</a></td>
                      <td class="project-actions text-center">
                        Mobile money
                    </td>
                    <td class="project-state">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                              <input type="checkbox" class="custom-control-input" id="customSwitch3">
                              <label class="custom-control-label" for="customSwitch3">activer</label>
                            </div>
                          </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a>Moov</a></td>
                      <td class="project-actions text-center">
                        Mobile money
                    </td>
                    <td class="project-state">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                              <input type="checkbox" class="custom-control-input" id="customSwitch4">
                              <label class="custom-control-label" for="customSwitch4">activer</label>
                            </div>
                          </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a>Wave</a></td>
                      <td class="project-actions text-center">
                        Mobile money
                    </td>
                    <td class="project-state">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                              <input type="checkbox" class="custom-control-input" id="customSwitch5">
                              <label class="custom-control-label" for="customSwitch5">activer</label>
                            </div>
                          </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a>Visa</a></td>
                      <td class="project-actions text-center">
                        Carte bancaire
                    </td>
                    <td class="project-state">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                              <input type="checkbox" class="custom-control-input" id="customSwitch6">
                              <label class="custom-control-label" for="customSwitch6">activer</label>
                            </div>
                          </div>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Large Modal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Nom">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleSelectBorder" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <h4>Selectionner le type</h4>
                                <div class="form-group">
                                  <select class="custom-select form-control-border" id="exampleSelectBorder">
                                    <option>Value 1</option>
                                    <option>Value 2</option>
                                    <option>Value 3</option>
                                  </select>
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-body -->

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                  <button type="button" class="btn btn-info">Enregistrer</button>
                </div>
            </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
