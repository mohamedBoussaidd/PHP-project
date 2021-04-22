<?php

session_start(); 

$title = "profil";
require_once "layout/head.php";

//-------------------------------------------

require_once "src/traitement-profils.php";
require_once "template/profil.php";

//----------------------------------------

require_once "layout/foot.php";