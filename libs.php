<?php

if(isset($_GET['page'])) {

    $page = $_GET['page'];
    switch ($page) {
        case 'lover' :
            include 'views/lover.php';
            break;

        case 'pict' :
            include 'views/our_pict.php';
            break;
            
        case 'flowers' :
            include 'views/for_u.php';
            break;    
    }

}else{
    include 'views/lover.php';
}

?>