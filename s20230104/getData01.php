<?php
    function dd ($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    $data = $_GET;
    // dd($data);
    echo json_encode($data);


    
?>