 <?php

// $content=file_get_contents('yaml.yml');
// $array=(yaml_parse($content));
// var_dump($array);


// include ('includes\Fonctions.php');
include('Header.html');


// echo titlepara('Tanaskoski Mario', 'MyWebSite');
// Définition de la variable GET
if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'accueil';
}

if ($action == 'accueil') {
  include('Accueil.html');
} else if ($action == 'contact') {
  include('Contact.html');
}
if ($action == 'accueil') {
  include('Accueil.html');
} else if ($action == 'Formations') {
  include('Formations.html');
}
if ($action == 'accueil') {
  include('Accueil.html');
} else if ($action == 'Expériences professionelles') {
  include('ExpProfessionel.html');
}
if ($action == 'accueil') {
  include('Accueil.html');
} else if ($action == 'Competences') {
  include('Competences.html');
}
if ($action == 'accueil') {
  include('Accueil.html');
} else if ($action == 'A Propos') {
  include('A Propos.html');
}


include ('footer.html');
