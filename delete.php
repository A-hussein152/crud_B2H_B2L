<?php
session_start();
include 'db.php';
global $db;

<<<<<<< HEAD
$id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
if ($id){
    $query = $db->prepare('DELETE FROM fietsen WHERE id =:id');
    $query->bindParam('id',$id);
    if ($query->execute()){
        $_SESSION['message'] = 'bike is deleted';
    }else{
        $_SESSION['message'] = 'ERROR 404 in deleting bike';
    }
header("location: index.php");
}else{
    die('ERROR 404: bike not found');
}

=======
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id) {
    $query = $db->prepare('DELETE FROM fietsen WHERE id = :id');
    $query->bindParam('id', $id);
    if ($query->execute()){
        $_SESSION['message'] = "De fiets is verwijderd";
    } else {
        $_SESSION['message'] = "Er is iets mis gegaan met de fiets verwijderen";
    }

    header('Location: index.php');
} else {
    die('Error 404: Bike not found');
}
>>>>>>> e1f5540a7fee19f0973386504ac26ff40f4ecbbc
