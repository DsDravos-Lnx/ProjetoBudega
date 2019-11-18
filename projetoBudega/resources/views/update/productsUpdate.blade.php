<?php
@include 'products';

$id = (integer) $_POST['id'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8086/api/products/update/' . $id);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "UPDATE");
curl_exec($ch);

?>