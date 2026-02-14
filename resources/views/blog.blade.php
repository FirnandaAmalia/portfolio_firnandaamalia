<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Firnanda Amalia 🎀</title>
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
        h3,
        h4 {
            font-family: 'Outfit', sans-serif;
        }

        .polaroid {
            background: white;
            padding: 1rem 1rem 3rem 1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transform: rotate(-2deg);
            transition: 0.3s;
        }

        .polaroid:hover {
            transform: rotate(0deg) scale(1.05);
        }

        .tape {
            background: rgba(191, 219, 254, 0.6);
            width: 100px;
            height: 30px;
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .soft-card {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(8px);
            border: 2px dashed #fbcfe8;
        }

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

        a,
        button {
            cursor: pointer;
        }
    </style>
</head>

<body class="text-slate-700">

    <nav class="sticky top-0 z-50 bg-white/60 backdrop-blur-lg border-b border-pink-100">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/blog" class="text-2xl font-extrabold text-pink-500 italic">✨ Port<span
                    class="text-purple-400">folio</span></a>
            <div class="flex space-x-8 text-sm font-bold items-center">
                <a href="/projects" class="hover:text-pink-500 transition">Projects</a>
                <a href="/organization"
                    class="text-slate-600 hover:text-pink-500 font-semibold transition-all">Organization</a>
                <a href="/blog" class="text-pink-500 border-b-2 border-pink-500">About Me</a>
                <a href="mailto:fimandaamalia05@gmail.com"
                    class="px-6 py-2 bg-gradient-to-r from-pink-400 to-purple-400 text-white rounded-full">Hire Me!
                    🎀</a>
            </div>
        </div>
    </nav>

    <header class="max-w-6xl mx-auto pt-20 pb-16 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="relative flex justify-center space-x-4">
                <div class="polaroid relative">
                    <div class="tape"></div>
                    <img src="{{ asset('img/hannie.jpg') }}" class="w-40 h-52 object-cover border border-slate-100"
                        alt="Firnanda">
                </div>
                <div class="polaroid relative mt-12" style="transform: rotate(3deg);">
                    <div class="tape"></div>
                    <img src="{{ asset('img/hannie.jpg') }}" class="w-40 h-52 object-cover border border-slate-100"
                        alt="Amalia">
                </div>
            </div>

            <div class="text-left">
                <h1 class="text-6xl font-black text-slate-800 mb-4 tracking-tighter">about <span
                        class="text-pink-500 italic">me</span></h1>
                <h2 class="text-2xl font-bold text-slate-600 mb-6 italic">firnanda amalia</h2>
                <p class="text-lg leading-relaxed text-slate-500">
                    Information Systems student specializing in Data Analytics and UI/UX Design, with experience in data processing, visualization, and designing user-centered interfaces that improve usability and support informed decision-making.
                </p>
            </div>
        </div>
    </header>

    <section class="max-w-6xl mx-auto px-6 py-20 border-t border-pink-100">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            <div>
                <h2 class="text-4xl font-black text-slate-800 mb-10 tracking-widest uppercase">education</h2>
                <div class="space-y-8">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-pink-400">
                        <h4 class="font-bold text-slate-800">UNIVERSITY ESA UNGGUL</h4>
                        <p class="text-pink-500 text-sm font-bold">2023 - 2027 (PREDICT)</p>
                        <p class="text-slate-500 text-sm mt-2 italic">Information Systems, GPA: 3.88 (5th Semester)</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-purple-400">
                        <h4 class="font-bold text-slate-800">SMAN 15 TANGERANG</h4>
                        <p class="text-purple-500 text-sm font-bold">2017 - 2022</p>
                        <p class="text-slate-500 text-sm mt-2 italic">Science Major (IPA)</p>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-4xl font-black text-slate-800 mb-10 tracking-widest uppercase italic">tools</h2>
                <div class="soft-card p-10 rounded-[3rem] grid grid-cols-4 gap-10 items-center justify-items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg"
                        alt="VSCode" class="hover:scale-110 transition-transform w-12 h-12">

                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg"
                        alt="Figma" class="hover:scale-110 transition-transform w-12 h-12">

                    <img src="https://img.icons8.com/color/48/microsoft-excel-2019--v1.png" alt="Excel"
                        class="hover:scale-110 transition-transform w-12 h-12">

                    <img src="https://img.icons8.com/color/48/tableau-software.png" alt="Tableau"
                        class="hover:scale-110 transition-transform w-12 h-12">

                    <img src="{{ asset('img/logoo.png') }}" alt="Looker Studio" title="Google Looker Studio"
                        class="hover:scale-110 transition-transform w-12 h-12">

                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg"
                        alt="Github" class="hover:scale-110 transition-transform w-12 h-12">

                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/12/Google_Drive_icon_%282020%29.svg"
                        alt="Google Drive" class="hover:scale-110 transition-transform w-12 h-12">

                    <img src="https://img.icons8.com/color/48/canva.png" alt="Canva"
                        class="hover:scale-110 transition-transform w-12 h-12">
                </div>
            </div>
        </div>
        </div>
    </section>

    <div class="fixed bottom-10 right-10 z-50">
        <button onclick="toggleMusic()"
            class="w-16 h-16 bg-white border-4 border-pink-200 rounded-full shadow-2xl flex items-center justify-center text-3xl hover:scale-110 transition active:scale-95">
            <span id="music-icon">🎵</span>
        </button>
    </div>

    <audio id="myAudio" loop>
        <source src="{{ asset('audio/sound.mp3') }}" type="audio/mpeg">
    </audio>

    <footer class="bg-white/30 backdrop-blur-md border-t border-pink-100 pt-20 pb-10">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <div
                class="soft-card p-12 rounded-[3.5rem] bg-gradient-to-br from-white to-pink-50 border-2 border-white shadow-xl shadow-pink-100/50 mb-16 relative overflow-hidden">
                <h2 class="text-4xl font-black text-slate-800 mb-4">Data Analytics & UI/UX, <span
                        class="text-pink-500 italic">let's connect</span>🚀</h2>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="mailto:fimandaamalia05@gmail.com"
                        class="px-8 py-4 bg-slate-800 text-white rounded-full font-bold hover:bg-pink-500 transition-all">Send
                        Email 📧</a>
                    <a href="https://linkedin.com/in/firnandaamalia" target="_blank"
                        class="px-8 py-4 bg-white border-2 border-pink-200 text-pink-500 rounded-full font-bold hover:border-pink-500 transition-all">LinkedIn
                        🔗</a>
                </div>
            </div>
            <div class="text-left">
                <a href="/blog" class="text-2xl font-extrabold text-pink-500">✨ firnanda<span
                        class="text-purple-400">amalia</span></a>
                <p class="text-xs text-slate-400 mt-1 font-medium italic">Handcrafted with love by Firnanda Amalia
                    &copy; 2026</p>
            </div>
        </div>
    </footer>

    <script>
        // --- LOGIKA MUSIC ---
        const audio = document.getElementById("myAudio");
        const musicIcon = document.getElementById("music-icon");

        window.addEventListener('load', () => {
            const savedTime = localStorage.getItem('musicTime');
            const isMusicPlaying = localStorage.getItem('isPlaying');
            if (savedTime) audio.currentTime = parseFloat(savedTime);
            if (isMusicPlaying === 'true') {
                audio.play().catch(() => console.log("User interaction needed"));
                musicIcon.innerText = "⏸️";
            }
        });

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

        setInterval(() => {
            if (!audio.paused) localStorage.setItem('musicTime', audio.currentTime);
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
