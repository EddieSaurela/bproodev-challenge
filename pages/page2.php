<!Doctype html>
<html>
<?php

//include '../actions/signUpCreateur.php';

?>

<head>
    <title> Creaation d'une categorie </title>
    <link rel="stylesheet" type="text/css" href="../assets/page2style.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../assets/navchallenges.css">
    <link rel="stylesheet" href="../assets/footerchallenges.css">
</head>

<body>

    <div class="header">
        <h2 style="text-align:center;" id="titre2">Creer une nouvelle categorie </h2>
    </div>

    <form method="POST" action="../control/traitements2.php" id="form2">

        <div class="div">
            <label for="noms_categorie" class="form">Nom de la categorie*</label><br>
            <input type="text" name="noms_categorie" id="ch1" placeholder=" Nom de la categorie " id="form-control" required> <br>

        </div>

        <div class="div">
            <label for="description_categorie" class="form">Describtion de la categorie*</label> <br>
            <textarea name="description_categorie" id="ch2" placeholder=" Description de la categorie" required></textarea>
            </select> </p>

        </div>

        <!--  <div class="div" id="divbut">
            <a href="" id="link1" required> <input type="button" name="modifier_categorie" value=""> Modifier la categorie* </a> <br> <br>
        </div>

        <div class="div" id="divbut2">
            <a href="" id="link2" required> <input type="button" name="supprimer_categorie" value=""> Supprimer* </a> <br>
        </div> -->


        <p id="text2"> Ces champs sont obligatoires* </p>
        <button id="but2-champ" type="submit"> Applique </button>


    </form>

</body>

</html>