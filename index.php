<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regina N. Molares : Home</title>
    <link rel="icon" type="img/png" href="img/favicon.png">
    <script src="https://kit.fontawesome.com/f2652a0a74.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <base target="_blank">
</head>

<body>
    <div id="greet">
        <!-- NAV BAR -->
        <nav class="navbar fixed-bottom navbar-expand-lg d-flex justify-content-between">
            <span>
                <h2 class="navbar-brand"><a href="#greet" target="_self"><i class="fas fa-at ir"></i> regina</a></h2>
            </span>
            <span class="text-right pr-2">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item d-flex align-items-center">
                            <i class="far fa-file ir"></i><a class="inf nav-link" role="button" href="#resume-section" target="_self" id="cv-btn" v-html="(english === true ? 'Resume' : 'CV')"></a>
                        </li>
                        <li class="nav-item active d-flex align-items-center">
                            <i class="far fa-folder-open ir"></i><a class=" inf nav-link " role="button" href="#accordion" target="_self" id="portfolio-btn" v-html="(english === true ? 'Portfolio' : 'Trabajos')"></a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <i class="far fa-envelope ir"></i><a class=" inf nav-link " role="button" href="#ccontact-section" target="_self" v-html="(english === true ? 'Contact Me!' : 'Contacto')"></a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <i class="fas fa-globe ir"></i><a class="inf nav-link" role="button" v-html="(english === true ? 'Español' : 'English')" target="_self" @click="toggle_lng()"></a>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </span>
        </nav>
        <!-- Fin NAV BAR -->

        <!-- HELLO WORLD! -->
        <div class="container">
            <section class="text-center box-shadow-1" id="hello-section">
                <div class="hello-animation">
                    <div class="profile-pic"> <img id="hi" src="img/regina.jpg" alt="Regina"></div>
                    <h1 v-html="(english === true ? saludo_en : saludo_sp)"></h1>
                    <div>
                        <h2 class="mt-3" v-html="(english === true ? cargo_en : cargo_sp)"></h2>
                    </div>
                </div>

            </section>
        </div>
        <!-- Fin HELLO WORLD! -->

        <!-- RESUME -->
        <div class="container2" id="resume-section">
            <nav class="mt-1">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="true" v-html="(english === true ? 'About Me' : 'Sobre mí')"></a>
                    <a class="nav-item nav-link" id="nav-education-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-education" aria-selected="false" v-html="(english === true ? 'Education' : 'Educación')"></a>
                    <a class="nav-item nav-link" id="nav-skills-tab" data-toggle="tab" href="#nav-skills" role="tab" aria-controls="nav-skills" aria-selected="false" v-html="(english === true ? 'Skills' : 'Habilidades')"></a>
                    <a class="nav-item nav-link" id="nav-experience-tab" data-toggle="tab" href="#nav-experience" role="tab" aria-controls="nav-experience" aria-selected="false" v-html="(english === true ? 'Experience' : 'Experiencia')"></a>
                    <a class="nav-item nav-link" id="nav-download-tab" data-toggle="tab" href="#" role="tab" aria-controls="nav-download" aria-selected="false" v-html="(english === true ? 'Download my Resume' : 'Descargar mi CV')"></a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <template v-if="english">
                        <h2 class="title bottom-line"><i class="fas fa-chalkboard-teacher mr-1"></i> About Me</h2><br>
                        <div class="media">
                            <img class="align-self-center mr-3 profile-pic" id="hi2" src="img/regina.jpg" alt="Regina">
                            <div class="media-body align-self-center">
                                <p>{{about_me}}</p>
                            </div>
                        </div>
                    </template>
                    <template v-else>
                        <h2 class="title bottom-line"><i class="fas fa-chalkboard-teacher mr-1"></i> Sobre mí</h2><br>
                        <div class="media">
                            <img class="align-self-center mr-3 profile-pic" id="hi2" src="img/regina.jpg" alt="Regina">
                            <div class="media-body align-self-center">
                                <p>{{sobre_mi}}</p>
                            </div>
                        </div>
                    </template>
                </div>

                <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
                    <template v-if="english">
                        <h2 class="title bottom-line"><i class="fas fa-graduation-cap  ml-1"></i> Education</h2><br>
                        <template v-for="item in education_en">
                            <p class="mt-1"><small>{{ item[0] }} - {{ item[1] }}</small><br><b>{{ item[2] }}</b></p>
                        </template>
                    </template>
                    <template v-else>
                        <h2 class="title bottom-line"><i class="fas fa-graduation-cap  ml-1"></i> Educación</h2><br>
                        <template v-for="item in education_sp">
                            <p class="mt-1"><small>{{ item[0] }} - {{ item[1] }}</small><br><b>{{ item[2] }}</b></p>
                        </template>
                    </template>
                </div>

                <div class="tab-pane fade" id="nav-skills" role="tabpanel" aria-labelledby="nav-skills-tab">
                    <template v-if="english">
                        <h2 class="title bottom-line"><i class="fas fa-glasses ml-1"></i> Skills</h2><br>
                        <p v-for="skille in skills_en"><b>{{ skille[0] }}</b><br><small v-html="skille[1]"></small></p>
                    </template>
                    <template v-else>
                        <h2 class="title bottom-line"><i class="fas fa-glasses ml-1"></i> Habilidades</h2><br>
                        <p v-for="skille in skills_sp"><b>{{ skille[0] }}</b><br><small v-html="skille[1]"></small></p>
                    </template>
                </div>

                <div class="tab-pane fade" id="nav-experience" role="tabpanel" aria-labelledby="nav-experience-tab">
                    <template v-if="english">
                        <h2 class="title bottom-line"><i class="fas fa-laptop-code ml-1"></i> Experience</h2><br>
                        <p v-for="expe in experience_en"><small><b>{{ expe[0] }}</b></small><br><span v-html="expe[1]"></span>
                    </template>
                    <template v-else>
                        <h2 class="title bottom-line"><i class="fas fa-laptop-code ml-1"></i> Experiencia</h2><br>
                        <p v-for="expe in experience_sp"><small><b>{{ expe[0] }}</b></small><br><span v-html="expe[1]"></span>
                        </p>
                    </template>
                </div>
            </div>
        </div>

        <!-- FIN RESUME -->

        <!-- PORTFOLIO -->
        <div class="container">
            <section id="portfolio-section"></section>
        </div>
        <!-- FIN PORTFOLIO -->

        <!-- CONTACTO -->
        <div class="container ccs" id="ccontact-section">
            <div class="contact-cards">
                <aside class="contact-card box-shadow-1">
                    <i class="fas fa-map-marker-alt cci"></i>
                    <h5 v-html="(english === true ? 'LOCATION' : 'UBICACIÓN')"></h5>
                    <small>Ciudad Autónoma de Buenos Aires, Argentina</small>
                </aside>
                <aside class="contact-card box-shadow-1">
                    <i class="fab fa-whatsapp cci"></i>
                    <h5>WHATSAPP</h5>
                    <small><a href="https://wa.link/eaj31s" data-toggle="tooltip" title="WhatsApp Msg">+54 (11)
                            5474-7804</a></small>
                </aside>
                <aside class="contact-card box-shadow-1">
                    <i class="fas fa-at cci"></i>
                    <h5>EMAIL</h5>
                    <small><a href="mailto:programming.regina@gmail.com">programming.regina@gmail.com</a></small>
                </aside>
                <aside class="contact-card box-shadow-1">
                    <i class="fab fa-slack-hash cci"></i>
                    <h5>SOCIAL MEDIA</h5>
                    <div class="social-media"><small>
                            <template v-if="english">
                                <a href="https://www.linkedin.com/in/regina-molares/" data-toggle="tooltip" title="LinkedIn: my PRO self" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com/programming-Regina" data-toggle="tooltip" title="GitHub: Experimental zone. Safety equipment required" rel="noopener"><i class="fab fa-github-alt"></i></a>
                                <a href="https://twitter.com/CodingRegina" data-toggle="tooltip" title="Twitter: courses & resources" rel="noopener"><i class="fab fa-twitter fw-normal"></i></a>
                                <a href="https://www.facebook.com/regina.molares/" data-toggle="tooltip" title="Facebook: animals, hobbies & family" rel="noopener"><i class="fab fa-facebook-square"></i></a> </template>
                            <template v-else>
                                <a href="https://www.linkedin.com/in/regina-molares/" data-toggle="tooltip" title="LinkedIn: mi parte más PRO" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com/programming-Regina" data-toggle="tooltip" title="GitHub: Zona experimental. Se requiere equipamiento de seguridad." rel="noopener"><i class="fab fa-github-alt"></i></a>
                                <a href="https://twitter.com/CodingRegina" data-toggle="tooltip" title="Twitter: cursos y recursos" rel="noopener"><i class="fab fa-twitter fw-normal"></i></a>
                                <a href="https://www.facebook.com/regina.molares/" data-toggle="tooltip" title="Facebook: animales, pasatiempos, amigos y familia" rel="noopener"><i class="fab fa-facebook-square"></i></a>
                            </template>
                        </small>
                    </div>
                </aside>
            </div>

            <section id="contact-section" class="box-shadow-1 mb-3">
                <h2 class="title" v-html="(english === true ? 'Contact Me!' : 'Contacto')"></h2>
                <br>
                <form method="post" action="includes/sendbymail.php"></form>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label" v-html="(english === true ? 'Name' : 'Nombre')"></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="name" placeholder="Mrs. Lorem Ipsum" name="name" required title="Error" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label" v-html="(english === true ? 'Email address' : 'Email')"></label>
                    <div class="col-sm-10"><input type="email" class="form-control form-control-sm" id="email" aria-describedby="emailHelp" placeholder="lorem_ipsum@somewhere.com" name="email" required title="Error" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="mess" class="col-sm-2 col-form-label" v-html="(english === true ? 'Message' : 'Mensaje')"></label>
                    <div class="col-sm-10"><textarea class="form-control form-control-sm" id="mess" rows="3" name="msg" required></textarea>
                    </div>
                </div>
                <div class="contact-form-loader text-center none">
                    <img src=" img/loader.svg" alt="Enviando...">
                </div>
                <div class="text-center"><button type="submit" name="submit" class="submit-btn btn inf-inverso mb-1" v-html="(english === true ? 'Submit' : 'Enviar')"></button></div>
                </form>
            </section>
            <article id="gracias" class="modal1 mb-5 p-1">
                <div class="modal1-content">
                    <article class="contact-form-response">
                        <h3 v-html="(english === true ? 'Thank you<br/>for your message!' : '¡Muchas Gracias<br/>por tus comentarios!')">
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12,18c4,0,5-4,5-4H7C7,14,8,18,12,18z" />
                            <path d="M12,2C6.486,2,2,6.486,2,12c0,5.514,4.486,10,10,10s10-4.486,10-10C22,6.486,17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
                            <path d="M13 12l2 .012C15.012 11.55 15.194 11 16 11s.988.55 1 1h2c0-1.206-.799-3-3-3S13 10.794 13 12zM8 11c.806 0 .988.55 1 1h2c0-1.206-.799-3-3-3s-3 1.794-3 3l2 .012C7.012 11.55 7.194 11 8 11z" />
                        </svg>
                    </article>
                </div>
            </article>
            <br> <br>.
        </div>
        <!-- FIN CONTACTO -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="scripts/vue.min.js"></script>
        <script type="text/javascript" src="scripts/contenidos.js"></script>
    </div>
</body>

</html>