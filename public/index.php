<?php

/*Bootstrap*****/
/*require __DIR__ . '/../vendor/autoload.php'; */

require_once __DIR__ . '/../src/helpers.php';
$paths = include __DIR__ . '/../config.php';


/*Straight Route*/
echo build('home',$paths);



?>

