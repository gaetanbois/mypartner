<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MyPartner</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->

<!--        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>-->
        <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="js/lib/jquery-ui-1.12.1.custom/jquery-ui.min.css"/>
        <link type="text/css" rel="stylesheet" href="css/lib/jquery.toast.min.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body ng-app="app" ng-controller="UsersController as uc">



        <div class="home">
            <div class="navbar-fixed">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <a class="navbar-brand" href="#"><img id="logo-nav" src="img/Logo_MyPartner_white.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Qui sommes nous ?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Comment ça marche ?</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="text-home">
                <img id="logo-home" src="img/Logo_MyPartner.png" alt="Logo MyPartner Blanc">
                <h1>Vous voulez changer le monde ? <br>
                    Ne changez rien...</h1>
                <button type="button" class="btn btn-primary btn-lg" id="soutenez-nous">Soutenez-nous !</button>
                <section id="fleche-soutenez-nous" class="demo">
                    <a href=""><span></span></a>
                </section>
            </div>
        </div>


        <div class="presentation">
            <div class="container">
                <h2>Qui sommes-nous ?</h2>
                <hr>
                <p id="text-presentation">
                    Nous aidons les associations à rendre le sport accessible à tous en supprimant les coûts liés à la
                    pratique de ses licenciés tout en enrichissant leur expérience sportive
                </p>
            </div>
        </div>
        <div class="fonctionnement">
            <div class="container">
                <h2>Comment ça marche ?</h2>
                <hr>
                <div class="row">
                    <div class="col">
                        <img class="icone-f" src="img/ic_benefice.png" alt="Icone de bénéfice">
                        <h3>BÉNÉFICE</h3>
                        <p class="text-fonctionnement">Récupère 5 à 30% de tes dépenses auprès de nos commmerçants partenaires.</p>
                    </div>
                    <div class="col">
                        <img class="icone-f" src="img/ic_cagnottez.png" alt="Icone de Cagnotte">
                        <h3>CAGNOTTE</h3>
                        <p class="text-fonctionnement">Cumule tes gains sur ton compte bancaire et finance l'activité sportive de ton choix.</p>
                    </div>
                    <div class="col">
                        <img class="icone-f" src="img/ic_aidez.png" alt="Icone d'aide">
                        <h3>AIDE</h3>
                        <p class="text-fonctionnement">Je choisis l'association sportive que mes commerçants partenaires sponsorisent.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="clic-form">
            <div class="soutenez-nous">
                <h2 id="phrase-accroche">Si toi aussi tu penses qu'acheter malin peut améliorer ton quotidien</h2>
                <a><button type="button" class="btn btn-primary btn-lg">Soutenez nous !</button></a>
            </div>
        </div>



        <div class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-01 infinite fadeInDown">
                            <img class="card-img-top" src="img/Visu_commercant.jpg" alt="Card image cap">
                            <div class="card-body">
                                <span class="badge-box"><i class="fa fa-check"></i></span>
                                <h4 class="card-title">Commerçants</h4>
                                <hr>
                                <p class="card-text">Boostez votre business sans vous engager financièrement. Développez votre clientèle, fidélisez-la et faites prospérer votre commerce grâce au partenariat MyPartner.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-01">
                            <img class="card-img-top" src="img/Visu_asso.jpg" alt="Card image cap">
                            <div class="card-body">
                                <span class="badge-box"><i class="fa fa-check"></i></span>
                                <h4 class="card-title">Associations</h4>
                                <hr>
                                <p class="card-text">Plus de budget et moins de contraintes pour pérénniser votre vie associative. My Partner vous permettra de générer de nouvelles sources de revenus afin de fidéliser les adhérents de votre association grâce au financement de nouveaux projets sportifs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-01">
                            <img class="card-img-top" src="img/Visu_sportif.jpg" alt="Card image cap">
                            <div class="card-body">
                                <span class="badge-box"><i class="fa fa-check"></i></span>
                                <h4 class="card-title">Licenciés</h4>
                                <hr>
                                <p class="card-text">Soyez à l’origine d’un projet d’engagement social et solidaire dans votre commune. Economisez de l’argent avec un système de cash-back harmonieux et équitable pour tous. Grâce aux achats dans les magasins partenaires, la pratique du sport ne devient plus une contrainte financière, mais un loisir indispensable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Link is used to scroll to form when user clicks on "soutenez-nous" button-->
        <a name="user-form"></a>
        <div class="soutien" id ="anchor-forms">
            <div class="container">
                <hr>
                <h1>
                    <i class="fa fa-paper-plane"></i>
                    <span>Soutenez-nous</span>
                </h1>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form_choice">
                            <div class="row">
                                <div class="col-md-4 user_type form-group">
                                    <label for="association_id">
                                        <img src="img/ic_aidez.png" alt="Association">
                                    </label>
                                    <input type="radio" name="user_type" id="association_id" value="Association">
                                </div>
                                <div class="col-md-4 user_type">
                                    <label for="commercant_id">
                                        <img src="img/ic_cagnottez.png" alt="Commerçant">
                                    </label>
                                    <input type="radio" name="user_type" id="commercant_id" value="Commercant">
                                </div>
                                <div class="col-md-4 user_type">
                                    <label for="licencie_id">
                                        <img src="img/ic_benefice.png" alt="licencie">
                                    </label>
                                    <input type="radio" name="user_type" id="licencie_id" value="Licencie">
                                </div>
                            </div>
                        </div>
                        <form name="licencieForm">
                            <?php
                                require('html/form-licencie.html');
                            ?>
                        </form>
                        <form name="commercantForm">
                            <?php
                                require('html/form-commercant.html');
                            ?>
                        </form>
                        <form name="associationForm">
                            <?php
                            require('html/form-association.html');
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer"></div>
      
        <!--Import jQuery before materialize.js-->
        <script type='text/javascript' src='node_modules/scrollreveal/dist/scrollreveal.min.js'></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
        <script type="text/javascript" src="js/lib/jquery.toast.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/app/script.js"></script>
        <script type="text/javascript" src="js/app/users.controller.js"></script>
        <script type='text/javascript' src='js/scroll.js'></script>

    </body>
</html>
