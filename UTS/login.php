<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Sindhu Fahrezi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">
    <div class="d-flex min-vh-100 justify-content-center align-items-center px-3">
        <div class="card shadow p-4 bg-white border" style="max-width: 360px; width: 100%; border-radius: 16px;">
            <div class="text-center mb-4">
                <img src="images/icons.png" alt="Logo" class="mb-3" style="width: 48px; height: 48px; object-fit: contain;">
                <h1 class="h4 mb-1 fw-bold text-primary">Login</h1>
                <p class="text-muted mb-0 small">Masuk ke akun portofolio Anda</p>
            </div>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label small">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="nama@domain.com">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label small">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-3 py-2 fw-bold">
                    Masuk
                </button>
                <div class="text-center">
                    <a href="index.php" class="text-decoration-none small text-secondary">
                        <i class="bi bi-arrow-left-short"></i> Kembali ke Beranda
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>