<?php require_once('stripe.php'); ?>

    <html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>




    </head>
    <body>
    <div id="wrap">
        <div class="container-fluid">
            <?php
            include("Header.html");
            ?>

            <?php
            $host = "localhost";
            $user = "equipe2";
            $password = "equipe2abc";
            $bd = "a13equipe2";
            $table = "Membre";

            mysql_connect($host,$user,$password) or die ("Impossible de se connecter");
            mysql_select_db($bd) or die ("Impossible de se connecter à la base de données");

            ?>

            <div class="contenu border-radius">
                <div class="row-fluid">
                    <div class="span6">
                        <center>
                            <?php
                            if(!$_POST['prenom'] || !$_POST['nom'] || !$_POST['email'])
                            {
                                header('Location: Membre.php');
                            }
                            else{
                                echo('
                                          </br></br></br>
                                          <h4>Cliquez sur le bouton "Pay with card" pour effectuer le paiement</h4>
                                          </br>
                                          <form action="Charge.php" method="post">
                                          <input type="hidden" name="nom" value="'.$_POST['prenom'].'"/>
                                          <input type="hidden" name="prenom" value="'.$_POST['nom'].'"/>
                                          <input type="hidden" name="email" value="'.$_POST['email'].'"/>
                                          <script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
                                          data-key="'.$stripe['publishable_key'].'"data-description="Abonnement annuel"></script>
                                          </form>'
                                    );
                            }
                            ?>
                        </center>

                    </div>

                    <div class="span6">
                        <center>
                            <h2 style="color: #88a65e">Les avantages d'être membre de Vélocentrix</h2>
                            </br>
                            <h4>Des prix réduits sur les activités organisées par Vélocentrix</h4>
                            <h1 style="color: #88a65e">_______________</h1>
                            </br>
                            <h4>L'accès à l'atelier gratuitement durant les heures d'ouvertures</h4>
                            <h1 style="color: #88a65e">_______________</h1>
                            </br>
                            <h4>Avantage numéro 3</h4>
                        </center>
                    </div>
                </div>
            </div>
            l
        </div>
        <div id="push"></div>
    </div>
    <?php
    include("Footer.php")
    ?>
    </body>
    </html>