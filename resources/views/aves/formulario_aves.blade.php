
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
                        <label for="exampleInputEmail1" class="Texto_normal">Placa</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Placa">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="Texto_normal">Género</label>
                        <select class="form-control" name="Genero">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="Texto_normal">Candado</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Candado">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="Texto_normal">Madre</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Madre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="Texto_normal">Padre</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputPassword1" name="Padre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="Texto_normal">Fecha_nacimiento</label>
                        <input type="date" class="form-control border border-secondary" id="exampleInputPassword1" name="Fecha_nacimiento">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="Texto_normal">Observacion</label>
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