<?php
/**
 * Created by PhpStorm.
 * User: qlassalle
 * Date: 16/11/2017
 * Time: 16:18
 */

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}


$HOST_ADDRESS = "mysql6.gear.host";
$DATABASE_NAME = "mypartner";
$DATABASE_USERNAME = "mypartner";
$DATABASE_PASSWORD = "Du2ecpjf_W_P";


if($_GET['user'] == 'licencie') {
    saveLicencie($HOST_ADDRESS, $DATABASE_NAME, $DATABASE_USERNAME, $DATABASE_PASSWORD);
} else if ($_GET['user'] == 'commercant') {
    saveCommercant($HOST_ADDRESS, $DATABASE_NAME, $DATABASE_USERNAME, $DATABASE_PASSWORD);
}

/**
 * @param $HOST_ADDRESS
 * @param $DATABASE_NAME
 * @param $DATABASE_USERNAME
 * @param $DATABASE_PASSWORD
 */
function saveLicencie($HOST_ADDRESS, $DATABASE_NAME, $DATABASE_USERNAME, $DATABASE_PASSWORD)
{
    $bdd = new PDO('mysql:host=' . $HOST_ADDRESS . ';dbname=' . $DATABASE_NAME, $DATABASE_USERNAME, $DATABASE_PASSWORD);
    $sql = 'insert into licencie(nom, prenom, date_naissance, adresse, cp, club, email, telephone)
                  values(:nom, :prenom, :date_naissance, :adresse, :cp, :club, :email, :telephone)';
    $insert = $bdd->prepare($sql);

    $insert->bindParam(':nom', $_GET['nom']);
    $insert->bindParam(':prenom', $_GET['prenom']);
    $insert->bindParam(':date_naissance', $_GET['date_naissance']);
    $insert->bindParam(':adresse', $_GET['adresse']);
    $insert->bindParam(':cp', $_GET['cp']);
    $insert->bindParam(':club', $_GET['club']);
    $insert->bindParam(':email', $_GET['email']);
    $insert->bindParam(':telephone', $_GET['telephone']);
    $insert->execute();
}


function saveCommercant($HOST_ADDRESS, $DATABASE_NAME, $DATABASE_USERNAME, $DATABASE_PASSWORD)
{
    $bdd = new PDO('mysql:host=' . $HOST_ADDRESS . ';dbname=' . $DATABASE_NAME, $DATABASE_USERNAME, $DATABASE_PASSWORD);
    $sql = 'insert into commercant(nom, prenom, nom_commerce, type, adresse, cp, email)
                  values(:nom, :prenom, :nom_commerce, :type, :adresse, :cp, :email)';
    $insert = $bdd->prepare($sql);

    $insert->bindParam(':nom', $_GET['nom']);
    $insert->bindParam(':prenom', $_GET['prenom']);
    $insert->bindParam(':nom_commerce', $_GET['nom_commerce']);
    $insert->bindParam(':type', $_GET['type']);
    $insert->bindParam(':adresse', $_GET['adresse']);
    $insert->bindParam(':cp', $_GET['cp']);
    $insert->bindParam(':email', $_GET['email']);
    $insert->execute();
}


die();

/********** JSON POC ***********/
//$sql = "select * from user";
//$statement = $bdd->prepare($sql);
//$statement->execute();
//echo json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
//die();