@extends('layout.app')


@section('contenido')
   <!--header section end -->
   <!--costume header section start -->
   <div class="costume_header">
      <div class="container">
         <div class="menu_main">
            <ul>
               <li class="active" ><a href="index">Inicio</a></li>
               <li><a href="about">About</a></li>
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
   <div class="about_section layout_padding">
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
   <!--services section start -->
   <div class="services_section layout_padding">
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
   <!--software section start -->
   <div class="software_section layout_padding">
      <div class="container">
         <h1 class="software_taital">Our Software</h1>
         <p class="software_text">There are many variations of passages of Lorem Ipsum available, but the majority have
            suffered alteration in some form, by injected humour</p>
         <div class="software_section_2 layout_padding">
            <div class="owl-carousel">
               <div>
                  <img src="images/img-6.png" class="image_6">
                  <h4 class="ipsum_text">Ipsum available,</h4>
               </div>
               <div>
                  <img src="images/img-7.png" class="image_6">
                  <h4 class="ipsum_text">Ipsum available,</h4>
               </div>
               <div>
                  <img src="images/img-8.png" class="image_6">
                  <h4 class="ipsum_text">Ipsum available,</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--software section end -->
   <!--works section start -->
   <div class="works_section layout_padding">
      <div class="container">
         <h1 class="work_taital">How It Works</h1>
         <div class="works_section_2 layout_padding">
            <div class="row">
               <div class="col-sm-4">
                  <h3 class="fully_text">FULLY RESPONSIVE</h3>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo</p>
               </div>
               <div class="col-sm-4">
                  <h3 class="fully_text">WELL DOCUMENTED</h3>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo</p>
               </div>
               <div class="col-sm-4">
                  <h3 class="fully_text">EASY TO USE</h3>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--works section end -->
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