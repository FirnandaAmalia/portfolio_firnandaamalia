<?php

use Illuminate\Support\Facades\Route;

// 1. Route untuk Halaman Profil (About Me)
Route::get('/blog', function () {
    return view('blog'); 
});

// 2. Route untuk Halaman Daftar Project (Gallery)
Route::get('/projects', function () {
    $posts = [
        0 => [
            'title' => 'Data Entry Management: 3.100+ Data Medis',
            'excerpt' => 'Verifikasi data kepatuhan APD dengan akurasi 100% menggunakan Excel & Web Puskesmas.',
            'category' => 'Work Exp',
            'date' => 'Apr - Des 2025', 
            'image' => asset('img/dataentry.jpeg')
        ],
        1 => [
            'title' => 'Dashboard Analisis Penjualan FMCG 2025',
            'excerpt' => 'Cleansing data di Excel dan visualisasi interaktif di Google Looker Studio.',
            'category' => 'Data Analyst',
            'date' => 'Feb 2026',
            'image' => asset('img/karirnex.jpeg'),
            'embed_url' => asset('files/KarirNex.pdf'),
            'overview' => 'Menganalisis performa penjualan barang konsumsi (FMCG) untuk menemukan tren profit di berbagai wilayah.',
            'challenge' => 'Dataset mentah sangat berantakan dengan banyak entri ganda.',
            'solution' => 'Melakukan pembersihan data menggunakan Power Query dan visualisasi interaktif di Looker Studio.',
            'achievements' => [
                'Dashboard Interaktif Selesai',
                'Insight Tren Produk Terlaris',
                'Otomasi Laporan Bulanan'
            ]
        ],
        2 => [
            'title' => 'Website Prototype: Luxwellness Vitamin Shop',
            'excerpt' => 'Merancang UI/UX Vitamin Shop menggunakan Figma yang user-centered.',
            'category' => 'UI/UX',
            'date' => '2025',
            'image' => asset('img/luxwellness.png'),
            'embed_url' => 'https://drive.google.com/file/d/1-W85ztGYP7z8t9pohJE0fBKBaberxkTc/view?usp=sharing',
        ],
        3 => [
            'title' => 'Visualisasi Data Gempa Indonesia via Kaggle',
            'excerpt' => 'Memetakan titik episentrum dan tren magnitudo menggunakan Tableau.',
            'category' => 'Tableau',
            'date' => '2025',
            'image' => asset('img/kaggle.png'),
        ],
        4 => [
            'title' => 'Financial Data Recap: WiFi Business',
            'excerpt' => 'Mengelola database keuangan untuk usaha WiFi keluarga dengan total 120 pelanggan aktif.',
            'category' => 'Microsoft Excel',
            'date' => '2024',
            'image' => asset('img/wifi.png'),
        ],
    ];

    return view('projects', compact('posts'));
});

