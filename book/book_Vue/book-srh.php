
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
        <header> <h1> Livre </h1>  </header>
        <form  method = "POST" action ="">
        <div>
        <table id="table" border = "16" cellpadding = "5" cellspacing = "5" align = " center " >
        <?php include("../book_Control.php");
        $book = new Book();
        ?>
            <tr>
                <th>CODE</th>
                <th>TITLE</th>
                <th>AUTEUR</th>
                <th>DATE</th>
            </tr>
        <?php $book->show_book(); ?>
        </table>
        <span><a href="book.php">Retour</a></span>
        </div>
        </form>
    </body>
</html>