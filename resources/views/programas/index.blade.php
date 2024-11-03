@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div style="display: flex; justify-content: space-between; align-items: center; padding:20px">
                        <h1>Programas registrados</h1>
                        <div class="float-right">
                            <a href="{{ route('programas.create') }}" class="btn btn-outline-primary btn-sm float-right"  data-placement="left">
                              {{ __('Create New') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>ID</th>
                                            <th>Ficha</th>
                                            <th>Programa</th>
                                            <th></th>
                                            
                                    </thead>
                                    <tbody>
                                        @foreach ($programas as $programa)
                                            <tr>
                                                <td>{{ $programa->id }}</td>
                                                <td>{{ $programa->Ficha }}</td>
                                                <td>{{ $programa->NombreProgramas }}</td>
                                                <td>
                                                    {{-- <form action="{{ route('instructores.destroy', $instructor->id) }}"
                                                        method="POST">
                                                        <a class="btn btn-outline-success"
                                                            href="{{ route('instructores.edit', $instructor->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger"><i
                                                                class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                    </form> --}}
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
