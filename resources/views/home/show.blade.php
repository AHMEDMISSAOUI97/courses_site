<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @php
    $categories = App\Models\Category::all();
    @endphp
    <!-- Topbar Start -->
    @include('home.header')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('home.topNavbar')
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Détails de la formation : {!!$course->name!!} </h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Accueil</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ url()->previous() }}">Formation</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Détails</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="innernav" style="margin-bottom: 90px;">
        <ul>
        <li><a href="#pour-qui">POUR QUI ?</a></li>
        <li><a href="#programme">PROGRAMME</a></li>
        <li><a href="#duree">DUREE</a></li>
        <li><a href="#objectifs">OBJECTIFS</a></li>
        <li><a href="#certificat">CERTIFICAT</a></li>
        <li><a href="#points-forts">POINTS FORTS</a></li>
        <li><a href="#financement">FINANCEMENT</a></li>
        <li><a href="#prerequis">PREREQUIS</a></li>

        
        </ul>
        
        </div>
        
    <!-- Team Start -->
    <div class="cont">
    <div class="container" style=" color: rgb(51, 50, 50);">
        <div class="row">
            <div class=" offset-md-1">
                <div class="card" >
                    <div class="card-header" style="background-color:#fff;"><h2 style="color:black">{!! $course->name !!}</h2></div>
                    <div class="card-body">
                            <h3 id="pour-qui" style="color:black">Pour qui ?</h3>
                            <div class="divider_line" style="width:30%;">
                            </div>
                             <br>
                              {!! $course->for_whom !!}
                        <p><h3 id="programme" style="color:black">Programme :</h3></p>
                        <div class="divider_line" style="width:30%;">
                        </div>
                        <br>
                        {!! $course->program !!}
                        <p><h3 id="duree" style="color:black">Durée :</h3>
                            <div class="divider_line" style="width:30%;">
                            </div> 
                            <br>
                             {!! $course->duration !!}</p>
                        <p><h3 id="objectifs" style="color:black">Objectif :</h3></p>
                        <div class="divider_line" style="width:30%;">
                        </div><br>
                        {!! $course->objectif !!}
                        <p><h3 id="certificat" style="color:black">Certification :</h3></p>
                        <div class="divider_line" style="width:30%;">
                        </div><br>
                        {!!$course->certificate !!}
                        <p><h3 id="points-forts" style="color:black">Points forts :</h3></p>
                        <div class="divider_line" style="width:30%;">
                        </div><br>
                        {!! $course->key_strengths !!}
                        <p><h3 id="financement" style="color:black">Financement :</h3></p>
                        <div class="divider_line" style="width:30%;">
                        </div>
                        <br>
                        {!! $course->financement !!}
                        <p><h3 id="prerequis" style="color:black">Pré requis :</h3> <div class="divider_line" style="width:30%;">
                        </div> </p> {!! $course->prerequisites !!}  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="content-container" style="text-align: center;height: fit-content" >
        <div class="title-section">
          <h2 class="kc_title" style="margin: 10px; color: black">CARACTERIQUES</h2>
        <div class="divider_line" style="width:30%;margin: 0 auto;">
        </div> </div>
        <div id="remvoepadding" class="price-section">
          <div class="title-section" style="background-color: black; height:50px;">
            <h2 class="kc_title batitle" style="color:#fff;padding-top:12px">PRIX UNITAIRE POUR UN OF</h2>
          </div>
          <br>
          <div class="feature-box" style="display: flex; justify-content: center; align-items: center;">
            <div class="box-right" style="text-align: left;">
              <div class="content-title">Formation E-learning</div><br>
              <div class="content-title">Durée 12h</div><br>
              <div class="content-title">Prix Sur Demande</div>
            </div>
          </div>
          <br>
          <!-- Repeat the feature-boxes as needed -->
          <div class="price-button">
            <a class="kc_button button-box" href="https://eforma.fr/demander-une-demonstration/" target="_self">
              S'inscrire
            </a>
          </div>
        </div>
    
      </div>
      
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
   @include('home.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="home/lib/easing/easing.min.js"></script>
    <script src="home/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="home/mail/jqBootstrapValidation.min.js"></script>
    <script src="home/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="home/js/main.js"></script>
</body>

</html>