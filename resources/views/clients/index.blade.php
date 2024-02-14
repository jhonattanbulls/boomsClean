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
							<h5 class="card-title">Lista de clientes</h5>
							<p class="mb-0 card-subtitle text-muted">Clientes de la empresa.</p>
						</div>
						<div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:40%;">Nombre completo</th>
                                        <th class="d-none d-md-table-cell" style="width:25%;">Cedula o Rif</th>
                                        <th class="d-none d-md-table-cell" style="width:15%;">Telefono</th>
                                        <th class="d-none d-md-table-cell" style="width:15%;">Dirección</th>
                                        {{-- <th style="width:5%;">Acciones</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($clients) > 0)
                                        @foreach ($clients as $client)
                                            <tr>
                                                <td>{{ $client->name }}</td>
                                                <td class="d-none d-md-table-cell text-fade">{{ $client->identification_card }}</td>
                                                <td class="d-none d-md-table-cell text-fade">{{ $client->phone }}</td>
                                                <td class="d-none d-md-table-cell text-fade">{{ $client->address }}</td>
                                                {{-- <td>
                                                    <a href="{{ route('clients.edit', $client->id) }}" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
                                                    <a href="{{ route('clients.destroy', $client->id) }}" class="text-fade hover-primary" onclick="event.preventDefault(); confirm('Are you sure you want to delete this client?'); document.getElementById('delete-form-{{ $client->id }}').submit();"><i class="align-middle" data-feather="trash"></i></a>
                                                    <form id="delete-form-{{ $client->id }}" action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">No se han creado clientes</td>
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

