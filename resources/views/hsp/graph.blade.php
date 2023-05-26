@extends('layout.app')


@section('contenido')


   <!--header section end -->
   <!--costume header section start -->
   <div class="costume_header">
      <div class="container">
         <div class="menu_main">
            <ul>
               <li><a href="{{ asset('/inicio') }}">Inicio</a></li>
               <li><a href="{{ asset('/proyectos') }}">Proyectos</a></li>
               <li class="active"><a href="{{ asset('/mediciones') }}">Mediciones</a></li>
            </ul>
         </div>
         <div class="menu_main_1">
            <ul>
               <li><a href="{{ asset('/login') }}">login</a></li>
               <li><a href="{{ asset('/logout') }}">Log out</a></li>
            </ul>
         </div>
      </div>
   </div>

   
   <!--costume header section end -->
   <!--software section start -->
   <div class="software_section layout_padding padding_botoom_90">
      <div class="container">
         <h1 class="software_taital">Hora Solar Pico</h1>
         <p class="software_text"> La Hora Solar Pico (HSP) es la cantidad de energía solar que recibe un metro cuadrado de superficie</p>
         <div class="software_section_2 layout_padding">
            
             <div>
                  <a href="{{ route('hsp.create') }}"class="btn btn-link"> Ingresar medición</a>
                  <a href="{{ route('hsp.index') }}"class="btn btn-link"> Lista mediciones</a>


                  <form action="{{ route('hsp.graph') }}" method= "GET">
                    @csrf
    
                    <div class="col-sm-4">
                       <label for="start_date" class="form-label">* Fecha de Mediciones inicial </label>
                       <input type="datetime-local" name="start_date" id="start_date" class="form-control" value="{{ request()->start_date }}">
                    </div>

                    <div class="col-sm-4">
                        <label for="end_date" class="form-label">* Fecha de Mediciones final </label>
                        <input type="datetime-local" name="end_date" id="end_date" class="form-control" value="{{ request()->end_date }}">
                     </div>

                    <div class="col-sm-12 text-end my-4">
                       <button type="submit" class="bton btn-primary p-2">
                          Graficar
                       </button>
                    </div>
                  </form>


                  <div>
                     <canvas id="myChart"></canvas>
                 </div>

               </div>
         </div>
      </div>
   </div>


   <script src="https://code.jquery.com/jquery-3.6.1.min.js"> </script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   
   <script>  
   
       $(document).ready(function(){
           const graphData = JSON.parse(`<?php echo $chartData?>`);
   
           const ctx = document.getElementById('myChart');
   
           new Chart(ctx, {
               type: 'bar',
               data: {
               labels: graphData.map(row => row.fecha_medicion),
               datasets: [{
                   label: '# of Votes',
                   data: graphData.map(row => row.hsp),
                   borderWidth: 1
               }]
               },
               options: {
               scales: {
                   y: {
                   beginAtZero: true
                   }
               }
               }
           });
       });
   
    
   
   </script>

   
@endsection
