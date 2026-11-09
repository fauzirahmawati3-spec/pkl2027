
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PKLVERSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #080b19;
            color: #f3f4ff;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 245px;
            min-height: 100vh;
            background: #10142b;
            border-right: 1px solid #292d4c;
            padding: 28px 20px;
        }
        .brand {
            color: #a99aff;
            font-weight: 800;
            letter-spacing: 2px;
        }
        .nav-link {
            color: #c4c8e5;
            border-radius: 9px;
            padding: 12px;
            margin-top: 7px;
        }
        .nav-link.active, .nav-link:hover {
            color: white;
            background: #292451;
        }
        .main {
            flex: 1;
            padding: 32px;
            min-width: 0;
        }
        .panel {
            background: #12172e;
            border: 1px solid #292d4c;
            border-radius: 16px;
            padding: 22px;
            height: 100%;
        }
        .muted { color: #a6accb; }
        .number {
            font-size: 28px;
            font-weight: 700;
            color: #b6a6ff;
        }
        @media (max-width: 768px) {
            .sidebar { width: 75px; padding: 20px 8px; }
            .sidebar .brand, .sidebar .nav-text { display: none; }
            .main { padding: 18px; }
        }
    </style>
</head>
<body>
<div class="d-flex">
    <aside class="sidebar">
        <div class="brand mb-4">PKLVERSE</div>
        <p class="muted small">MENU UTAMA</p>
        <a href="<?= site_url('dashboard') ?>" class="nav-link active">⌂ <span class="nav-text">Dashboard</span></a>
        <a href="<?= site_url('/') ?>" class="nav-link">⌕ <span class="nav-text">Landing Page</span></a>
        <hr class="border-secondary">
        <p class="muted small">AKUN</p>
        <a href="<?= site_url('logout') ?>" class="nav-link">↪ <span class="nav-text">Logout</span></a>
    </aside>

    <main class="main">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <div>
                <p class="muted mb-1">RUANG KERJA DIGITAL</p>
                <h2 class="fw-bold">Dashboard</h2>
                <p class="muted mb-0">Selamat datang di PKLVERSE.</p>
            </div>
            <div class="panel py-3">
                <span class="muted small">Login sebagai</span><br>
                <strong><?= esc(session()->get('nama') ?? 'Pengguna') ?></strong>
                <span class="muted"> · <?= esc(session()->get('role') ?? '-') ?></span>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="panel">
                    <p class="muted mb-2">Tugas</p>
                    <div class="number">0</div>
                    <small class="muted">Tugas yang tercatat</small>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="panel">
                    <p class="muted mb-2">Jurnal Harian</p>
                    <div class="number">0</div>
                    <small class="muted">Aktivitas yang dicatat</small>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="panel">
                    <p class="muted mb-2">Presensi</p>
                    <div class="number">0</div>
                    <small class="muted">Data kehadiran</small>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="panel">
                    <p class="muted mb-2">Notifikasi</p>
                    <div class="number">0</div>
                    <small class="muted">Pemberitahuan terbaru</small>
                </div>
            </div>
        </div>

        <div class="panel">
            <h5 class="fw-bold">Aktivitas PKL</h5>
            <p class="muted mb-0">
                Dashboard dasar berhasil dibuat. Data tugas, jurnal, presensi,
                dan notifikasi akan dihubungkan ke database pada tahap berikutnya.
            </p>
        </div>
    </main>
</div>
</body>
</html>
