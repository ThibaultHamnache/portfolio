<?php
/*ne pointe que sur un fichier existant
require();
require_once();
//include peut pointer vers un fichier qui n'existe pas
include();
include_once();
*/
//Si la superGlobal $_GET contient plus de 0 éléments
require_once ('./templates/head.html');
require_once ('./templates/body.html');
require_once ('./templates/foot.html');
