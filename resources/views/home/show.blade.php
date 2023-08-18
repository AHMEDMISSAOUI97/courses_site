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
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Détails de la formation : {{$course->name}} </h3>
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


    <!-- Team Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md--2">
                <div class="card">
                    <div class="card-header">{{ $course->name }}</div>
                    <div class="card-body">
                        <p><h3>Pour qui:</h3></p>
                        {!!$course->for_whom !!}
                        <p><h3>Programme:</h3></p>
                        {!! $course->program !!}
                        <p><h3>Durée:</h3> {{ $course->duration }}</p>
                        <p><h3>Objectif:</h3></p>
                        {!! $course->objectif !!}
                        <p><h3>Certification:</h3></p>
                        {!!$course->certificate !!}
                        <p><h3>Points forts:</h3></p>
                        {!! $course->key_strengths !!}
                        <p><h3>Financement:</h3></p>
                        {!! $course->financement !!}
                        <p><h3>Pré requis:</h3> {{ $course->prerequisites }}</p>   
                    </div>
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