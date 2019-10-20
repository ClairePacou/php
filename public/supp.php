<?php

require_once '../includes/config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $req=$db->prepare("DELETE FROM posts WHERE id = ?");
    $req->execute(array($id));
}

echo 'Le fichier a bien été supprimé';


