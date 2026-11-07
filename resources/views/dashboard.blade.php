<x-layouts.app title="Dashboard — Sistem Surat Menyurat Desa Sukamaju">
    @php
        $statistics = [
            ['icon' => 'bi-file-earmark-text-fill', 'tone' => 'green', 'label' => 'Total Surat', 'value' => '128', 'note' => '+12% dari bulan lalu'],
            ['icon' => 'bi-people-fill', 'tone' => 'blue', 'label' => 'Warga Terdaftar', 'value' => '1.245', 'note' => '+3% dari bulan lalu'],
            ['icon' => 'bi-folder-fill', 'tone' => 'orange', 'label' => 'Kategori Surat', 'value' => '5', 'note' => 'Kategori tersedia'],
            ['icon' => 'bi-file-earmark-text-fill', 'tone' => 'purple', 'label' => 'Jenis Surat', 'value' => '12', 'note' => 'Jenis surat tersedia'],
        ];
        $letters = [
            ['140/DS/2025', 'Surat Keterangan Domisili', 'Budi Santoso', '28 Okt 2025', 'Selesai'],
            ['139/DS/2025', 'Surat Keterangan Usaha', 'Siti Aminah', '27 Okt 2025', 'Selesai'],
            ['138/DS/2025', 'Surat Keterangan Tidak Mampu', 'Ahmad Riyadi', '27 Okt 2025', 'Diproses'],
            ['137/DS/2025', 'Surat Keterangan Kelahiran', 'Rina Wulandari', '26 Okt 2025', 'Selesai'],
            ['136/DS/2025', 'Surat Pengantar SKCK', 'Dedi Kurniawan', '25 Okt 2025', 'Selesai'],
        ];
        $categories = [['primary', 'Kependudukan', 62], ['green', 'Usaha', 28], ['welfare', 'Kesejahteraan', 18], ['other', 'Lainnya', 20]];
    @endphp

    <section class="d-flex flex-column flex-md-row justify-content-md-between gap-3 align-items-md-start mb-3">
        <div>
            <h1 class="app-page-title fw-bold mb-1">Dashboard</h1>
            <div class="app-greeting fw-semibold">Selamat datang, <span class="text-success fw-bold">Operator!</span></div>
            <p class="app-page-description mb-0 mt-1">Berikut adalah ringkasan data sistem surat menyurat desa.</p>
        </div>
        <div class="app-date-chip"><i class="bi bi-calendar3" aria-hidden="true"></i><span>Selasa, 28 Oktober 2025</span></div>
    </section>

    <section class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-3 mb-3" aria-label="Ringkasan statistik">
        @foreach ($statistics as $statistic)
            <div class="col"><x-stat-card :icon="$statistic['icon']" :tone="$statistic['tone']" :label="$statistic['label']" :value="$statistic['value']" :note="$statistic['note']" /></div>
        @endforeach
    </section>

    <section class="row g-3">
        <div class="col-xl-8">
            <article class="app-card app-section-card h-100">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h2 class="app-section-title fw-bold mb-0">Surat Terbaru</h2>
                    <a class="app-section-link fw-semibold" href="#">Lihat Semua <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="table app-table align-middle">
                        <thead><tr><th>No. Surat</th><th>Jenis Surat</th><th>Nama Warga</th><th>Tanggal</th><th>Status</th></tr></thead>
                        <tbody>
                            @foreach ($letters as $letter)
                                <tr><td>{{ $letter[0] }}</td><td>{{ $letter[1] }}</td><td>{{ $letter[2] }}</td><td>{{ $letter[3] }}</td><td><x-status-badge :status="$letter[4]" /></td></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
        <div class="col-xl-4">
            <article class="app-card app-section-card h-100">
                <h2 class="app-section-title fw-bold mb-0">Grafik Surat per Kategori</h2>
                <div class="app-donut"><div class="app-donut-content"><div class="app-donut-total fw-bold">128</div><div class="app-donut-label">Total Surat</div></div></div>
                <div class="app-legend d-grid gap-2">
                    @foreach ($categories as [$tone, $label, $value])
                        <div class="d-flex align-items-center"><span class="app-legend-swatch app-legend-{{ $tone }} me-2"></span><span>{{ $label }}</span><span class="ms-auto">{{ $value }}</span></div>
                    @endforeach
                </div>
            </article>
        </div>
    </section>
</x-layouts.app>