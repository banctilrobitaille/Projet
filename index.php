
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

            $query = "SELECT * FROM Accueil";
            $result = mysql_query($query);

            $row = mysql_fetch_array($result);

            ?>
            <div class="contenu border-radius">
		        <div class="row-fluid">
			        <div class="span5"><?php echo $row['Titre'].$row['Paragraphe'];?>
			        </div>
			        <div class="span4">

				        <div id="Carousel" class="carousel slide carousel-fade" data-ride="carousel">
					        <ol class="carousel-indicators">
						        <li class="active" data-slide-to="0" data-target="#Carousel" ></li>
						        <li class="" data-slide-to="1" data-target="#Carousel" ></li>
						        <li class="" data-slide-to="2" data-target="#Carousel" ></li>
						        <li class="" data-slide-to="3" data-target="#Carousel" ></li>
					        </ol>
				            <div class="carousel-inner">
					            <div class="item active"><img width="100%" class="border-radius" src="img/accueil.jpg"/></div>
					            <div class="item"><img width="100%" class="border-radius" src="img/image2.jpg"/></div>
					            <div class="item"><img width="100%" class="border-radius" src="img/image3.jpg"/></div>
					            <div class="item"><img width="100%" class="border-radius" src="img/image4.jpg"/></div>
				            </div>
		 		            <a class="carousel-control left" href="#Carousel" data-slide="prev">&lsaquo;</a>
		 		            <a class="carousel-control right" href="#Carousel" data-slide="next">&rsaquo;</a>
				        </div>

                    </div>

			        <div class="span3">
				        <div id="SideBarfirst">
					        <center><p1><font color="white">Actualités</font></p1></center>
                        </div>
                            <?php echo $row['Sidebar']?>
			        </div>
                </div>
                <div style="background-image: url('img/body11.png'); border-radius: 5px;padding-bottom: 20px">
                <div class="row-fluid">
                    <div class="span12">
                        <Center><h3>---- Nouvel Événement  ----</h3></center>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <center><p>Événement à ne pas manquer</p>
                        <a href="Inscription.php"><button type="button" class="btn btn-primary"><i class="icon-road icon-large">Inscription</i></button></a>
                        </center>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <Center><h3>---- Nouvel Événement ----</h3></center>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <center><p>Événement à ne pas manquer</p>
                        <a href="Inscription.php"><button type="button" class="btn btn-primary"><i class="icon-road icon-large">Inscription</i></button></a>
                        </center>
                    </div>
                </div>
                </div>
		    </div>

        </div>
        <div id="push"></div>
        </div>
        <?php
        include("Footer.php")
        ?>
    <script src="twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script>
    <script src="twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-transition.js"></script>
    <script>
        $('#Carousel').carousel();
    </script>

    </body>  
</html>


