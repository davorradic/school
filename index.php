<?php
define('_DEFVAR', TRUE);
require_once('db.php');
require_once('template/header.php');
if(isset($_GET['page']) && !empty($_GET['page'])){
    $pages = [
                'home', 
                'studenten', 
                'student',
                'docenten',
                'docent',
                'klassen'
            ];
    if(in_array($_GET['page'], $pages)){
        require_once($_GET['page'].'.php');
    } else {
        require_once('404.php');
    } 
} else {
    require_once('home.php');
}
require_once('template/footer.php');
?>