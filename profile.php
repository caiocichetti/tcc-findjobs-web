<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="css/profile.css" rel="stylesheet">
    <link href="css/topo.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/LogoBranca32.png"/>
</head>
<body>
    
    <!-- Navigation Bar -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand mr-auto" href="index.html"><img src="img/LogoAzul.png"></a>
                <button class="navbar-toggler" type="button" style="border:none;" data-toggle="collapse" data-target="#navbarResponsive">
                    <spam class="navbar-toggler-icon"></spam>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="classes.html">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="projects.html">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="login.html">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="register.html">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <abbr title="Log Out"><a class="nav-link text-white" href="index.html"><i class="fas fa-sign-out-alt"></i></a></abbr>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- End Navigation Bar -->

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-xl-4 justify-content-center" align="center">
                <img src="img/matheus.jpg" style="width: 300px;height: 300px;border-radius: 10px;">
                <div class="row justify-content-center text-center">
                    <h3 class="mt-2">Matheus Germano</h3>
                    <a data-toggle="modal" data-target="#modalEdit"><i class="fas fa-edit m-3" style="cursor: pointer;"></i></a>
                </div>
                <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content col-12">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="name" placeholder="Your Name" onkeypress="return ApenasLetras(event,this);" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="prof" placeholder="Profession" onkeypress="return ApenasLetras(event,this);" required="required">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="desc" rows="5" placeholder="About You" required="required" style="width: 100%;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="nbr" placeholder="(00)00000-0000" required="required" maxlength="13" onkeypress="$(this).mask('(00) 00000-0009')">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input class="form-control" type="password" id="pass" placeholder="Your Password" required="required">
                                            <small class="text-muted">Mininal lenght: 8 characters</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-control" type="password" id="pass" placeholder="Confirm Your Password" required="required">
                                            <small class="text-muted">Mininal lenght: 8 characters</small>
                                        </div>
                                    </div>
                                    <hr>
                                    <h6>Social Media:</h6>
                                    <div class="form-row justify-content-center">
                                        <a class="social-media mr-2" href="#"><i class="fab fa-github"></i></a>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="GitHub" placeholder="GitHub_User" required="required">
                                        </div>
                                    </div>
                                    <div class="form-row justify-content-center">
                                        <a class="social-media mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Twitter" placeholder="Twitter_User" required="required">
                                        </div>
                                    </div>
                                    <div class="form-row justify-content-center">
                                        <a class="social-media mr-2" href="#"><i class="fab fa-facebook"></i></a>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Facebook" placeholder="Facebook_User" required="required">
                                        </div>
                                    </div>
                                    <div class="form-row justify-content-center">
                                        <a class="social-media mr-2" href="#"><i class="fab fa-instagram"></i></a>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Instagram" placeholder="Instagram_User" required="required">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="exp">Select your experience</label>
                                        <select class="form-control" id="exp"> 
                                            <option value="">Without experience</option>
                                            <option value="">Rookie</option>
                                            <option value="">Intermedian</option>
                                            <option value="">Experient</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Select a image for your profile</label>
                                        <input class="form-control" type="file" id="image">
                                        <small class="text-muted">Max. size: 3MB</small>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <input type="submit" name="enviar" class="btn btn-outline-dark" id="enviar" />
                                    </div>
                                </form>
                            </div>				  
                        </div>
                    </div>
                </div>
                <div class="border p-2">
                    <h6>About</h6>
                    <p>I'm 17yo, Front-End Developer</p>
                    <div class="estrelas">
                        <input type="radio" id="vazio" name="estrela" value="" checked>

                        <label for="estrela1"><i class="fas fa-star"></i></label>
                        <input type="radio" id="estrela1" name="estrela" value="1">

                        <label for="estrela2"><i class="fas fa-star"></i></label>
                        <input type="radio" id="estrela2" name="estrela" value="2">

                        <label for="estrela3"><i class="fas fa-star"></i></label>
                        <input type="radio" id="estrela3" name="estrela" value="3">

                        <label for="estrela4"><i class="fas fa-star"></i></label>
                        <input type="radio" id="estrela4" name="estrela" value="4">

                        <label for="estrela5"><i class="fas fa-star"></i></label>
                        <input type="radio" id="estrela5" name="estrela" value="5">
                    </div>
                </div>
                <div class="col-12 social padding mt-2">
                    <h6>Social Media</h6>
                    <a href="https://github.com/MGermano27"><i class="fab fa-github"></i></a>
                    <a href="https://twitter.com/_grrmano"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/_grrmano/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-xl-8 justify-content-center" align="center">
                <h3>Own Projects</h3>
                <div class="container-fluid padding" align="center">
                    <div class="row justify-content-center">
                        <div class="card m-3" style="width: 21rem;height: auto;">
                            <img src="img/gps2.png" class="card-img-top p-5" alt="">
                            <div class="card-body h-100">
                                <h5 class="card-title mb-1">Matheus</h5>
                                <h6 class="card-subtitle text-muted mb-3">Java</h6>
                                <hr>
                                <p class="card-text">Preciso de um GPS mobile em tempo real.</p>
                                <a data-toggle="modal" data-target="#modalEditProject"><button type="button" class="btn btn-outline-dark btn-lg">Edit Project</button></a>
                            </div>
                        </div>
                        <div class="card m-3" style="width: 21rem;height: auto;">
                            <img src="img/calc2.png" class="card-img-top p-5" alt="">
                            <div class="card-body h-100">
                                <h5 class="card-title mb-1">Matheus</h5>
                                <h6 class="card-subtitle text-muted mb-3">Visual Studio</h6>
                                <hr>
                                <p class="card-text">Preciso de uma calculadora quântica.</p>
                                <a data-toggle="modal" data-target="#modalEditProject"><button type="button" class="btn btn-outline-dark btn-lg">Edit Project</button></a>
                            </div>
                        </div>
                        <div class="card m-3" style="width: 21rem;height: auto;">
                            <img src="img/database.png" class="card-img-top p-5" alt="">
                            <div class="card-body h-100">
                                <h5 class="card-title mb-1">Matheus</h5>
                                <h6 class="card-subtitle text-muted mb-2">MySQLFront</h6>
                                <hr>
                                <p class="card-text">Preciso de um banco de dados para minha aplicação web.</p>
                                <a data-toggle="modal" data-target="#modalEditProject"><button type="button" class="btn btn-outline-dark btn-lg">Edit Project</button></a>
                            </div>
                        </div>
                        <div class="modal fade" id="modalEditProject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content col-12">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Edit Project</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="projectName" placeholder="Project Name" required="required">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="lang" placeholder="Language (c#, Java, etc.)" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="desc" rows="5" placeholder="Project Description" required="required" style="width: 100%;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="repository" placeholder="Add your GitHub Repository" required="required">
                                        </div>
                                        <hr>
                                        <h6>Participants:</h6>
                                        <div class="row justify-content-center text-center mb-2">
                                            <div class="participants">
                                                <a href="#"><i class="fas fa-user-circle"></i></a>
                                                <a href="#"><i class="fas fa-user-circle"></i></a>
                                                <a href="#"><i class="fas fa-user-circle"></i></a>
                                            </div>
                                        </div>
                                        <hr>
                                        <h6>Add a Participant</h6>
                                        <form action="">
                                            <div class="form-group">
                                                <small class="text-muted">Insert the participant's cpf</small>
                                                <input class="form-control" type="text" id="cpf" placeholder="000.000.000-00" onkeypress="$(this).mask('000.000.000-00');">
                                            </div>
                                        </form>
                                        <hr>
                                        <a data-toggle="modal" data-target="#modalEmail"><button type="button" class="btn btn-outline-dark btn-md mb-3">Confirm</button></a>
                                        <a href=""><button type="button" class="btn btn-danger btn-md mb-3">Delete Project</button></a>
                                        <label class="active">
                                            <input type="checkbox" autocomplete="off" required="required">  I have read and accept the <span class="text-info" style="text-decoration: underline; cursor: pointer;"><a data-toggle="modal" data-target="#myModal">Terms of Use</a></span>
                                        </label>
                                    </div>				  
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modalJoinProject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content col-12">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Wanna join in a project?</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>By entering a project you agree to all terms.</p>
                                        <p>The project owner will be notified.</p>
                                        <p>The project owner may or may not accept you in the project.</p>
                                        <hr>
                                        <a data-toggle="modal" data-target="#modalEmail"><button type="button" class="btn btn-outline-dark btn-md mb-3">Confirm Interest</button></a>
                                        <label class="active">
                                            <input type="checkbox" autocomplete="off">  I have read and accept the <span class="text-info" style="text-decoration: underline; cursor: pointer;"><a data-toggle="modal" data-target="#myModal">Terms of Use</a></span>
                                        </label>
                                    </div>				  
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content col-12">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Termos de Uso FindJobs</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, orci aliquam hendrerit malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>
            
                                        <p>Fusce ut nibh rutrum, interdum enim ac, pulvinar odio. Nunc id est interdum, sodales sem ut, accumsan tortor. Mauris id eleifend nibh, venenatis egestas magna. Ut convallis volutpat ligula, sit amet lacinia nisl lobortis id. Nunc sollicitudin diam tellus, ac maximus ligula vehicula dictum. Nam et tincidunt sem. Vivamus faucibus sem eget urna vulputate dignissim. Duis metus lacus, pretium vitae nulla ullamcorper, lacinia fringilla leo. Pellentesque vitae magna facilisis libero scelerisque lacinia dictum id massa. Integer a eros mi. In quis sem turpis. Quisque vel dolor in lacus tristique vehicula.</p>
            
                                        <p>Mauris congue justo tempus erat finibus, quis vestibulum urna aliquet. Phasellus porttitor, enim vitae ullamcorper ultrices, nibh magna hendrerit dui, sed sodales mi tellus sed sem. Nam justo dolor, porta sed ante ac, ullamcorper iaculis justo. Donec in nulla sapien. Morbi quis placerat orci, sed dictum orci. Aenean efficitur lectus in magna blandit suscipit. Phasellus nisi eros, accumsan et aliquet sed, tristique at nulla. Suspendisse viverra odio ultricies augue lobortis vulputate. Proin a lacus vitae dui porttitor ultrices. Vestibulum sed venenatis eros. Maecenas porta hendrerit magna nec cursus. Phasellus vulputate euismod molestie. Fusce varius, libero vel luctus pellentesque, ligula nulla consequat ex, a consectetur purus enim sit amet massa. Proin enim neque, laoreet nec tellus ut, iaculis ultricies nisl.</p>
            
                                        <p>Duis interdum egestas nisi. Maecenas non pharetra arcu. Suspendisse vulputate eget eros vitae sodales. Aenean libero risus, accumsan ut vulputate tristique, accumsan quis magna. Mauris non egestas diam. Maecenas fringilla elit nisl, vel eleifend massa blandit vitae. Cras placerat justo imperdiet justo consequat, quis condimentum erat ornare. Integer porta urna ullamcorper velit tempor, ultricies vestibulum felis pulvinar. Fusce nec nisl a dolor feugiat bibendum non sed velit. Praesent ullamcorper ac orci vitae luctus. Curabitur mattis, purus vel dapibus finibus, lorem nibh tristique sapien, quis fermentum enim est sit amet tellus. Donec quis aliquet nisi. Etiam egestas metus at nunc eleifend ultrices. Integer eget finibus neque, ut ultrices ligula. Vivamus malesuada sem quis sapien mollis, ac dapibus elit commodo. Vivamus placerat massa a eros posuere, et sodales libero pulvinar.</p>
                                    </div>				  
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modalEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content col-12">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">All Ready :D</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>An email was sent to the project owner stating your interest.</p>
                                    </div>				  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-5">Participating</h3>
                <div class="container-fluid padding" align="center">
                    <div class="row justify-content-center">
                        <div class="card m-3" style="width: 21rem;height: auto;">
                            <img src="img/delivery2.png" class="card-img-top p-5" alt="">
                            <div class="card-body h-100">
                                <h5 class="card-title mb-1">Guilherme</h5>
                                <h6 class="card-subtitle text-muted mb-3">Java</h6>
                                <hr>
                                <p class="card-text">Preciso de um app de delivery.</p>
                            </div>
                        </div>
                        <div class="card m-3" style="width: 21rem;height: auto;">
                            <img src="img/website.png" class="card-img-top p-5" alt="">
                            <div class="card-body h-100">
                                <h5 class="card-title mb-1">Brayan</h5>
                                <h6 class="card-subtitle text-muted mb-3">HTML, CSS e JS</h6>
                                <hr>
                                <p class="card-text">Preciso de um Website para minha loja de roupas.</p>
                            </div>
                        </div>
                        <div class="card m-3" style="width: 21rem;height: auto;">
                            <img src="img/scanner.png" class="card-img-top p-5" alt="">
                            <div class="card-body h-100">
                                <h5 class="card-title mb-1">Thales</h5>
                                <h6 class="card-subtitle text-muted mb-2">Java</h6>
                                <hr>
                                <p class="card-text">Preciso de um app scanner.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button onclick="backToTop()" id="btnTop"><i class="fas fa-arrow-up"></i></button>

    <script type="text/JavaScript" src="js/topo.js"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>