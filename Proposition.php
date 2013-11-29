<html xmlns="http://www.w3.org/1999/html">
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
        $table = "Proposition";

        mysql_connect($host,$user,$password) or die ("Impossible de se connecter");
        mysql_select_db($bd) or die ("Impossible de se connecter à la base de données");

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $time = time(); $date = date('Y-m-d H:i:s',$time);
        $proposition = $_POST['proposition'];

        ?>

        <div class="contenu border-radius">
            <div class="row-fluid">

                <div class="span2">

                </div>

                <div class="span8">
                    <center>
                        <h1 style="color: #88a65e">Vous voulez nous proposer un événement?</h1>

                        <h4>Remplissez les informations ci-dessous et cliquez sur soumettre. Nous étudierons par la suite votre proposition. Merci!</h4>
                    </center>
                        <form action="Proposition.php" method="POST">
                            <center>
                                <h4>
                                    Prénom : <input style="height: 28" type="text" name="prenom">
                                    Nom : <input style="height: 28" type="text" name="nom">
                                </h4>
                                <h4> Courriel : <input style="height: 28; width:475px" type="text" name="email"></h4>
                                </br>
                            </center>

                            <h4>Sujet : <input style="height: 28" type="text" name="sujet"></h4>
                            <textarea style="width: 100%" name="proposition" rows="10"></textarea>
                            </br>
                            <p style="text-align: right"><input type="submit" class="btn btn-primary" value="Soumettre"></p>
                        </form>

                    <?php
                    if($prenom && $nom && $email && $sujet && $proposition)
                        {
                        $query = "INSERT INTO $table (Prenom, Nom, Courriel, Sujet, Proposition,Temps) VALUES ('$prenom','$nom','$email','$sujet','$proposition','$date')";
                        mysql_query($query);
                        echo "<p style='color: green'>Votre proposition d'événement a bien été envoyé. Merci</p>";
                        }
                    else
                        {
                        echo "<p style='color: red'>Tous les champs sont requis.</p>";
                        }

                    ?>


                </div>

                <div class="span2">

                </div>

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


