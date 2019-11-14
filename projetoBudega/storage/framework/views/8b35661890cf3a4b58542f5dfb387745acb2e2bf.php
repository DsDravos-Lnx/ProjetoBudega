<?php $__env->startSection('client_name'); ?>
    <?php

use function GuzzleHttp\json_decode;

$jsonStr = '{"id":1,"name":"Casandra DuBuque PhD","cpf":"0.6080050238","contact":"487.225.4918","address":"2373 Mosciski Heights Apt. 354\nLawsonview, IN 34982-3953","gender":"male","age":null,"created_by":"Gaetano Gusikowski","update_by":"Etha Doyle DVM","created_at":"2019-11-12 12:35:30","updated_at":"2019-11-12 12:35:30"}';
        $client = json_decode($jsonStr);
        echo "nome: $client->name </br>"; 
    ?>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\xampp\htdocs\ProjetoBudega\projetoBudega\resources\views/json/clients.blade.php ENDPATH**/ ?>