<?php
  require_once('./createForm.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quiz GoT</title>
  </head>
  <body>
    <?php
      echo openForm("./monScript.php");
      echo createSelect("country", "Choisissez un pays", [
        [
          "value" => "es",
          "content" => "Espagne",
        ],
        [
          "value" => "jp",
          "content" => "Japon",
        ]
      ]);
      echo createInput("text", "myText", "", "Mon premier input");
      echo createInput("number", "myNumber", "", "Mon second input");
      echo createInput("radio", "myRadio", "", "Ma Radio");
      echo createInput("checkbox", "myCheckbox", "", "Ma Checkbox");
      echo createSubmit("Envoyer");
      echo closeTag("form");
    ?>
  </body>
</html>
