<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign In</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{!! asset('dashboard/img/svg/logo.svg ') !!}" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{!! asset('dashboard/css/style.css') !!}">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Bienvenido</h1>
    <p class="sign-up__subtitle">Inicia sesión en tu cuenta para continuar</p>
    
    @if(Session::has('errors'))
    <div class="alert alert-danger" role="alert">
    {{Session::get('errors')->first()}}
  </div>
    
 	
@endif
 
    <form class="sign-up-form form" action="{{url('Iniciar_Sesion')}}" method="POST">
      @csrf
      <label class="form-label-wrapper">
        <p class="form-label">Correo</p>
        <input class="form-input" type="email" name="email" placeholder="Digita tu correo" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Contraseña</p>
        <input class="form-input" type="password" name="password" placeholder="Digita tu contraseña" required>
      </label>
     
      <button class="form-btn primary-default-btn transparent-btn">Ingresar</button>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="{!! asset('dashboard/plugins/chart.min.js') !!}"></script>
<!-- Icons library -->
<script src="{!! asset('dashboard/plugins/feather.min.js') !!}"></script>
<!-- Custom scripts -->
<script src="{!! asset('dashboard/js/script.js') !!}"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>