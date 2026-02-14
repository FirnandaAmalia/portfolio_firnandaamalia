<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project['title'] }} | Detail Project 🎀</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&family=Outfit:wght@400;600;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #fdf2f8;
        }

        h1,
        h2,
        h3 {
            font-family: 'Outfit', sans-serif;
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            border-bottom: 2px solid #fbcfe8;
        }

        .content-card {
            background: white;
            border-radius: 3rem;
            border: 2px solid #fbcfe8;
            box-shadow: 0 20px 40px rgba(251, 207, 232, 0.3);
        }

        /* Kursor kiyowok tetap ada! */
        body {
            cursor: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' style='font-size:24px'><text y='20'>🪄</text></svg>"), auto;
        }

        .sparkle-flower {
            position: absolute;
            pointer-events: none;
            font-size: 16px;
            z-index: 9999;
            animation: fly-out 1s ease-out forwards;
            opacity: 0;
        }

        @keyframes fly-out {
            0% {
                transform: translate(0, 0) scale(0);
                opacity: 1;
            }

            100% {
                transform: translate(var(--x), var(--y)) scale(1.5);
                opacity: 0;
            }
        }
    </style>
</head>

<body class="text-slate-700 pb-20">
    <nav class="glass-header sticky top-0 z-50 p-4">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <a href="/projects" class="flex items-center gap-2 text-pink-500 font-bold hover:gap-4 transition-all">
                <span>✨</span> Back to Projects
            </a>
            <span class="text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Project Detail</span>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 pt-12">
        <div class="text-center mb-12">
            <span class="px-4 py-1.5 bg-pink-100 text-pink-500 rounded-full text-xs font-black uppercase tracking-widest mb-4 inline-block">
                {{ $project['category'] }}
            </span>
            <h1 class="text-4xl md:text-5xl font-black text-slate-800 mb-4 leading-tight">
                {{ $project['title'] }}
            </h1>
            <div class="flex justify-center items-center gap-4 text-slate-400 text-sm italic font-medium">
                <span>📅 {{ $project['date'] }}</span>
                <span>•</span>
                <span>📍 Remote / Freelance</span>
            </div>
        </div>

        <div class="rounded-[2rem] overflow-hidden shadow-2xl mb-16 border-4 border-white bg-white relative">
    @if(isset($project['video_url']))
        {{-- Jika ada video lokal --}}
        <video class="w-full h-auto" controls autoplay muted loop>
            <source src="{{ $project['video_url'] }}" type="video/mp4">
            Browser tidak mendukung video.
        </video>
    @elseif(isset($project['embed_url']) && $project['embed_url'] != '')
        {{-- Jika pakai Google Drive / Iframe --}}
        <div class="w-full h-[500px] md:h-[650px] bg-slate-100">
            <iframe src="{{ $project['embed_url'] }}" class="w-full h-full border-none" allow="autoplay"></iframe>
        </div>
    @else
        {{-- Jika hanya ada gambar --}}
        <img src="{{ $project['image'] }}" class="w-full h-auto min-h-[300px] object-cover" alt="Project Cover">
    @endif
</div>

        <div class="content-card p-8 md:p-16 mb-12">
            <h2 class="text-2xl font-black text-slate-800 mb-6 flex items-center gap-3">
                <span class="w-8 h-8 bg-pink-500 text-white rounded-lg flex items-center justify-center text-sm font-bold">01</span>
                Project Overview
            </h2>
            <p class="text-slate-600 leading-relaxed text-lg mb-10">
                {{ $project['overview'] ?? ($project['excerpt'] ?? 'Detail project sedang diperbarui.') }}
            </p>

            <h2 class="text-2xl font-black text-slate-800 mb-6 flex items-center gap-3">
                <span class="w-8 h-8 bg-purple-500 text-white rounded-lg flex items-center justify-center text-sm font-bold">02</span>
                The Challenge & Solution
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                    <h4 class="font-bold text-slate-800 mb-2">The Challenge 🚩</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">
                        {{ $project['challenge'] ?? 'Menjaga presisi data di tengah volume tinggi (3.100 entri dokter) agar sesuai dengan standar validasi ketat portal Mutufasyankes Kemenkes, di mana inkonsistensi data dapat menghambat penilaian mutu pelayanan puskesmas secara nasional.' }}
                    </p>
                </div>
                <div class="bg-pink-50 p-6 rounded-3xl border border-pink-100">
                    <h4 class="font-bold text-pink-600 mb-2">The Magic Solution ✨</h4>
                    <p class="text-sm text-slate-500 leading-relaxed">
                        {{ $project['solution'] ?? 'Menerapkan sistem batch processing dan audit data mandiri di Excel untuk memastikan akurasi 100% sebelum sinkronisasi ke portal pusat. Dengan manajemen waktu yang proaktif, saya berhasil menyelesaikan seluruh rekapitulasi secara konsisten H-1 sebelum tenggat waktu, memastikan pelaporan instansi selalu tepat waktu dan terverifikasi sempurna.' }}
                    </p>
                </div>
            </div>

            <h2 class="text-2xl font-black text-slate-800 mb-6 flex items-center gap-3">
                <span class="w-8 h-8 bg-pink-500 text-white rounded-lg flex items-center justify-center text-sm font-bold">03</span>
                Key Achievements
            </h2>
            <ul class="space-y-4">
                @if(isset($project['achievements']) && is_array($project['achievements']))
                    @foreach($project['achievements'] as $item)
    <li class="flex items-start gap-3">
        <span class="text-pink-500 mt-1">🌸</span>
        <span class="text-slate-600 font-medium">
            {{-- Kita ganti **teks** jadi <strong>teks</strong> pake regex --}}
            {!! preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $item) !!}
        </span>
    </li>
@endforeach
                @else
                    <li class="flex items-start gap-3">
                        <span class="text-pink-500 mt-1">🌸</span>
                        <span class="text-slate-600 font-medium"></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-pink-500 mt-1">🌸</span>
                        <span class="text-slate-600 font-medium"><strong>Precision at Scale:</strong> Mengelola migrasi data sebesar 3.100 entri medis dengan tingkat zero-error, yang krusial bagi validitas laporan performa fasyankes.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-pink-500 mt-1">🌸</span>
                        <span class="text-slate-600 font-medium"><strong>Operational Efficiency:</strong> Mengoptimalkan durasi pelaporan manual menjadi digital secara sistematis, menjamin seluruh data ter-update sebelum batas waktu pelaporan bulanan.</span>
                    </li>
                @endif
            </ul>
        </div>

        <div class="text-center">
            <a href="https://wa.me/6285311572582"
                class="inline-block px-10 py-4 bg-slate-800 text-white rounded-full font-bold hover:bg-pink-500 transition-all shadow-xl hover:-translate-y-1">
                Interested in this skill? Chat me! 🎀
            </a>
        </div>
    </main>
    </body>

</html>
