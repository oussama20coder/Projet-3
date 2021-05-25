<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>page d'inscription</title>
</head>
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
  
.login-div {
  width:330px;
  height: 550px;
  padding: 30px 35px 5px 35px;
  margin-left:450px;
  border-radius: 40px;
  background: #ecf0f3;
  box-shadow: 13px 13px 20px #cbced1,
              -13px -13px 20px #ffffff;
}
input,label {
    border: none;
  outline:none;
  background: none;
  font-size: 18px;
  color: #555;
  padding: 20px 5px 10px 5px;
  margin-bottom: 30px;
  border-radius: 25px;
  box-shadow: inset 8px 8px 8px #cbced1,
              inset -8px -8px 8px #ffffff;
  font-family:'Comic Sans MS', cursive;
        }

        button {
        cursor:pointer;
        border-radius:15px;
        padding:8px;
        background-color:#01091E;
        color:white;
        width:250px;
        

        }
    h1 {
        font-size:30px;
        font-family:'Odibee Sans', cursive;
        margin-left:40px
    }
</style>
<body>
<div class="login-div">

    <form action="affichage.php" target="_blank" method="post" >
    <h1>Formulaire d'inscription</h1>
        
        <input name="nom" type="text" placeholder="Nom"><br><br>
        
        <input name="prenom" type="text" placeholder="Prénom"><br><br>
    
        <input name="email" type="text" placeholder="Email"><br><br>
        <button type="submit">Enregistrer</button>
    </form>

 </div>
</body>
</html>