<x-header />

<body class="">
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-md-3">
                        <div class="card card-outline">
                            <div class="card-body box-profile">
                                <div class="logo text-center">
                                    <img class="img-fluid" src="{{asset('img/Favicon Transparent.ico')}}"
                                        alt="User profile picture">
                                </div>
                                <div class="title text-center text-bold">
                                    <h2>Mr. Dorald</h2>
                                    <h5>Certified Gas Engineer</h5>
                                </div>
                                <div class="links">
                                    <div class="row">
                                        <span class="col-md-2 web">
                                            <a href="{{route('home')}}" target="_blank">
                                                <i class="fas fa-globe"></i>
                                            </a>
                                        </span>
                                        <span class="col-md-2 mail">
                                            <a href="{{route('home')}}" target="_blank">
                                                <i class="fas fa-envelope"></i>

                                            </a>
                                        </span>
                                        <span class="col-md-2 wa">
                                            <a href="https://wa.me/+447470830082" target="_blank">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        </span>
                                        <span class="col-md-2 fm">
                                            <a href="https://www.facebook.com/profile.php?id=100087427104657"
                                                target="_blank">
                                                <i class="fab fa-facebook-messenger"></i>
                                            </a>
                                        </span>
                                        <span class="col-md-2 tr">
                                            <a href="{{route('home')}}" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </span>
                                        <span class="col-md-2 li">
                                            <a href="https://www.linkedin.com/in/prestige-gas-and-plumbing-08ab93256/"
                                                target="_blank">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-8 slogan text-white text-center">
                                    <h4>We have all your needs in Plumbing & Heating</h4>
                                </div>
                                <div class="col-md-8 hint text-white text-center">
                                    <h5> <i class="far fa-hand-point-up"></i> &nbsp; Connect to our specialist</h5>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
        </section>
    </div>

    <x-footer />