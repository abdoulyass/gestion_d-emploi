@extends('layouts.default')

@section('content')
  
   <section class="client_section ">
    @if(Session::has('login_time'))
    <p>Last Login: {{ Session::get('login_time')->format('Y-m-d H:i:s') }}</p>
       @else
       <p>Last Login</p>
      @endif
        <div class="container" style="padding:40px">
          <div class="heading_container heading_center">
            <h2>
              What Our Clients Say 
            </h2>
          </div>
          <div>
            <div class="d-flex " style="    z-index: 10000;
            position: fixed;
            flex-direction: column;
            gap: 10px;
            align-items: center;
            margin-left: 29%;
         margin-top: 9%;
         
         font-size:20px;
        ">
              <div class="spinner-border text-light" style="font-size:21px; display:none" id='loading'  role="status">
                <span class="sr-only  " >Loading...</span>
              </div>
              <h2 class="text-align:center" id='text' style="display: none ;font-size:25px;Color:#ffffff;">votre cv est encore de traitement</h2>
            </div>
          </div>
          <div class="carousel-wrap layout_padding2-top ">
            <div class="owl-carousel">
              @if(Auth::check())

              @php
              $userRole = Auth::user()->role;
              
             @endphp
               @if ($userRole == 3)    
              <div class="item" style="position: relative; cursor:pointer;" data-bs-toggle="modal" data-bs-target="#createOffre">
                <div class="box" style="padding: 20px!important;" >
                  <div class="client_id">
                    <div class="img-box" style="display:flex; gap:20px; width:100%" >
                      <img src="images/client-1.jpg" alt="" style=" max-width:50px;height:50px;
                      ;">
                      <div style="text">
                        <div style="display:flex;flex-direction:column;gap:10px; margin-top:10px;">
                          <div style="display: flex;;">
                          
                            <h6 class="poste">
                    abdoul</h6>
                           <h6 class="poste">
                         tst
                          </h6>
                         
                        </div>
                          </div>
                          <div style="display: flex;gap:10px">
                            <div class="row">
                              <input type="text" class="form-control" style=" border-radius: 10%;
                              width: 914px;
                              margin-left: 15px;
                              background: #f3f3f352;
                              border: none;
                              z-index: -2;
                          "   placeholder="publier un nouvaux offre de travail">
                            </div>
                           
                        </div>
                        
                        <div class="pen" style="position:absolute;top: 9px;
                        right: 30px;" >
                           <a  class="btn btn-primary dropdown-item" data-bs-toggle="modal" data-bs-target="#createOffre" data-bs-whatever="@mdo"><i class="fa-regular fa-pen-to-square" style="cursor:pointer"></i></a>
                           </div>
                    </div>
                      </div>
                          
                    <div class="client_detail">
                      <div class="client_info">
                        
                        <div class="date"></div>
                      </div>
                        
                    </div>
                  </div>
                  <div class="info" style="margin: 9px 0px 3px 17px ">
                    {{-- <i class="fa fa-binoculars" aria-hidden="true"></i> --}}
                    <span style="color: #5b5b5b; margin-top: 5px;">
                    </span>
                  </div>
                  <div class="client_text">
                    <ul style="display: block; margin-top: -15px;">
                      <!--<li>Type de contrat : CDI</li>-->
                    </ul>
                  </div>
                </div>
              </div>
              @endif
              @endif
              <div class="item">
                <div class="box">
                  <div class="client_id">
                    <div class="img-box">
                      <img src="images/client-1.jpg" style=" max-width:50px" alt="">
                    </div>
                    <div class="client_detail">
                      <div class="client_info">
                        <h6 class="poste">
                          eKutive directeur business unit - Tanger | Tanger (Maroc)
                        </h6>
                        <div class="date"></div>
                      </div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">diposer cv <i class="fa-solid fa-file-import"></i> </button>
                     
                    </div>
                  </div>
                  <div class="info" style="margin: 9px 0px 3px 17px ">
                    <i class="fa fa-binoculars" aria-hidden="true"></i>
                    <span style="color: #5b5b5b; margin-top: 5px;">
                      • Déployer la stratégie commerciale de l’entreprise dans sa BU,
                      • Assurer le développement du chiffre d’affaires dans sa région,
                      • Diriger les activités de l’usine de production,
                      •...
                    </span>
                  </div>
                  <div class="client_text">
                    <ul style="display: block; margin-top: -15px;">
                      <!--<li>Type de contrat : CDI</li>-->
                      <li>Secteur d'activité : <a href="/offres.html?sectorId%5B0%5D=11">BTP / Génie Civil</a></li>
                      <li>Fonction : <a href="/offres.html?positionId%5B0%5D=100&amp;positionId%5B1%5D=">Autres directions</a></li>
                      <li>
                        Expérience requise:
                        <a href="/offres.html?workExperienceId%5B0%5D=5">De 5 à 10 ans</a>
                      </li>
                      <li>
                        Niveau d'étude demandé:
                        <a href="/offres.html?studyLevelId=bac5%2B">Bac +5 et plus</a>
                      </li>
                      <li>
                        Type de contrat proposé:
                        <a href="/offres.html?contractType=1">CDI</a> - Télétravail: Non
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
                
             <div class="item">
                <div class="box">
                  <div class="client_id">
                    <div class="img-box">
                      <img src="images/client-1.jpg" alt="">
                    </div>
                    <div class="client_detail">
                      <div class="client_info">
                        <h6 class="poste">
                          eKutive directeur business unit - Tanger | Tanger (Maroc)
                        </h6>
                        <div class="date"></div>
                      </div>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">diposer cv <i class="fa-solid fa-file-import"></i> </button>
                     
                    </div>
                  </div>
                  <div class="info" style="margin: 9px 0px 3px 17px ">
                    <i class="fa fa-binoculars" aria-hidden="true"></i>
                    <span style="color: #5b5b5b; margin-top: 5px;">
                      • Déployer la stratégie commerciale de l’entreprise dans sa BU,
                      • Assurer le développement du chiffre d’affaires dans sa région,
                      • Diriger les activités de l’usine de production,
                      •...
                    </span>
                  </div>
                  <div class="client_text">
                    <ul style="display: block; margin-top: -15px;">
                      <!--<li>Type de contrat : CDI</li>-->
                      <li>Secteur d'activité : <a href="/offres.html?sectorId%5B0%5D=11">BTP / Génie Civil</a></li>
                      <li>Fonction : <a href="/offres.html?positionId%5B0%5D=100&amp;positionId%5B1%5D=">Autres directions</a></li>
                      <li>
                        Expérience requise:
                        <a href="/offres.html?workExperienceId%5B0%5D=5">De 5 à 10 ans</a>
                      </li>
                      <li>
                        Niveau d'étude demandé:
                        <a href="/offres.html?studyLevelId=bac5%2B">Bac +5 et plus</a>
                      </li>
                      <li>
                        Type de contrat proposé:
                        <a href="/offres.html?contractType=1">CDI</a> - Télétravail: Non
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
          </div>
        </div>
      </section>
       
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
          <div class="modal-content" >
              <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            <div class="modal-body">
              <div class="frame">
                <form action='{{ route('poste.sendposte') }}' method="post" enctype="multipart/form-data">
                @csrf
                <div >
                    <div class="row">
                      <div class="col">
                        @auth
                        <div class="dropzone">
                          <div class="text" style="display: flex; flex-direction:column">
                            <p>Faites glisser ou cliquez pour Télécharger le fichier</p>
                            <p>(.doc, .docx, .pdf, .rtf, .txt. Taille max. 2MB)</p>
                             </div>
                                <input type="file" name='cv' class="upload-input" />
                                   </div>
                                   @if ($errors->has('file'))
                                    <span class="errormsg text-danger">{{ $errors->first('file') }}</span>
                                     @endif
                                  </div>
                               </div>
                                </div>
                      </div>
                      <div class="col">
                        <div class="form-group nonauth">
                         
                         
                          <label for="exampleInputEmail1">numero telephone</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name='numero' aria-describedby="emailHelp" placeholder="Enter numero">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                       
                      </div>  
                      <div class="modal-footer" >
                        <button type="submit"  class="btn subbtn btn-secondary" style="background:" data-dismiss="modal">diposer</button>
                      </div>
                      </div>
                    </div>
                  </form>
                    @endauth
                    @guest
                   
                    <div class="dropzone" style="margin-top:100px; display:flex;justify-content:center;
                    align-items:center;">
                      <div class="text" style="display: flex; flex-direction:column">
                        <p>vous n'est pas authentifier</p>
                         </div>
                            </div>                              
                              </div>                             
                              </div>
                                </div>
                                   </div>
                  
                  </div>  
                  <div class="modal-footer" >
                      
                    <a href="{{route('login')}}" class="btn btn-secondary" style="background:" data-dismiss="modal">se connecter</a>
                  </div>
                  </div>
                </div>
                       
                 @endguest
                 
                </div>
		           
              
            </div>
           
          </div>
        </div>
      </div>
      <div class="modal" id="createOffre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " >
          <section class="modal-content model2">
            <div class="modal-body ">
              <form class="row g-3" method="post"  action='{{ route('poste.sendposte') }}' enctype="multipart/form-data" >
                @csrf
                <div class="row mt-2" style=" margin-top: 27px !important; margin-left: 4px;">
                  <div class="col-12">
                      <div class="form-group d-flex" style="gap: 8px">
                             <div class="for">
                              <label for="input1">poste</label> </br>
                              <input type="text" class="form-control" id="input1" style="    width: 297px;" name='poste' placeholder="entre le nom du poste demander">
                             </div>
                             
                            <div class="departement " style="">
                              <label for="inputZip" class="form-label">contract</label>
                            </br>
                           <select id="inputState" class="form-select" name='typedecontract'>
                          <option selected>cdi</option>
                          <option>cdi</option>
                       </select>
                            </div>
                            <div class="contract" >
                              <label for="inputZip" class="form-label">contract</label>
                            </br>
                           <select id="inputState" class="form-select" name="departement">
                            <option selected>tst</option>
                            <option >RH</option>
                            <option>RH</option>
                            <option >RH</option>
                            <option>RH</option>
                          </select>
                            </div>
                      </div>
                     
                          
                  </div>
                 
              </div>
             
              <div class="row mt-2" style=" margin-top: 27px !important; margin-left: 4px;">
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Niveau d'étude demandé</label>
                  <input type="text" class="form-control" id="inputAddress2" name='niveaux' placeholder="bac+5..." style="    width: 297px;">
                </div>
              </div>
               <div class="row mt-2">
                <div class="col-12" style="margin-top: 19px;margin-left: 4px; ">
                  <label for="inputCity" class="form-label">description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name='description' rows="2" style=" width: 305px;margin-left: 4px;"></textarea>
                </div>
               </div>
                <div class="row mt-2" style="margin-left:21px;margin-top: 27px !important; ">
                  <div class="form-group" style="width:33%">
                    <label for="experience minimal">exp minimal</label>
                    <input type="number" value="4" class="form-control" name='experience_min' />
                   </div>
                <div class="form-group" style="width:33%">
                  <label for="experience maximal">experience maximal</label>
                 
                  <input type="number" value="2" class="form-control" name='experience_max' />
                </div>
              <div class="form-group" style="width:33%">
               <label for="inputCity" class="form-label">photo</label>
            
               <input type="file" name='alias' style="opacity: 0">
             </div>
            </div>
                 
                </div>
              <div class="modal-footer" style="    display: flex;
              align-items: center;
              justify-content: center;
          " >   
                <button type="submit" class="btn btn-primary" data-dismiss="modal" style='width: 34%;'>publier</button>
              </div>
                </div>
                
              </form>
            </div>
          </section>
        </div>
      </div>
       
      <div class="modal" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="    top: -52%;
          left: -69%;
          transform: translate(128%, 71%);
          width: 322px;
          height: 246px;">
            <div class="modal-body" style="    display: flex;
            align-items: center;
            justify-content: center;font-size:20px;
            text-align: center;
            ">
              {{ session('message') }}
            </div>
            <div class="modal-footer" style="justify-content: center;">
              <button type="button" class="btn btn-secondary hideModal" data-dismiss="modal" style="width: 40%">ok</button>
            </div> 
          </div>
        </div>
      </div>
      <div class="modal fade" id="erorModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="    top: -52%;
          left: -69%;
          transform: translate(128%, 71%);
          width: 322px;
          height: 246px;">
            <div class="modal-body" style="    display: flex;
            align-items: center;
            justify-content: center;font-size:20px;
            text-align: center;
            ">
            <span id="erorr"></span>
            </div>
            <div class="modal-footer" style="justify-content: center;">
              <button type="button" class="btn btn-secondary hideModaleror" data-dismiss="modal" style="width: 40%">ok</button>
            </div> 
          </div>
        </div>
      </div>
     