// 3. Route Detail Project
Route::get('/project/{id}', function ($id) {
    $allProjects = [
        0 => [
    'title' => 'Data Entry Management: 3.100+ Data Medis',
    'category' => 'Work Exp',
    'date' => 'Apr - Des 2025',
    'image' => asset('img/dataentry.jpeg'),
    'overview' => 'Staff Data Entry Bertugas secara freelance, Saya bertanggung jawab penuh atas pengelolaan input dan verifikasi data kepatuhan APD (Alat Pelindung Diri) untuk 3.100 dokter menggunakan Microsoft Excel yang diinputkan ke website puskesmas sebagai laporan.',
    'challenge' => 'Saya harus menjaga presisi data di tengah volume tinggi (3.100 entri dokter) agar sesuai dengan standar validasi ketat portal Mutufasyankes Kemenkes, di mana kesalahan kecil bisa menghambat penilaian mutu puskesmas.',
    'solution' => 'Saya menerapkan sistem batch processing dan audit data mandiri di Excel sebelum sinkronisasi ke portal pusat. Saya juga mengatur manajemen waktu sehingga seluruh laporan selesai H-1 sebelum tenggat waktu.',
    'achievements' => [
        '**National System Compliance:** Saya memastikan 100% data kepatuhan APD terintegrasi dengan sukses ke portal Mutufasyankes sesuai standar akreditasi.',
        '**Precision at Scale:** Saya berhasil mengelola migrasi 3.100 entri medis dengan tingkat *zero-error* yang krusial bagi validitas laporan performa.',
        '**Operational Efficiency:** Saya mengoptimalkan durasi pelaporan dari manual ke digital secara sistematis dan selalu selesai lebih awal dari jadwal.'
    ]
],
        1 => [
            'title' => 'Dashboard Analisis Penjualan FMCG 2025',
            'category' => 'Data Analyst',
            'date' => 'Feb 2026',
            'image' => asset('img/karirnex.jpeg'),
            'embed_url' => asset('files/KarirNex.pdf'),
            'overview' => 'Di project ini, Saya dapat tantangan buat bedah data penjualan barang konsumsi (FMCG) tahun 2025. Tugas Saya adalah ngerapiin ribuan baris data transaksi yang masih berantakan di Excel, lalu Saya olah jadi visualisasi interaktif di Google Looker Studio supaya tren profit dan performa wilayahnya kelihatan jelas.',
            'challenge' => 'Masalah paling utama itu dataset mentahnya berantakan banget dan jumlahnya ribuan baris. Susah buat narik kesimpulan kalau datanya masih "kotor" dan tersebar, apalagi Saya harus nemuin di mana wilayah yang paling cuan tanpa ada salah hitung.',
            'solution' => 'Saya gunain SQL buat melakukan querying dan memfilter data spesifik yang dibutuhin langsung dari database. Setelah itu, Saya pakai Power Query di Excel buat otomatisasi pembersihan data (Data Cleansing). Hasilnya, data yang sudah bersih Saya hubungin ke Looker Studio buat bikin dashboard interaktif yang bisa difilter per wilayah atau produk secara cepat.',
            'achievements' => ['**Efficient Data Querying:**Saya berhasil mengoptimalkan pengambilan data menggunakan SQL, sehingga hanya data yang relevan saja yang diproses, bikin kerja jadi lebih efisien.', '**Dashboard Interaktif Selesai:**Saya berhasil bikin dashboard fungsional yang memudahkan stakeholder pantau performa bisnis secara cepat dan akurat.', '**Otomasi Laporan Bulanan:**Lewat kombinasi SQL dan Power Query, Saya bikin sistem yang otomatis update data tanpa harus ngerapiin ulang dari nol setiap kali ada data transaksi baru.']
        ],
        2 => [
    'title' => 'Website Prototype: Luxwellness Vitamin Shop',
    'category' => 'UI/UX',
    'date' => '2025',
    'image' => asset('img/luxwellness.jpg'),
    'video_url' => 'https://drive.google.com/file/d/1tdcBg0XvN43go76EaFiogOpsv2mwsX8l/view?usp=sharing', 
    'overview' => 'Saya merancang prototype toko vitamin online Luxwellness dengan konsep clean design. Tujuannya supaya navigasi belanja suplemen jadi lebih gampang buat user.',
    'challenge' => 'Info nutrisi vitamin itu banyak banget teksnya. Tantangannya gimana caranya biar semua info itu tetap enak dibaca di layar HP yang kecil tanpa kelihatan sumpek.',
    'solution' => 'Saya terapkan Card-Based Design dan Visual Hierarchy yang kuat di Figma. Jadi, info penting Saya tonjolin duluan dan layout-nya Saya bikin rapi supaya user gak pusing pas nyari produk.',
    'achievements' => [
        '**High-Fidelity Prototype:** Berhasil bikin simulasi aplikasi yang interaktif dan kerasa real di Figma.',
        '**User-Centered Layout:** Desain yang Saya buat sangat memudahkan navigasi user saat memilih kategori suplemen.',
        '**Responsive Design Concept:** Mastiin tampilan tetap konsisten dan rapi di berbagai ukuran layar smartphone.'
    ]
],
        3 => [
            'title' => 'Visualisasi Data Gempa Indonesia via Kaggle',
            'excerpt' => 'Memetakan titik episentrum dan tren magnitudo menggunakan Tableau.',
            'category' => 'Tableau',
            'date' => '2025',
            'image' => 'https://images.unsplash.com/photo-1504608524841-42fe6f032b4b?q=80&w=500',
            'video_url' => asset('videos/kagglevid.mp4'), 
            'overview' => 'Di project ini, Saya mengolah dataset besar dari Kaggle yang berisi riwayat gempa di Indonesia hasil rekaman BMKG dan USGS. Fokus Saya adalah mengubah ribuan baris koordinat dan angka yang rumit jadi visualisasi peta interaktif di Tableau, supaya pola bencana dan wilayah mana saja yang paling rawan secara cepat dapat dilihat.',
            'challenge' => 'Pas awal Saya pegang dataset dari Kaggle (BMKG & USGS) ini, tantangannya lumayan karena format datanya beda-beda dan strukturnya sempat berubah di tahun 2023. Masalah utamanya adalah gimana caranya ribuan baris data koordinat dan angka gempa yang masih mentah ini nggak cuma jadi tumpukan angka, tapi bisa bercerita tentang kondisi bencana di Indonesia secara akurat.',
            'solution' => 'Saya mutusin buat merapikan dulu datanya (data cleaning) supaya standar koordinat dan magnitudonya seragam semua. Terus, Saya bangun interactive dashboard di Tableau. Saya pasang fitur filter tahun dan lokasi supaya orang bisa langsung tahu, misalnya: Gempa di tahun 2020 itu paling banyak di mana? cuma dengan satu kali klik.',
            'achievements' => ['**Mapping yang Jelas:** Saya berhasil memetakan titik-titik gempa di seluruh Indonesia dengan kode warna yang bikin kita langsung tahu mana gempa dangkal dan mana yang dalam.', '**Analisis Tren Tahunan:** Lewat grafik tren yang Saya buat, pola naik-turunnya frekuensi gempa dari tahun ke tahun jadi kelihatan jelas banget pergerakannya.', '**Info Magnitudo yang Detail:** Saya bikin visualisasi distribusi magnitudo supaya kita bisa bedain mana wilayah yang sering kena gempa kecil dan mana yang punya risiko gempa besar secara statistik.']
        ],
        4 => [
    'title' => 'Financial Data Recap: WiFi Business',
    'category' => 'Microsoft Excel',
    'date' => '2024',
    'image' => asset('img/wifi.png'),
    'overview' => 'Saya mendigitalisasi sistem keuangan usaha WiFi keluarga dengan 120 pelanggan aktif dengan membuat sistem rekap otomatis di Excel supaya pantauan pendapatan jadi lebih efisien.',
    'challenge' => 'Pencatatan awal masih manual di buku, jadi sering selisih hitung dan susah buat nyari siapa yang belum bayar dari total 120 orang pelanggan.',
    'solution' => 'Saya bangun database Excel dengan rumus akumulasi dinamis (VLOOKUP/SUMIF) dan data validation. Jadi, setiap ada input bayar, total saldo langsung update otomatis tanpa perlu hitung ulang.',
    'achievements' => [
        '**Digital Transformation:** Berhasil ngubah pembukuan manual jadi sistem digital yang rapi dan gampang dicari.',
        '**100% Data Accuracy:** Mastiin data transaksi 120 pelanggan aman tanpa ada yang dobel atau kelewat.',
        '**Real-time Financial Monitor:** Keluarga jadi bisa liat laporan profit bulanan secara efektif.'
    ]
],
    ];

    $project = $allProjects[$id] ?? abort(404);
    return view('project', compact('project'));
});

