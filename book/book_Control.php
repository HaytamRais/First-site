<?php
include "book_Model.php";

// add base

    if(isset($_POST['ajouter'])){
        $code = $_POST['code'];
        $title = $_POST['titre'];
        $auteur = $_POST['auteur'];
        $dateE = $_POST['dateE'];
        $book = new Book();
        $book->set_book($code,$title,$auteur,$dateE);
    }

// del base
if(isset($_POST['botona'])){
    $code = $_POST['code'];
    $book = new Book();
    $book->del_book($code);
}

// mod base
if(isset($_POST['creer'])){
    $code = $_POST['code'];
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $dateE = $_POST['dateE'];
    $book = new Book();
    $book->mod_book($code,$titre,$auteur,$dateE);
}
?>