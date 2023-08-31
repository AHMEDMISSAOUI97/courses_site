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


    <!-- Carousel Start -->
   @include('home.carousel')
    <!-- Carousel End -->


    <!-- About Start -->
    @include('home.about')
    <!-- About End -->


    <!-- Category Start -->
    @include('home.category')
    <!-- Category Start -->


    <!-- Courses Start -->
    
    <!-- Courses End -->


    <!-- Registration Start -->
   
    <!-- Registration End -->


    <!-- Team Start -->
    
    <!-- Team End -->


    <!-- Testimonial Start -->
    
    <!-- Testimonial End -->


    <!-- Blog Start -->
   
    <!-- Blog End -->


    <!-- Footer Start -->
   @include('home.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('home/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('home/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('home/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('home/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('home/js/main.js')}}"></script>
</body>

</html>