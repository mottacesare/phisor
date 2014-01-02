<?php

require_once("include.php");
//
$l->createHeader("Memento");
//
$nav=array(
	"Home"=>"index.php",
	"Film"=>"film.php",
	"Serie"=>"serie.php",
	"Anime"=>"anime.php",
	"Ricette"=>"ricette.php",
	"Viaggi"=>"viaggi.php",
);
$l->createNav($nav,"Film");
//
$l->createGrid();
//
$l->createFooter();

?>
