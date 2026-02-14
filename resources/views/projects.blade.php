<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Magic Projects 📂 | Firnanda Amalia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&family=Outfit:wght@400;600;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #fdf2f8;
            scroll-behavior: smooth;
        }

        h1,
        h2,
        h3 {
            font-family: 'Outfit', sans-serif;
        }

        /* Kartu Project Unik */
        .project-card {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(12px);
            border: 2px solid white;
            border-radius: 2.5rem;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .project-card:hover {
            transform: translateY(-10px) rotate(1deg);
            border-color: #fbcfe8;
            box-shadow: 0 25px 50px -12px rgba(244, 114, 182, 0.2);
        }

        /* Hiasan Bunga/Sparkle di pojok kartu */
        .card-decoration {
            position: absolute;
            font-size: 1.5rem;
            opacity: 0;
            transition: 0.3s;
        }

        .project-card:hover .card-decoration {
            opacity: 1;
        }

        /* Efek Shine pada Gambar */
        .img-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.4), transparent);
            transform: skewX(-25deg);
            transition: 0.75s;
        }

        .project-card:hover .img-container::after {
            left: 125%;
        }

        /* Custom Cursor kiyowok */
        body {
            cursor: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' style='font-size:24px'><text y='20'>🪄</text></svg>"), auto;
        }
    </style>
</head>

