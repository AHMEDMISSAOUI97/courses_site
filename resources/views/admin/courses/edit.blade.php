<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('trix/css/trix.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('adminn/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminn/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('adminn/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('adminn/assets/images/favicon.png') }}" />
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px
        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px
        }

        .input_color {
            color: black
        }

        .center {
            margin: auto;
            width: 50%;
            margin-top: 30px;
            border: 3px solid green;
        }

        .input_course {
            padding-bottom: 25px
        }

        .course_label {
            color: green
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="{{ route('administrateur') }}"><img
                        src="{{ asset('adminn/assets/images/logo.svg') }}" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="{{ route('administrateur') }}"><img
                        src="{{ asset('adminn/assets/images/logo-mini.svg') }}" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">

                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i
                                class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                            aria-labelledby="profile-dropdown">
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>

                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('categories.create') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Catégories</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('courses.create') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Formations</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('contact.index') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Contacts</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img
                            src="{{ asset('adminn/assets/images/logo-mini.svg') }}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <div class="dropdown-divider"></div>

                                <div class="dropdown-divider"></div>

                                <div class="preview-item-content" style="text-align: center">
                                    <a class="btn btn-success" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                        Logout
                                    </a>
                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="content-wrapper">
                <div class="content-wrapper">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="div_center">
                        <h2 class="h2_font">Modifier</h2>
                        <form method="POST" action="{{ route('courses.update', $course->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="input_course">
                                <label class="course_label" for="name">Nom du Formation : </label>
                                <input id="name" type="hidden" name="name" value=" {{ $course->name }} ">
                                <trix-editor input="name"></trix-editor>
                            </div>
                            <div class="input_course">
                                <label class="course_label" for="for_whom">Pour qui ? : </label>
                                <input id="for_whom" type="hidden" name="for_whom"
                                    value="{{ old('profor_whomgram', $course->for_whom) }}">
                                <trix-editor input="for_whom"></trix-editor>
                            </div>
                            <div class="input_course">
                                <label class="course_label" for="program">Programme du Formation : </label>
                                <input id="program" type="hidden" name="program"
                                    value=" {{ $course->program }} ">
                                <trix-editor input="program"></trix-editor>
                            </div>
                            <div class="input_course">
                                <label class="course_label" for="duration">Durée du Formation : </label>
                                <input id="duration" type="hidden" name="duration"
                                    value=" {{ $course->duration }} ">
                                <trix-editor input="duration"></trix-editor>
                            </div>
                            <div class="input_course">
                              <label for="price">Prix du Formation : </label>
                              <input id="price" type="hidden" name="price"
                                value=" {{ $course->price }} ">
                              <trix-editor input="price"></trix-editor>
                          </div>
                            <div class="input_course">
                                <label class="course_label" for="objectif">Objectif du Formation : </label>
                                <input id="objectif" type="hidden" name="objectif"
                                    value=" {{ $course->objectif }} ">
                                <trix-editor input="objectif"></trix-editor>
                            </div>
                            <div class="input_course">
                                <label class="course_label" for="certificate">Certification du Formation : </label>
                                <input id="certificate" type="hidden" name="certificate"
                                    value=" {{ $course->certificate }} ">
                                <trix-editor input="certificate"></trix-editor>
                            </div>
                            <div class="input_course">
                                <label class="course_label" for="key_strengths">Point forts du Formation : </label>
                                <input id="key_strengths" type="hidden" name="key_strengths"
                                    value=" {{ $course->key_strengths }} ">
                                <trix-editor input="key_strengths"></trix-editor>
                            </div>
                            <div class="input_course">
                                <label class="course_label" for="prerequisites">Pre requis du Formation : </label>
                                <input id="prerequisites" type="hidden" name="prerequisites"
                                    value=" {{ $course->prerequisites }} ">
                                <trix-editor input="prerequisites"></trix-editor>
                            </div>
                            <div class="input_course">
                                <label class="course_label" for="financement">Financement du Formation : </label>
                                <input id="financement" type="hidden" name="financement"
                                    value=" {{ $course->financement }}">
                                <trix-editor input="financement"></trix-editor>
                            </div>
                            <div class="input_course">
                                <label class="course_label" for="">Catégorie du Formation : </label>
                                <select name="category_id" id="">
                                    <option value="" selected>Choisir une catégorie</option>
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input_course">
                                <label for="">Image du formation</label>
                                <input type="file" name="image">
                            </div>
                            <br>
                            <div>
                                <input type="submit" class="btn btn-success" name="submit" value="Modifier">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('adminn/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('adminn/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('adminn/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('adminn/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('adminn/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('adminn/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('adminn/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('adminn/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('adminn/assets/js/misc.js') }}"></script>
    <script src="{{ asset('adminn/assets/js/settings.js') }}"></script>
    <script src="{{ asset('adminn/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('adminn/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
    <script src="{{ asset('trix/js/trix.js') }}"></script>
    <script src="{{ asset('trix/js/attachments.js') }}"></script>
</body>

</html>
