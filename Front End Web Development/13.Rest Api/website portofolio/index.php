<?php
function get_CURL($url){
  
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  
  return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCk9GTgcI7cSKx_MaEw7U-9g&key=AIzaSyAK_beFuWvwH_2xBeyEX2TwDZQ3CrLxxSw');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

// Video terakhir
$urlLatesVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyAK_beFuWvwH_2xBeyEX2TwDZQ3CrLxxSw&channelId=UCk9GTgcI7cSKx_MaEw7U-9g&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatesVideo);
$latesVideoId = $result ['items'][0]['id']['videoId'];

// instagram api
$clientId = '3501f396416bfebfbfac480ec4aefa90';
$accessToken = 'IGQVJYTmxPeHZAISUR6QWU4U1Rock9ZAOFhfeVRxODVVRWttYTBkQkZAJXzhHTGEtRjJFOEhNVjJBZAnFtMVFYbDdsVWpRWXU2WDVjbENZAb0xjY0VwVjROd3VpNUlnZAzhIZA1FHWTk2ZAW1BN25lSXo5b2ZAqVAZDZD';


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="
     anonymous"
    />

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- my css -->
    <link rel="stylesheet" href="style.css" />

    <title>My Portofolio | Fajri Ramadhan</title>
  </head>
  <body id="home">
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Fajri Ramadhan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->

    <!-- jumbotron -->

    <section class="jumbotron text-center">
      <img src="img/foto.png" alt="Fajri Ramadhan" width="200px" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Fajri Ramadhan</h1>
      <p class="lead">Programer | Content Creator | Bussinesman</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,64L60,53.3C120,43,240,21,360,53.3C480,85,600,171,720,176C840,181,960,107,1080,74.7C1200,43
         ,1320,53,1380,58.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,
         320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- akhir jumbotron -->

    <!-- about -->

    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, ab iusto harum eos autem pariatur quibusdam labore nobis praesentium blanditiis!</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero necessitatibus reprehenderit harum porro eaque beatae odit placeat aliquam possimus voluptatibus, alias corporis ipsum obcaecati doloribus!</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#d3d3d3"
          fill-opacity="1"
          d="M0,32L48,80C96,128,192,224,288,234.7C384,245,480,171,576,144C672,117,768,139,864,176C960,213,
         1056,267,1152,245.3C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,
         320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,
         320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir about -->



    <!-- youtube dan ig -->
    <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
              <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
              <h5><?= $channelName; ?></h5>
              <p><?= $subscriber ?> Subcribers.</p>
              <div class="g-ytsubscribe" data-channelid="UCk9GTgcI7cSKx_MaEw7U-9g" data-layout="default" data-count="default"></div>
              </div>
            </div> 
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/<?= $latesVideoId ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
              </div>
            </div>  
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
              <img src="img/foto.png" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
              <h5>Fajri Ramadhan</h5>
              <p>323 friends.</p>
              </div>
            </div>

            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="fb-thumbnail">
                  <img src="img/foto.png">
                </div>
                <div class="fb-thumbnail">
                  <img src="img/foto.png">
                </div>
                <div class="fb-thumbnail">
                  <img src="img/foto.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir -->





    <!-- project -->

    <section id="project">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2>My Project</h2>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="img/1.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="img/2.jpg" class="card-img-top" alt="Project 2" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="img/3.jpg" class="card-img-top" alt="Project 3" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="img/4.jpg" class="card-img-top" alt="Project 4" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="img/5.jpg" class="card-img-top" alt="Project 5" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,32L48,80C96,128,192,224,288,234.7C384,245,480,171,576,144C672,117,768,139,864,176C960,213,
         1056,267,1152,245.3C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,
         320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,
         320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- akhir project -->

    <!-- contact -->

    <section class="contact" id="contact ">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="col-md-4">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Massage</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary bg-dark">Send</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#212529"
          fill-opacity="1"
          d="M0,64L60,53.3C120,43,240,21,360,53.3C480,85,600,171,720,176C840,181,960,107,1080,74.7C1200,43,
         1320,53,1380,58.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,
         320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- akhir contact -->

    <!-- footer -->

    <footer class="bg-dark text-white text-center pb-5">
      <p>Created With <i class="bi bi-heart-half"></i> By <a href="https://www.facebook.com/fajri.stars.9/" class="text-white fw-bold">Fajri Ramadhan</a></p>
    </footer>
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- tombol subriber -->
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>