// 4. Route Organization (FIXED ERROR DISINI BRAY)
Route::get('/organization', function () {
    $orgs = [
        [
            'name' => 'Internship Organisasi Humanis',
            'period' => 'Juni - November 2024',
            'position' => 'Staff Divisi Pendidikan dan Pengembangan Wawasan',
            'desc' => 'Selama periode magang, saya berperan aktif dalam menyusun laporan administrasi kegiatan dan notulensi rapat untuk mendukung efisiensi program kerja divisi.',
            'docs' => [
                asset('img/ggg.jpeg'),
                asset('img/anu.jpeg'),
                asset('img/stud.jpeg'),
                asset('img/adlaah.jpeg')
            ]
        ], // <-- Koma penutup item pertama
        [
            'name' => 'CodeHub',
            'period' => '2024 - Present',
            'position' => 'Koordinator Divisi Acara',
            'desc' => 'Memimpin tim dalam merancang konsep dan mengeksekusi teknis seminar hybrid bertema AI yang dihadiri oleh lebih dari 100 peserta.',
            'docs' => [
                asset('img/depkor.jpeg'),
                asset('img/ms.jpeg'),
                asset('img/peserta.jpeg'),
                asset('img/codesummit.jpeg'),
            ]
        ],
    ];

    return view('organization', compact('orgs'));
});

// 5. Redirect ke Profil
Route::get('/', function () {
    return redirect('/blog');
});