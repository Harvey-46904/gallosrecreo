
@extends('webdashboar.index')
@section('contenido')
<main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Historia clinica </h2>
        <div class="row justify-content-center">
      
          <div class="col-lg-9">
            <article class="customers-wrapper">
              <canvas id="tiempo_suceso" aria-label="Customers statistics" role="img"></canvas>
              <!--              <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="./img/svg/customers.svg" type="image/webp"><img src="./img/svg/customers.svg" alt=""></picture> -->
            </article>
            <article class="white-block">
              <div class="top-cat-title">
                <h3>Historia Clinica</h3>
                <p>{{sizeof($consultas)}} Datos en historias clinica</p>
              </div>
              <ul class="top-cat-list">
                @foreach ($consultas as $consulta)
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      {{$consulta->Descripcion_evento}} <span> {{$consulta->created_at}}</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                    {{$consulta->descripcion_hc}}<span class="purple">+472</span>
                    </div>
                  </a>
                </li>
                @endforeach
             
              </ul>
            </article>
          </div>
        </div>
      </div>
    </main>
    @push('scripts')
   
<!-- Icons library -->
<script src="{!! asset('dashboard/plugins/feather.min.js') !!}"></script>
<!-- Custom scripts -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{!! asset('dashboard/plugins/chart.min.js') !!}"></script>

   <script>
          var customersChart = document.getElementById('tiempo_suceso');

if (customersChart) {
  var customersChartCanvas = customersChart.getContext('2d');
  var myCustomersChart = new Chart(customersChartCanvas, {
    type: 'line',
    data: {
      labels: ["Nacimiento","Vacuna","Vacuna"],
      datasets: [{
        label: '+958',
        data:  {{$graficos["dias"]}},
        tension: 0.4,
        backgroundColor: '#ff7c40',
        borderColor: ['#fff'],
        borderWidth: 2,
        fill: true
      }]
    },
    options: {
      scales: {
        y: {
          display: true
        },
        x: {
          display: true
        }
      },
      elements: {
        point: {
          radius: 1
        }
      },
      plugins: {
        legend: {
          position: 'top',
          align: 'end',
          labels: {
            color: '#fff',
            size: 18,
            fontStyle: 800,
            boxWidth: 0
          }
        },
        title: {
          display: true,
          text: ['Pollo Activo', '{{$dias*-1}} Dias.'],
          align: 'start',
          color: '#fff',
          font: {
            size: 16,
            family: 'Inter',
            weight: '600',
            lineHeight: 1.4
          },
          padding: {
            top: 20,
            left:40
          }
        }
      },
      maintainAspectRatio: false
    }
  });
  customersChart.customers = myCustomersChart;
}
    </script>
    @endpush
   
  
    @endsection