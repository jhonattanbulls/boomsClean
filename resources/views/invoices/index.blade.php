@extends('layouts.plantilla')

@section('title', 'Listado de clientes');

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
							<h5 class="card-title">Lista de pedidos</h5>
							<p class="mb-0 card-subtitle text-muted">Pedidos de la empresa.</p>
						</div>
						<div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:25%;">Cliente</th>
                                        <th class="d-none d-md-table-cell" style="width:25%;">Vendedor</th>
                                        <th class="d-none d-md-table-cell" style="width:25%;">Producto</th>
                                        <th class="d-none d-md-table-cell" style="width:15%;">Cantidad</th>
                                        <th class="d-none d-md-table-cell" style="width:10%;">Monto</th>
                                        {{-- <th class="d-none d-md-table-cell" style="width:15%;"></th> --}}
                                        {{-- <th style="width:5%;">Acciones</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($invoices) > 0)
                                        @foreach ($invoices as $invoice)
                                            <tr>
                                                <td>{{ $invoice->client->name }}</td>
                                                <td class="d-none d-md-table-cell text-fade">{{ $invoice->seller->name }}</td>
                                                <td class="d-none d-md-table-cell text-fade">
                                                    @for ($i = 0; $i < count($invoice->soldProducts); $i++)
                                                        {{ $invoice->soldProducts[$i]->product->name }}

                                                        @if ($i < count($invoice->soldProducts) - 1)
                                                            ,
                                                        @endif
                                                    @endfor
                                                </td>
                                                <td class="d-none d-md-table-cell text-fade">
                                                    @for ($i = 0; $i < count($invoice->soldProducts); $i++)
                                                        {{ $invoice->soldProducts[$i]->quantity }}

                                                        @if ($i < count($invoice->soldProducts) - 1)
                                                            ,
                                                        @endif
                                                    @endfor
                                                </td>
                                                <td class="d-none d-md-table-cell text-fade">{{ $invoice->total }}</td>
                                                {{-- <td>
                                                    <a href="{{ route('clients.edit', $invoice->id) }}" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
                                                    <a href="{{ route('clients.destroy', $invoice->id) }}" class="text-fade hover-primary" onclick="event.preventDefault(); confirm('Are you sure you want to delete this client?'); document.getElementById('delete-form-{{ $invoice->id }}').submit();"><i class="align-middle" data-feather="trash"></i></a>
                                                    <form id="delete-form-{{ $invoice->id }}" action="{{ route('clients.destroy', $invoice->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">No se han creado pedidos</td>
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

