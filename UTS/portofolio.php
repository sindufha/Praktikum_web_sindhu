<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio - Sindhu Fahrezi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .profile-img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border: 3px solid #0d6efd;
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
                    <a href="portofolio.php" class="nav-link active d-flex align-items-center">
                        <i class="bi bi-briefcase-fill me-1"></i>Portofolio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="aboutus.php" class="nav-link d-flex align-items-center">
                        <i class="bi bi-person-lines-fill me-1"></i>About US
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contactus.php" class="nav-link d-flex align-items-center">
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

        <div class="row align-items-center py-4 my-4 bg-white rounded shadow-sm p-4">
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <img src="images/icons.png" alt="Sindhu Fahrezi Ardiansyah" class="rounded-circle profile-img shadow-sm">
            </div>
            <div class="col-md-8">
                <h1 class="fw-bold mb-2 text-primary">Sindhu Fahrezi Ardiansyah</h1>
                <h5 class="text-secondary mb-3">Mahasiswa - Institut Teknologi Mojosari</h5>
                <p class="text-muted mb-4">
                    Saya adalah seorang mahasiswa yang tertarik mengembangkan keahlian di bidang pengembangan web. Saya mempelajari dasar-dasar HTML, CSS, JavaScript, pemrograman PHP, dan desktop GUI Java.
                </p>
                <div class="d-flex gap-2">
                    <a href="contactus.php" class="btn btn-primary">Hubungi Saya</a>
                    <a href="index.php" class="btn btn-outline-secondary">Kembali ke Beranda</a>
                </div>
            </div>
        </div>

        <hr class="my-5">

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-3 bg-white border shadow-sm">
                    <h4 class="fw-bold text-primary mb-3"><i class="bi bi-star-fill text-warning me-2"></i>Keahlian</h4>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item bg-transparent px-0"><i class="bi bi-check-circle-fill text-success me-2"></i>HTML & CSS</div>
                        <div class="list-group-item bg-transparent px-0"><i class="bi bi-check-circle-fill text-success me-2"></i>JavaScript</div>
                        <div class="list-group-item bg-transparent px-0"><i class="bi bi-check-circle-fill text-success me-2"></i>PHP</div>
                        <div class="list-group-item bg-transparent px-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Bootstrap CSS</div>
                        <div class="list-group-item bg-transparent px-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Java Programming</div>
                    </div>
                </div>
            </div>

            <div class="col-md-8" id="projects">
                <div class="card p-3 bg-white border shadow-sm">
                    <h4 class="fw-bold text-primary mb-3"><i class="bi bi-folder-fill me-2"></i>Daftar Praktikum</h4>
                    <div class="list-group">
                        <a href="../Modul2/index.html" target="_blank" class="list-group-item list-group-item-action border rounded mb-2 shadow-sm p-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 fw-bold text-secondary">Praktikum Modul 2</h5>
                                <small class="text-primary">HTML & CSS</small>
                            </div>
                            <p class="mb-0 text-muted small">Latihan pembuatan halaman dasar menggunakan HTML dan file stylesheet CSS eksternal.</p>
                        </a>
                        <a href="../Modul3/pertama.php" target="_blank" class="list-group-item list-group-item-action border rounded mb-2 shadow-sm p-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 fw-bold text-secondary">Praktikum Modul 3</h5>
                                <small class="text-primary">PHP Basics</small>
                            </div>
                            <p class="mb-0 text-muted small">Implementasi kode dasar pemrograman PHP, termasuk biodata dan penulisan variabel.</p>
                        </a>
                        <a href="../Modul4/perulangan.php" target="_blank" class="list-group-item list-group-item-action border rounded mb-2 shadow-sm p-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 fw-bold text-secondary">Praktikum Modul 4</h5>
                                <small class="text-primary">PHP Loops</small>
                            </div>
                            <p class="mb-0 text-muted small">Eksperimen menggunakan logika kontrol perulangan dan struktur array dalam PHP.</p>
                        </a>
                        <a href="../Modul%205%20-%20Perulangan/perulangan.php" target="_blank" class="list-group-item list-group-item-action border rounded mb-2 shadow-sm p-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 fw-bold text-secondary">Praktikum Modul 5</h5>
                                <small class="text-primary">Loops Advanced</small>
                            </div>
                            <p class="mb-0 text-muted small">Pembelajaran mendalam mengenai perulangan for, while, dan do-while lanjutan di PHP.</p>
                        </a>
                        <a href="../Modul%206%20-%20Array/array1.php" target="_blank" class="list-group-item list-group-item-action border rounded mb-2 shadow-sm p-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 fw-bold text-secondary">Praktikum Modul 6</h5>
                                <small class="text-primary">PHP Array</small>
                            </div>
                            <p class="mb-0 text-muted small">Penerapan struktur data array multidimensi dan manipulasi data array.</p>
                        </a>
                        <a href="../Modul%207%20-%20Form/from_text.php" target="_blank" class="list-group-item list-group-item-action border rounded mb-2 shadow-sm p-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 fw-bold text-secondary">Praktikum Modul 7</h5>
                                <small class="text-primary">PHP Form</small>
                            </div>
                            <p class="mb-0 text-muted small">Penanganan data formulir HTML input teks menggunakan metode POST/GET pada PHP.</p>
                        </a>
                        <a href="../praktikum_list/praktikum1_penulisan.html" target="_blank" class="list-group-item list-group-item-action border rounded shadow-sm p-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 fw-bold text-secondary">Praktikum List (Styling)</h5>
                                <small class="text-primary">CSS Layout</small>
                            </div>
                            <p class="mb-0 text-muted small">Kumpulan latihan properti margin, padding, border, background, dan positioning CSS.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
</html>