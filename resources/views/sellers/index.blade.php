@extends('layouts.plantilla')

@section('title', 'Listado de vendedores');

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
                <div class="col-12 col-xl-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Lista de vendedores</h5>
							<p class="mb-0 card-subtitle text-muted">Vendedores de la empresa.</p>
						</div>
						<div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:40%;">Nombre completo</th>
                                        <th class="d-none d-md-table-cell" style="width:25%;">Cedula o Rif</th>
                                        <th class="d-none d-md-table-cell" style="width:15%;">Telefono</th>
                                        <th class="d-none d-md-table-cell" style="width:15%;">Dirección</th>
                                        <th style="width:5%;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($sellers) > 0)
                                        @foreach ($sellers as $seller)
                                            <tr>
                                                <td>{{ $seller->name }}</td>
                                                <td class="d-none d-md-table-cell text-fade">{{ $seller->identification_card }}</td>
                                                <td class="d-none d-md-table-cell text-fade">{{ $seller->phone }}</td>
                                                <td class="d-none d-md-table-cell text-fade">{{ $seller->address }}</td>
                                                <td>
                                                    <a href="#"  data-bs-toggle="modal" data-bs-target="#standard-modal" class="text-fade hover-primary"><i class="align-middle" data-feather="eye"></i></a>
                                                    {{-- <a href="{{ route('clients.destroy', $seller->id) }}" class="text-fade hover-primary" onclick="event.preventDefault(); confirm('Are you sure you want to delete this client?'); document.getElementById('delete-form-{{ $seller->id }}').submit();"><i class="align-middle" data-feather="trash"></i></a>
                                                    <form id="delete-form-{{ $seller->id }}" action="{{ route('sellers.destroy', $seller->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">No se han creado vendedores</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>

						</div>
					</div>
				</div>
            </div>

        </section>
    </div>
    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Estadisticas de vendedor</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-md-12">
                        <div class="box no-shadow">
                            <div class="box-body">
                              <a class="btn btn-outline btn-info mb-5 d-flex justify-content-between" href="javascript:void(0)">Total de ventas <span class="pull-right">
                                @foreach ($sellers as $seller)
                                    {{ $seller->total_sales}}
                                @endforeach
                            </span></a>
                              <a class="btn btn-outline btn-success mb-5 d-flex justify-content-between" href="javascript:void(0)">Numero de ventas <span class="pull-right">
                                @foreach ($sellers as $seller)
                                    {{$seller->number_sells}}
                                @endforeach
                              </span></a>
                              <a class="btn btn-warning mt-10 d-flex justify-content-between" href="javascript:void(0)">Productos mas vendidos <span class="pull-right"></span></a>
                              @foreach ($sellers as $seller)
                                  @foreach ($seller->top_products as $product)
                                  <a class="btn btn-outline btn-primary mb-5 d-flex justify-content-between" href="javascript:void(0)">{{ $product[1] }} <span class="pull-right">{{ $product[0] }}</span></a>
                                  @endforeach
                              @endforeach

                          </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection()

