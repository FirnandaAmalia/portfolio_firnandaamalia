<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization Experience | 🎀</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&family=Outfit:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Quicksand', sans-serif; background-color: #fdf2f8; cursor: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' style='font-size:24px'><text y='20'>🪄</text></svg>"), auto; }
        h1, h2 { font-family: 'Outfit', sans-serif; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px); border: 2px solid #fbcfe8; border-radius: 2rem; transition: all 0.3s ease; }
        .glass-card:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(251, 207, 232, 0.4); }
        
        /* Custom scrollbar untuk galeri biar tetep kiyowok */
        .custom-scroll::-webkit-scrollbar { height: 4px; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #fbcfe8; border-radius: 10px; }
    </style>
</head>
<body class="text-slate-700 pb-20">
    <nav class="sticky top-0 z-50 p-4 bg-white/70 backdrop-blur-md border-b-2 border-pink-100">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <a href="/blog" class="text-pink-500 font-bold flex items-center gap-2"><span>✨</span> Back to Home</a>
            <h1 class="text-sm font-black text-slate-400 uppercase tracking-widest">Organization</h1>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 pt-16">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-slate-800 mb-4">Organizational Journey 🌸</h2>
            <p class="text-slate-500">Kumpulan pengalaman dan kontribusi di berbagai komunitas.</p>
        </div>

        <div class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-pink-300 before:to-transparent">
            
            @foreach($orgs as $org)
            <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-white bg-pink-400 text-white shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 transition-all group-hover:scale-125 z-10">
                    ✨
                </div>

                <div class="w-[calc(100%-4rem)] md:w-[45%] glass-card p-6 shadow-sm">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-1 gap-2">
                        <div class="font-black text-slate-800 text-lg leading-tight">{{ $org['name'] }}</div>
                        <time class="text-[10px] font-bold text-pink-500 bg-pink-50 px-3 py-1 rounded-full whitespace-nowrap self-start md:self-center">{{ $org['period'] }}</time>
                    </div>
                    <div class="text-purple-600 font-bold text-sm mb-3">{{ $org['position'] }}</div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">{{ $org['desc'] }}</p>

                    @if(isset($org['docs']) && is_array($org['docs']))
                    <div class="border-t border-pink-50 pt-4">
                        <span class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2 block">Documentation 📸</span>
                        <div class="flex gap-3 overflow-x-auto pb-2 custom-scroll">
                            @foreach($org['docs'] as $doc)
                            <div class="shrink-0 group/img relative">
                                <img src="{{ $doc }}" 
                                     alt="Activity Documentation" 
                                     class="w-24 h-16 md:w-32 md:h-20 object-cover rounded-xl border-2 border-white shadow-sm transition-all group-hover/img:border-pink-300 cursor-pointer"
                                     onclick="window.open(this.src, '_blank')">
                                <div class="absolute inset-0 bg-pink-500/0 group-hover/img:bg-pink-500/10 rounded-xl transition-all pointer-events-none"></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach

        </div>
    </main>
</body>
</html>