<?php
// Formdan gelen verileri alıyoruz
$email = $_POST['email'];
$password = $_POST['password'];

// Senin bilgilerini kontrol ediyoruz
$dogru_email = "b251210097@ogr.sakarya.edu.tr";
$dogru_sifre = "b251210097";

if ($email == $dogru_email && $password == $dogru_sifre) {
    // Giriş başarılıysa hoşgeldin mesajı veriyoruz
    echo "<h1>Hoşgeldiniz b251210097</h1>";
    // İstersen 3 saniye sonra ana sayfaya yönlendirebiliriz
    header("Refresh: 3; url=index.html");
} else {
    // Giriş hatalıysa login sayfasına geri gönderiyoruz
    header("Location: login.html");
    exit();
}
?>
