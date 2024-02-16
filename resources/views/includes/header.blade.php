<header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
              
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                Inance
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                  <a class="nav-link" href="{{route('about')}}"> About</a>
                </li>
                <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
                  <a class="nav-link"href="{{route('services')}}" >Services</a>
                </li>
                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                  <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>
                <li class="nav-item show">
                  <div class="dropdown "id="hover-dropdown">
                    <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        candidature
                    </a>
                    <div class="dropdown-menu  " aria-labelledby="dropdownMenuLink" style="    left: -11px;">
                      <a  class="btn btn-primary dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">diposer cv <i class="fa-solid fa-file-import"></i> </a>
                      <a class="dropdown-item" href="{{ route('poste') }}">nos departements</a>
                      <a class="dropdown-item" href="{{ route('poste') }}">poste disponible</a>
                    </div>
                  </div>
                </li>
                <li class="nav-item " style=" display: flex;
                margin-right: -10px;
                gap: 7px;
               ">
               @auth
               
               <li class="nav-item" >
                <div class="dropdown show" >
                  <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 9px ">
                    <i class="fa-regular fa-user"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="left: -127px;">
                    <a class="dropdown-item" href="#">inforamtion</a>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class=" nav-link" style="background:none;border:none; font-size:18px;">Logout</button>
                  </div>
                </div>
              </li>
              <li>
                <a href="#" style=""><i class="notificon fa-solid fa-bell" style="font-size: 19px;
                  padding-top: 11px;
                  cursor: pointer;
              "></i></a>
              </li>
              </form>
                @endauth
                @guest
                  <li class="nav-item registration"  >

                  <a class="REGISTRE" href="{{ route('login') }}">Login</a>
                  {{-- <a class="login" href="{{ route('register') }}">registre</a> --}}
                  @endguest
                </li>
  
              
              </ul>
            </div>
          </nav>
        </div>
      </div>
      
    </header>