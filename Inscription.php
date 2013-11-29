<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
    <script src="ckeditor/ckeditor.js"></script>
    <link href="ckeditor/samples/sample.css" rel="stylesheet">



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

        mysql_connect($host,$user,$password) or die ("Impossible de se connecter");
        mysql_select_db($bd) or die ("Impossible de se connecter à la base de données");

        $query = "SELECT * FROM Inscription";
        $result = mysql_query($query);

        $row = mysql_fetch_array($result);

        ?>
        <div class="contenu border-radius">
            <div class="row-fluid">

                <div class="span6">
                    <center><h1 style="color: #88a65e">Inscription au événements</h1></center>
                    <h4>Afin de compléter votre inscription à un événement quelquonque, il suffit de remplir le formulaire
                        que vous trouverez ci-contre. Tous les champs sont requis. Il vous faudra choisir le bon événement
                        parmis la liste déroulante.</h4>
                    <h4>Merci!</h4>
                </div>

                <div class="span6">
                    <center><h1 style="color: #88a65e">Formulaire</h1></center>
                    <form action="Inscription.php" method="POST">
                            <h4>
                                Prenom : <input style="height: 28" type="text" name="prenom">
                                Nom : <input style="height: 28" type="text" name="nom">
                            </h4>
                            <h4> Courriel : <input style="height: 28; width:475px" type="text" name="email"></h4>
                            </br>
                            <center>
                                <select name="evenement" size="1">
                                    <option>lundi
                                </select>
                            </center>

                            </br>

                            <center>
                                <input type="submit" class="btn btn-primary" value="S'inscrire">
                            </center>
                    </form>
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


