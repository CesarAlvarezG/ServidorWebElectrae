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
               <li><a href="services">Services</a></li>
               <li class="active"><a href="contact">Contact Us</a></li>
               
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
   <!--contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="work_taital">Get In Touch</h1>
      </div>
   </div>
   <div class="contact_section_2">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 padding_0">
               <div><img src="images/img-10.png" class="image_10"></div>
            </div>
            <div class="col-md-6">
               <div class="email_text">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="Email">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="Email">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                  </div>
                  <div class="send_btn"><a href="#">SEND</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--contact section end -->
   <!--footer section start -->
   @endsection