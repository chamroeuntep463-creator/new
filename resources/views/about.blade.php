@extends('layouts.app')

@section('title', 'About Me - DevChamroeun')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
    <!-- Header Section -->
    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
        <span class="px-3.5 py-1.5 rounded-full text-xs font-mono font-semibold bg-purple-950/60 text-purple-300 border border-purple-500/30 uppercase tracking-wider inline-block">
            // Profile Deep Dive
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
            About <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-cyan-400">Chamroeun</span>
        </h1>
        <p class="text-slate-400 text-sm sm:text-base">
            Full Stack Web Developer & Enterprise Laravel Software Architect.
        </p>
    </div>

    <!-- Stats Section -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 mb-16">
        <div class="glass-panel p-6 rounded-3xl border border-cyan-500/20 text-center">
            <dt class="text-3xl sm:text-4xl font-extrabold text-cyan-400 font-mono" data-counter-target="50" data-counter-suffix="+">0+</dt>
            <dd class="text-xs sm:text-sm font-medium text-slate-300 mt-1">Projects Completed</dd>
        </div>
        <div class="glass-panel p-6 rounded-3xl border border-purple-500/20 text-center">
            <dt class="text-3xl sm:text-4xl font-extrabold text-purple-400 font-mono" data-counter-target="30" data-counter-suffix="+">0+</dt>
            <dd class="text-xs sm:text-sm font-medium text-slate-300 mt-1">Happy Clients</dd>
        </div>
        <div class="glass-panel p-6 rounded-3xl border border-blue-500/20 text-center">
            <dt class="text-3xl sm:text-4xl font-extrabold text-blue-400 font-mono" data-counter-target="2" data-counter-suffix="+">0+</dt>
            <dd class="text-xs sm:text-sm font-medium text-slate-300 mt-1">Years Experience</dd>
        </div>
        <div class="glass-panel p-6 rounded-3xl border border-emerald-500/20 text-center">
            <dt class="text-3xl sm:text-4xl font-extrabold text-emerald-400 font-mono" data-counter-target="100" data-counter-suffix="%">0%</dt>
            <dd class="text-xs sm:text-sm font-medium text-slate-300 mt-1">Client Satisfaction</dd>
        </div>
    </div>

    <!-- Story / Features Grid -->
    <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
        <div class="glass-panel p-8 sm:p-10 rounded-3xl border border-slate-700/60 space-y-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">
                Crafting Scalable Digital Ecosystems
            </h2>
            <p class="text-slate-300 leading-relaxed">
                "I am a passionate Full Stack Developer specializing in Laravel, PHP, MySQL, JavaScript, Docker, and modern web technologies. I enjoy building scalable applications, solving complex problems, and continuously learning new technologies."
            </p>
            <p class="text-slate-400 text-sm leading-relaxed">
                Whether creating complex ERP dashboards, high-traffic eCommerce infrastructures, or RESTful API microservices, my focus is delivering high-performance, maintainable, and secure software.
            </p>

            <div class="pt-4 flex gap-4">
                <a href="{{ route('home') }}#projects" class="px-6 py-3 rounded-xl text-xs font-bold text-slate-950 bg-cyan-400 hover:bg-cyan-300 transition">
                    View Projects
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-3 rounded-xl text-xs font-bold text-white bg-slate-900 border border-slate-700 hover:border-cyan-500 transition">
                    Contact Me
                </a>
            </div>
        </div>

        <!-- Skills Progress Card -->
        <div class="glass-panel p-8 rounded-3xl border border-slate-700/60 space-y-6">
            <h3 class="text-xl font-bold text-white mb-2">Core Proficiency Metrics</h3>
            
            <div class="space-y-5">
                <div>
                    <div class="flex justify-between mb-1 text-sm font-mono">
                        <span class="text-slate-200">Laravel 13 & PHP 8.6</span>
                        <span class="text-cyan-400 font-bold">96%</span>
                    </div>
                    <div class="w-full bg-slate-950 rounded-full h-2.5 p-0.5 border border-slate-800">
                        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 h-1.5 rounded-full" style="width: 96%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-1 text-sm font-mono">
                        <span class="text-slate-200">Livewire 3 & Alpine.js</span>
                        <span class="text-purple-400 font-bold">92%</span>
                    </div>
                    <div class="w-full bg-slate-950 rounded-full h-2.5 p-0.5 border border-slate-800">
                        <div class="bg-gradient-to-r from-purple-500 to-pink-500 h-1.5 rounded-full" style="width: 92%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-1 text-sm font-mono">
                        <span class="text-slate-200">Tailwind CSS 4 & Flowbite</span>
                        <span class="text-sky-400 font-bold">95%</span>
                    </div>
                    <div class="w-full bg-slate-950 rounded-full h-2.5 p-0.5 border border-slate-800">
                        <div class="bg-gradient-to-r from-sky-500 to-cyan-400 h-1.5 rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-1 text-sm font-mono">
                        <span class="text-slate-200">MySQL & Database Optimization</span>
                        <span class="text-emerald-400 font-bold">90%</span>
                    </div>
                    <div class="w-full bg-slate-950 rounded-full h-2.5 p-0.5 border border-slate-800">
                        <div class="bg-gradient-to-r from-emerald-500 to-teal-400 h-1.5 rounded-full" style="width: 90%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-1 text-sm font-mono">
                        <span class="text-slate-200">Docker, Linux & Cloudflare</span>
                        <span class="text-amber-400 font-bold">88%</span>
                    </div>
                    <div class="w-full bg-slate-950 rounded-full h-2.5 p-0.5 border border-slate-800">
                        <div class="bg-gradient-to-r from-amber-500 to-orange-400 h-1.5 rounded-full" style="width: 88%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
