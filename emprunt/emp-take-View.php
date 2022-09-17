<?php
    include "emp-take-Control.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>ETD-ADD</title>
    <!-- <link rel="stylesheet" href="etudiant.css"> -->
    <style>
      body {
        background-image: url(../background2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
      }
      label {
        color: white;
        margin: 50px;
        font-size: 30px;
        text-decoration: underline;
        background-color: orange;
        border-radius: 4px;
        padding: 10px;
      }
      .input {
        height: 30px;
        width: 400px;
        background-color: black;
        color: orange;
        font-size: 20px;
      }
      div {
        margin: 50px;
      }
      form {
        text-align: center;
        margin-top: 200px;
      }
      #btn {
        color: black;
        font-size: 30px;
        background-color: orange;
        border-radius: 4px;
        cursor: pointer;
      }
      #btn:hover {
        font-size: 40px;
        color: white;
      }
      span a {
        background-color: orange;
        color: black;
        cursor: pointer;
        font-size: 24px;
        padding: 10px;
        border-radius: 10px;
        text-decoration: none;
        position: absolute;
        top: 0;
        left: 0;
      }
      header {
        text-align: center;
        color: white;
        text-decoration: underline;
      }
      h1:hover {
        font-size: 40px;
        color: orange;
      }
    </style>
  </head>
  <body>
    <header><h1>Etudiant</h1></header>
    <form method="POST" action="">
      <fieldset>
        <legend style="color: white; font-size: 30px">Emprunter</legend>
        <div id="student">
          <label for="student"> Nom de l'élève : </label>
          <select class ="input" name="student" id="talamid" >
            <?php $emp = new infoss(); ?>
            <?php $emp->etd_infos(); ?>
          </select>
        </div>
        <div id="livre">
          <label for="livre"> Livre </label>
          <select class ="input" name="book" id="talamid" >
            <?php $livre = new infoss(); ?>
            
            <?php $livre->book_infos(); ?>
          </select>
        </div>
        <button name = "botona" id="btn" >Emprunter</button>
      </fieldset>
    </form>
    <span><a href="emp.php">Retour</a></span>
  </body>
</html>
