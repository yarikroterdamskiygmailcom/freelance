<?php

require_once(__DIR__.'/../../app/model/config.php');
require_once(__DIR__.'/../../app/model/functions.php');
require_once(__DIR__.'/../../app/model/user.php');

enable_cors();

//$createNewEmployer = json_encode($_REQUEST);
//$decodedEmployer = json_decode($createNewEmployer, true);
//$decodedEmployer = json_decode($_REQUEST, true);
$frontSent = file_get_contents('php://input');
$decodedEmployer = json_decode($frontSent, true);

//$user->roles();
header('Content-type: application/json');
echo json_encode($user->roles());
