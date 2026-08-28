<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'DevChamroeun') | Full-Stack Web Developer & Laravel Architect</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Portfolio of a Senior Full Stack Web Developer specializing in Laravel 13, Livewire 3, Tailwind CSS, Vue/React, MySQL, and Cloud DevOps.">
    <meta name="keywords" content="Laravel Developer, Full Stack Web Developer, Livewire, PHP, Tailwind CSS, Portfolio, Web Application Development">
    <meta name="author" content="Chamroeun">
    
    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="DevChamroeun - Full Stack Developer Portfolio">
    <meta property="og:description" content="Crafting scalable, high-performance web applications with Laravel, Livewire, and modern architectures.">
    
    <!-- Google / Bunny Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-[#07090e] text-slate-100 font-sans min-h-screen flex flex-col relative overflow-x-hidden antialiased selection:bg-cyan-500 selection:text-slate-950">

    <!-- Interactive Neon Particle Background Canvas -->
    <canvas id="cyber-particles" class="fixed inset-0 pointer-events-none z-0 opacity-80"></canvas>

    <!-- Background Cyber Glow Gradients -->
    <div class="fixed top-0 left-1/4 -translate-x-1/2 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[140px] pointer-events-none z-0"></div>
    <div class="fixed top-1/3 right-0 w-[600px] h-[600px] bg-purple-600/10 rounded-full blur-[160px] pointer-events-none z-0"></div>
    <div class="fixed bottom-10 left-1/3 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

    <!-- Sticky Navbar -->
    @include('components.navbar')

    <!-- Main Content Area -->
    <main class="flex-grow z-10 relative">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="z-10 relative bg-slate-950/90 border-t border-slate-800/80 backdrop-blur-xl mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">
                <!-- Branding -->
                <div class="md:col-span-2 space-y-4">
                    <a href="#home" class="flex items-center space-x-3 group">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-cyan-500 to-purple-600 p-[1px] shadow-[0_0_15px_rgba(6,182,212,0.4)]">
                            <div class="w-full h-full bg-slate-950 rounded-[11px] flex items-center justify-center">
                                <span class="font-mono font-bold text-sm text-cyan-400">&lt;/&gt;</span>
                            </div>
                        </div>
                        <span class="text-xl font-bold text-white tracking-tight">
                            Dev<span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">Chamroeun</span>
                        </span>
                    </a>
                    <p class="text-slate-400 text-sm max-w-md leading-relaxed">
                        Passionate Full Stack Developer crafting resilient, high-speed web applications with Laravel, Livewire, and modern cloud technologies. Let's create something extraordinary.
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-emerald-950/70 text-emerald-400 border border-emerald-500/30">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            Available for freelance & full-time
                        </span>
                    </div>
                </div>

                <!-- Navigation Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4 font-mono text-cyan-400">Navigation</h3>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="#home" class="hover:text-cyan-400 transition">Home</a></li>
                        <li><a href="#about" class="hover:text-cyan-400 transition">About Me</a></li>
                        <li><a href="#skills" class="hover:text-cyan-400 transition">Tech Skills</a></li>
                        <li><a href="#services" class="hover:text-cyan-400 transition">Services</a></li>
                        <li><a href="#projects" class="hover:text-cyan-400 transition">Featured Projects</a></li>
                        <li><a href="#contact" class="hover:text-cyan-400 transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Social Connect -->
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4 font-mono text-cyan-400">Connect</h3>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li>
                            <a href="https://github.com/chamroeuntep463-creator" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:text-cyan-400 transition group">
                                <svg class="w-4 h-4 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path></svg>
                                GitHub
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright & Tech Stack Badge -->
            <div class="pt-8 border-t border-slate-800/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>© 2026 Chamroeun. All Rights Reserved. Crafted with Laravel 13, Livewire 3 & Flowbite.</p>
                <div class="flex items-center gap-3">
                    <span class="px-2.5 py-1 rounded bg-slate-900 border border-slate-800 font-mono text-cyan-400">Laravel 13</span>
                    <span class="px-2.5 py-1 rounded bg-slate-900 border border-slate-800 font-mono text-purple-400">Tailwind 4</span>
                    <span class="px-2.5 py-1 rounded bg-slate-900 border border-slate-800 font-mono text-blue-400">Livewire 3</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Download CV Flowbite Modal -->
    <div id="cv-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full flex items-center justify-center bg-slate-950/80 backdrop-blur-md">
        <div class="relative w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-slate-900 border border-cyan-500/40 rounded-3xl shadow-[0_0_50px_rgba(6,182,212,0.3)]">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 md:p-6 border-b border-slate-800 rounded-t-3xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 border border-cyan-500/40 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white">Curriculum Vitae (CV)</h3>
                            <p class="text-xs text-slate-400">Chamroeun - Full Stack Developer</p>
                        </div>
                    </div>
                    <button type="button" class="text-slate-400 bg-transparent hover:bg-slate-800 hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="cv-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-4 text-sm text-slate-300">
                    <div class="p-4 rounded-2xl bg-slate-950/70 border border-slate-800 space-y-2">
                        <div class="flex justify-between items-center text-xs text-slate-400 font-mono">
                            <span>FORMAT: PDF / Printable</span>
                            <span class="text-cyan-400">UPDATED: 2026</span>
                        </div>
                        <p class="text-white font-medium">Full Stack Web Developer Resume includes:</p>
                        <ul class="text-xs text-slate-400 space-y-1.5 pl-4 list-disc marker:text-cyan-400">
                            <li>2+ Years of Production Experience in Laravel, PHP, MySQL, JavaScript</li>
                            <li>Architecture of Enterprise Applications (ERP, E-Commerce, Dashboards)</li>
                            <li>DevOps (Docker, Linux Server, CI/CD, Cloudflare) & Performance Tuning</li>
                            <li>Verified Client Testimonials & Project Portfolios</li>
                        </ul>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end gap-3 p-5 md:p-6 border-t border-slate-800 rounded-b-3xl">
                    <button data-modal-hide="cv-modal" type="button" class="px-5 py-2.5 text-xs font-semibold text-slate-400 bg-slate-800 hover:bg-slate-700 hover:text-white rounded-xl transition">
                        Cancel
                    </button>
                    <a href="#contact" data-modal-hide="cv-modal" onclick="alert('Resume PDF downloaded successfully!')" class="inline-flex items-center gap-2 px-6 py-2.5 text-xs font-bold text-slate-950 bg-gradient-to-r from-cyan-400 to-sky-400 hover:from-cyan-300 hover:to-sky-300 rounded-xl shadow-[0_0_20px_rgba(6,182,212,0.4)] transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Download PDF Resume
                    </a>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>
