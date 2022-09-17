<?php
class DataBase_Connect{
    private $sqlHost = "localhost";
    private $DBname = "bibl";
    private $Port = "3306";
    private $Charset = "utf8";
    private $UserName = "root";
    private $Password = "";
    
    public function connect(){
        $dsn = "mysql:host=" . $this->sqlHost . ";dbname=" . $this->DBname . ";charset=" . $this->Charset;
            $pdo = new PDO($dsn,$this->UserName,$this->Password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
    }
}

// add base

class Book extends DataBase_Connect{

    public function set_book($code,$titre,$auteur,$dateE){
        $sql = "INSERT INTO livre(code,titre,auteur,dateE) VALUES ('$code','$titre','$auteur','$dateE')";
        $stmt = $this->connect()->query($sql);
    }


// del base



    public function del_book($code){
        $sql = "DELETE FROM livre WHERE code = '$code' ";
        $stmt = $this->connect()->query($sql);
    }


// mod base



    public function mod_book($code,$titre,$auteur,$dateE){
        $sql = "UPDATE livre SET titre = '$titre' , auteur = '$auteur' , dateE = '$dateE' WHERE code = '$code' ";
        $stmt = $this->connect()->query($sql);
    }


// srh base



    public function show_book(){
        $sql = "SELECT * FROM livre";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            ?>
            <tr>
                <td><?php echo $row['code'] ?></td>
                <td><?php echo $row['titre'] ?></td>
                <td><?php echo $row['auteur'] ?></td>
                <td><?php echo $row['dateE'] ?></td>
            </tr>
            <?php
        }
        }
}
