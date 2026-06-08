<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SINDHU FAHREZI - Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .contact-card {
            border: 1px solid #dee2e6;
            border-radius: 12px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            background-color: #f8f9fa !important;
        }
    </style>
</head>
<body class="bg-light text-dark">
    <div class="container mb-5">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-white px-3 rounded shadow-sm">
            <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="images/icons.png" alt="icon" class="me-2" style="width: 24px; height: 24px; object-fit: contain;">
                <span class="fs-4 fw-bold text-primary">Sindhu Fahrezi</span>
            </a>
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a href="index.php" class="nav-link d-flex align-items-center">
                        <i class="bi bi-house-door-fill me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="portofolio.php" class="nav-link d-flex align-items-center">
                        <i class="bi bi-briefcase-fill me-1"></i>Portofolio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="aboutus.php" class="nav-link d-flex align-items-center">
                        <i class="bi bi-person-lines-fill me-1"></i>About US
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contactus.php" class="nav-link active d-flex align-items-center">
                        <i class="bi bi-envelope-fill me-1"></i>Contact US
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link d-flex align-items-center">
                        <i class="bi bi-box-arrow-in-right me-1"></i>Login
                    </a>
                </li>
            </ul>
        </header>

        <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4">
            <div class="text-center mb-4">
                <h3 class="fw-bold text-primary mb-1">Sosial Media</h3>
                <p class="text-muted">Temukan dan hubungi saya melalui platform di bawah ini</p>
            </div>
            
            <div class="row g-4 text-center">
                <div class="col-md-3">
                    <a href="https://github.com/sindufha" target="_blank" class="text-decoration-none text-dark">
                        <div class="p-4 bg-white contact-card shadow-sm h-100">
                            <h1><i class="bi bi-github text-dark"></i></h1>
                            <h6 class="fw-bold mt-2">GitHub</h6>
                            <p class="mb-0 small text-muted">Akses repositori kode dan berbagai proyek pemograman saya.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="https://instagram.com/sindhufhaa" target="_blank" class="text-decoration-none text-dark">
                        <div class="p-4 bg-white contact-card shadow-sm h-100">
                            <h1><i class="bi bi-instagram text-danger"></i></h1>
                            <h6 class="fw-bold mt-2">Instagram</h6>
                            <p class="mb-0 small text-muted">Ikuti aktivitas keseharian dan pembaruan informasi terkini.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="https://facebook.com/SonicGT" target="_blank" class="text-decoration-none text-dark">
                        <div class="p-4 bg-white contact-card shadow-sm h-100">
                            <h1><i class="bi bi-facebook text-primary"></i></h1>
                            <h6 class="fw-bold mt-2">Facebook</h6>
                            <p class="mb-0 small text-muted">Terhubung secara sosial di laman jejaring Facebook.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="https://wa.me/6283136174852" target="_blank" class="text-decoration-none text-dark">
                        <div class="p-4 bg-white contact-card shadow-sm h-100">
                            <h1><i class="bi bi-whatsapp text-success"></i></h1>
                            <h6 class="fw-bold mt-2">WhatsApp</h6>
                            <p class="mb-0 small text-muted">Kirim pesan langsung ke WhatsApp untuk komunikasi instan.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>