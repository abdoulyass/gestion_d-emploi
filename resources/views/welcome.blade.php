@extends('layouts.default')

@section('content')

   <section class="client_section ">
        <div class="container" style="padding:40px">
          <div class="heading_container heading_center">
            <h2>
              What Our Clients Say 
            </h2>
          </div>
          <div class="carousel-wrap layout_padding2-top ">
            <div class="owl-carousel">
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
                              mr yassir abdoul
                           </h6>
                        </div>
                          </div>
                          <div style="display: flex;gap:10px">
                            <p>publier une nouvelle offre de travail</p>
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
      <div class="modal fade" id="createOffre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
          <section class="modal-content model2">
            <div class="modal-body ">
              <form class="row g-3" method="Post" action='/submitForm2' enctype="multipart/form-data" >
                @csrf
                <div class="row mt-2">
                  <div class="col-12">
                      <div class="form-group">
                          <label for="input1">poste</label>
                          <input type="text" class="form-control" id="input1"  name='poste' placeholder="entre le nom du poste demander">
                      </div>
                  </div>
                 
              </div>
              <div class="row mt-2" style='justify-content: center;
              align-items: center;'>
                <div class="col-md-6 ">
                  <label for="experience minimal">exp minimal</label><br>
                  <input type="number" value="42"  name='experience_min' />
              </div>
              <div class="col-md-6">
                <label for="experience maximal">experience maximal</label>
               
                <input type="number" value="42"  name='experience_max' />
            </div>
            </div>
              <div class="row mt-2">
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Niveau d'étude demandé</label>
                  <input type="text" class="form-control" id="inputAddress2" name='niveaux' placeholder="bac+5...">
                </div>
              </div>
               <div class="row mt-2">
                <div class="col-12">
                  <label for="inputCity" class="form-label">description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="description"></textarea>
                </div>
               </div>
               <div class="row mt-2" style="margin-top: 21px;">
                <div class="col-4">
                  <label for="inputState" class="form-label">departement</label>
                  <select id="inputState" class="form-select" name="departement">
                    <option selected>tst</option>
                    <option >RH</option>
                    <option>RH</option>
                    <option >RH</option>
                    <option>RH</option>
                  </select>
                </div>
                <div class="col-4">
                  <label for="inputZip" class="form-label">contract</label>
                  <select id="inputState" class="form-select" name='typedecontract'>
                    <option selected>cdi</option>
                    <option>cdi</option>
                  </select>
                </div>
                <div class="col-5" style="margin-top: 21px">
                  <label for="inputCity" class="form-label">photo</label>
                  <input type="file" name='alias'>
                </div>
              </div>
                </div>
                <div class="modal-footer" >   
                  <button type="submit" class="btn btn-primary" style="background:"">publier</button>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
       
@endsection
