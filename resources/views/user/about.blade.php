@extends('layouts.default')

@section('content')

<section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="detail-box">
          <h2>
            About us
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
      <div class="col-lg-7 col-md-6">
        <div class="img-box">
          <img src="images/about-img.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- info section -->
<section class="info_section ">
  <div class="container">
    <h4>
      Get In Touch
    </h4>
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="info_items">
          <div class="row">
            <div class="col-md-4">
              <a href="">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
                  <p>
                    Lorem Ipsum is simply dummy text
                  </p>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <p>
                    +02 1234567890
                  </p>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="">
                <div class="item ">
                  <div class="img-box">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <p>
                    demo@gmail.com
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="social-box">
    <h4>
      Follow Us
    </h4>
    <div class="box">
      <a href="">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-youtube" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content"style="        top: -52%;
    left: -69%;
    transform: translate(49%, 33%);
    width: 600px;
    height: 400px;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="
        background: none;
border: none;
font-size: 23px;
width: 64px;
padding: 7px;
/* margin: 5px; */
margin-left: 88%;
margin-top: 3px;
};"><i class="fa-solid fa-xmark"></i></button>
      
      <div class="modal-body">
        <div class="frame">
        <form>
         
          <div  >
              <div class="row">
                <div class="col">
                  @auth
                  <div class="dropzone">
                    <div class="text" style="display: flex; flex-direction:column">
                      <p>Faites glisser ou cliquez pour Télécharger le fichier</p>
                      <p>(.doc, .docx, .pdf, .rtf, .txt. Taille max. 2MB)</p>
                       </div>
                          <input type="file" class="upload-input" />
                             </div>
                            
                            </div>
                            @endauth
                            @guest
                               <div class="dropzone">
                                   vous n'est pas autehntifier
                                </div> 
                            @endguest
                         </div>
                          </div>
                </div>
                <div class="col">
                  <div class="form-group" style="    margin-top: 169px;
                
                  margin-left: 61px;
                  margin-right: 64px
              ">
                    <label for="exampleInputEmail1">numero telephone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter numero">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                 
                </div>  
                <div class="modal-footer"style='    padding: 0;
                border: none;' >
                
                  <button type="button" class="btn btn-secondary" style="background:" data-dismiss="modal">diposer</button>
                </div>
                </div>
              </div>
            </form>
          </div>
   
        
      </div>
   
    </div>
  </div>
</div>

@endsection
