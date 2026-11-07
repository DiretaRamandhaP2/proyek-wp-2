<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Sistem Surat Menyurat Desa Sukamaju' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="app-shell">
        <aside class="offcanvas-lg offcanvas-start app-sidebar d-flex flex-column" tabindex="-1" id="appSidebar" aria-label="Navigasi utama">
            <div class="p-3 d-flex align-items-center gap-2">
                <span class="app-brand-mark"><i class="bi bi-house-heart-fill" aria-hidden="true"></i></span>
                <div>
                    <div class="app-brand-name fw-bold">Desa Sukamaju</div>
                    <div class="app-brand-subtitle">Sistem Surat Menyurat</div>
                </div>
            </div>
            <nav class="px-2 d-grid gap-1">
                <x-sidebar-item icon="bi-house-door-fill" label="Dashboard" :active="true" />
                <x-sidebar-item icon="bi-pencil-square" label="Buat Surat" />
                <x-sidebar-item icon="bi-clock-history" label="Riwayat Surat" />
                <x-sidebar-item icon="bi-people-fill" label="Data Warga" />
                <x-sidebar-item icon="bi-gear-fill" label="Pengaturan" />
            </nav>
            <div class="mt-auto p-2">
                <div class="app-sidebar-exit pt-2">
                    <x-sidebar-item icon="bi-box-arrow-left" label="Keluar" />
                </div>
            </div>
        </aside>

        <div class="app-main">
            <header class="app-topbar sticky-top d-flex align-items-center justify-content-between px-2 px-md-3">
                <button class="app-icon-button d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#appSidebar" aria-controls="appSidebar" aria-label="Buka navigasi">
                    <i class="bi bi-list" aria-hidden="true"></i>
                </button>
                <span class="d-none d-lg-block"></span>
                <div class="d-flex align-items-center gap-2">
                    <button class="app-icon-button" type="button" aria-label="Notifikasi"><i class="bi bi-bell" aria-hidden="true"></i></button>
                    <div class="app-avatar"><i class="bi bi-person-fill" aria-hidden="true"></i></div>
                    <span class="fw-semibold d-none d-md-inline">Operator</span>
                    <i class="bi bi-chevron-down small" aria-hidden="true"></i>
                </div>
            </header>
            <main class="app-content">{{ $slot }}</main>
        </div>
    </div>
</body>
</html>