<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<div class="row">
    <div class="col-md-12">
<?php

    $sql = "SELECT 
                docenten.id as docent_id,
                docenten.naam as docenten_naam,
                docenten.achternaam as docenten_achternaam,
                count(docenten_klassen.klassen_id) as klassen_totaal
            FROM docenten
                LEFT JOIN docenten_klassen ON docenten.id = docenten_klassen.docenten_id
                GROUP BY docenten.id
                ORDER BY klassen_totaal DESC";
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
                    <?php echo $res['docenten_naam'];?>
                    <?php echo $res['docenten_achternaam'];?>
                    <?php echo $res['klassen_totaal'];?>
                </p>
            </div>
<?php } ?>
    </div>
<!-- /.row -->
<?php
    }
   


?>