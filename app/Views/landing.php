<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Laboratorium FT Untidar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --untidar-gold: #FFD700; --untidar-blue: #003366; }
        .hero { position: relative; height: 80vh; overflow: hidden; display: flex; align-items: center; justify-content: center; color: white; }
        .hero video { position: absolute; top: 50%; left: 50%; min-width: 100%; min-height: 100%; transform: translate(-50%, -50%); object-fit: cover; z-index: -1; }
        .navbar { background-color: var(--untidar-blue); }
        .btn-gold { background-color: var(--untidar-gold); color: var(--untidar-blue); font-weight: bold; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">ELab FT</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#news">Berita</a>
                <a href="/login" class="btn btn-gold btn-sm ms-3">Login</a>
            </div>
        </div>
    </nav>
    <header class="hero">
        <video autoplay muted loop><source src="https://www.w3schools.com/howto/rain.mp4" type="video/mp4"></video>
        <div class="text-center">
            <h1>Sistem Informasi Laboratorium Fakultas Teknik Untidar</h1>
            <p>Pusat Digitalisasi Peminjaman & Praktikum</p>
        </div>
    </header>
    <main class="container my-5" id="news">
        <h3>Berita Terbaru</h3>
        <div class="row mt-4">
            <?php foreach($news as $n): ?>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5><?= esc($n['title']) ?></h5>
                        <p class="small text-muted"><?= esc($n['created_at']) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>