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

        mysql_connect($host,$user,$password) or die ("Impossible de se connecter");
        mysql_select_db($bd) or die ("Impossible de se connecter à la base de données");

        $query = "SELECT * FROM Informations";
        $result = mysql_query($query);

        $row = mysql_fetch_array($result);

        ?>
        <div class="contenu border-radius">
            <div class="row-fluid">

                <div class="span3">
                    <center>
                        <?php echo $row['Titre'] ?>
                        </br>
                        <?php echo $row['Paragraphe'] ?>
                        </br>
                        <a href="https://www.google.ca/maps?q=798,+12e+rue,+Qu%C3%A9bec,+G1J+2M8&hl=fr&ie=UTF8&ll=46.82846,-71.226833&spn=0.012684,0.026479&sll=46.79095,-71.117575&sspn=0.406183,0.847321&hnear=798+12e+Rue,+Qu%C3%A9bec,+Communaut%C3%A9-Urbaine-de-Qu%C3%A9bec,+Qu%C3%A9bec+G1J&t=m&z=16"
                           style="color:#88a65e;">Lien vers google maps</a>
                    </center>
                </div>


                <div class="span9">
                    <center>
                        <h1 style="position: relative;"><font color="#88a65e">Localisation</font></h1>
                        </br>
                        <iframe width="100%" height="75%" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0" src="https://www.google.ca/maps?f=q&amp;source=s_q&amp;
                                hl=fr&amp;geocode=&amp;q=798,+12e+rue,+Qu%C3%A9bec,+Qu%C3%A9bec,+G1J+2M8&amp;
                                aq=&amp;sll=46.740331,-71.236038&amp;sspn=0.423034,0.847321&amp;g=L%C3%A9vis,+QC&amp;
                                ie=UTF8&amp;hq=&amp;hnear=798+12e+Rue,+Qu%C3%A9bec,+Communaut%C3%A9-Urbaine-de-Qu%C3%A9bec,+Qu%C3%A9bec+G1J&amp;
                                t=m&amp;ll=46.830838,-71.227112&amp;spn=0.046977,0.136986&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>
                    </center>
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


