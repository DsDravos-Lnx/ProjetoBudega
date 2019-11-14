<?php

    
    $headers = array('Accept' => 'application/json');
    $response = Unirest\Request::get('http://localhost:8086/api/clients', $headers);
    
    echo $response;

    echo "json:</br>";
?><?php /**PATH C:\xampp\htdocs\ProjetoBudega\projetoBudega\resources\views/teste.blade.php ENDPATH**/ ?>