<!DOCTYPE html>
<html lang="en">

<head>
@include('includes.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
@include('includes.spinner')
        <!-- Spinner End -->


        <!-- Navbar Start -->
    @include('includes.navbar')
        <!-- Navbar End -->


        <!-- Carousel Start -->
        @include('includes.carousel')
        <!-- Carousel End -->
         
@yield('content')

        <!-- Footer Start -->
        @include('includes.footer')
        <!-- Footer End -->


       <!-- <footerjs Start> -->

        @include('includes.footerjs')
          <!-- <footerjs End> -->
</body>

</html>