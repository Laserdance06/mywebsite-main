 <?php

// $content=file_get_contents('yaml.yml');
// $array=(yaml_parse($content));
// var_dump($array);


// include ('includes\Fonctions.php');
include ('Header.html');


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


include ('footer.html');
