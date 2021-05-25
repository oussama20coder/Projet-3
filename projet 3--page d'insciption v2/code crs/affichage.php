<?php
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $nom = [];
 $prenom= [];
 $email= [];



 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    $nom =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $nom;
 }

 if( isset( $_SESSION['prenom'] ) ) {
    $prenom =  $_SESSION['prenom'] ;
 }else {
    $_SESSION['prenom'] =  $prenom;
}

 if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['email'] ;
 }else {
    $_SESSION['email'] =  $email;
 }
 


 // Ajouter le nom du nom dans le tableau
 $nom[] = $_POST["nom"] ;
 $prenom[] = $_POST["prenom"] ;
 $email[] = $_POST["email"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $nom;
$_SESSION['prenom'] =  $prenom;
$_SESSION['email'] =  $email;
?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" media="print" href="media.css">
    <style>
*{
    box-sizing:border-box;
    
}
body{
    margin:0;
    height: 100vh;
    width:100vw;
    overflow:hidden;
    font-family:100vw;
    font-weight:700;
    display:flex;
    align-items:center;
    color:#555;
    background: #ecf0f3;

}


.formular {
  width:1030px;
  height: 550px;
  padding: 30px 35px 100px 150px;
  margin-left:120px;
  border-radius: 40px 4px 4px 40px;
  background: #ecf0f3;
  box-shadow: 13px 13px 20px #cbced1,
              -13px -13px 20px #ffffff;
  overflow-y:scroll;
 
}
::-webkit-scrollbar {
  width: 11px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 0px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #555; 
  border-radius: 10px;
}

#bt {
    cursor:pointer;
        border-radius:15px;
        padding: 5px;px;
        background-color:#01091E;
        color:white;
        width:80px;
    margin: 10px 30px 10px 100px;
    position: -webkit-sticky;
position: sticky;
top: 10px;
}
</style>
</head>



<body>


<div class="formular">
    <div class="row">
    <div class="col-md-3">
<h1>NOM</h1>
<ol>
    <?php
        foreach ($nom as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ol>
</div>
<div class="col-md-3">
<h1>PRENOM</h1>
<ol>
    <?php
        foreach ($prenom as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ol>
</div>
<div class="col-md-3">
<h1>EMAIL</h1>
<ol>
<?php
        foreach ($email as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?> 
   
</ol>
</div>
<div class="col-md-3">
  <button onclick="window.print ()" id="bt">imprimer</button>
 </div>
 </div>
</div>
</div>
</body>
</html>