<?php
    include "emp-take-Control.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ETD</title>
        <style>
            body{
                background-image: url(../background2.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            header{
                border-radius: 5px;
                text-align: center;
                background-image: url(../background1.gif);
                background-repeat: no-repeat;
                background-size: 100%;
                background-attachment: fixed;
                margin: 0;
            }
            #title{
                height: 100%;
                width: 100%;
                color: white;
            }
            #title:hover{
                color: green;
                font-size: 40px;
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            nav{
                margin-top: 3px;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: orange;
                border-radius: 5px;
            }
            li {
                float: left;
            }
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 20px;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: 500;
            }
            li a:hover {
                background-color: #111;
            }
            main{
                display: block;
                text-align: center ;
            }
            
            #GS{
                color:white;
                border-bottom: 2px solid orange;
                width: 330px;
                margin-left: 465px;
            }
            #GS:hover{
                color: orange ;
                background-color:black;
                border-radius:10px;
            }
            main{
                display: block;
            }
            div{
                color: white;
                margin: 40px;
                border: 1px solid white;
                height: 40px;
                padding-top: 20px;
                font-size: 15px;
            }
            div:hover{
                background-color: orange;
                color: black;
                cursor: pointer;
                font-size: 24px;
                border-radius: 10px ;
            }
            span a {
                background-color: orange;
                color: black;
                cursor: pointer;
                font-size: 24px;
                padding: 10px;
                border-radius: 10px ;
                text-decoration: none;
                position: absolute;
                top:0;
                left: 0;
            }
            a{
                text-decoration: none ;
                color: white ;
            }
            article{
                background:linear-gradient(to bottom, black 5%, orange 95%);
                width: 300px;
                margin-left:465px;
                padding: 20px;
                border-radius: 10px;
            }
            footer{
                position: absolute;
                bottom: 0;
                left: 45%;
                color: white;
            }
        </style>
    </head>
    <body>
        <header>
            <h1 id="title"> ROBBER-MEMER </h1>
        </header>
        <nav>
            <ul>
                <li> <a href="../etudiant.php"> Home </a> </li>
                <li> <a href=""> About </a> </li>
                <li> <a href="mailto:haytamehatyme@gmail.com"> Contact Us </a> </li>
            </ul>
        </nav>
        <main>
            <h1 id="GS">Gestion des Emprunts</h1>
            <article>
                <div id="add"><a href="emp-take-View.php">Emprunter un livre</a></div>
                <div id="edit"><a href="emp-take-table.php">Liste des Emprunt</a></div>
            </article>
        </main>
        <span><a href="../etudiant.php">Retour</a></span>
        <footer>
            &copy;Copyright-1986 <em>ROBBER-X.I.X</em> 
        </footer>
    </body>
</html>