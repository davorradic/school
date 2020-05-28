<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<div class="row">
    <div class="col-md-4">
<?php
    $sql = "SELECT * FROM docenten LIMIT 0, 5";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $result = $stmt->fetchAll();
    //var_dump($result);
    if(count($result) == 0){
        echo 'Er zijn geen docenten';
    } else {
        foreach($result as $res) { //var_dump($res);?>
            <div>
                <a href="index.php?page=docent&id=<?php echo $res['id'];?>">
                    <?php echo $res['naam'];?> <?php echo $res['achternaam'];?>
                </a>
            </div>
            <hr />
<?php } ?>
<?php } ?>
            <div>
                <a href="index.php?page=docenten">
                    alle docenten ->
                </a>
            </div>
    </div>

    <div class="col-md-4">
<?php
    $sql = "SELECT * FROM studenten LIMIT 0, 5";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $result = $stmt->fetchAll();
    //var_dump($result);
    if(count($result) == 0){
        echo 'Er zijn geen studenten';
    } else {
        foreach($result as $res) { //var_dump($res);?>
            <div>
                <a href="index.php?page=student&id=<?php echo $res['id'];?>">
                    <?php echo $res['naam'];?> <?php echo $res['achternaam'];?>
                </a>
            </div>
            <hr />
<?php } ?>
<?php } ?>
            <div>
                <a href="index.php?page=studenten">
                    alle studenten ->
                </a>
            </div>
    </div>
    <div class="col-md-4">
<?php
    $sql = "SELECT * FROM klassen LIMIT 0, 5";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $result = $stmt->fetchAll();
    //var_dump($result);
    if(count($result) == 0){
        echo 'Er zijn geen klassen';
    } else {
        foreach($result as $res) { //var_dump($res);?>
            <div>
                <a href="index.php?page=klas&id=<?php echo $res['id'];?>">
                    <?php echo $res['code'];?>
                </a>
            </div>
            <hr />
<?php } ?>
<?php } ?>
            <div>
                <a href="index.php?page=klassen">
                    alle klassen ->
                </a>
            </div>
    </div>

</div><!-- /.row -->