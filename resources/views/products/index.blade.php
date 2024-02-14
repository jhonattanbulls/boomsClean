@extends('layouts.plantilla')

@section('title', 'Listado de productos');

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
							<h5 class="card-title">Lista de productos</h5>
							<p class="mb-0 card-subtitle text-muted">Productos de la empresa.</p>
						</div>
						<div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:40%;">Nombre del producto</th>
                                        <th class="d-none d-md-table-cell" style="width:25%;">Precio</th>
                                        <th class="d-none d-md-table-cell" style="width:30%;">Descuento</th>
                                        <th style="width:5%;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($products) > 0)
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td class="d-none d-md-table-cell text-fade">{{ $product->price }}</td>
                                                <td class="d-none d-md-table-cell text-fade">{{ $product->discount == 0 ? 'No' : 'Si' }}</td>
                                                <td>
                                                    <a href="{{ route('clients.edit', $product->id) }}" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
                                                    <a href="{{ route('clients.destroy', $product->id) }}" class="text-fade hover-primary" onclick="event.preventDefault(); confirm('Are you sure you want to delete this client?'); document.getElementById('delete-form-{{ $product->id }}').submit();"><i class="align-middle" data-feather="trash"></i></a>
                                                    <form id="delete-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">No se han creado productos</td>
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
@endsection()

