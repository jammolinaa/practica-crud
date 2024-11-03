<@extends('layouts.app')

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
                                    <h3>Crear Instructores</h3>
                                    <form action="{{ route('programas.store') }}" method="POST">
                                      @csrf
                                      <div class="form-group">
                                        <label for="Ficha">Ficha</label>
                                        <input type="text" class="form-control" id="Ficha" name="Ficha" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="NombreProgramas">Programa</label>
                                        <input type="text" class="form-control" id="NombreProgramas" name="NombreProgramas" required>
                                      </div>
                                      
                                      <br>
                                      <button type="submit" class="btn btn-primary">Create Programa</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
