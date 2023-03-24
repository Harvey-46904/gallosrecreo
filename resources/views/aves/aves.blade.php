@extends('webdashboar.index')
@section('contenido')
<main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Gestion Pollos</h2>
        <div class="row pb-4 justify-content-between">
        <div class="col-md-8">

            @if (Session::get('crear'))
                <div class="alert alert-secondary" role="alert">
                Campo Creado Con Exito !!!
                </div>
            @endif
            @if (Session::get('actualiza'))
                <div class="alert alert-success" role="alert">
                Actualizacion Exitosa !!!
                </div>
            @endif
            @if (Session::get('elimina'))
                <div class="alert alert-danger" role="alert">
                Campo Eliminado Con Exito !!!
                </div>
            @endif
                      


      </div>
          <div class="col-md-2">
                <a href="{{url('ave/create')}}" class="btn btn-success">Registrar Ave</a>
            </div>
          
        </div>
        <div class="row">
          <div class="col-lg-12">
            
            <div class="users-table table-wrapper">
              <table class="posts-table">
              <thead>
                <tr class="users-table-info">
               
                <th scope="col">Placa</th>
                <th scope="col">Padre</th>
                <th scope="col">Madre</th>
                <th scope="col">Fecha nacimiento</th>
                <th scope="col">Sexo</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lista_aves as $ave)
                    <tr>
                   
                      <td scope="row">{{ $ave->Placa}}</td>
                      <td>{{ $ave->Padre}}</td>
                      <td>{{ $ave->Madre}}</td>
                      <td>{{ $ave->Fecha_nacimiento}}</td>
                      <td>{{ $ave->Genero}}</td>
                      @if  ($ave->estado=="Vivo")
                      <td><span class="badge-pending">{{$ave->estado}}</span></td>
                      @else
                      <td><span class="badge-die">{{$ave->estado}}</span></td>
                      @endif
                    
                      
                      <td>
                    <span class="p-relative">
                      <button class="dropdown-btn transparent-btn" type="button" title="More info">
                        <div class="sr-only">Acciones</div>
                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                      </button>
                      <ul class="users-item-dropdown dropdown">
                        <li><a href="{{url('ave',[$ave->id,'edit'])}}">Actualizar</a></li>
                        <li><a href="##"> <form action="{{url('ave',[$ave->id])}}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit">Eliminar</button>               
                              </form></a></li>
                       
                      </ul>
                    </span>
                  </td>
                    </tr>
                @endforeach
            </tbody>

              </table>
            </div>
          </div>
         
        </div>
      </div>
    </main>
   


    @endsection