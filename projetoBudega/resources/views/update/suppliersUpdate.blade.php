<?php
@include 'suppliers';

$id = (integer) $_GET['id'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8086/api/suppliers/edit/' . $id);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "UPDATE");
curl_exec($ch);

?>