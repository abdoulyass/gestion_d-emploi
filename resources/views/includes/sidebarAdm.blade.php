<section id="sidebar" class="tst">
       
        <a href="#" class="brand" style="z-index: 1000">
            <img src="images/unkown_user.png" alt="" style="max-width:50px; z-index:1000; margin-top: 26px">
         </a>
    
        <ul class="side-menu top">
            <ul>
                
            </ul>
            <li class="{{ Route::currentRouteName() == 'adm' ? 'active' : '' }}" >
                <a href="{{route('adm')}}"   >
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
             <button class="dropdown-btn" style="padding-left: 21px;
             display: flex;
             gap: 21px;" class="active">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">emplyees</span>
                <i class="fa-solid fa-caret-down"></i>
                <i class="fa-solid fa-caret-up d-none"></i>
                </button>
       
                <ul class="dropdown-container " >
                    <li style="        padding-left: 38px;" class="{{ Route::currentRouteName() == 'allUsers' ? 'active' : '' }}" >
                        <a href="{{ route('allUsers') }}" class="active">liste des employer</a>
                    </li>
                    <li style="      padding-left: 38px;
                    " class="{{ Route::currentRouteName() == 'presentemployes' ? 'active' : '' }}"> 
                        <a href="postercv"> les employes present</a>
                    </li>
                </ul>   
              
         
               
                    <button class="dropdown-btn" style="    padding-left: 21px;
                    display: flex;
                    gap: 28px;
                 ">
                     <i class="fa-solid fa-person"></i>
                        <span class="text">condidature</span>
                        <i class="fa-solid fa-caret-down"></i>
                        <i class="fa-solid fa-caret-up d-none"></i>
                    </button>
                    <ul class="dropdown-container">
                        <li style=" padding-left: 38px;">
                            <a href="#">demande de travail</a>
                        </li>
                        <li style="    padding-left: 38px;" > 
                            <a href="#">offres disponible</a>
                        </li>
                        <li style="    padding-left: 38px;" > 
                            <a href="#">fichier stand</a>
                        </li>
                        <!-- Add more departments as needed -->
                    </ul>
                
            <li class="{{ Route::currentRouteName() == 'departement' ? 'active' : '' }}" >
                <a href="{{route('departement')}}" >
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">departements </span>
                </a>
            </li>
            
        </ul>

        <ul class="side-menu">
            <li>
                <a href="{{route('index')}}">
                    <i class='bx bxs-shopping-bag-alt' ></i>
                    <span class="text">notre site</span>
                </a>
            </li>
            <li>
                <a href="{{route('index')}}" style="margin-left: 13px;
                gap: 19px;
            ">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="text">log out</span>
                </a>
            </li>
          
        </ul>
    
</section>