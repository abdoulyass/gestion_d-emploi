<!DOCTYPE html>
<html lang="en">
 @include('includes.head')
 @yield('css')
<body>
    <div class="hero_area" style="position: fixed;width: 100%; z-index: 100;">
        @include('includes.header')
     </div>
     <div class="content" >
       @yield('content')
     </div>
     
     <footer class="footer_section">
        @include('includes.footer')
     </footer>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Google Map -->
     {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script> --}}
     <!-- End Google Map -->
     @stack('scripts')

</body>
</html>