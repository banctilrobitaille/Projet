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

                    <?php

                    $prenom = $_POST['prenom'];
                    $nom = $_POST['nom'];
                    $email = $_POST['email'];

                    $token = $_POST['stripeToken'];

                    $customer = Stripe_Customer::create(array(
                        'email' => $email,
                        'card' => $token
                    ));

                    $charge = Stripe_Charge::create(array(
                        'customer' => $customer->id,
                        'amount' => 2000,
                        'currency' => "cad"
                    ));

                    echo'<center>';
                    echo '<h4 style="color: #88a65e">Votre abonnement à été complété avec succès avec les informations suivantes : </h4>';
                    echo '<h4>Prénom : '.$_POST['prenom'].'</h4>';
                    echo '<h4>Nom : '.$_POST['nom'].'</h4>';
                    echo '<h4>Adresse email : '.$_POST['email'].'</h4>';
                    echo '<h4>Merci!</h4>';
                    echo '<h4 style="color: #88a65e">Vous serez redirigé dans quelque instant vers la page d\'accueil.</h4>';
                    echo'</center>';

                    $query = "INSERT INTO $table (Prenom, Nom, Courriel) VALUES ('$prenom','$nom','$email')";
                    $result = mysql_query($query);

                    header( "refresh:7;url=Accueil.php" );
                    ?>

                </div>
            </div>
        </div>
        <div id="push"></div>
    </div>
    <?php
    include("Footer.php")
    ?>
    </body>
    </html>

