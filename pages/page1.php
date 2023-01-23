<?php
//include_once '../actions/signUpCreateur.php';

?>


<html>

<head>
    <title> Creaation de Challenge </title>
    <link rel="stylesheet" href="../assets/page1style.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../assets/navchallenges.css">
    <link rel="stylesheet" href="../assets/footerchallenges.css">
</head>

<body>

    <div class="header">
        <h2 style="text-align:center;" id="titre1">Creer un nouveau challenge</h2>
    </div>

    <form method="POST" action="../control/traitements1.php" enctype="multipart/form-data" id="form1">

        <div class="div1">
            <label for="titre_challenge" class="form">Titre du challenge*</label> <br>
            <input type="text" id="input1" class="form" name="titre_challenge" placeholder=" Titre du challenge " class="form-control" required><br>

        </div>

        <div class="div1">
            <label for="timing_challenge" class="form">Quel est la duree de votre challenge*</label> <br>
            <input type="text" id="input2" class="form" name="timing_challenge" placeholder=" Duree estimatif du challenge" class="form-control" required>
        </div>


        <div class="div1">
            <label for="niveau_challenge" class="form">Selectionne le niveau du challenge*</label> <br>
            <select name="niveau_challenge" class="form" id="level" placeholder=" Niveau du challenge" required>
                <option value="Faible" name="niveau_challenge"> Faible </option>
                <option value="Moyen" name="niveau_challenge"> Moyen </option>
                <option value="Avance" name="niveau_challenge"> Avance </option>
            </select> </p>

        </div>

        <div class="div1">
            <label for="insertion_imagechallenge" class="form">Inserer l'image ou la maquette de votre challenge*</label> <br>
            <input type="file" class="form" name="insertion_imagechallenge" id="input4" multiple accept=".jpg,.doc,.docx,application/msword,
             application/vnd.openxmlformats-officedocument.wordprocessingml.document,
            image/*,.pdf,audio/*, video/*" placeholder="images ou maquettes du challenge (png.., jpg)" required class="form-control">
        </div>


        <div class="div1">
            <label for="insertion_resourcechallenge" class="form"> Inserez une resource utile a la comprehension de votre
                challenge*</label> <br>
            <input type="file" class="form" name="insertion_resourcechallenge" id="input5" multiple accept=".jpg, .jpeg, .mp3, .mp4, .mov, .avi, .pdf, .docx " placeholder=" Ressources du challenge (pdf, videos,audios" required class="form-control">

        </div> <br>

        <div class="div1">
            <label for="description_challenge" class="form">Decrivez votre challenge en quelques mots*</label> <br>
            <textarea class="form" name="description_challenge" id="input6" placeholder=" Description detaille du challenge " required></textarea>
        </div>

        <div class="div1">
            <p id="text1"> Ces champs sont obligatoires* </p>
            <p> <button id="but-champ" type="submit" name="submit"> Soumettre le challenge </button> </p>
        </div>




    </form>

</body>

</html>