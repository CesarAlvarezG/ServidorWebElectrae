@extends('layout.app')


@section('contenido')
   <!--header section end -->
   <!--costume header section start -->
   <div class="costume_header">
      <div class="container">
         <div class="menu_main">
            <ul>
               <li><a href="{{ asset('/inicio') }}">Inicio</a></li>
               <li class="active"><a href="{{ asset('/proyectos') }}">Proyectos</a></li>
               <li ><a href="{{ asset('/mediciones') }}">Mediciones</a></li>
            </ul>
         </div>
         <div class="menu_main_1">
            <ul>
               <li><a href="login">login</a></li>
               <li><a href="logout">Log out</a></li>
            </ul>
         </div>
      </div>
   </div>
   <!--costume header section end -->
   <!-- about section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="services_taital">Algunos proyectos de ELECTRAE</h1>
               
               <div class="image_2"><img src="images/dimensionamiento.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Herramienta para el dimensionamiento de sistemas fotovoltaicos aislados.</h1>
                  <p class="dummy_text">Software para el diseño y calculo de sistemas fotovoltaicos.</p>
                  
               </div>
            </div>
         </div>
         <div class="row">
            
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Estación de medición de rayos ultravioleta energizado por un sistema fotovoltaico.</h1>
                  <p class="dummy_text">Dispositivo para el monitoreo de la radiación ultravioleta y pedagogía para el publico en general, llamado Solmaforo.</p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="image_2"><img src="images/estacion_ultravioleta.png"></div>
            </div>
         </div>


         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/red_asentamiento.png"></div>
            </div>
            <div class="col-md-6 pb-5">
               <div class="box_main">
                  <h1 class="technology_text">Diseño De Red Fotovoltaica Aislada Para El Abastecimiento Del Servicio Eléctrico De Asentamientos Indígenas</h1>
                  <p class="dummy_text">Sistema Fotovoltaico Aislado.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--about section end -->
   <!--footer section start -->
   @endsection