

<footer>
    <?php
     $query = "SELECT * FROM Footer";
     $result = mysql_query($query);
     $row = mysql_fetch_array($result);
     ?>
    <div id="footer" style="position:relative">
	    <div class="row-fluid">

                    <div class="span4">
                        <center>
                                <h4 style="position: relative;"><font color="white">Partenaires et Commanditaires</font></h4>
                                <div style="position: relative;margin-top:15px">
                                    <a style="padding-right: 10px" href="http://www.cjc.reseauforum.org/"><img width="150px" height="150px" src="img/cjc.png"/></a>
                                    <a style="padding-right: 10px" href="http://enjeu.qc.ca/-Action-Citoyenne-a-Velo-.html"><img width="150px" height="150px" src="img/actioncitoyenne.png"/></a>
                                    </br>
                                    <a style="padding-right: 10px" href="http://www.craquebitume.org/"><img width="150px" height="150%" src="img/craquebitume.png"/></a>
                                    <a style="padding-right: 10px" href="http://www.desjardins.com/fr/votre_caisse/accueil.jsp?transit=81520366"><img  width="150px" height="150px" src="img/desjardins.gif"/></a>
                                </div>
                        </center>
                    </div>

                    <div class="span4">
                        <center><?php echo $row['Titre'];?>
                            </br>
                            <?php echo $row['Paragraphe'];?>
                            </br></br></br>
<!--                            <a href="Plan.php"><button style="text-align: center;" type="button" class="btn btn-primary"><i class="icon-sitemap icon-large">Plan du site</i></button></a>-->
                        </center>


                    </div>


                    <div class="span4">
                        <center>
                            <h4 style="position: relative;"><font color="white">Où sommes-nous?</font></h4>
                            <iframe width="80%" height="25%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.ca/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=798,+12e+rue,+Qu%C3%A9bec,+Qu%C3%A9bec,+G1J+2M8&amp;aq=&amp;sll=46.740331,-71.236038&amp;sspn=0.423034,0.847321&amp;g=L%C3%A9vis,+QC&amp;ie=UTF8&amp;hq=&amp;hnear=798+12e+Rue,+Qu%C3%A9bec,+Communaut%C3%A9-Urbaine-de-Qu%C3%A9bec,+Qu%C3%A9bec+G1J&amp;t=m&amp;ll=46.830838,-71.227112&amp;spn=0.046977,0.136986&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="./nousjoindre.php" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
                        </center>
                    </div>

        </div>

    </div>
</footer>

