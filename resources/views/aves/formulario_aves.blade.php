
@extends('webdashboar.index')
@section('contenido')
<main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Registro Pollos</h2>
        <div class="row stat-cards">
          <div class="col-md-12 col-xl-12">
            <article class="stat-cards-item">
   <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
            <form method="POST" action="{{url('ave')}}">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Placa</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Placa">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Genero</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Genero">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Candado</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Candado">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Madre</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Madre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Padre</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Padre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Fecha_nacimiento</label>
                        <input type="date" class="form-control border border-secondary" id="exampleInputPassword1" name="Fecha_nacimiento">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Observacion</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Observacion">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
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