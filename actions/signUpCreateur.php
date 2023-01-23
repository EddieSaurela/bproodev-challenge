<?php //require('actions/users/signupAction.php');  
?>
<!DOCTYPE html>
<html lang="en">
<?php //include("includes/head.php"); 
?>

<head>
    <link rel="stylesheet" href="../assets/navchallenges.css">
    <link rel="stylesheet" href="../assets/footerchallenges.css">
</head>

<body>

    <nav id="nav" width="100px">
        <div id="logo-bproodev">
            <img src="../Mr Regis/images/res-logo.png" width="50em" alt=" Icon RESTAURANT">
            <p class="p1"> BPROODEV </p>
        </div>
        <div id="list1">
            <ul id="liste-navigation">
                <li class="links"> <a href="../pages/page1.php" class="premier-lien"> Creer un challenge </a> </li>
                <li class="links"> <a href="../pages/page2.php" class="premier-lien"> Creer une categorie </a> </li>
            </ul>
        </div>
    </nav>

    <br><br>
    <form class="container" action="../control/traitement_createur.php" method="POST">


        <div class="mb-3">
            <label for="nom_createurChallenge" class=" form-label">Nom:</label>
            <input type="text" class="form-control" name="nom_createurChallenge" required>
        </div>
        <div class="mb-3">
            <label for="prenom_createurChallenge" class="form-label">prenom:</label>
            <input type="text" class="form-control" name="prenom_createurChallenge" required>
        </div>
        <div class="mb-3">
            <label for="email_createurChallenge" class="form-label">📧 email:</label>
            <input type="email" class="form-control" name="email_createurChallenge" required>
        </div>
        <div class="mb-3">
            <label for="tel_createurChallenge" class="form-label">📞 Tel:</label>
            <input type="telephone" class="form-control" name="tel_createurChallenge" required>
        </div>
        <div class="mb-3">
            <label for="mdp_createurChallenge" class="form-label">Password:</label>
            <input type="password" class="form-control" name="mdp_createurChallenge" required>
        </div>
        <div class="mb-3">
            <label for="confirmpassword" class="form-label">Confirmer Mot de Passe:</label>
            <input type="password" class="form-control" name="confirmpassword" required>
        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
        <br>
        <a href="login.php">
            <p>J'ai deja un compte, je me connecte</p>
        </a>
    </form>

</body>

<footer id="footer">

    <section id="principal-section">

        <section id="section-footer1">
            <div id="div-foot1">
                <h4> Naviguer </h4>
                <a href="#"> Accueil </a> <br>
                <a href="#"> Nous contacter </a>
            </div>
        </section>

        <section id="section-footer2">
            <div>
                <p id="">
                <h4> Resources </h4>
                <a href="#"> Inscription </a> <br>
                <a href="#"> Connexion </a> <br>
                <a href="#"> Creer un challenge </a> <br>
                <a href="#"> Creer une categorie </a> <br>
                <a href="#"> Politique de confidentialite </a> <br>
                <a href="#"> Condition d'utilisation </a>
                </p>
            </div>
        </section>

        <section id="section-footer2">
            <div id="div-foot3">
                <h4> Nous contacter 📞 </h4>
                <p> 📱 Phone: +237691470357 // +237672470527 </p>
                <p>📬 Email: b.ventures@gmail.com </p>
            </div>
        </section>

    </section>
    <div class="div-foot4">
        <hr>
    </div>

    <div class="div-foot5">
        <p>
            Nous suivre:
        </p>

        <section id="section-last">
            <li id="fb-icon"> <a href="http://www.facebook.com"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                    </svg> </a> </li>
            <li id="ytube-icon"> <a href="http://www.youtube.com"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                    </svg> </a> </li>
            <li id="github-icon"> <a href="http://www.github.com"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                    </svg> </a> </li>

    </div>

    </section>
</footer>

</html>