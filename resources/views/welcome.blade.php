<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Arquivos do Template escolhido -->
        <link href="{{ asset('css/templatestyles.css') }}" rel="stylesheet" type="text/css" >
        <!-- Meus arquivos -->
        <link href="{{ asset('css/mystyles.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-white static-top">
            <div class="container">
                <div class="container-menu">
                    <a class="navbar-brand" href="#!">Leospa</a>
                    <a class="navbar-menu" href="#!">Home</a>
                    <a class="navbar-menu" href="#!">About</a>
                    <a class="navbar-menu" href="#!">Feature</a>
                    <a class="navbar-menu" href="#!">Service</a>
                    <a class="navbar-menu" href="#!">Contact</a>
                </div>
            </div>

        </nav>
        <!-- Masthead-->
        <header class="masthead bg-white">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-left text-black">
                            <!-- Page heading-->
                            <h1 class="mb-5">Beauty and sucess<br> starts here.</h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </header>
      
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <!-- Signup form-->
                        <form method="POST" action="/">
                        @csrf
                            <input class="form-control" type="text" placeholder="Name" name="name" aria-label="Enter your email..." aria-describedby="button-submit" />
                            <br><input class="form-control" type="text" placeholder="Email adress" name="email" aria-label="Enter your email..." aria-describedby="button-submit" />
                            <br><select class="form-control" name="service" id="service" placeholder="Service">
                            <option value="" disabled selected>Service</option>
                             <option value="1">Princess</option>
                             <option value="2">Queen</option></select>
                            <br><input class="form-control" type="text" name="phone" placeholder="Phone" aria-label="Phone number" aria-describedby="button-submit" />
                            <br><input class="form-control" type="date" name="date_appointment" placeholder="" aria-label="Date" aria-describedby="button-submit" />
                            <br><input class="form-control" type="time" name="time_appointment" placeholder="" aria-label="Time" aria-describedby="button-submit" />
                            <br><input class="form-control" type="text" name="note" placeholder="Your note" aria-label="Your note" aria-describedby="button-submit" />
                            <br><input class="btn btn-primary" placeholder="Make an appointment!" id="button-submit" type="submit">
                       
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2021. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
