@extends('layout.app')


@section('contenido')
   <!--header section end -->
   <!--costume header section start -->
   <div class="costume_header">
      <div class="container">
         <div class="menu_main">
            <ul>
               <li><a href="index">Inicio</a></li>
               <li class="active" ><a href="about">About</a></li>
               <li><a href="software">Mediciones</a></li>
               <li><a href="services">Services</a></li>
               <li><a href="contact">Contact Us</a></li>
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
   <div class="about_section layout_padding padding_top_90">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="about_taital">About Softwares</h1>
               <p class="about_text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
                  a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                  Latin professor at Hampden</p>
               <div class="read_bt"><a href="#">Read More</a></div>
            </div>
            <div class="col-md-6">
               <div><img src="images/img-1.png" class="image_1"></div>
            </div>
         </div>
      </div>
   </div>
   <!--about section end -->
   <!--footer section start -->
   @endsection