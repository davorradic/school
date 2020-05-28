<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<div class="row">
    <div class="col-md-12">
<?php

    $sql = "SELECT 
                klassen.id as klas_id,
                klassen.code as klas_code,
                count(docenten_klassen.docenten_id) as docenten_totaal
            FROM klassen
                LEFT JOIN docenten_klassen ON klassen.id = docenten_klassen.klassen_id
                GROUP BY klassen.id
                ORDER BY docenten_totaal DESC";
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
                    <?php echo $res['klas_code'];?>
                    <?php echo $res['docenten_totaal'];?>
                </p>
            </div>
<?php } ?>
    </div>
<!-- /.row -->
<?php
    }
   


?>