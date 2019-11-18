<?php
    @include('products');

    $id = (integer)$_POST['id'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost:8086/api/products/delete/'.$id);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_exec($ch);

?>