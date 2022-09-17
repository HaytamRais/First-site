<?php
    include("../etd_Control.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>modification</title>
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
            text-decoration: underline;
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
        #btn{
            color: black;
            font-size: 30px;
            background-color: orange;
            border-radius: 4px;
            cursor: pointer;
        }
        #btn:hover{
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
            <?php
                if(isset($varempty)){
                    echo $varempty;
                }
            ?>
            <div id="cod">
                <label for="code"> Code  </label>
                <input type="text" id="code "   required name="code" />
            </div>
            <div id="name">
                <label for="nom"> Nom  </label>
                <input type="text" name="nom"  placeholder="Abc..." required>
            </div>
            <div id="prename">
                <label for="prenom"> Prénom  </label>
                <input type="text" name="prenom"  placeholder="Abc..." required>
            </div>
            <div id="class">
                <label for="classe"> Classe  </label>
                <input type="text" name="classe"  placeholder="Abc.123.." required>
            </div>
            <div id="address">
                <label for="adresse"> Adresse  </label>
                <input type="text" name="adresse"  placeholder="Abc.123.." required>
            </div>
            <div id="boton">
                <button id="btn" name = "wrk" >Créer</button>
            </div>
        </form>
        <span><a href="../etd.php">Retour</a></span>
    </body>
</html>
