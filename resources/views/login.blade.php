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
               <li ><a href="c">Mediciones</a></li>
            </ul>
         </div>
         <div class="menu_main_1">
            <ul>
               <li class="active"><a href="/login">login</a></li>
               <li><a href="logout">Log out</a></li>
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
                  <h1 class="col-sm-3"> Iniciar sesion:</h1>               
            </div>

             <form method= "POST">
                @csrf
                <label >
                    <input name= "email" type ="email" required autofocus value ="{{ old('email') }}" placeholder="Correo electronico...">
                </label>
                @error('email') {{ $message }} @enderror
                <br>

                <label >
                    <input name= "password" type ="password" required placeholder="Contraseña...">
                </label> 
                @error('password') {{ $message }} @enderror
                <br>
                <label>
                  <input type="checkbox" name="remember">
                  Recordar mi sesion
                </label> <br>

                <button type="submit" class="bton btn-primary p-2">
                    Iniciar sesion
                 </button>
            </form>
         </div>
      </div>
   </div>

   @endsection