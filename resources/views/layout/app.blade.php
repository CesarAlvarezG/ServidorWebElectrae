<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Software</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- owl carousel style -->
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
   <!-- fevicon -->
   <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

{{-- ---------------------------------separacion header y body-------------------------------------------- --}}

<body>
   <!--header section start -->
   <div class="header_section header_bg">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="logo"><a href="index"><img src="images/logo.png"></a></div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <a class="nav-link" href="{{ asset('/inicio') }}">Inicio</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ asset('/proyectos') }}">Proyectos</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ asset('/mediciones') }}">Mediciones</a>
               </li>
            </ul>
         </div>
      </nav>
   </div>



   
   @yield('contenido')


   
   <!--software section end -->
   <!--footer section start -->
   <div class="footer_section layout_padding margin_top_0">
     
   </div>
   <!--footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Free html
            Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="{{ asset('js/jquery.min.js') }}"></script>
   <script src="{{ asset('js/popper.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
   <script src="{{ asset('js/plugin.js') }}"></script>
   <!-- sidebar -->
   <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
   <script src="{{ asset('js/custom.js') }}"></script>
   <!-- javascript -->
   <script src="{{ asset('js/owl.carousel.js') }}"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
   <script>
      var $owl = $('.owl-carousel');

      $owl.children().each(function (index) {
         $(this).attr('data-position', index); // NB: .attr() instead of .data()
      });

      $owl.owlCarousel({
         center: true,
         loop: true,
         items: 3,
      });

      $(document).on('click', '.owl-item>div', function () {
         // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
         var $speed = 300;  // in ms
         $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
      });

   </script>
       @livewireScripts

</body>

</html>