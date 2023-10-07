<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>
    @font-face /*perintah untuk memanggil font eksternal*/
    {
      font-family: 'Segoe'; /*memberikan nama bebas untuk font*/
      src: url('asset/SegoeUIVF.ttf');/*memanggil file font eksternalnya di folder nexa*/
    }
    
    body {
      background-image: url('asset/bg.png');
      font-family: Segoe:
    }

    nav {
      font-weight: bold;
    }

    #start .container{
      background: #e0e0e0;
      margin-top: 6%;
      border-radius: 30px;
    }

    #start .container ul li a{
      color: #004962;
    }

    .contact a img {
      
    }

    

    

    

  </style>
  <body>
    <section id="start">
      <div class="container" style="width: 75%;">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand fs-5" href="#">
                <img src="asset/django-logo.png" alt="" width="12%">django project</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-5">
                  <li class="nav-item">
                    <a class="nav-link active fs-3 me-5" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active fs-3 me-5" aria-current="page" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active fs-3 me-5" aria-current="page" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        
        <div class="container pb-5">
              <div class="row justify-content-around">
                <div class="col-md-6 pt-2 mt-2 ms-5">
                  <h2 class="fw-bold" style="color: #22342d;">I'm Muhammad Fadillah,<br>a <span style="color: #004962;">Junior Coder</span></h2>
                  <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi debitis minima pariatur, rerum libero at quisquam eum odio ad qui magni reprehenderit maxime. Culpa, nobis.</p>
                  <div class="button pt-2">
                    <a href="#" role="button" class="btn  fw-bold me-3" style="font-size: 15px; color:white; border-radius: 25px; background-color: #004962;"><h8>Contact Me</h8></a>
                    <a href="about.php" class="btn fw-bold" style="font-size: 15px; border-radius: 25px; background-color: #fff; color: #004962;"><h8>About me</h8></a>
                  </div>
                  <div class="contact mt-4">
                    <a href="#" class="me-2">
                      <img src="asset/unnamed1.png" alt="" width="6%">
                    </a>
                    <a href="#" class="pe-2">
                      <img src="asset/linkedin1.png" alt="" width="6%">
                    </a>
                    <a href="#" class="me-2">
                      <img src="asset/instagram1.png" alt="" width="6%">
                    </a>
                  </div>
                </div>
                <div class="col-md-4 me-5">
                  <img src="asset/porto.png" class="img-fluid d-none d-md-block" alt="Responsive image">
                </div>
              </div>
        </div>
        
      </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>