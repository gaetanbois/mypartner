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
        <link rel="stylesheet" href="/node_modules/bxslider/dist/jquery.bxslider.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body ng-app="app" ng-controller="UsersController as uc">

        <div class="home">
            <div class="navbar-fixed">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <a class="navbar-brand" href="#"><img id="logo-nav" src="img/Logo_MyPartner_white.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#qui-sommes-nous">Qui sommes nous ?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#comment-ça-marche">Comment ça marche ?</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="#clients">Pour qui ?</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="#partenaires">Nos partenaires</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="text-home">
                <img id="logo-home" src="img/Logo_MyPartner.png" alt="Logo MyPartner Blanc">
                <h1>Vous voulez changer le monde ? <br>
                    Ne changez rien...</h1>
                <button type="button" class="btn btn-primary btn-lg soutenez-nous" id="soutenez-nous">Soutenez-nous !</button>
                <section id="fleche-soutenez-nous" class="demo">
                    <a href=""><span></span></a>
                </section>
            </div>
        </div>


        <div class="presentation" id="qui-sommes-nous">
            <div class="container">
                <h2>Qui sommes-nous ?</h2>
                <hr>
                <p id="text-presentation">
                    My Partner est la solution qui finance le sport amateur & l'aide à se développer !
                </p>
            </div>
        </div>
        <div class="fonctionnement" id="comment-ça-marche">
            <div class="container">
                <h2>Comment ça marche ?</h2>
                <hr>
                <div class="row">
                    <div class="col">
                        <img class="icone-f" src="img/ic_aidez.png" alt="Icone d'aide">
                        <h3>AIDE</h3>
                        <p class="text-fonctionnement">
                            Je choisis l'association sportive que mes commerçants partenaires sponsorisent.
                        </p>
                    </div>
                    <div class="col">
                        <img class="icone-f" src="img/ic_cagnottez.png" alt="Icone de Cagnotte">
                        <h3>CAGNOTTE</h3>
                        <p class="text-fonctionnement">
                            Cumule tes gains sur ton compte bancaire et finance l'activité sportive de ton choix.
                        </p>
                    </div>

                    <div class="col">
                        <img class="icone-f" src="img/ic_benefice.png" alt="Icone de bénéfice">
                        <h3>BÉNÉFICE</h3>
                        <p class="text-fonctionnement">
                            Récupère 5 à 30% de tes dépenses auprès de nos commmerçants partenaires.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="clic-form">
            <div class="soutenez-nous">
                <h2 id="phrase-accroche">Si toi aussi tu penses qu'acheter malin peut améliorer ton quotidien</h2>
                <a><button type="button" class="btn btn-primary btn-lg soutiens-nous">Soutiens-nous !</button></a>
            </div>
        </div>



        <div class="clients" id="clients">
            <div class="container">
                <h2>Pour qui ?</h2>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="card card-01">
                            <img class="card-img-top" src="img/Visu_sportif.jpg" alt="Card image cap">
                            <div class="card-body">
                                <span class="badge-box"><i class="fa fa-check"></i></span>
                                <h4 class="card-title">Licenciés</h4>
                                <hr>
                                <p class="card-text">
                                    Soyez à l’origine d’un projet d’engagement social et solidaire dans
                                    votre commune. Economisez de l’argent avec un système de cash-back harmonieux et
                                    équitable pour tous. Grâce aux achats dans les magasins partenaires, la pratique du
                                    sport ne devient plus une contrainte financière, mais un loisir indispensable.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-01">
                            <img class="card-img-top" src="img/Visu_asso.jpg" alt="Card image cap">
                            <div class="card-body">
                                <span class="badge-box"><i class="fa fa-check"></i></span>
                                <h4 class="card-title">Associations</h4>
                                <hr>
                                <p class="card-text">
                                    Plus de budget et moins de contraintes pour pérénniser votre vie associative.
                                    My Partner vous permettra de générer de nouvelles sources de revenus afin de fidéliser
                                    les adhérents de votre association grâce au financement de nouveaux projets sportifs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-01">
                            <img class="card-img-top" src="img/Visu_commercant.jpg" alt="Card image cap">
                            <div class="card-body">
                                <span class="badge-box"><i class="fa fa-check"></i></span>
                                <h4 class="card-title">Commerçants</h4>
                                <hr>
                                <p class="card-text">
                                    Boostez votre business sans vous engager financièrement. Développez votre clientèle,
                                    fidélisez-la et faites prospérer votre commerce grâce au partenariat MyPartner.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="application">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img id="mockup" src="img/iphone-mypartner.png" alt="iphone mypartner">
                    </div>
                    <div class="col applilogo">

                        <h3>Application bientôt disponible !</h3>
                        <hr>
                        <p>Rejoignez MyPartner, la plateforme sociale indispensable de l’univers sportif.<br><br>
                            Le processus Win-Win pour chacunes des parties permet d’offrir un cercle vertueux et bénéfique.<br><br>
                            L’application MyPartner permet de simplifier vos interactions et de voir votre cagnotte évoluer après chaque achat.
                        </p>
                        <img class="logoappli" src="img/appstore.png" alt="logo appli apple">
                        <img class="logoappli" src="img/google.png" alt="logo appli google">
                    </div>
                </div>
            </div>
        </div>


        <div class="titlepartner">
            <h2>ILS NOUS FONT CONFIANCE</h2>
        </div>
        <div class="soutiens" id="partenaires">
            <div class="container">
                <h2>Nos partenaires</h2>
                <hr>
                <div class="row">
                    <div class="col">
                        <img src="img/ic_partner1.png" alt="logo equipes">
                        <h3>US Maubeuge</h3>
                        <hr class="small">
                        <p class="citation">
                            "Notre objectif est clair, il faut trouver les 40K€ supplémentaire pour boucler notre budget,
                            sinon on court droit à la catastrophe".
                        </p>
                    </div>
                    <div class="col">
                        <img src="img/ic_partner2.png" alt="logo equipes">
                        <h3>ADAPT & FORM</h3>
                        <hr class="small">
                        <p class="citation">
                            "Des subventions ou aide financière de la part de sponsors qui régleraient
                            pas mal de nos problèmes, notamment celui de la communication et nous aideraient à nous développer."
                        </p>
                    </div>
                    <div class="col">
                        <img src="img/ic_partner3.png" alt="logo equipes">
                        <h3>RC ARDRES</h3>
                        <hr class="small">
                        <p class="citation">
                            "Essayer de réduire nos dépenses ou faire des économies sur nos achats, aller chercher des
                            sponsors pour continuer notre développement et faire attention à la bonne répartition des
                            terrains pour le confort de nos licenciés."
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="bxslider">
                <li><img src="img/cora.png" /></li>
                <li><img src="img/boulangerie.png" /></li>
                <li><img src="img/leclerc.png" /></li>
                <li><img src="img/keepcool.png" /></li>
            </ul>
        </div>
        <div class="rosace">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="img/rosace-final.png" width="434" height="400" usemap="#rosace-final" border="0"
                             id="rosace">
                        <map name="rosace-final">
                            <area shape="poly" coords="170,255,169,281,176,308,184,328,192,343,208,361,217,369,194,385,
                                                       166,396,130,400,101,396,72,386,43,367,24,346,10,318,1,288,1,259,
                                                       1,238,14,206,35,176,58,157,85,144,86,163,96,187,108,208,125,227,
                                                       143,242,159,252,171,255,170,255"
                                  id="commercant_rosace">
                            <area shape="poly" coords="85,143,85,113,94,80,107,55,127,33,152,15,184,3,214,0,245,3,282,
                                                       16,309,37,330,62,343,88,348,115,348,142,323,137,294,135,262,141,
                                                       239,151,216,166,195,149,160,137,132,135,111,137,84,143,84,143"
                                  id="association_rosace">
                            <area shape="poly" coords="263,255,263,255,285,245,304,231,319,216,332,198,339,183,345,166,
                                                       348,143,370,152,390,168,403,183,418,202,425,222,431,244,433,264,
                                                       432,285,429,307,417,332,404,351,387,369,366,383,333,397,309,400,
                                                       277,398,257,393,232,379,216,369,239,346,254,321,261,297,265,267,
                                                       263,254"
                                  id ="licencie_rosace">
                        </map>
                    </div>
                    <div class="col">
                        <div id="text_rosace_licencie">
                            Le texte que l'on souhaite afficher ici pour le licencié
                        </div>
                        <div id="text_rosace_commercant">
                            Le texte du commerçant à faire apparaître
                        </div>
                        <div id="text_rosace_association">
                            Et ici le texte pour l'association
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Link is used to scroll to form when user clicks on "soutenez-nous" button-->
        <a name="user-form"></a>
        <div class="soutien" id ="anchor-forms">
            <div class="container">
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
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="/node_modules/bxslider/dist/jquery.bxslider.min.js"></script>
        <script type='text/javascript' src='node_modules/scrollreveal/dist/scrollreveal.min.js'></script>
        <script type="text/javascript" src="js/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
        <script type="text/javascript" src="js/lib/jquery.toast.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
                integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
                integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="js/app/script.js"></script>
        <script type="text/javascript" src="js/app/users.controller.js"></script>
        <script type='text/javascript' src='js/scroll.js'></script>

    </body>
</html>
