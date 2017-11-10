<?php
#  Une ouverture de balise FORM
  #  Definir une action

function openForm($action = "#")
{
  return "<form action='" . $action . "'>";
}
#  Une fermeture de balise FORM
function closeTag($tag)
{
  return "</" . $tag . ">";
}
function createImage($class, $src, $alt, $width)
{
  return "<img class='" . $class . "' src='" . $src . "' alt='" . $src . "'  width='" . $width . "' >";
}
#  Mise en place d'un input
  #  Avec un label
/*
  $type = string
  $name = string
  $value = string
  $label = string
*/
function createDiv($class)
{
  return "<div class='" . $class . "'>";
}

function createInput($type, $name, $value = "", $label)
{
  return "<label>$label</label><input type='" . $type . "' name='" . $name . "' value='" . $value . "'>";
}

#  Mise en place d'un select
function createSelect($name, $label, $options)
{
  /* un array avec plusieur array dedans (multidimensionnel)
  $options = [
    [
      'value' => 'fr',          //valeur pour le code
      'content' => 'Francais',  //valeur pour l'utilisateur
    ],
    [
      'value' => 'en',
      'content' => 'Anglais',
    ],
    [
      'value' => 'de',
      'content' => 'Allemand',
    ],
  ];
  */
  $html = "<label>" . $label . "</label>";
  $html .= "<select name='" . $name . "'>";
  foreach ($options as $key => $value) {
    $html .= "<option value='" . $value['value'] . "'>" . $value['content'] . "</option>" ;
  }
  $html .= "</select>";
  return $html;
}

#  Generer un bouton submit
function createSubmit($value)
{
  return "<input type='submit' value='" . $value . "'>";
}
