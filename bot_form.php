<?php
$token = "2078735666:AAF8MXb1xSQe0qx3kvVQEeErpvCdTNjq4A8";
$nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
$aduan = filter_var($_POST['teks'], FILTER_SANITIZE_STRING);
if(filter_var($_POST['uname'], FILTER_VALIDATE_EMAIL)) {
    $teks = "Nama : " . $_nama . "\n" . "Email : " . $_POST['uname'] . "\n" . "Aduan : " . $aduan;
    $data = [
        'text' => $teks,
        'chat_id' => '539091338',
    ];

    $forward = file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));
        header("Location: index.php");
} else{
    echo "<script>alert('Email invalid')</script>";
}
?>
