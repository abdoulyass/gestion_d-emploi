<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/offre.css" rel="stylesheet">
    <title>Bootstrap Form</title>
  </head>
  <body>
   <div class="addNewOffre" style="display: flex; gap:10px;">
    <ul class="breadcrumb">
      <li>
        <a href="#">Dashboard</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#">add offre</a>
      </li>
    </ul>
    <div class="imag">
        <img src="images/looking-for-employees.png" style=" 
            width: 648px;
    position: absolute;
    left: 19px;
    top: 212px;">
    </div>
    <section class="container mt-5 card">
        <form class="row g-3 ">
            <div class="col-md-6">
              <label for="input4" class="form-label">poste</label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">min experience</label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">max experience</label>
              <input type="text" class="form-control" id="inputAddress" >
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Niveau d'étude demandé</label>
              <input type="text" class="form-control" id="inputAddress2" >
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">departement</label>
              <select id="inputState" class="form-select">
                <option selected>tst</option>
                <option>Nashik</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">contract</label>
              <select id="inputState" class="form-select">
                <option selected>cdi</option>
                <option>cdi</option>
              </select>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary" style="width: 216px;
              margin-left: 70%;
          ">poster</button>
            </div>
          </form>
    </section>
   </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>