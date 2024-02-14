@extends('layouts.plantilla')

@section('title', 'Crear cliente');

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        {{-- <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Listado de clientes</h4>
                </div>

            </div>
        </div> --}}
        <section class="content">
			<div class="row">
                <div class="col-lg-12 col-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title">Registro de clientes</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form" action="{{ route('clients.store') }}" method="POST">

                          @csrf
                          <div class="box-body">
                              <div class="form-group">
                                  <label class="form-label">Nombre completo*</label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control"  id="name" name="name" placeholder="Ingrese su nombre completo"  value="{{ old('name') }}">
                                      <span class="input-group-text"><i class="ti-user"></i></span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Cedula o rif*</label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control" id="identification_card" name="identification_card" placeholder="Ingrese su cédula o RIF" value="{{ old('identification_card') }}">
                                      <span class="input-group-text"><i class="ti-credit-card"></i></span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Telefono*</label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingrese su número de teléfono" value="{{ old('phone') }}">
                                      <span class="input-group-text"><i class="ti-mobile"></i></span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Dirección*</label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control" id="address" name="address" placeholder="Ingrese su dirección" value="{{ old('address') }}">
                                      <span class="input-group-text"><i class="ti-pin-alt"></i></span>
                                  </div>
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer text-end">

                              <button type="submit" class="btn btn-primary">
                                <i class="ti-save-alt"></i> Save
                              </button>
                          </div>
                      </form>
                    </div>
                    <!-- /.box -->
              </div>
            </div>

        </section>
    </div>
@endsection()
