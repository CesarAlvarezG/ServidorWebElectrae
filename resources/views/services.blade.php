@extends('layout.app')


@section('contenido')
   <!--header section end -->
   <!--costume header section start -->
   <div class="costume_header">
      <div class="container">
         <div class="menu_main">
            <ul>
               <li><a href="index">Inicio</a></li>
               <li><a href="about">About</a></li>
               <li><a href="software">Mediciones</a></li>
               <li class="active" ><a href="services">Services</a></li>
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
   <!--services section start -->
   <div class="services_section layout_padding margin_90">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="services_taital">What We Do </h1>
               <div class="image_2"><img src="images/img-2.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">New Technology</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-3.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Long Live UX</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-4.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Web Trends</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-5.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">User Interfaces</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div>
      </div>
   </div>
   <!--services section end -->
   <!--footer section start -->
   @endsection