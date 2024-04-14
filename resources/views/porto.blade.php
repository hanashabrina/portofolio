<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>Portofolio Wildan Adji Prabowo</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('johndoe/public_html/assets/vendors/themify-icons/css/themify-icons.css')}}">
    
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="{{ asset('johndoe/public_html/assets/css/johndoe.css') }}">
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
                <h4 class="header-subtitle" >Hello, I am</h4>
                <h2 class="header-title">Wildan Adji</h2>
                <h2 class="header-title">Prabowo</h2>
                <h6 class="header-mono" >Frond end Designer | Developer</h6>
                
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    
                </ul>
                <ul class="navbar-nav brand">
                    <img src="{{  asset('johndoe/public_html/assets/imgs/pkel.jpeg') }}" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Wildan Adji Prabowo</h5>
                        <div class="brand-subtitle">Web Designer | Developer</div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Who am I ?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">A Web Designer / Developer Located Semarang</h5>
                <p class="mt-20">Undergraduate Computer Science Student at Diponegoro University | Web Developer Intern at Indosat Ooredoo Hutchison Kota Semarang | Enthusiast in Software Development, Artificial Intelligence, and Graphic Desginer.</p>

            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Birthdate</span> : 28/01/2004</li>
                    <li><span>Email</span> : wildanadji28@gmail.com</li>
                    <li><span>Phone</span> : +6281373370126</li>
                    <li><span>Linkedin</span> : Wildan Adji </li>
                    <li><span>Address</span> :  Puri Harapan Blok C22/85</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul>  
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>UX Design</h6>
                        <br><hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Web Development</h6>
                        <br><hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Graphic Designer</h6>
                        <br><hr>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By Adji 
            </p>
        </div>
    </footer>

	<!-- core  -->
    <script src=" {{ asset('johndoe/public_html/assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('johndoe/public_html/assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ asset('johndoe/public_html/assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Isotope  -->
    <script src=" {{ asset('johndoe/public_html/assets/vendors/isotope/isotope.pkgd.js') }}"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="{{ asset('johndoe/public_html/assets/js/johndoe.js') }}"></script>

</body>
</html>
