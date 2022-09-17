<?php
class Data_Connect{
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
class infoss extends Data_Connect{
    public function etd_infos(){
        $sql = "SELECT nom,prenom FROM etudiant ";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){?>
        <option name = "nom"><?php echo $row['nom'] . " ". $row['prenom']; ?></option>
        <?php }
    }
    public function book_infos(){
        $sql = "SELECT titre FROM livre";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){?>
            <option name ="titre"><?php echo $row['titre'];?></option>
        <?php }
    }
    public function emp_infos($nom,$titre){
        $sql = "INSERT INTO emprunter(nom_prenom,livre) VALUES ('$nom','$titre') ";
        $stmt = $this->connect()->query($sql);
    }
    public function somme(){
        $sql = "SELECT nom_prenom,livre,dateEmprunt,auteur FROM emprunter JOIN livre ON emprunter.livre = livre.titre ";
        $stmt = $this->connect()->query($sql);
        while($run = $stmt->fetch()){?>
            <tr>
                <td><?php echo $run['nom_prenom'] ?></td>
                <td><?php echo $run['livre'] ?></td>
                <td><?php echo $run['auteur'] ?></td>
                <td><?php echo $run['dateEmprunt'] ?></td>
            </tr>
        <?php }
    }
}
?>
