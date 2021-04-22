<?php

session_start(); 

$title = "edition de mon profile";
require_once "layout/head.php";

//-------------------------------------------

require_once "template/template-edition-profil.php";
require_once "src/traitement-edition-profil.php";

//----------------------------------------

require_once "layout/foot.php";