<?php require_once '../../api/index.php' ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Campuse.ro</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            #loading-screen {
                background: url(../../img/loading.gif) center no-repeat #fff;
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
                padding-top: 30px;
            }

            #activity-title {
                margin-bottom: 0.5em;
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
                <img src="../../img/campusero_logo.png">
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
                                <img src="../../img/user.png" style="max-height: 1.5em;">
                            </div>
                            <div class="nav-user-info">
                                <span style="font-size: 0.6em; line-height: 1em;">WELCOME</span>
                                <br>
                                <span style="font-size: 0.8em; line-height: 1em;">ABDIAS</span>
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 1em; margin-left: -2em;">
                            <a class="dropdown-item" href="#"><i class="material-icons">confirmation_number</i> My tickets</a>
                            <a class="dropdown-item" href="#"><i class="material-icons">shopping_cart</i> My purchases</a>
                            <a class="dropdown-item" href="http://localhost/hackathon/event/my-activities"><i class="material-icons">schedule</i> My activities</a>
                            <div class="dropdown-divider" style="font-size: 1em;"></div>
                            <h6 class="text-center">Event selected</h6>
                            <a class="dropdown-item active" href="#" style="font-size: 1em;"><i class="material-icons" style="font-size: 1em;">event</i> CPBR11</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="material-icons">exit_to_app</i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-10 col-offset-1">
                        <div class="activities-header">
                            <h2 class="text-center">My activities</h2>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="finished-tab" data-toggle="tab" href="#finished" role="tab" aria-controls="finished" aria-selected="false">Finished</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="conflicts-tab" data-toggle="tab" href="#conflicts" role="tab" aria-controls="conflicts" aria-selected="false">Conflicts</a>
                                    </li>
                                </ul>
                                <br>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                        <table class="table table-stripped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Start at</th>
                                                    <th>End at</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <?php $cont = 1 ?>
                                            <?php foreach ($workshops as $activity) : ?>
                                                <?php if ($cont == 4) break; ?>
                                                <tr>
                                                    <td><a href="http://localhost/hackathon/event/activity/?slug=<?= $atividade['slug'] ?>"><?= $activity['title'] ?></a></td>
                                                    <td><?= resumir_descricao($activity['description'], 50) ?></td>
                                                    <td><?= $activity['start_date'] ?></td>
                                                    <td><?= $activity['end_date'] ?></td>
                                                    <td>
                                                        <div class="div-btn-participate-event">
                                                            <a href="#" class="btn btn-sm btn-danger"><i class="material-icons" style="float: left;">remove</i> Leave activity &nbsp;&nbsp;</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $cont++ ?>
                                            <?php endforeach ?>
                                            <?php $cont = 1 ?>
                                            <?php foreach ($talks as $activity) : ?>
                                                <?php if ($cont == 4) break; ?>
                                                <tr>
                                                    <td><a href="http://localhost/hackathon/event/activity/?slug=<?= $atividade['slug'] ?>"><?= $activity['title'] ?></a></td>
                                                    <td><?= resumir_descricao($activity['description'], 50) ?></td>
                                                    <td><?= $activity['start_date'] ?></td>
                                                    <td><?= $activity['end_date'] ?></td>
                                                    <td>
                                                        <div class="div-btn-participate-event">
                                                            <a href="#" class="btn btn-sm btn-danger"><i class="material-icons" style="float: left;">remove</i> Leave activity &nbsp;&nbsp;</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $cont++ ?>
                                            <?php endforeach ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="finished" role="tabpanel" aria-labelledby="finished-tab">
                                        <h6>Nothing to show</h6>
                                    </div>
                                    <div class="tab-pane fade" id="conflicts" role="tabpanel" aria-labelledby="conflicts-tab">
                                        <h6>Nothing to show</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <label>Order by</label>
                                        <select class="form-control">
                                            <option>Nexts first</option>
                                            <option>Nexts last</option>
                                            <option>Name asc</option>
                                            <option>Name desc</option>
                                        </select>
                                        <br>
                                        <label>Interval</label>
                                        <input type="date" class="form-control">
                                        <input type="date" class="form-control">
                                        <label></label>
                                        <br><br>
                                        <div class="div-btn-participate-event">
                                            <a href="#" class="btn btn-success"><i class="material-icons" style="float: left;">save</i> Apply</a>
                                        </div>
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
                            <img class="img-fluid" height="50" alt="Responsive image" src="../../img/campusero_logo.png" >
                            | Copyright © 2018 Campuse.ro |
                            <a id="links_rodape" href="">Communities </a> |
                            <a id="links_rodape" href="">Activities </a> |
                            <a id="links_rodape" href="">Opportunities</a>
                        </center>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.4.1/lazyload.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#loading-screen').fadeOut(100);

                var myLazyLoad = new LazyLoad();

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