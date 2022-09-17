<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Gestion des étudiant </title>
        <style>
            body{
                background-image: url(background2.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            header{
                border: 1px solid ;
                border-radius: 5px;
                text-align: center;
                background-image: url(background1.gif);
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
            .active {
                background-color: red;
            }
            main{
                display: flex;
            }
            article{
                text-align: center;
                margin: 20px;
            }
            .txt{
                margin-top: 50px;
                color: white;
                font-size: 30px;
            }
            .etude{
                border: 1px solid black;
                border-radius: 20px;
                height: 300px;
                width: 300px;
                margin-top: 100px;
                margin-left: 80px;
            }
            img{
                height: 100%;
                width: 100%;
                border-radius: 20px;
                transition: 0.3s;
                opacity: 0.8;
                background-color: white;
            }
            #etd:hover{
                box-shadow: 10px 10px 5px  red;
                opacity: 5;
            }
            #bk:hover{
                box-shadow: 10px 10px 5px  blue;
                opacity: 5;
            }
            #emp:hover{
                box-shadow: 10px 10px 5px  yellow;
                opacity: 5;
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
                <li> <a href=""> Home </a> </li>
                <li> <a href=""> About </a> </li>
                <li> <a href="mailto:haytamehatyme@gmail.com"> Contact Us </a> </li>
            </ul>
        </nav>
        <main>
            <article class="etude"><a href="student/etd.php"><img id="etd" src="student/etudiant.png" alt=""><br><span class="txt">Etudiant</span></a></article>
            <article class="etude"><a href="book/book_Vue/book.php"><img id="bk" src="book/book.png" alt=""><br><span class="txt">Livre</span></a></article>
            <article class="etude"><a href="emprunt/emp.php"><img id="emp" src="emprunt/emprunt.jpg" alt=""><br><span class="txt">Emprunter des livres</span></a></article>
        </main>
        <footer>
            <span> &copy;Copyright-1986 <em>ROBBER-X.I.X</em> </span>
        </footer>
    </body>
</html>