<?php
include ("etd_Model.php");

if(isset($_POST['creer'])){
    $code = $_POST['code'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $classe = $_POST['classe'];
    $varempty ="<p id='message' style='color:orange;' > Etudiant creer avec succé</p>";
    $book = new Student();
    $book->set_stud($code,$nom,$prenom,$adresse,$classe);
}
if(isset($_POST['botona'])){
    $code = $_POST['code'];
    $book = new Student();
    $book->del_stud($code);
}
if(isset($_POST['wrk'])){
    $code = $_POST['code'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $classe = $_POST['classe'];
    $stud = new Student();
    $stud->mod_stud($code,$nom,$prenom,$adresse,$classe);
}
?>