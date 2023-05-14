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

        <div>
            <a href="{{ route('hsp.create') }}"class="btn btn-link"> Ingresar medición</a>
            <a href="{{ route('hsp.index') }}"class="btn btn-link"> Lista de mediciones</a>
            <a href="{{ route('hsp.graph') }}"class="btn btn-link"> Graficar mediciones</a>

        </div>

        <h3>
            Listado de Mediciones.
        </h3>
        
        @livewire('hspindex')
        @livewireScripts











    </div>
   <!--software section end -->
   <!--footer section start -->
   @endsection