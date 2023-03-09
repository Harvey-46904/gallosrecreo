@extends('webdashboar.index')
@section('contenido')
<main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Gestion Pollos</h2>
        <div class="row stat-cards">
          <div class="col-md-12 col-xl-12">
            <article class="stat-cards-item">
            <div class="container">
    <div class="row justify-content-end py-4">
      <div class="col-md-3 col-4">
      <a href="{{url('ave/create')}}" class="btn btn-success">Registrar Pollo</a>
      </div>
    </div>
        <div class="row justify-content-center ">
            <div class="col-md-12">
        <table class="table posts-table">
            <thead>
                <tr class="users-table-info">
               
                <th scope="col">Placa</th>
                <th scope="col">Padre</th>
                <th scope="col">Madre</th>
                <th scope="col">Fecha nacimiento</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($lista_aves as $ave)
                    <tr>
                   
                    <th scope="row">{{ $ave->Placa}}</th>
                    <td>{{ $ave->Padre}}</td>
                    <td>{{ $ave->Madre}}</td>
                    <td>{{ $ave->Fecha_nacimiento}}</td>
                    <td><a href="{{url('ave',[$ave->id,'edit'])}}" class="btn btn-warning"> <span class="icon star" aria-hidden="true"></span></td>
                    <td>
                    <form action="{{url('ave',[$ave->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"> <span class="icon delete" aria-hidden="true"></span></button>               
                            </form>
                    </td>
                    </tr>
                @endforeach
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