<?php
declare(strict_types=1);

function al(string $anahtar): string
{
    return isset($_POST[$anahtar]) ? trim((string) $_POST[$anahtar]) : '';
}

$ad = al('ad');
$email = al('email');
$telefon = al('telefon');
$konu = al('konu');
$cinsiyet = al('cinsiyet');
$mesaj = al('mesaj');
$onay = isset($_POST['onay']) ? 'Evet' : 'Hayır';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İşlem Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">Proje Ödevi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Menüyü aç">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Hakkında</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.html">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="takimimiz.html">Takımımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.html">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link active" href="iletisim.html" aria-current="page">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white ms-lg-2 mt-2 mt-lg-0" href="login.html">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 p-5 rounded-4">
                    <div class="text-center mb-4">
                        <h1 class="text-success fw-bold">✓ Başarılı!</h1>
                        <p class="fs-5 text-muted">İletişim formundan gönderilen veriler sunucu tarafında alındı ve aşağıda listelenmektedir.</p>
                    </div>

                    <h2 class="h4 border-bottom pb-2 mb-4 text-primary">Gelen Veri Özeti</h2>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped fs-5">
                            <tbody>
                                <tr>
                                    <th class="w-25 text-dark" scope="row">Ad Soyad</th>
                                    <td><?php echo $ad !== '' ? htmlspecialchars($ad, ENT_QUOTES, 'UTF-8') : '—'; ?></td>
                                </tr>
                                <tr>
                                    <th class="text-dark" scope="row">E-posta</th>
                                    <td><?php echo $email !== '' ? htmlspecialchars($email, ENT_QUOTES, 'UTF-8') : '—'; ?></td>
                                </tr>
                                <tr>
                                    <th class="text-dark" scope="row">Telefon</th>
                                    <td><?php echo $telefon !== '' ? htmlspecialchars($telefon, ENT_QUOTES, 'UTF-8') : '—'; ?></td>
                                </tr>
                                <tr>
                                    <th class="text-dark" scope="row">Konu</th>
                                    <td><?php echo $konu !== '' ? htmlspecialchars($konu, ENT_QUOTES, 'UTF-8') : '—'; ?></td>
                                </tr>
                                <tr>
                                    <th class="text-dark" scope="row">Cinsiyet</th>
                                    <td><?php echo $cinsiyet !== '' ? htmlspecialchars($cinsiyet, ENT_QUOTES, 'UTF-8') : '—'; ?></td>
                                </tr>
                                <tr>
                                    <th class="text-dark" scope="row">Mesaj</th>
                                    <td><?php echo $mesaj !== '' ? htmlspecialchars($mesaj, ENT_QUOTES, 'UTF-8') : '—'; ?></td>
                                </tr>
                                <tr>
                                    <th class="text-dark" scope="row">Onay</th>
                                    <td><?php echo htmlspecialchars($onay, ENT_QUOTES, 'UTF-8'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="text-center mt-5">
                        <a href="iletisim.html" class="btn btn-outline-primary px-4 py-2">← İletişim Sayfasına Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
