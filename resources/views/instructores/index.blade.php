@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }} <a href="{{ url('instructores/create') }}"
                            class="btn btn-primary">Nuevo registro</a></div>
                    <div class="card-body">
                        <h1>Usuarios registrados</h1>
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>ID</th>

                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Cedula</th>
                                            <th>Email</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($instructores as $instructor)
                                            <tr>
                                                <td>{{ $instructor->id }}</td>

                                                <td>{{ $instructor->Nombre }}</td>
                                                <td>{{ $instructor->Apellido }}</td>
                                                <td>{{ $instructor->Cedula }}</td>
                                                <td>{{ $instructor->Email }}</td>


                                                <td>
                                                    <form action="{{ route('instructores.destroy', $instructor->id) }}"
                                                        method="POST">
                                                        <a class="btn btn-outline-success"
                                                            href="{{ route('instructores.edit', $instructor->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger"><i
                                                                class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                    </form>
                                                </td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
