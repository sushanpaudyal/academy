<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheSaaS - Responsive Bootstrap SaaS, Software & WebApp Template</title>

    <!-- Styles -->
    <link href="{{asset('assets/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/thesaas.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="TheSaaS">
    <meta property="og:description" content="A responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4.">
    <meta property="og:image" content="http://thetheme.io/thesaas/assets/img/og-img.jpg">
    <meta property="og:url" content="http://thetheme.io/thesaas/">
    <meta name="twitter:card" content="summary_large_image">
</head>

<body>
 <div id="app">
     <!-- Topbar -->
     <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
         <div class="container">

             <div class="topbar-left">
                 <button class="topbar-toggler">&#9776;</button>
                 <a class="topbar-brand" href="index.html">
                     <img class="logo-default" src="assets/img/logo.png" alt="logo">
                     <img class="logo-inverse" src="assets/img/logo-light.png" alt="logo">
                 </a>
             </div>


             <div class="topbar-right">
                 <ul class="topbar-nav nav">
                     <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>

                     <li class="nav-item"><a class="nav-link" href="javascript:"data-toggle="modal" data-target="#loginModal">Login</a></li>

                 </ul>
             </div>

         </div>
     </nav>
     <!-- END Topbar -->

     <!-- Header -->
    @yield('header')
     <!-- END Header -->

     <main class="main-content">
        @yield('content')
     </main>


     <vue-login></vue-login>

     <!-- Footer -->
     <footer class="site-footer">
         <div class="container">
             <div class="row gap-y align-items-center">
                 <div class="col-12 col-lg-3">
                     <p class="text-center text-lg-left">
                         <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
                     </p>
                 </div>

                 <div class="col-12 col-lg-6">
                     <ul class="nav nav-primary nav-hero">
                         <li class="nav-item">
                             <a class="nav-link" href="index.html">Home</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="blog.html">Blog</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="block-feature.html">Features</a>
                         </li>
                         <li class="nav-item hidden-sm-down">
                             <a class="nav-link" href="page-pricing.html">Pricing</a>
                         </li>
                         <li class="nav-item hidden-sm-down">
                             <a class="nav-link" href="page-contact.html">Contact</a>
                         </li>
                     </ul>
                 </div>

                 <div class="col-12 col-lg-3">
                     <div class="social text-center text-lg-right">
                         <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
                         <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
                         <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
                         <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     <!-- END Footer -->


     <a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>


     <!-- Scripts -->
     <script src="{{asset('assets/js/core.min.js')}}"></script>
     <script src="{{asset('assets/js/thesaas.min.js')}}"></script>
     <script src="{{asset('assets/js/script.js')}}"></script>
     <script src="{{asset('js/app.js')}}"></script>






</div>
</body>