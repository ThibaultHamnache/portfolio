<?php
  require_once('formPHP/createForm.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:400,700" rel="stylesheet">
    <link rel="shortcut icon" href="images/icone.ico">
    <link rel="stylesheet" href="./style.css">

    <title>Quiz GoT</title>
  </head>
  <body>
    <?php
      echo openForm("./script.php");
            echo createDiv("banner container-fluid");
            echo closeTag("div");
            echo createDiv("container");
//echo createImage("center", "./images/...", "GoT", "50%");
            echo "<h1>Quiz GoT</h1>";
            echo "<br><br>";
        echo createDiv("row");
          echo createDiv("col-lg-6");
            echo "<p>1- Qui est l'auteur de game of thrones ?</p>";
            echo createInput("radio", "author", "q1r1", "J.R.R. Tolkien");
            echo createInput("radio", "author", "q1r2", "G.R.R. Martin");
            echo "<br><br>";
          echo closeTag("div");
          echo createDiv("col-lg-6");
            echo "<p>2- Comment s'appellent les dragons de Daenerys Targaryen ?</p>";
            echo createInput("checkbox", "drakeA", "q2r1", "Drogon");
            echo createInput("checkbox", "drakeB", "q2r2", "Spyro");
            echo createInput("checkbox", "drakeC", "q2r3", "Smaug");
            echo createInput("checkbox", "drakeD", "q2r4", "Viserion");
            echo createInput("checkbox", "drakeE", "q2r5", "Rhaegal");
            echo "<br><br>";
          echo closeTag("div");
        echo closeTag("div");


        echo createDiv("row");
          echo createDiv("col-lg-6");
            echo "<p>3- Combien d'enfants Catelyn Stark et Eddard Stark ont-ils eu ?</p>";
            echo createInput("number", "kids", "", "");
            echo "<br><br>";
          echo closeTag("div");
          echo createDiv("col-lg-6");
            echo "<p>4- Qui est le vrai père de Joffrey Baratheon ?</p>";
            echo createInput("radio", "father", "q4r1", "Son cousin Lancel ?");
            echo createInput("radio", "father", "q4r2", "Son oncle Jamie ?");
            echo createInput("radio", "father", "q4r3", "Son grand-père Tywin ?");
            echo createInput("radio", "father", "q4r4", "Son père Robert ?");
            echo "<br><br>";
          echo closeTag("div");
        echo closeTag("div");


        echo createDiv("row");
          echo createDiv("col-lg-6");
            echo "<p>5- Winter is....?</p>";
            echo createSelect("winter", "", [
              [
                "value" => "q5r1",
                "content" => "Gone",
              ],
              [
                "value" => "q5r2",
                "content" => "Cold",
              ],
              [
                "value" => "q5r3",
                "content" => "Coming",
              ]
            ]);
            echo "<br><br>";
          echo closeTag("div");
          echo createDiv("col-lg-6");
            echo "<p>6- Quelle est le nom du loup de Jon Snow ?</p>";
            echo createInput("radio", "wolf", "q6r1", "Nymeria");
            echo createInput("radio", "wolf", "q6r2", "Summer");
            echo createInput("radio", "wolf", "q6r3", "Lady");
            echo createInput("radio", "wolf", "q6r4", "Ghost");
            echo createInput("radio", "wolf", "q6r4", "Shaggydog");
            echo createInput("radio", "wolf", "q6r4", "Grey Wind");
            echo "<br><br>";
          echo closeTag("div");
        echo closeTag("div");


        echo createDiv("row");
          echo createDiv("col-lg-6");
            echo "<p>7- Qui joue Sansa Stark ?</p>";
            echo createInput("text", "actress", "", "");
            echo "<br><br>";
          echo closeTag("div");
          echo createDiv("col-lg-6");
            echo "<p>8- Comment surnomme t'on Gregor Clegane ?</p>";
            echo createSelect("alias", "", [
              [
                "value" => "q8r1",
                "content" => "The mad King",
              ],
              [
                "value" => "q8r2",
                "content" => "The mountain",
              ],
              [
                "value" => "q8r3",
                "content" => "The King in the North",
              ]
            ]);
            echo "<br><br>";
          echo closeTag("div");
        echo closeTag("div");


        echo createDiv("row");
          echo createDiv("col-lg-6");
            echo "<p>9- Comment est mort Ramsay Bolton ?</p>";
            echo createInput("radio", "bolton", "q9r1", "Mangé par ses chiens ");
            echo createInput("radio", "bolton", "q9r2", "Mort de froid");
            echo createInput("radio", "bolton", "q9r3", "Battu a mort par Jon Snow ");
            echo "<br><br>";
          echo closeTag("div");
          echo createDiv("col-lg-6");
            echo "<p>10- Que signifie Valhar Morgulis</p>";
            echo createInput("radio", "valar", "q10r1", "Tout Homme doit mourir ");
            echo createInput("radio", "valar", "q10r2", "Tout Homme doit servir");
            echo createInput("radio", "valar", "q10r3", "Tout Homme doit périr  ");
            echo "<br><br>";
          echo closeTag("div");
        echo closeTag("div");

        echo createDiv("row");
          echo createDiv("col-lg-6");
            echo "<p>11- Dans quels pays sont tourner les scènes de Game of Thrones ? (5 réponses)</p>";
            echo createInput("checkbox", "countryA", "q11r1", "Irlande");
            echo createInput("checkbox", "countryB", "q11r2", "Islande");
            echo createInput("checkbox", "countryC", "q11r3", "Danemark");
            echo createInput("checkbox", "countryD", "q11r4", "Croatie");
            echo createInput("checkbox", "countryE", "q11r5", "Tunisie");
            echo createInput("checkbox", "countryF", "q11r6", "Maroc");
            echo createInput("checkbox", "countryG", "q11r6", "Malte");
            echo "<br><br>";
          echo closeTag("div");
          echo createDiv("col-lg-6");
            echo "<p>12- Quelle est la devise de la maison Lannister ?</p>";
            echo createInput("radio", "slogan", "q12r1", "Feu et sang (Fire and blood)");
            echo createInput("radio", "slogan", "q12r2", "Un Lannister paye toujours ses dettes");
            echo createInput("radio", "slogan", "q12r3", "Entend moi rugir (Hear Me Roar)");
            echo createInput("radio", "slogan", "q12r4", "Insoumis, invaincus, intacts (Unbowed, Unbent, Unbroken)");
            echo "<br><br>";
          echo closeTag("div");
        echo closeTag("div");

        echo createDiv("row");
          echo createDiv("col-lg-6");
            echo "<p>13- Quel liens y a-t-il entre Jon Snow et Daenerys Targaryen ?</p>";
            echo createInput("checkbox", "linkA", "q13r1", "Frère et Soeur");
            echo createInput("checkbox", "linkB", "q13r1", "Amants");
            echo createInput("checkbox", "linkC", "q13r1", "Collègues");
            echo createInput("checkbox", "linkD", "q13r1", "Neuveu et tante");
            echo "<br><br>";
          echo closeTag("div");
        echo closeTag("div");


        echo createSubmit("Envoyer");
        echo closeTag("div");


    echo closeTag("form");
    echo "<br><br>";



    ?>
  </body>
</html>
