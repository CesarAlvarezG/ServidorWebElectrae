@extends('layout.app')


@section('contenido')
   <!--header section end -->
   <!--costume header section start -->
   <div class="costume_header">
      <div class="container">
         <div class="menu_main">
            <ul>
               <li class="active"><a href="{{ asset('/inicio') }}">Inicio</a></li>
               <li><a href="{{ asset('/proyectos') }}">Proyectos</a></li>
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
   <div class="about_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="about_taital">¿ Quien es ELECTRAE ?</h1>
               <p class="about_text">Nuestro grupo pretende brindar al entorno regional productos y servicios que sean el resultado de la realización de proyectos dirigidos a la comunidad donde la aplicación de la Electrónica y la innovación tecnológica ofrezca soluciones a los diferentes problemas y necesidades del sector productivo y económico del eje cafetero y del país.</p>
            </div>
            <div class="col-md-6">
               <div><img src="images/logop11.png" class="image_1"></div>
            </div>
         </div>
      </div>
   </div>
   <!--about section end -->
   <!--services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="services_taital">Lineas de interes de ELECTRAE: </h1>
               <div class="image_2"><img src="images/energías_renovables.png"><a href="http://www.muycomputer.com/2017/08/05/vulnerabilidad-en-paneles-solares/"> fuente</a> </div>
               
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Energías renovables.</h1>
                  <p class="dummy_text">Proponer soluciones en el entorno regional a problemáticas en los sectores manufacturero, agroindustrial y comercial, a través de productos y servicios; resultado de proyectos de investigación soportados en la innovación tecnológica basados en fuentes de energía renovable y electrónica aplicada.</p>
                  
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Logros de la Línea.</h1>
                  <p class="dummy_text">Desarrollo de software de dimensionamiento de sistemas fotovoltaicos. Desarrollo de Solmaforo en la universidad del Quindío. Desarrollo de prototipo de sistema de entrenamiento en energía.

                  </p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="image_2 pt-5"><img src="images/integrantes.png">Algunos miembros del grupo</div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/logro.png"><a href="http://elsancarlistau.com/2018/02/28/que-son-los-antecedentes-en-el-proyecto-de-investigacion/"> fuente</a></div>
            </div>
            <div class="col-md-6 pb-5">
               <div class="box_main">
                  <h1 class="technology_text">Efectos de la Línea.</h1>
                  <p class="dummy_text">Desarrollo de software orientado a las energías renovables. Desarrollo de tesis de pregrado en el ámbito de la energías renovables. Publicaciones en eventos científicos nacionales e internacionales.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--services section end -->
  
  
   
  
   <!--footer section start -->

   @endsection