@endsection

@push('scripts')



<script>
    // Attendre que le document soit complètement chargé
    document.addEventListener('DOMContentLoaded', function () {
    // Vérifier si le message de succès est présent dans la session
    var successMessage = "{{ session('message') }}";
    var erorspan = document.getElementById('erorr');
    var hideModalButton = document.querySelector('.hideModal');
    var hideModalButtoneror = document.querySelector('.hideModaleror');
    var submitButton = document.querySelector('.subbtn'); // Ajoutez un identifiant à votre bouton de soumission
    var errorMessage = "{{ $errors->first('cv') }}";
    $('.modal-backdrop').css('background', '#000000');
    console.log(errorMessage);
    if (successMessage) {
        // Afficher le modal Bootstrap
        document.getElementById('loading').style.display = 'none';
        document.getElementById('text').style.display = 'none';
        $('#successModal').modal('show');
        
    }else if (errorMessage){
      erorspan.textContent = errorMessage;
      $('#erorModal').modal('show');
    }

    // Ajouter un écouteur d'événements au bouton pour masquer le modal lorsque l'utilisateur clique dessus
    hideModalButton.addEventListener('click', function() {
        $('#successModal').modal('hide');
    });
    hideModalButtoneror.addEventListener('click', function() {
        $('#erorModal').modal('hide');
    });

    // Ajouter un gestionnaire d'événements au bouton de soumission du formulaire
    submitButton.addEventListener('click', function() {
      document.getElementById('loading').style.display = 'block';
      document.getElementById('text').style.display = 'block';
      document.getElementById('exampleModal').style.display = 'none';
      
    });
});


</script>

 @endpush
 