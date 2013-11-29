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

        $query = "SELECT * FROM Benevolat";
        $result = mysql_query($query);

        $row = mysql_fetch_array($result);

        ?>
        <div class="contenu border-radius">
            <?php echo "<center>".$row['Titre']."</center>" ?>
            <div class="row-fluid">
                    <div class="span8"><?php echo $row['Paragraphe'] ?>
                    </div>
                <div class="span4">
                    <center><img width="100%" src="img/Benevolat.jpg"/></center>
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
