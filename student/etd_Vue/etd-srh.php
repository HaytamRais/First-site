<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>search Etudiant</title>
        <!-- <link rel="stylesheet" href="etudiant.css"> -->
        <style>
            body{
                background-image: url(../../background2.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            div{
                color : white;
                text-align : center;
                margin-left : 400px ;
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
            include("../etd_Control.php");
        ?>
        <div>
        <table id="table" border = "16" cellpadding = "5" cellspacing = "5" align = " center " >
        <?php  $stud = new Student();  ?>
            <tr>
                <th>CODE</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>ADRESSE</th>
                <th>CLASS</th>
            </tr>
            <?php  $stud->show_stud();  ?>
        </table>
        <span><a href="../etd.php">Retour</a></span>
        </div>
        </form>
    </body>
</html>