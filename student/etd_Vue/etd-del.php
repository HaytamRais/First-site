<?php
    include("../etd_Control.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ETD-ADD</title>
        <!-- <link rel="stylesheet" href="etudiant.css"> -->
        <style>
            body{
                background-image: url(../../background2.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            label{
                color: black;
                margin: 50px;
                font-size: 30px;
                background-color: orange;
                border-radius: 4px;
                padding: 10px;
            }
            input{
                height: 30px;
                width: 400px;
                background-color: black;
                color: orange;
                font-size: 20px;
            }
            div{
                margin: 50px;
            }
            form{
                text-align: center;
                margin-top: 200px;
            }
            #but{
                color: black;
                font-size: 30px;
                background-color: orange;
                border-radius: 4px;
                cursor: pointer;
            }
            #but:hover{
                font-size: 40px;
                color: white;
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
            header{
                text-align : center;
                color:white;
                text-decoration : underline ;
            }
            h1:hover{
                font-size : 40px;
                color:orange;
            }
        </style>
    </head>
    <body>
    <header> <h1> Etudiant </h1>  </header>
        <form  method = "POST" action ="">
            <div id="code">
                <label for="code"> Code  </label>
                <input type="text" name="code" placeholder = " Type student's code  " />
            </div>
            <div id = "buton">
                <button id = "but" name = "botona" > Supprimer </button>
            </div>
            <span><a href="../etd.php">Retour</a></span>
        </form>
    </body>
</html>