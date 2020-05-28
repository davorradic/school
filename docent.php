<div class="row">
<?php
$id = intval($_GET['id']);
if ($id == 0){
    echo 'Opgevraagd docent bestaat niet.';
} else {
    $sql = "SELECT * FROM docenten WHERE id = ?";
    $stmt = $conn->prepare($sql); 
    $stmt->execute([$id]);
    $result = $stmt->fetchAll();
    if(count($result) == 0){
        echo 'er zijn geen data';
    } else {
        foreach($result as $res) { //var_dump($res);?>
        <div class="col-md-6">
            <h3><?php echo $res['naam'];?></h3>
            <p><?php echo $res['achternaam'];?></p>
            <p><?php echo $res['email'];?></p>
            <p><?php echo $res['mobiel'];?></p>
            <p><?php echo $res['telefoon'];?></p>
        </div>
    <?php } ?>
    <?php
    $sql = "SELECT 
                docenten.id as docent_id,
                docenten.naam as docenten_naam,
                count(docenten_klassen.klassen_id) as  klassen_totaal
            FROM docenten
                INNER JOIN docenten_klassen ON docenten.id = docenten_klassen.docenten_id
                WHERE docenten.id = ?
                GROUP BY docenten.id";
    $stmt = $conn->prepare($sql); 
    $stmt->execute([$id]);
    $result = $stmt->fetchAll();
    ?>
    <div class="col-md-6">
        <?php if(count($result) > 0){ ?>
            <div>Heeft <b><?php echo $result[0]['klassen_totaal'];?></b> klassen</div>
        <?php } else { ?>
            <div>heeft geen klassen!</div>
        <?php } ?>
    </div>
    
<?php
    }   
}?>
</div>
<!-- /.row -->