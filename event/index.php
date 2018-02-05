<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Campuse.ro</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            #loading-screen {
                background: url(../img/loading.gif) center no-repeat #fff;
                position: fixed;
                width: 100%;
                height: 100%;
                z-index: 999999;
            }

            #navbar-principal {
                transition: 0.2s;
                border-top: 1em solid #0099ff;
                padding: 1em 2em 1em 2em;
                line-height: 2em;
            }

            .nav-user {
                margin-top: 0.2em;
                margin-left: 2em;
            }

            .nav-user-img, .nav-user-info {
                float: left;
            }

            .nav-user-info {
                transition: 0.2s;
                margin-left: 0.5em;
            }

            #nav-link-activities:hover {
                color: #f93ca5!important;
            }
            
            #nav-link-opportunities:hover {
                color: #9e9e9e!important;
            }
            
            main {
                margin-top: 90px;
            }
            
            main a {
                color: black;
            }
            
            main a:hover {
                text-decoration: none;
                color: black;
            }
            
            footer {
                margin-top: 100px;
                margin-bottom: 30px;
            }
            
            /*bs*/

            .nav-link {
                color: #0099ff!important;
                transition: 0.2s;
            }

            .nav-link:hover {
                color: #005c99!important;
            }
            
            .btn-outline-primary {
                color: #0099ff!important;
            }
            
            .btn-outline-primary:hover {
                color: white!important;
                background: #0099ff!important;
            }
        </style>
    </head>

    <body>
        <div id="loading-screen"></div>

        <nav id="navbar-principal" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="http://localhost/hackathon/event">
                <img src="../img/campusero_logo.png">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search activities" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">COMMUNITIES</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link-activities" class="nav-link" href="#">ACTIVITIES</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link-opportunities" class="nav-link" href="#">OPPORTUNITIES</a>
                    </li>
                    <li class="nav-item nav-user dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="nav-user-img">
                                <img src="../img/user.png" style="max-height: 1.5em;">
                            </div>
                            <div class="nav-user-info">
                                <span style="font-size: 0.6em; line-height: 1em;">WELCOME</span>
                                <br>
                                <span style="font-size: 0.8em; line-height: 1em;">ABDIAS</span>
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 1em; margin-left: -2em;">
                            <a class="dropdown-item" href="#" style="font-size: 1em;"><i class="material-icons" style="font-size: 1em;">confirmation_number</i> My tickets</a>
                            <a class="dropdown-item" href="#" style="font-size: 1em;"><i class="material-icons" style="font-size: 1em;">shopping_cart</i> My purchases</a>
                            <a class="dropdown-item" href="http://localhost/hackathon/event/my-activities" style="font-size: 1em;"><i class="material-icons" style="font-size: 1em;">schedule</i> My activities</a>
                            <div class="dropdown-divider" style="font-size: 1em;"></div>
                            <h6 class="text-center">Event selected</h6>
                            <a class="dropdown-item active" href="#" style="font-size: 1em;"><i class="material-icons" style="font-size: 1em;">event</i> CPBR11</a>
                            <div class="dropdown-divider" style="font-size: 1em;"></div>
                            <a class="dropdown-item" href="#" style="font-size: 1em;"><i class="material-icons" style="font-size: 1em;">exit_to_app</i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../img/slider-1.jpg" alt="First slide">
                        <!--<div class="carousel-caption d-none d-md-block">
                            <h5>Slider 1</h5>
                            <p>Este é o slider 1</p>
                        </div>-->
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../img/slider-2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../img/slider-3.jpg" alt="Third slide">
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

            <br><br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="row justify-content-between">
                            <div class="col-xl-5 col-lg-12 col-xs-12">
                                <h4 class="text-center">Workshops</h4>
                                <br>
                                <div class="row">
                                    <?php require_once '../api/index.php' ?>
                                    <?php $cont = 1 ?>
                                    <?php foreach ($workshops as $atividade) : ?>
                                        <?php if ($cont == 7) break; ?>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="activity/?slug=<?= $atividade['slug'] ?>">
                                                <div class="card">
                                                    <img class="card-img-top" src="../img/img-loading.gif" data-src="<?= $atividade['background_image'] ?>" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $atividade['title'] ?></h5>
                                                        <p class="card-text"><?= resumir_descricao($atividade['description'], 100) ?></p>
                                                        <div class="div-btn-participate-event">
                                                            <a href="#" class="btn btn-success"><i class="material-icons" style="float: left;">add</i> Participate</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php $cont++ ?>
                                    <?php endforeach ?>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <br>
                                        <button type="button" class="btn btn-outline-primary">See more</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-12 col-xs-12">
                                <h4 class="text-center">Talks</h4>
                                <br>
                                <div class="row">
                                    <?php require_once '../api/index.php' ?>
                                    <?php $cont = 1 ?>
                                    <?php foreach ($talks as $atividade) : ?>
                                        <?php if ($cont == 7) break; ?>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="activity/?slug=<?= $atividade['slug'] ?>">
                                                <div class="card">
                                                    <img class="card-img-top" src="../img/img-loading.gif" data-src="<?= $atividade['background_image'] ?>" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $atividade['title'] ?></h5>
                                                        <p class="card-text"><?= resumir_descricao($atividade['description'], 100) ?></p>
                                                        <div class="div-btn-participate-event">
                                                            <a href="#" class="btn btn-success"><i class="material-icons" style="float: left;">add</i> Participate</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php $cont++ ?>
                                    <?php endforeach ?>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <br>
                                        <button type="button" class="btn btn-outline-primary">See more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-xl-offset-2 col-md-8 col-md-offset-2 col-sm-12">
                        <center>
                            <img class="img-fluid" height="50" alt="Responsive image" src="../img/campusero_logo.png" >
                            | Copyright © 2018 Campuse.ro |
                            <a id="links_rodape" href="">Communities </a> |
                            <a id="links_rodape" href="">Activities </a> |
                            <a id="links_rodape" href="">Opportunities</a>
                        </center>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.4.1/lazyload.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#loading-screen').fadeOut(100);

                var myLazyLoad = new LazyLoad();

                $('.div-btn-participate-event').click(function() {
                   $(this).html(
                       `<a href="#" class="btn btn-danger"><i class="material-icons" style="float: left;">remove</i> Leave activity</a>`
                   );
                    return false;
                });

                $(document).scroll(function () {
                    if ($(this).scrollTop() >= 5) {
                        $('#navbar-principal').css("border-bottom", "0.05em solid #0099ff");
                        $('#navbar-principal').css("padding", "0.3em 2em 0.3em 2em");
                        $('#navbar-principal').css("border-top", "0.7em solid #0099ff");
                    } else {
                        $('#navbar-principal').css("border-bottom", "none");
                        $('#navbar-principal').css("padding", "1em 2em 1em 2em");
                        $('#navbar-principal').css("border-top", "1em solid #0099ff");
                    }
                });
            });
        </script>

    </body>
</html>