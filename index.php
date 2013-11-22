
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
            <div class="contenu border-radius">
		        <div class="row-fluid">
			        <div class="span5"><h3>Bienvenue à VéloCentrix!</h3><p1>VéloCentrix est une entreprise d'économie sociale ayant pour mission de soutenir la culture du vélo urbain et utilitaire.<br/><br/> 						       Par des actions concrètes et des activités festives, l'organisme a comme objectif de faciliter l'accès au vélo pour tous dans la ville de Québec.<br/><br/>L'atelier 						       communautaire VéloCentrix existe pour offrir à tous les cyclistes les outils, le savoir, l'accès à un garage de mécanique-vélo et les conseils de mécanicien(s) 						       bénévole(s).</p1>
			        </div>
			        <div class="span4">
				        <div id="Carousel" class="carousel slide carousel-fade">
					        <ol class="carousel-indicators">
						        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
						        <li data-target="#Carousel" data-slide-to="1"></li>
						        <li data-target="#Carousel" data-slide-to="2"></li>
						        <li data-target="#Carousel" data-slide-to="3"></li>
					        </ol>
				            <div class="carousel-inner">
					            <div class="active item"><img width="100%" src="img/accueil.jpg"/></div>
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
                            <center><a href="actualite.php"><p><font color="black">Déménagement de l'atelier...</font></p></a></center>
                            <p><font size = "2">28/10/2013 </font></p>
                            </br>

                            <center><a href="actualite.php"><p><font color="black">Top 10 du Vélo Love</font></p></a></center>
                            <p><font size = "2">20/09/2013 </font></p>
                            </br>
                            <center><a href="actualite.php"><p><font color="black">Cavaliers de la pleine lune</font></p></a></center>
                            <p><font size = "2">16/09/2013 </font></p>
                            </br>

                            <center><a href="actualite.php"><p><font color="black">Parking Day Québec</font></p></a></center>
                            <p><font size = "2">16/09/2013 </font></p>
                            </br>

                            <center><a href="actualite.php"><p><font color="black">Pimp ton vélo</font></p></a></center>
                            <p><font size = "2">16/09/2013 </font></p>l
                            </br>

                        <div id="SideBar">
                            <center><p1><font color="white">Été 2013</font></p1></center>
                        </div>

			        </div>
                </div>
                <div style="background-image: url('img/body11.png'); border-radius: 5px;padding-bottom: 20px">
                <div class="row-fluid">
                    <div class="span12">
                        <Center><h3>---- Nouvel Événement 36 Octobre 2019 ----</h3></center>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <center><p>Évenement à ne pas manquer.Velocentrix akfasdklfhdjkshghdfkghdfjkghdfjkghfdhgjkdf</p>
                        <a href="#"><button type="button" class="btn btn-primary"><i class="icon-road icon-large">Inscription</i></button></a>
                        </center>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <Center><h3>---- Nouvel Événement 59 Septembre 2019 ----</h3></center>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <center><p>Évenement à ne pas manquer.Velocentrix akfasdklfhdjkshghdfkghdfjkghdfjkghfdhgjkdf</p>
                        <a href="#"><button type="button" class="btn btn-primary"><i class="icon-road icon-large">Inscription</i></button></a>
                        </center>
                    </div>
                </div>
                </div>
		    </div>

        </div>
        <div id="push"></div>
        </div>
        <?php
            include("Footer.html")
        ?>
    <script src="twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>
    <script src="twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script>
    <script src="twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-transition.js"></script>
    <script>
        $('#Carousel').carousel({ interval: 3000 })
    </script>

    </body>  
</html>