<body class="text-slate-700 pb-20">

    <nav class="sticky top-0 z-50 bg-white/60 backdrop-blur-lg border-b border-pink-100">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/blog" class="text-2xl font-extrabold text-pink-500 italic">✨ Port<span
                    class="text-purple-400">folio</span></a>
            <div class="flex space-x-8 text-sm font-bold items-center">
                <a href="/projects" class="text-pink-500 border-b-2 border-pink-500">Projects</a>
                <a href="/organization" class="hover:text-pink-500 transition">organization</a>
                <a href="/blog" class="hover:text-pink-500 transition">About Me</a>
                <a href="mailto:fimandaamalia05@gmail.com"
                    class="px-6 py-2 bg-gradient-to-r from-pink-400 to-purple-400 text-white rounded-full">Hire Me!
                    🎀</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 pt-16">
        <div class="text-center mb-20 relative">
            <div
                class="inline-block mb-4 px-6 py-2 bg-white rounded-full text-pink-500 font-bold shadow-sm border border-pink-50">
                Portfolio Gallery 📂
            </div>
            <h1 class="text-5xl md:text-6xl font-black text-slate-800 mb-6 tracking-tight">
                My Magic <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-500">Works</span>
            </h1>
            <p class="text-slate-400 italic max-w-lg mx-auto leading-relaxed">
                "Kumpulan proyek dari analisis data hingga desain UI/UX yang aku buat dengan sepenuh hati." ✨
            </p>
            <div class="absolute top-0 right-10 animate-bounce opacity-30 text-4xl">🌸</div>
            <div class="absolute bottom-0 left-10 animate-pulse opacity-30 text-4xl">☁️</div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            @foreach ($posts as $index => $post)
                <article class="project-card p-6 flex flex-col h-full group">

                    <span class="card-decoration -top-4 -right-2">🌸</span>
                    <span class="card-decoration -bottom-4 -left-2">✨</span>

                    <div
                        class="img-container relative mb-6 rounded-[2rem] overflow-hidden h-56 shadow-inner bg-pink-50">
                        <img src="{{ $post['image'] }}"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
                            alt="Project">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-pink-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>

                        <div
                            class="absolute top-4 right-4 px-4 py-1.5 bg-white/90 backdrop-blur-md rounded-full text-[10px] font-black text-pink-500 uppercase tracking-widest shadow-sm">
                            {{ $post['category'] }}
                        </div>
                    </div>

                    <div class="px-2 flex-grow">
                        <h3 class="text-2xl font-extrabold text-slate-800 mb-3 group-hover:text-pink-500 transition">
                            {{ $post['title'] }}
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 italic">
                            "{{ Str::limit($post['excerpt'], 100) }}"
                        </p>
                    </div>

                    <div class="mt-auto px-2 pt-5 border-t border-pink-50 flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-[10px] text-slate-400 uppercase font-bold tracking-tighter">Finished
                                At</span>
                            <span class="text-xs font-bold text-slate-600 italic">📅 {{ $post['date'] }}</span>
                        </div>

                        <a href="/project/{{ $index }}"
                            class="w-12 h-12 bg-pink-500 text-white rounded-2xl flex items-center justify-center hover:bg-slate-800 transition-colors shadow-lg shadow-pink-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </main>

    <script>
        // --- LOGIKA KURSROR BLINK-BLINK VERSI SUPER MINIMALIS ---
        let lastMousePos = {
            x: 0,
            y: 0
        };
        let distanceThreshold = 250; // Jarak sangat jauh baru muncul bunga
        let isWaiting = false; // Jeda waktu agar tidak spam

        document.addEventListener('mousemove', function(e) {
            if (isWaiting) return; // Kalau masih dalam jeda, jangan buat bunga

            let distance = Math.sqrt(
                Math.pow(e.pageX - lastMousePos.x, 2) +
                Math.pow(e.pageY - lastMousePos.y, 2)
            );

            // Hanya buat bunga jika jarak sudah jauh
            if (distance >= distanceThreshold) {
                lastMousePos = {
                    x: e.pageX,
                    y: e.pageY
                };

                // Aktifkan jeda waktu (cooldown) 300ms
                isWaiting = true;
                setTimeout(() => {
                    isWaiting = false;
                }, 300);

                const sparkle = document.createElement('div');
                sparkle.className = 'sparkle-flower';

                const emojis = ['🌸', '✨']; // Pakai yang paling cantik aja
                sparkle.innerText = emojis[Math.floor(Math.random() * emojis.length)];

                sparkle.style.left = e.pageX + 'px';
                sparkle.style.top = e.pageY + 'px';

                const randomX = (Math.random() - 0.5) * 40;
                const randomY = (Math.random() - 0.5) * 40;
                sparkle.style.setProperty('--x', randomX + 'px');
                sparkle.style.setProperty('--y', randomY + 'px');

                document.body.appendChild(sparkle);

                // Cepat hilang (hanya 0.5 detik)
                setTimeout(() => {
                    sparkle.remove();
                }, 500);
            }
        });
    </script>

    <style>
        /* Style kursor utama */
        body {
            cursor: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' style='font-size:24px'><text y='20'>🪄</text></svg>"), auto;
        }

        /* Animasi bunga terbangnya */
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
                transform: translate(0, 0) scale(0) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translate(var(--x), var(--y)) scale(1.5) rotate(180deg);
                opacity: 0;
            }
        }

        /* Biar tombol tetep bisa diklik dengan nyaman */
        a,
        button {
            cursor: pointer;
        }

        /* Efek Latar Belakang Bintang Jatuh */
        .night-sky {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            /* Di belakang konten */
            overflow: hidden;
        }

        .star {
            position: absolute;
            background: linear-gradient(90deg, #fbcfe8, transparent);
            height: 2px;
            filter: drop-shadow(0 0 6px #fbcfe8);
            animation: shooting-star 3s linear infinite;
            opacity: 0;
        }

        @keyframes shooting-star {
            0% {
                transform: translateX(0) translateY(0) rotate(-45deg) scale(0);
                opacity: 0;
            }

            10% {
                opacity: 1;
                transform: translateX(-100px) translateY(100px) rotate(-45deg) scale(1);
            }

            100% {
                transform: translateX(-1000px) translateY(1000px) rotate(-45deg) scale(1);
                opacity: 0;
            }
        }
    </style>

    <div class="night-sky" id="star-container"></div>

    <script>
        // Fungsi membuat bintang jatuh secara random
        function createShootingStar() {
            const container = document.getElementById('star-container');
            const star = document.createElement('div');
            star.className = 'star';

            // Posisi random mulai dari kanan atas
            const startX = Math.random() * window.innerWidth + 200;
            const startY = Math.random() * window.innerHeight / 2 - 100;

            star.style.left = startX + 'px';
            star.style.top = startY + 'px';

            // Panjang bintang random
            const starWidth = Math.random() * 100 + 50;
            star.style.width = starWidth + 'px';

            // Kecepatan random
            const duration = Math.random() * 2 + 2;
            star.style.animationDuration = duration + 's';

            container.appendChild(star);

            // Hapus bintang setelah animasi selesai
            setTimeout(() => {
                star.remove();
            }, duration * 1000);
        }

        // Munculkan bintang setiap 2 detik
        setInterval(createShootingStar, 2000);
    </script>

    <div class="fixed bottom-10 right-10 z-[100]">
        <button onclick="toggleMusic()"
            class="w-16 h-16 bg-white border-4 border-pink-200 rounded-full shadow-2xl flex items-center justify-center text-3xl hover:scale-110 transition active:scale-95">
            <span id="music-icon">🎵</span>
        </button>
    </div>

    <audio id="myAudio" loop>
        <source src="{{ asset('audio/sound.mp3') }}" type="audio/mpeg">
    </audio>

    <footer class="mt-32 text-center text-slate-400 text-sm italic">
        "Scroll to the top to see more magic!" ✨
    </footer>

    <script>
        const audio = document.getElementById("myAudio");
        const musicIcon = document.getElementById("music-icon");

        // 1. Cek status terakhir pas halaman kebuka
        window.addEventListener('load', () => {
            const savedTime = localStorage.getItem('musicTime');
            const isMusicPlaying = localStorage.getItem('isPlaying');

            if (savedTime) {
                audio.currentTime = parseFloat(savedTime);
            }

            if (isMusicPlaying === 'true') {
                // Browser biasanya blokir autoplay, jadi kita coba play
                // Kalau gagal, user tetep harus klik tombol sekali di halaman pertama
                audio.play().catch(() => {
                    console.log("Menunggu interaksi user untuk lanjut nyanyi... ✨");
                });
                musicIcon.innerText = "⏸️";
            }
        });

        // 2. Fungsi Tombol (Play/Pause)
        function toggleMusic() {
            if (audio.paused) {
                audio.play();
                musicIcon.innerText = "⏸️";
                localStorage.setItem('isPlaying', 'true');
            } else {
                audio.pause();
                musicIcon.innerText = "🎵";
                localStorage.setItem('isPlaying', 'false');
            }
        }

        // 3. Simpan detik musik SETIAP DETIK (biar akurat pas pindah)
        setInterval(() => {
            if (!audio.paused) {
                localStorage.setItem('musicTime', audio.currentTime);
            }
        }, 1000);

        // --- LOGIKA KURSROR (VERSION: LESS FLOWERS) ---
        let lastMousePos = {
            x: 0,
            y: 0
        };
        let distanceThreshold = 50;

        document.addEventListener('mousemove', function(e) {
            let distance = Math.sqrt(Math.pow(e.pageX - lastMousePos.x, 2) + Math.pow(e.pageY - lastMousePos.y, 2));
            if (distance < distanceThreshold) return;
            lastMousePos = {
                x: e.pageX,
                y: e.pageY
            };

            const sparkle = document.createElement('div');
            sparkle.className = 'sparkle-flower';
            const emojis = ['🌸', '✨', '💖'];
            sparkle.innerText = emojis[Math.floor(Math.random() * emojis.length)];
            sparkle.style.left = e.pageX + 'px';
            sparkle.style.top = e.pageY + 'px';
            sparkle.style.setProperty('--x', (Math.random() - 0.5) * 80 + 'px');
            sparkle.style.setProperty('--y', (Math.random() - 0.5) * 80 + 'px');
            document.body.appendChild(sparkle);
            setTimeout(() => {
                sparkle.remove();
            }, 1000);
        });
    </script>

</body>

</html>
