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
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
            <form method="POST" action="{{url('ave', $ave->id)}}">
            @method('PUT')
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Placa</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Placa" value="{{ $ave->Placa}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Genero</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="Genero" value="{{ $ave->Genero}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Candado</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="Candado" value="{{ $ave->Candado}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Madre</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="Madre" value="{{ $ave->Madre}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Padre</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="Padre" value="{{ $ave->Padre}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Fecha_nacimiento</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="Fecha_nacimiento">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Estado</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="estado" value="{{ $ave->estado}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Observacion</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="Observacion" value="{{ $ave->Observacion}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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