@extends('webdashboar.index')
@section('contenido')

<main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Editar Pollo {{$ave->Placa}}</h2>
        <div class="row stat-cards">
          <div class="col-md-12 col-xl-12">
            <article class="stat-cards-item">
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
            <form method="POST" action="{{url('ave', $ave->id)}}">
            @method('PUT')
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Placa</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Placa" value="{{ $ave->Placa}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Genero</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Genero" value="{{ $ave->Genero}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Candado</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Candado" value="{{ $ave->Candado}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Madre</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Madre" value="{{ $ave->Madre}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Padre</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Padre" value="{{ $ave->Padre}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Fecha_nacimiento</label>
                        <input type="date" class="form-control border border-secondary" id="exampleInputPassword1" name="Fecha_nacimiento">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Estado</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="estado" value="{{ $ave->estado}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Observacion</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Observacion" value="{{ $ave->Observacion}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </article>
          </div>
          
        </div>
       
      </div>
    </main>
    @endsection