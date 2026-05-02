<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İşlem Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 p-5 rounded-4">
                    <div class="text-center mb-4">
                        <h1 class="text-success fw-bold">✓ Başarılı!</h1>
                        <p class="fs-5 text-muted">İletişim formundan gönderilen veriler sunucu tarafından başarıyla alındı.</p>
                    </div>
                    
                    <h4 class="border-bottom pb-2 mb-4 text-primary">Gelen Veri Özeti</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped fs-5">
                            <tbody>
                                <tr>
                                    <th class="w-25 text-dark">Ad Soyad</th>
                                    <td><?php echo isset($_POST['ad']) ? htmlspecialchars($_POST['ad']) : 'Veri gelmedi'; ?></td>
                                </tr>
                                <tr>
                                    <th class="text-dark">E-posta</th>
                                    <td><?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Veri gelmedi'; ?></td>
                                </tr>
                                <tr>
                                    <th class="text-dark">Konu</th>
                                    <td><?php echo isset($_POST['konu']) ? htmlspecialchars($_POST['konu']) : 'Veri gelmedi'; ?></td>
                                </tr>
                                <tr>
                                    <th class="text-dark">Cinsiyet</th>
                                    <td><?php echo isset($_POST['cinsiyet']) ? htmlspecialchars($_POST['cinsiyet']) : 'Veri gelmedi'; ?></td>
                                </tr>
                                <tr>
                                    <th class="text-dark">Mesaj</th>
                                    <td><?php echo isset($_POST['mesaj']) ? htmlspecialchars($_POST['mesaj']) : 'Veri gelmedi'; ?></td>
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

</body>
</html>