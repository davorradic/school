<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<div class="row">
    <div class="col-md-12">
<?php

    $sql = "SELECT 
                studenten.id as studenten_id,
                studenten.naam as studenten_naam,
                studenten.achternaam as studenten_achternaam,
                studenten.email as studenten_email,
                studenten.mobiel as studenten_mobiel,
                studenten.telefoon as studenten_telefoon,
                klassen.id as klassen_id,
                klassen.code as klassen_code
            FROM studenten
                LEFT JOIN klassen ON studenten.klas_id = klassen.id
                ORDER BY studenten_naam DESC";
    //vershiel LEFT JOIN en INNER JOIN probeer het!
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $result = $stmt->fetchAll();
    //var_dump($result);
    if(count($result) == 0){
        echo 'er zijn geen data';
    } else {
        foreach($result as $res) { //var_dump($res);?>
            <div> 
                <p>
                    <?php echo $res['studenten_naam'];?>
                    <?php echo $res['studenten_achternaam'];?>
                    <?php echo $res['klassen_code'];?>
                </p>
            </div>
<?php } ?>
    </div>
<!-- /.row -->
<?php
    }
   


?>