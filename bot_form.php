<?php
$token = "2078735666:AAF8MXb1xSQe0qx3kvVQEeErpvCdTNjq4A8";
$teks = "Nama : " . $_POST['nama'] . "\n" . "Email : " . $_POST['uname'] . "\n" . "Aduan : " . $_POST['teks'];
$user = $_POST['uname'];
$data = [
    'text' => $teks,
    'chat_id' => '539091338',
];

$forward = file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));

?>