<?php
@include 'suppliers';

$id = (integer) $_POST['id'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8086/api/suppliers/delete/' . $id);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_exec($ch);

?>