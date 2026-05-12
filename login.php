<?php
declare(strict_types=1);

$email = isset($_POST['email']) ? trim((string) $_POST['email']) : '';
$password = isset($_POST['password']) ? trim((string) $_POST['password']) : '';

$dogru_email = 'b251210097@ogr.sakarya.edu.tr';
$dogru_sifre = 'b251210097';

if ($email === '' || $password === '') {
    header('Location: login.html?hata=bos');
    exit;
}

if ($email !== $dogru_email || $password !== $dogru_sifre) {
    header('Location: login.html?hata=yanlis');
    exit;
}

$ogrNo = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3;url=index.html">
    <title>Giriş başarılı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="p-0">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">Proje Ödevi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Menüyü aç">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Hakkında</a></li>
                    <li class="nav-item"><a class="nav-link" href="ozgecmis.html">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="takimimiz.html">Takımım</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.html">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link active btn btn-primary text-white ms-lg-2 mt-2 mt-lg-0" href="login.html" aria-current="page">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="login-page with-navbar">
    <div class="container px-3">
        <div class="card login-card shadow-lg border-0">
            <div class="card-body p-4 p-md-5 text-center">
                <h1 class="h3 text-success mb-3">Hoşgeldiniz <?php echo $ogrNo; ?></h1>
                <p class="text-muted mb-0">Birkaç saniye içinde ana sayfaya yönlendirileceksiniz.</p>
                <a href="index.html" class="btn btn-primary mt-4">Hemen ana sayfaya git</a>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
