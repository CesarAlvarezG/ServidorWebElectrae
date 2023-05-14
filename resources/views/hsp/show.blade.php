@extends('layout.app')


@section('contenido')
   <!--header section end -->
   <!--costume header section start -->
   <div class="costume_header">
      <div class="container">
         <div class="menu_main">
            <ul>
               <li><a href="{{ asset('/index') }}">Inicio</a></li>
               <li><a href="{{ asset('/about') }}">About</a></li>
               <li class="active" ><a href="{{ asset('/software') }}">Mediciones</a></li>
               <li><a href="{{ asset('/services') }}">Services</a></li>
               <li><a href="{{ asset('/contact') }}">Contact Us</a></li>
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

         </div>
         <h3>
            {{-- {{ $mediciones-> hsp }} </i> --}}
         </h3>
         <ul>
            <li>
                Hora Solar Pico: <strong> {{ $mediciones->hsp }}</strong>
            </li>
            <li>
                Fecha de la medicion: <strong> {{ $mediciones->fecha_medicion }}</strong>
            </li>
         </ul>

         <hr>
         <div  class = "row">
            <div class="col-sm-12 mb-2">
                <form action="{{ route('hsp.destroy', $mediciones) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" type= "submit">
                    Borrar
                </button>
                </form>


            </div>

         </div>




      </div>
   </div>
   <!--software section end -->
   <!--footer section start -->
   @endsection