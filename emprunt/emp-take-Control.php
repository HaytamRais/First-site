<?php
    include "emp-take-Model.php";
?>
<?php

if(isset($_POST['botona'])){
    $nom = $_POST['student'];
    $titre = $_POST['book'];
    $emp = new infoss();
    $emp->emp_infos($nom,$titre);
    ?>
    <script>
        alert("Emprunte faite avec succé");
    </script>
    <?php
}

?>
