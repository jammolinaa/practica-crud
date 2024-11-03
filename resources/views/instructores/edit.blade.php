@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card">
                        <div class="container h-100 mt-5">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-10 col-md-8 col-lg-6">
                                    <h3>Editar Instructores</h3>
                                    <form action="{{ route('instructores.update', $instructores) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="Nombre">Nombre</label>
                                            <input type="text" class="form-control" id="Nombre" name="Nombre"
                                                value="{{ $instructores->Nombre }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Apellido">Apellido</label>
                                            <input type="text" class="form-control" id="Apellido" name="Apellido"
                                                value="{{ $instructores->Apellido }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Cedula">Cedula</label>
                                            <input type="text" class="form-control" id="Cedula" name="Cedula"
                                                value="{{ $instructores->Cedula }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="text" class="form-control" id="Email" name="Email"
                                                value="{{ $instructores->Email }}"required>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Create instructor</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
