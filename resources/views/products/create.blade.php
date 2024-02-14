@extends('layouts.plantilla')

@section('title', 'Crear producto');

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
                        <h4 class="box-title">Registro de producto</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form" action="{{ route('products.store') }}" method="POST">

                          @csrf
                          <div class="box-body">
                              <div class="form-group">
                                  <label class="form-label">Nombre del producto*</label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control"  id="name" name="name" placeholder="Ingrese nombre del producto"  value="{{ old('name') }}">
                                      <span class="input-group-text"><i class="ti-user"></i></span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="form-label">Precio*</label>
                                  <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="number" class="form-control"  id="price" name="price" placeholder="Ingrese precio del producto" value="{{ old('price') }}">
                                    <span class="input-group-addon">.00</span>
                                  </div>
                                    {{-- <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="price" name="price" placeholder="Ingrese precio del producto" value="{{ old('price') }}">
                                        <span class="input-group-text"><i class="ti-credit-card"></i></span>
                                    </div> --}}
                              </div>
                              <div class="form-group">
                                <label class="form-label">Descuento*</label>
                                <select class="form-select" id="discount" name="discount">
                                  <option value="0">No</option>
                                  <option value="1">Si</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label class="form-label">Categorias*</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    <option value="">Selecciona una categoría</option>
                                    @foreach($categories as $category)
                                        <option value="{{ (int) $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer text-end">
                              {{-- <button type="button" class="btn btn-primary-light me-1">
                                <i class="ti-trash"></i> Cancel
                              </button> --}}
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
