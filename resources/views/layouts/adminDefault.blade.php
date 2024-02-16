<!DOCTYPE html>
<html lang="en">
 @include('includes.head')
 @yield('css')
<body class="admin">
     

   @include('includes.sidebarAdm');
  
     <section id="content" >
        <nav>
            <i class='bx bx-menu' ></i>
            {{-- <a href="#" class="profile">
                <img src="img/people.png">
            </a> --}}
        </nav>
        <main>
            @yield('main')
        </main>
      
     <section>


        <footer class="footer_section">
            @include('includes.footerad')
         </footer>
         {{-- <script src="{{ asset('js/js') }}"></script> --}}
        
         
         <!-- Google Map -->
         {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script> --}}
         <!-- End Google Map -->
         @stack('scripts')
    </body>
    </html>