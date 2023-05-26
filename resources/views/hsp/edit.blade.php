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
                <div>
                    <h1 class="software_taital">Editar Hora Solar Pico</h1> 
                </div>

               <form action="{{ route('hsp.update', $mediciones) }}" method= "POST">
                @method('put')
                  @csrf

                  <div class="col-sm-4">
                     <label for="inputHSP" class="form-label">* Hora Solar Promedio: </label>
                     <input type="text" name="hsp" id="inputHSP" class="form-control" value="{{ old('hsp') }}"> 


                  </div>

                  <div class="col-sm-4">
                     <label for="inputFechaMedicion" class="form-label">* Fecha de la Medicion </label>

                     <input type="datetime-local" name="fecha_medicion" id="inputFechaMedicion" class="form-control" value="{{ old('fecha_medicion') }}">


                  </div>
                  <div class="col-sm-12 text-end my-4">
                     <button type="submit" class="bton btn-primary p-2">
                        Guardar
                     </button>
                  </div>




               </form>
 
               @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                           @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                     </ul>
                  </div>
               @endif

                  <!-- -->
               
            </div>
         </div>
      </div>
   </div>


   @endsection