<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-between pt-5">
            <div class="col-md-8">

            @if (Session::get('crear'))
                <div class="alert alert-secondary" role="alert">
                This is a secondary alert—check it out!
                </div>
            @endif
            @if (Session::get('actualiza'))
                <div class="alert alert-success" role="alert">
                This is a success alert—check it out!
                </div>
            @endif
            @if (Session::get('elimina'))
                <div class="alert alert-danger" role="alert">
                This is a danger alert—check it out!
                </div>
            @endif
                       
            
            
            </div>
            <div class="col-md-2">
                <a href="{{url('ave/create')}}" class="btn btn-success">Registrar Polloo</a>
            </div>
        </div>
        <div class="row pt-5 justify-content-center">
            <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
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
                    <th scope="row">{{ $ave->id}}</th>
                    <th scope="row">{{ $ave->Placa}}</th>
                    <td>{{ $ave->Padre}}</td>
                    <td>{{ $ave->Madre}}</td>
                    <td>{{ $ave->Fecha_nacimiento}}</td>
                    <td><a href="{{url('ave',[$ave->id,'edit'])}}">Editar</td>
                    <td>
                    <form action="{{url('ave',[$ave->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>               
                            </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>