<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: your@email.com"; // Gantilah dengan alamat email Anda

    if (mail($to, $subject, $message, $headers)) {
        echo "Email telah terkirim.";
    } else {
        echo "Gagal mengirim email.";
    }
}
?>
