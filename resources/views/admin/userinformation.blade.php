@extends('layouts.adminDefault')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@section('main')

<div class="main" >
  <div class="head-title">
    <div class="left">
      <ul class="breadcrumb">
        <li>
          <a href="#">Dashboard</a>
        </li>
        <li><i class='fas fa-chevron-right'></i></li>
        <li>
          <a class="active" href="#">  {{$user->name}}</a>
        </li>
      </ul>
    </div>
  </div>
 
     
  <div class="container" >
      <div class="main-body">
      
            <!-- Breadcrumb -->
            <?php
            // Convertir les données de l'utilisateur en chaîne de requêteSession::get('qretat');
            // URL cible avec les données
            $url = route('process-qrcode', ['user' => $user->id]);
            // Utiliser la bibliothèque Laravel QR Code pour générer le code QR
            $qrCode = \SimpleSoftwareIO\QrCode\Facades\QrCode::size(300)->generate($url);
            ?>
        
            <!-- Afficher le QR code -->    
            <!-- Modal -->
          <!-- Bouton pour ouvrir le modal -->

<!-- Modal -->
    <div class="modal fade" id="qrCodeModal" tabindex="-1" aria-labelledby="qrCodeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modl">
   
    <div class="modal-content" style=" transform: translate(68%, -15%) !important;">
      <div class="modal-header" style="background: #fff">
        <svg xmlns="http://www.w3.org/2000/svg"  style="width: 100px;" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 116 116"><defs><filter id="a" width="193.3%" height="193.3%" x="-46.7%" y="-33.3%" filterUnits="objectBoundingBox"><feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="8"></feGaussianBlur><feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0.0705882353 0 0 0 0 0.062745098 0 0 0 0 0.109803922 0 0 0 0.14 0"></feColorMatrix></filter><rect id="b" width="60" height="60" x="0" y="0" rx="4"></rect></defs><g fill="none" fill-rule="evenodd"><circle cx="58" cy="58" r="58" fill="#E6F2FF"></circle><g transform="translate(28 28)"><use fill="#000" filter="url(#a)" xlink:href="#b"></use><use fill="#FFF" xlink:href="#b"></use><path fill="#428EE6" d="M4 0h52a4 4 0 014 4v20H0V4a4 4 0 014-4z"></path></g><path fill="#C0C0C4" d="M60.3 73.7c.4-.6 1.2-.9 1.8-.6.8.3 1.1 1.2.8 2C62 76.7 60.2 78 58 78s-4.1-1.2-4.9-3c-.3-.7 0-1.6.8-1.9.7-.3 1.5 0 1.8.8l.1.1c.3.6 1.2 1 2.2 1 1 0 2-.4 2.3-1.1zM48.5 63a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm19 0a1.5 1.5 0 110 3 1.5 1.5 0 010-3z"></path><rect width="22" height="2" x="35" y="34" fill="#C6E0FF" rx="1"></rect><rect width="22" height="2" x="35" y="38.9" fill="#C6E0FF" rx="1"></rect><rect width="10" height="2" x="35" y="43.8" fill="#C6E0FF" rx="1"></rect><path fill="#FFF" fill-rule="nonzero" d="M72.5 20c2.5 0 4.5 2 4.5 4.5V38l-3.7 5a1 1 0 01-1.6 0L68 38V24.5c0-2.5 2-4.5 4.5-4.5z"></path><path fill="#2062AF" fill-rule="nonzero" d="M72.5 20c2.5 0 4.5 2 4.5 4.5V38l-3.7 5a1 1 0 01-1.6 0L68 38V24.5c0-2.5 2-4.5 4.5-4.5zm0 2a2.5 2.5 0 00-2.5 2.6v11.9h5v-12c0-1.3-1.1-2.4-2.5-2.4z"></path></g></svg>
        <div>
          <h3 >qr code</h3>
          {{ Session::get('qretat');}}
          <p style=" color: #4b4956;">scanner ce qr code pour recruter ce emplyer.</p>
        </div>
      </div>
      <div class="modal-body" style="padding: 0!important;
          padding-bottom: 29px !important;
          padding-top: 18px!important;">
        <!-- Insérer le code QR ici -->
        <div class="text-center">
            {!! $qrCode !!}
        </div>
      </div>
      <div class="modal-footer" style=" background: #fff;">
        <div>
          <button type="button end"  style="margin-right: 3%;
          position: absolute;
          top: 63%;
          right: 19%;
      " class="btn btn-secondary  end-tsk" >click here to start scanig </button>
        </div>
      </div> 
    </div>
  </div>
  </div>

            </nav>
    
            <div class="row gutters-sm">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img  src="{{ asset('images/unkown_user.png') }}" alt="Admin" class="rounded-circle" width="150">
                      <div class="mt-3">
                        <h4>{{$user->name}}</h4>
                        <p class="text-secondary mb-1"></p>
                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                        <button class="btn btn-primary">Follow</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#qrCodeModal">
                          Afficher le QR Code
                      </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                      <span class="text-secondary">https://bootdey.com</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                      <span class="text-secondary">@bootdey</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$user->Firstname}}.{{$user->name}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$user->email}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$user->number}}
                      </div>
                    </div>
                    <hr>
                  
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$user->adress}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                      </div>
                    </div>
                  </div>
                </div>
  
                <div class="row gutters-sm">
                  <div class="col mb-3">
                    <div class="card h-100">
                      <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">sub inforamtion</i></h6>
                        <div>
                          <p class="truncate" id='text'>
                            @if($user->cv->description)
                         {!!nl2br($user->cv->description)!!}
                          </p>
                          <button class=" showcv"  style="    margin-left: 87%;
                          margin-top: -2%;
                          background: none;
                          border: none;
                          color: #007bff;">see more</button>     
                          <button class="hidecv invisible" style="margin-left: 87%;
                          margin-top: -2%;
                          background: none;
                          border: none;
                          color: #007bff;">hide text</button>     
                      </div>
                      @else
                         <p>ne avaible data for this user</p>
                         @endif
                      </div>
                    </div>
                  </div>
                 
                </div>
  
  
  
              </div>
            </div>
  
          </div>
      </div>
