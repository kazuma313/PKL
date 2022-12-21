<!DOCTYPE html>
<html lang="in">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>DISKOMINFO SAROLANGUN</title>
    <link rel="icon" type="image/x-icon" href=" {{ asset('styles/assets/img/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('styles/css/styles.css') }}" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('styles/assets/img/navbar-logo.svg') }}" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/')}}">Home</a></li>
                    <!-- asli -->
                    <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/profil')}}">Profil</a></li> -->


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/visi_dan_misi')}}">Visi dan Misi</a>
                            <a class="dropdown-item" href="{{url('/struktur_organisasi')}}">Struktur Organisasi</a>
                            <a class="dropdown-item" href="{{url('/tugas_dan_fungsi')}}">tugas dan fungsi</a>
                            <!-- <a class="dropdown-item" href="{{url('/bidang')}}">bidang</a> -->
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/pengumuman')}}">pengumuman</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/galeri')}}">galeri</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/map')}}">peta</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/hubungi')}}">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- gambar home -->
    @if(url()->current() == route('index_home'))
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('styles/assets/img/gambar1.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="masthead-subheading">Selamat Datang di DISKOMINFO Sarolangun</div>
                        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('styles/assets/img/gambar2.jpg') }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="masthead-subheading">Selamat Datang di DISKOMINFO Sarolangun</div>
                        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('styles/assets/img/gambar3.jpg') }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="masthead-subheading">Selamat Datang di DISKOMINFO Sarolangun</div>
                        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    @endif
    
    @yield('content')

    @yield('content2')


    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>






   

    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="{{asset('styles/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{ asset('styles/assets/img/portfolio/01-thumbnail.jpg')}}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('styles/assets/img/portfolio/02-thumbnail.jpg')}}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('styles/assets/img/portfolio/03-thumbnail.jpg')}}" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->

    <!-- Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="{{asset('styles/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('styles/assets/img/portfolio/03-full.jpg')}}" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="{{asset('styles/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('styles/assets/img/portfolio/04-full.jpg')}}" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="{{asset('styles/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('styles/assets/img/portfolio/06-full.jpg')}}" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Window</li>
                                    <li>Category: Photography</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="{{ asset('styles/assets/mail/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('styles/assets/mail/contact_me.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('styles/js/scripts.js') }}"></script>
</body>

</html>