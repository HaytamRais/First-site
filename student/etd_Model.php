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

class Student extends DataBase_Connect{

    public function set_stud($code,$nom,$prenom,$classe,$adresse){
        $sql = "INSERT INTO etudiant(code,nom,prenom,adresse,classe) VALUES ('$code','$nom','$prenom','$classe','$adresse')";
        $stmt = $this->connect()->query($sql);
    }
    public function del_stud($code){
        $sql = "DELETE FROM etudiant WHERE code = '$code' ";
        $stmt = $this->connect()->query($sql);
    }
    public function mod_stud($code,$nom,$prenom,$adresse,$classe){
        $sql = "UPDATE etudiant SET nom = '$nom' , prenom = '$prenom' , adresse = '$adresse' , classe = '$classe' WHERE code = '$code' ";
        $stmt = $this->connect()->query($sql);
    }
    public function show_stud(){
        $sql = "SELECT * FROM etudiant";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            ?>
            <tr>
                <td><?php echo $row['code'] ?></td>
                <td><?php echo $row['nom'] ?></td>
                <td><?php echo $row['prenom'] ?></td>
                <td><?php echo $row['adresse'] ?></td>
                <td><?php echo $row['classe'] ?></td>
            </tr>
            <?php
        }
        }
}
?>