</div>

<!-- CONTENT -->
@endsection 

@section('footer')
  
 @endsection
 @push('scripts')


 <script  src="{{ asset('js/js.js') }}"></script>
 <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
 <script>
     $(document).ready(function () {
         $('#myTable').DataTable();
        
     });
     const seeMore = document.querySelector('.showcv');
    
const hide = document.querySelector('.hidecv');
const end = document.querySelector('.end-tsk');
   var modlbefor = document.querySelector('.modl');
// Ajouter un écouteur d'événement au clic sur l'élément avec l'ID 'end'
end.addEventListener('click', () => {
    // Cacher le bouton
    end.style.display = 'none';
    modlbefor.classList.remove('modl')
    // Récupérer l'identifiant de l'utilisateur à partir de l'élément HTML approprié
    var userId = {{$user->id}};
    console.log(userId);

    // Envoyer une requête Ajax après un délai de 20 secondes
    setTimeout(() => {
        // Envoyer une requête Ajax à l'aide de la bibliothèque XMLHttpRequest
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/qrchek/' + userId, true); // Spécifier la méthode HTTP et l'URL de la requête
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                // Vérifier le statut de la réponse
                if (xhr.status === 200) {
                    // Succès - traiter la réponse JSON
                    var response = JSON.parse(xhr.responseText);
                    console.log(response.message);
                    alert(response.message);
                    window.location.reload();
                     // Afficher le message de succès dans la console
                    // Effectuer d'autres actions en fonction de la réponse
                } else {
                    // Erreur - afficher un message d'erreur
                    console.error('Erreur lors de la requête : ' + xhr.status);
                      modlbefor.classList.add('modl');
                      end.style.display = 'block';

                    alert("vous n'aver pas scanner le code avec succes");
                    
                    
                    
                    // Effectuer d'autres actions en cas d'erreur
                }
            }
        };
        xhr.send(); // Envoyer la requête avec les données appropriées
    }, 30000); // 20000 millisecondes = 20 secondes
});


const text = document.getElementById('text');
var QrState = "{{ session('qretat') }}"
 console.log(QrState);
seeMore.addEventListener('click', () => {
    text.classList.remove('truncate');
    seeMore.classList.add('invisible');
    hide.classList.remove('invisible');
});

hide.addEventListener('click', () => {
    text.classList.add('truncate');
    hide.classList.add('invisible');
    seeMore.classList.remove('invisible');
});

 </script>
 @endpush
 