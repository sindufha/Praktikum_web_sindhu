<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SINDHU FAHREZI Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .hero-banner {
            background: linear-gradient(135deg, #e3f2fd, #ffffff);
            border: 1px solid #dee2e6;
        }
        .project-card {
            border: 1px solid #dee2e6;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .project-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        .project-card img {
            height: 180px;
            object-fit: cover;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
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
                    <a href="index.php" class="nav-link active d-flex align-items-center">
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

        <div class="hero-banner rounded-4 shadow-sm text-center p-5 mb-5">
            <h1 class="fw-bold mb-3 text-primary">Selamat Datang di Website Sindhu Fahrezi</h1>
            <p class="fs-5 text-secondary">
                Senang melihat Anda berkunjung di platform portofolio dan hasil pembelajaran praktikum saya.
            </p>
        </div>

        <div class="text-center my-4">
            <h2 class="fw-bold mb-4 text-secondary">Daftar Project Utama</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="card project-card w-100 h-100 bg-white">
                        <img src="images/html_images.jpg" class="card-img-top" alt="Project HTML Login">
                        <div class="card-body d-flex flex-column text-start">
                            <h5 class="card-title fw-bold text-primary">Project HTML Login</h5>
                            <p class="card-text text-muted flex-grow-1 small">Form login interaktif menggunakan HTML, CSS, dan JavaScript dengan tata letak minimalis.</p>
                            <a href="portofolio.php#projects" class="btn btn-outline-primary w-100 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="card project-card w-100 h-100 bg-white">
                        <img src="images/images.png" class="card-img-top" alt="Project PHP">
                        <div class="card-body d-flex flex-column text-start">
                            <h5 class="card-title fw-bold text-primary">Project PHP</h5>
                            <p class="card-text text-muted flex-grow-1 small">Aplikasi web dinamis yang dibangun menggunakan bahasa pemrograman PHP dan Bootstrap.</p>
                            <a href="portofolio.php#projects" class="btn btn-outline-primary w-100 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="card project-card w-100 h-100 bg-white">
                        <img src="images/images4.jpg" class="card-img-top" alt="Project Main Menu">
                        <div class="card-body d-flex flex-column text-start">
                            <h5 class="card-title fw-bold text-primary">Project Login</h5>
                            <p class="card-text text-muted flex-grow-1 small">Menu utama aplikasi desktop yang dirancang menggunakan GUI Java Swing.</p>
                            <a href="portofolio.php#projects" class="btn btn-outline-primary w-100 mt-3">Lihat Detail</a>
                        </div>
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