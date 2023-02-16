<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> FC Marquinho</title>


      

    
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
       
               
                       
                        <?php if (isset($user)): ?>
                            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">FC Marquinho</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                            
                         
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="logout.php">Log out</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="#equipamentos">Equipamentos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="#about">Sobre</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="#caderneta">Caderneta</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="#formação"> Formação</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="#contact">Contactos</a></li>
                        </ul>
                        </div>
            </div>
        </nav>

        <header class="masthead bg-danger text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.png" alt="..." />
                <!-- Masthead Heading-->
            
   

                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>&ensp;&ensp;
                    <div class="divider-custom-icon">  09 </div>
                    &ensp;<div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">AF Porto Divisão Elite</p>
                <p> Olá <?= htmlspecialchars($user["name"]) ?></p>
            </div>
        </header>

             <?php else: ?>
                                <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">FC Marquinho</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                                
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="login.php">Login</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="signup.html">Registar</a></li>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="#equipamentos">Equipamentos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="#about">Sobre</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="#caderneta">Caderneta</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="#formação"> Formação</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-4 px-0 px-lg-4 rounded" href="#contact">Contactos</a></li>
                       
                    </ul>
                    </div>
            </div>
        </nav>
  <header class="masthead bg-danger text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.png" alt="..." />
                <!-- Masthead Heading-->
            
   

                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>&ensp;&ensp;
                    <div class="divider-custom-icon">  09 </div>
                    &ensp;<div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">AF Porto Divisão Elite</p>
                <p> Olá Visitante </p>
            </div>
        </header>
                         <?php endif; ?>
                        
       


        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="equipamentos">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">equipamento</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">  09 </div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                   
                    
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/tf1.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/tf2.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-danger text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Sobre o Clube</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">  09 </div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div ><p class="lead">AD Marco 09 é uma equipe de futebol profissional baseada em Marco, Portugal. A equipe foi fundada em 2009 e rapidamente se tornou uma das melhores equipes de Portugal, competindo na Primeira Liga, a principal divisão de futebol português. AD Marco 09 é conhecido por seu estilo ofensivo de jogo e já produziu vários jogadores talentosos ao longo dos anos.</p></div>

                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
             
                </div>
            </div>
        </section>

        <section class="page-section" id="caderneta">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Caderneta</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"> 09 </div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="container my-5">
                    <div class="row">
                      <div class="col-lg-6">
                        <img class="w-100 shadow" src="assets/img/caderneta.png" />
                      </div>
                      <div class="col-lg-6">
                        <div class="p-5 mt-4" >
                          
                            <p style="font-size: 20px;" class="lead">Caderneta de Cromos!<br>
                                <br>
                                O entusiasmo em preencher o "álbum de família" do Marco 09, continua...
                                <br>
                                <br>
                                Há prémio para o primeiro a completar a coleção.
                                <br>
                                <br>
                                Quem será o primeiro?
                                <br>
                                <br>
                                Um clube, uma cidade, uma só paixão!  </p>
                           
                          </div>
                      </div>
                  </div>
            </div>
        </section>

        <section class="page-section bg-danger text-white mb-0" id="formação">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Formação</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">  09 </div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="container my-5">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="wrapper">
                            <img src="" alt="" id="image-animate">
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="p-5 mt-4" >
                          
                            <p style="font-size: 20px;" class="lead">
                                Marquitos!
                                <br>
                                No passado sábado os Marquitos tiveram jogo com o Romariz.
                                <br>
                                <br>
                                A alegria contagiante dos nossos pequenos craques foi evidente durante os jogos.
                                <br>
                                <br>
                                Marco 09 a formar jovens futebolistas.
                                <br>
                                <br>
                                Um clube, uma cidade, uma só paixão!<br>  </p>
                           
                          </div>
                      </div>
                  </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Entre em Contacto</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"> 09 </div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    
                            
                        <div class="container">  
                            <form id="contactForm"  target="_blank" action="https://formsubmit.co/r.a.vsegund@gmail.com" method="POST">
                              <h3>Esclareça as suas duvidas</h3>
                             
                              <fieldset>
                                <input placeholder="Nome" type="text" tabindex="1" required autofocus>
                              </fieldset>
                              <fieldset>
                                <input placeholder="Email" type="email" tabindex="2" required>
                              </fieldset>
                              <fieldset>
                                <input placeholder="Telemóvel" type="tel" tabindex="3" required>
                              </fieldset>
                              <fieldset>
                                <textarea placeholder="Descrisão" tabindex="5" required></textarea>
                              </fieldset>
                              <fieldset>
                                <button name="submit" type="submit" id="contact-submit" >Submit</button>
                              </fieldset>
                             
                            </form>
                          </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localização</h4>
                        <p class="lead mb-0">
                            Av. Dr. Artur Melo e Castro, nº 39
                         
                            <br />
                            4630-271, Marco de Canaveses - Portugal
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes Socias</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/futebolclubemarco"><i class="fab fa-fw fa-facebook-f"></i></a>

                       
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Contactos </h4>
                        <p class="lead mb-0">Telf: 255 078 206</p>
                        <p class="lead mb-0">Email: servicosmarco09@gmail.com</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
     
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
  
        <!-- Portfolio Modal 2-->
       
        <!-- Portfolio Modal 3-->
  
 
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Equipamento Frente</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">  09 </div>
                    <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/tf2.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Equipamento Trás</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon">  09 </div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/tf2.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                        
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
