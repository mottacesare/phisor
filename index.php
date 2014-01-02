<?php

require_once("include.php");
//
$l->createHeader("Phisor");
//
$nav=array(
	"Home"=>"index.php",
	"Chi Siamo"=>"chi_siamo.php",
	"Dove Siamo"=>"dove_siamo.php",
	"Lezioni"=>"lezioni.php",
	"Contattaci"=>"contattaci.php",
);
$l->createNav($def_project,$nav,"Home");
//
$l->createFooter();

?>
