
@extends('webdashboar.index')
@section('contenido')
<main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">registro vacunacion pollos</h2>
        <div class="row stat-cards">
          <div class="col-md-12 col-xl-12">
            <article class="stat-cards-item">
      
   <div class="container">
        <div class="row pt-5  justify-content-center">
            <div class="col-md-6">
              
            <form method="POST" action="{{url('agregar_vacuna')}}">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Placa Aves</label>
                        <input type="text" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Placa">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Seleccione Vacunas</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="vacuna">
                    <option>vacuna de rabia</option>
                    <option>vacuna de achaque</option>
                    <option>vacuna de fiebre</option>
                    <option>vacuna cuerpo</option>
                    <option>vacuna de musculo</option>
    </select>
                    </div>
                    <div class="row justify-content-end py-3">
                    <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">Consultar</button>
                    </div>
                    </div>
            </form>
            </div>
            
        </div>
       
        <div class="row">
            <div class="col-md-12 pt-2">
            <table class="table ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            </div>

        </div>
    </div>
    </article>
          </div>
          
        </div>
       
      </div>
    </main>
    @endsection