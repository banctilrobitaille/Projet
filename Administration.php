
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
<?php
session_start();
$host = "localhost";
$user = "equipe2";
$password = "equipe2abc";
$bd = "a13equipe2";

mysql_connect($host,$user,$password) or die ("Impossible de se connecter");
mysql_select_db($bd) or die ("Impossible de se connecter à la base de données");

if($_POST['Query'] == "Deconnexion")
{
    session_destroy();
    header ("Location: login.php");
}

if($_POST['Authentification'])
{
    $username = mysql_real_escape_string($_POST['user']);
    $password = mysql_real_escape_string(md5($_POST['password']));
    $query ="SELECT * FROM Utilisateurs WHERE Utilisateur='$username' AND Password='$password'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    if($row < 1)
    {
        header ("Location: login.php");
    }
    else
    {
        session_start();
        $_SESSION['Utilisateur'] = $username;
    }
}
elseif(!$_SESSION['Utilisateur']){
    header ("Location: login.php");
}

?>
<div id="wrap">
    <div class="container-fluid">
        <?php
        include("Header.html");
        ?>
        <div class="contenu border-radius">
            <?php
            if($_POST['modif'])
            {   $table = $_POST['modif'];
                if($_POST['editor1']){
                $contenu = $_POST['editor1'];
                $query = "UPDATE $table SET Titre='$contenu' WHERE idContenu=1";
                mysql_query($query);
                }
                elseif($_POST['editor2']){
                    $contenu = $_POST['editor2'];
                    $query = "UPDATE $table SET Paragraphe='$contenu' WHERE idContenu=1";
                    mysql_query($query);
                }
                else{
                    $contenu = $_POST['editor3'];
                    $query = "UPDATE $table SET Sidebar='$contenu' WHERE idContenu=1";
                    mysql_query($query);
                }
            }
                if($_POST['ajoutertable'])
                {
                    if($_POST['nom'] && $_POST['passe'])
                    {
                        $table = $_POST['ajoutertable'];
                        $Utilisateur=$_POST['nom'];
                        $Password = md5($_POST['passe']);
                        $query = "INSERT INTO $table (Utilisateur,Password) VALUES ('$Utilisateur','$Password')";
                        mysql_query($query);
                        echo "<center><h3 style='color: green;'>--Ajout Complété--</h3></center>";
                    }
                    else{
                        echo "<center><h3 style='color: red;'>--OUPS IL MANQUE DES INFORMATIONS--</h3></center>";
                    }
                }
                elseif($_POST['supprimertable'])
                {
                        $table = $_POST['supprimertable'];
                    if($_POST['nom'] && $_POST['passe'])
                    {
                        $Utilisateur = $_POST['nom'];
                        $Password = md5($_POST['passe']);
                        $query = "SELECT * FROM $table WHERE Utilisateur='$Utilisateur' AND Password='$Password'";
                        $result = mysql_query($query);
                        $row = mysql_fetch_array($result);
                        if($row > 0)
                        {
                            $query = "DELETE FROM $table WHERE Utilisateur='$Utilisateur' AND Password='$Password'";
                            mysql_query($query);
                            echo "<center><h3 style='color: green;'>--Suppression Complétée--</h3></center>";
                        }
                        else{
                            echo "<center><h3 style='color: red;'>--Vous avez entré un mauvais mot de passe--</h3></center>";
                        }
                    }
                    else{
                        echo "<center><h3 style='color: red;'>--OUPS IL MANQUE DES INFORMATIONS--</h3></center>";
                    }
                }
                elseif($_POST['modifiertable'])
                {
                        $table = $_POST['modifiertable'];
                    if($_POST['nom'] && $_POST['ancien'] && $_POST['nouveau'])
                    {
                        $Utilisateur = $_POST['nom'];
                        $Password = md5($_POST['ancien']);
                        $Nouveau = md5($_POST['nouveau']);
                        $Confirmation = md5($_POST['confirmation']);
                        if($Nouveau == $Confirmation){
                            $query = "SELECT * FROM $table WHERE Utilisateur='$Utilisateur' AND Password='$Password'";
                            $result = mysql_query($query);
                            $row = mysql_fetch_array($result);
                            if($row > 0)
                            {
                                $query = "UPDATE $table SET Password='$Nouveau' WHERE Utilisateur='$Utilisateur'";
                                mysql_query($query);
                                echo "<center><h3 style='color: green;'>--Mise à jour Complétée--</h3></center>";
                            }
                        }
                        else{
                            echo "<center><h3 style='color: red;'>--Confirmation de mot de passe incorrect--</h3></center>";
                        }
                    }
                    else{
                        echo "<center></center><h3 style='color: red;'>--OUPS IL MANQUE DES INFORMATIONS--</h3></center>";
                    }
            }
            echo "<center><h3>".$_POST['Query']."</h3></center>";
            echo "<div class='row-fluid'>";
            if($_POST['Query'] == "Gestion des accès administrateurs")
            {
                $table = "Utilisateurs";
                $query = "SELECT * FROM $table";
                $result = mysql_query($query);

                echo"<div class='span3'>
                    <div style='background-color: #8C2318; border-radius: 5px;padding: 20px; color: #ffffff;'>
                <form action='Administration.php' method='POST' name='Ajout'>
                 <h4>Ajouter un administrateur</h4><br/>
                 <h5>Nom d'utilisateur:</h5><input type='text'name='nom'/>
                 <h5>Mot de passe:</h5><input type='text' name='passe'/>
                 <input type='hidden' name='ajoutertable'value='Utilisateurs'/>
                 <input  type='hidden' name='Query' value='Gestion des accès administrateurs'/>
                 <input style='margin-top: 15px;' class='btn' id='boutonadmin' type='submit' name='ajouter' value='Ajouter un administrateur'/>
                 </form></div></div>";
                echo"<div class='span3'>
                    <div style='background-color: #8C2318; border-radius: 5px;padding: 20px; color: #ffffff'>
                <form action='Administration.php' method='POST' name='Supression'>
                 <h4>Supprimer un administrateur</h4><br/>
                 <h5>Nom d'utilisateur:</h5><select name='nom'>";while($row = mysql_fetch_array($result)){echo"<option value='".$row['Utilisateur']."'>". $row['Utilisateur'] . "</option>";} echo "</select>
                 <h5>Mot de passe:</h5><input type='text' name='passe'/>
                 <input type='hidden' name='supprimertable'value='Utilisateurs'/>
                 <input  type='hidden' name='Query' value='Gestion des accès administrateurs'/>
                 <input style='margin-top: 15px;' class='btn' id='boutonadmin' type='submit' name='supprimer' value='Supprimer'/>
                 </form></div></div>";
                echo"<div class='span3'>
                    <div style='background-color: #8C2318; border-radius: 5px;padding: 20px; color: #ffffff'>
                <form action='Administration.php' method='POST' name='Modification'>
                 <h4>Modifier un mot de passe</h4><br/>
                 <h5>Nom d'utilisateur:</h5><select name='nom'>";$result = mysql_query($query); while($row = mysql_fetch_array($result)){echo"<option value='".$row['Utilisateur']."'>". $row['Utilisateur'] . "</option>";} echo "</select>
                 <h5>Ancient mot de passe</h5><input type='text' name='ancien'/>
                 <h5>Nouveau mot de passe:</h5><input type='text' name='nouveau'/>
                 <h5>Confirmation:</h5><input type='text' name='confirmation'/></br>
                 <input type='hidden' name='modifiertable'value='Utilisateurs'/>
                 <input  type='hidden' name='Query' value='Gestion des accès administrateurs'/>
                 <input style='margin-top: 15px;' class='btn' id='boutonadmin' type='submit' name='modifier' value='Modifier le mot de passe'/>
                 </form></div></div>";
            }
            elseif($_POST['Query'] == "Proposition" || $_POST['Action']){
                $query = "SELECT * FROM Proposition";
                $result = mysql_query($query);
                $row = mysql_fetch_array($result);
                if($row > 0){
                    $result = mysql_query($query);
                echo "<div class='span9'>
                <form action='Administration.php' method='POST'>";
                 if(!$_POST['Suppression']){echo "<h5> Listes des propositions:</h5><select style='width: 100%;' name='proposition'>";while($row = mysql_fetch_array($result)){echo"<option value='".$row['idProposition']."'>"."<strong>Prénom:</strong>".$row['Prenom']."  Nom:".$row['Nom']."  Date:".$row['Temps']."  Sujet:".$row['Sujet']."</option>";} echo "</select>";}
                    if($_POST['Action'] && !$_POST['Suppression']){
                        $id = $_POST['proposition'];
                        $query = "SELECT * FROM Proposition WHERE idProposition='$id'";
                        $result = mysql_query($query);
                        $row = mysql_fetch_array($result);
                        $nom = $row['Nom'];
                        $prenom = $row['Prenom'];
                        $sujet = $row['Sujet'];
                        $date = $row['Temps'];
                        $proposition = $row['Proposition'];
                        $courriel = $row['Courriel'];
                        echo"<div class='span2'><center><h5>Prenom:</h5>".$prenom."</center></div><div class='span2'><center><h5>Nom:</h5>".$nom."</center></div>
                             <div class='span2'><center><h5>Courriel:</h5>".$courriel."</center></div><div class='span3'><center><h5>Date:</h5>".$date."</center></div>
                             <div class='span9'><h5>Sujet:</h5>".$sujet."</div>";
                        echo "<textarea style='width: 100%;height: 10%;'>".$proposition."</textarea>";
                        echo"<form action='Administration.php' method='POST'>
                             <center>
                             <input type='hidden' name='Suppression' value='".$id."'/>
                             <input class='btn' id='boutonadmin' style='margin-bottom: 30px;' type='submit' name='Action' value='Supprimer la proposition'/></center></form>";
                    }
                    elseif($_POST['Action'])
                    {
                        $id = $_POST['Suppression'];
                        $query="DELETE FROM Proposition WHERE idProposition='$id'";
                        mysql_query($query);
                        $query = "SELECT * FROM Proposition";
                        $result = mysql_query($query);
                        echo "<h5> Listes des propositions:</h5><select style='width: 100%;' name='proposition'>";while($row = mysql_fetch_array($result)){echo"<option value='".$row['idProposition']."'>"."<strong>Prénom:</strong>".$row['Prenom']."  Nom:".$row['Nom']."  Date:".$row['Temps']."  Sujet:".$row['Sujet']."</option>";} echo "</select>";
                        echo "<center><h5 style='color: green;'>Proposition supprimée avec succès!</h5></center>";
                    }
                 echo "<center><input class='btn' id='boutonadmin' type='submit' name='Action' value='Consulter la proposition'/></center></form>
                 </div>";
                }
                else{
                    echo "<div class='span9'><center><h4>Il n'y a pas de propositions</h4></center></div>";
                }
            }
            elseif($_POST['Query'])
                {
                    $table = $_POST['Query'];
                    $query = "SELECT * FROM $table WHERE idContenu=1";
                    $result = mysql_query($query);
                    $row = mysql_fetch_array($result);
                    echo "<div class='span4'>";
                    echo "<h5>Titre</h5>";
                    echo "<form action='Administration.php' method='POST'>";
                       echo "<textarea cols='80' id='editor1' name='editor1' rows='10'>";
                        echo $row['Titre'];
                        echo "</textarea>";
                        echo "<script>";
                echo "CKEDITOR.replace( 'editor1' );";
                        echo "</script>";
                    echo"<center><input style='margin-top: 30px' class='btn' id='boutonadmin' type='submit' name='modifiertitre' value='Modifier le contenu'/></center>";
                    echo"<input  type='hidden' name='modif' value='".$table."'/></form>";
                    if($_POST['Query'] == 'Accueil' || $_POST['Query'] == 'Ateliers'){
                    echo "<h5>SideBar</h5>
                    <form action='Administration.php' method='POST'>
                    <textarea cols='80' id='editor3' name='editor3' rows='10'>";
                    echo $row['Sidebar'];
                    echo "</textarea>
                        <script>";
                    echo "CKEDITOR.replace( 'editor3' );";
                    echo "</script>";
                    echo "<center><input style='margin-top: 30px' class='btn' id='boutonadmin' type='submit' name='modifierside' value='Modifier le contenu'/></center>";
                    echo "<input  type='hidden' name='modif' value='".$table."'/></form>";
                    }
                        echo "</div>";
                    echo "<div class='span5'>";
                    echo "<h5>Paragraphe</h5>";
                    echo "<form action='Administration.php' method='POST'>";
                    echo "<textarea cols='80' id='editor2' name='editor2' rows='10'>";
                    echo $row['Paragraphe'];
                    echo "</textarea>";
                    echo "<script>";
                    echo "CKEDITOR.replace( 'editor2' );";
                    echo "</script>";
                    echo"<center><input style='margin-top: 30px' class='btn' id='boutonadmin' type='submit' name='modifierpara' value='Modifier le contenu'/></center>";
                    echo"<input  type='hidden' name='modif' value='".$table."'/></form>";
                    echo "</div>";
                    }
                else{
                    echo "<div class='span9'>
                    <center><h3>Bienvenue dans la section administration</h3></center>
                    <center><img src='img/administration.jpg'/></center>
                </div>";
                }?>
                <div class='span3'>
                    <div id='SideBarfirst'>
                        <center><h5><font color='white'>Pages modifiables</font></h5></center>
                    </div>
                        <form action='Administration.php' method='POST'><input  type='hidden' name='Query' value='Accueil'/><input class='btn' id='boutonadmin' type='submit' name='Accueil' value='Accueil'/></form><br/>
                        <form action='Administration.php' method='POST'><input  type='hidden' name='Query' value='Ateliers'/><input class='btn'  id='boutonadmin' type='submit' name='Atelier' value='Atelier de vélo'/></form><br/>
                        <form action='Administration.php' method='POST'><input  type='hidden' name='Query' value='Informations'/><input class='btn'  id='boutonadmin' type='submit' name='Informations' value='Informations'/></form><br/>
                    <form action='Administration.php' method='POST'><input  type='hidden' name='Query' value='Benevolat'/><input class='btn'  id='boutonadmin' type='submit' name='Benevolat' value='Bénévolat'/></form><br/>
                    <form action='Administration.php' method='POST'><input  type='hidden' name='Query' value='Footer'/><input class='btn'  id='boutonadmin' style='margin-bottom: 20px;' type='submit' name='Footer' value='Footer'/></form>
                    <div id='access'>
                        <center><h5><font color='white'>Administration des accès</font></h5></center>
                    </div>
                    <form action='Administration.php' method='POST'><input  type='hidden' name='Query' value='Gestion des accès administrateurs'/><input class='btn' id='boutonadmin' type='submit' name='Ajout' value='Ajouter ou modifier un utilisateur'/></form><br/>
                    <div id='proposition'>
                        <center><h5><font color='white'>Propositions</font></h5></center>
                    </div>
                    <form action='Administration.php' method='POST'><input  type='hidden' name='Query' value='Proposition'/><input class='btn' id='boutonadmin' type='submit' name='Consultation' value='Consulter les propositions'/></form><br/>
                    <div id='deconnexion'>
                        <center><h5><font color='white'>Déconnexion</font></h5></center>
                    </div>
                    <form action='Administration.php' method='POST'><input  type='hidden' name='Query' value='Deconnexion'/><input class='btn' id='boutonadmin' type='submit' name='Deconnexion' value='Déconnexion'/></form><br/>
                    <?php if($_POST['Query'] && $_POST['Query'] != "Gestion des accès administrateurs" && $_POST['Query'] != "Proposition")
                    {
                        echo "<h5>Quoi modifier ?</h5>";
                        echo "<a class='fancybox' rel='group' href='img/".$_POST['Query'].".png'><img src='img/".$_POST['Query'].".png' alt='' /></a>";
                    }?>
                    </div>

                <script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
                <link rel='stylesheet' href='fancybox/source/jquery.fancybox.css?v=2.1.5' type='text/css' media='screen' />
                <script type='text/javascript' src='fancybox/source/jquery.fancybox.pack.js?v=2.1.5'></script>
                <script type='text/javascript'>
                $(document).ready(function() {
                    $('.fancybox').fancybox();
                });
                </script>


        </div>

    </div>
    <div id="push"></div>
</div>
<?php
include("Footer.php")
?>

</body>
</html>


