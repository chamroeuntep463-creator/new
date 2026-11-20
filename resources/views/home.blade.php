@extends('layouts.app')

@section('title', 'DevChamroeun - Full Stack Developer Portfolio')

@section('content')
<div class="space-y-28 sm:space-y-36">

    <!-- ========================================================================= -->
    <!-- 1. HERO SECTION -->
    <!-- ========================================================================= -->
    <section id="home" class="min-h-[92vh] flex items-center justify-center pt-24 sm:pt-28 pb-12 px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-7xl w-full mx-auto grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Content (7 Cols) -->
            <div class="lg:col-span-7 text-center lg:text-left space-y-6 sm:space-y-8">
                
                <!-- Status Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900/90 border border-cyan-500/30 shadow-[0_0_20px_rgba(6,182,212,0.2)]">
                    <span class="w-2.5 h-2.5 rounded-full bg-cyan-400 animate-ping"></span>
                    <span class="text-xs font-mono text-cyan-300 font-semibold tracking-wide uppercase">
                        Available for Freelance & Full-Time
                    </span>
                </div>

                <!-- Main Greeting & Name with Neon Gradient -->
                <div class="space-y-2">
                    <p class="text-slate-400 font-mono text-base sm:text-lg">
                        &lt;hello_world&gt;
                    </p>
                    <h1 class="text-4xl sm:text-6xl xl:text-7xl font-extrabold text-white tracking-tight leading-tight">
                        Hi, I'm <br class="hidden sm:inline" />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400 drop-shadow-[0_0_25px_rgba(6,182,212,0.4)]">
                            Chamroeun
                        </span>
                    </h1>
                    <div class="flex items-center justify-center lg:justify-start gap-2 pt-2">
                        <span class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-200">
                            Full Stack Web Developer
                        </span>
                        <span class="text-cyan-400 text-2xl animate-pulse font-mono">_</span>
                    </div>
                </div>

                <!-- Description -->
                <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed font-light">
                    I build responsive, scalable, and modern web applications using cutting-edge technologies from front-end to back-end. Specialized in <span class="text-cyan-400 font-medium">Laravel 13</span>, <span class="text-purple-400 font-medium">Livewire 3</span>, <span class="text-sky-400 font-medium">Tailwind CSS 4</span>, and Cloud Architecture.
                </p>
            </div>

            <!-- Right Content: Glowing Developer Portrait & Floating Cyber Badges (5 Cols) -->
            <div class="lg:col-span-5 flex justify-center relative select-none">
                <div class="relative w-72 sm:w-88 md:w-96 aspect-square group">
                    
                    <!-- 1. Ambient Multi-Color Neon Background Blur -->
                    <div class="absolute -inset-6 rounded-full bg-gradient-to-tr from-cyan-500 via-indigo-600 to-fuchsia-600 opacity-60 blur-2xl animate-pulse-glow group-hover:opacity-80 transition-opacity duration-500"></div>
                    <div class="absolute -inset-10 rounded-full bg-cyan-400/20 blur-3xl pointer-events-none"></div>

                    <!-- 2. Outer Rotating Dashed Cyber Ring (Clockwise) -->
                    <div class="absolute -inset-4 rounded-full border border-dashed border-cyan-400/40 animate-spin-slow pointer-events-none"></div>

                    <!-- 3. Inner Counter-Rotating Dotted Ring (Counter-Clockwise) -->
                    <div class="absolute -inset-1.5 rounded-full border-2 border-dotted border-purple-400/30 animate-spin-reverse pointer-events-none"></div>

                    <!-- 4. Cyber HUD Coordinate Accent Markers -->
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 px-2.5 py-0.5 rounded-full bg-slate-950/90 border border-cyan-500/30 text-[9px] font-mono text-cyan-400 tracking-widest uppercase shadow-md flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
                        // SYS_CORE: ACTIVE
                    </div>

                    <!-- 5. Main Portrait Frame Container (Metallic Gradient + Glass Bevel) -->
                    <div class="relative w-full h-full rounded-full p-[3px] bg-gradient-to-tr from-cyan-400 via-sky-300 via-indigo-500 to-fuchsia-500 shadow-[0_0_60px_rgba(6,182,212,0.45)] group-hover:shadow-[0_0_80px_rgba(168,85,247,0.6)] transition-all duration-700">
                        
                        <!-- Inner Bevel Frame -->
                        <div class="w-full h-full rounded-full overflow-hidden bg-slate-950 ring-4 ring-slate-950 relative shadow-inner">
                            
                            <!-- Developer Portrait Image -->
                            <img 
                                src="{{ asset('images/profile2.jpg') }}" 
                                alt="Chamroeun - Full Stack Developer" 
                                class="w-full h-full object-cover object-[center_20%] scale-100 group-hover:scale-105 transition-transform duration-700 ease-out">


                            <!-- Cyber Light Shimmer Sweep Effect -->
                            <div class="absolute inset-0 w-1/2 h-full bg-gradient-to-r from-transparent via-white/15 to-transparent animate-shimmer pointer-events-none"></div>

                            <!-- Bottom Dark Vignette Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent pointer-events-none"></div>
                            
                            <!-- Subtle Cyber Scanline Grid Overlay -->
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(7,9,14,0.3)_100%)] pointer-events-none"></div>
                        </div>
                    </div>

                    <!-- 6. Floating Badge 1 (Top Right: Laravel & PHP) -->
                    <div class="absolute -top-3 -right-3 sm:-right-6 glass-panel px-3.5 py-2 rounded-2xl shadow-[0_0_30px_rgba(255,45,32,0.3)] border border-[#FF2D20]/40 animate-float flex items-center gap-2.5 backdrop-blur-xl hover:scale-105 transition-transform">
                        <div class="w-8 h-8 rounded-xl bg-gradient-to-br from-[#FF2D20] to-rose-600 p-[1px] shadow-md shadow-[#FF2D20]/30">
                            <div class="w-full h-full bg-slate-950 rounded-[11px] flex items-center justify-center text-[#FF2D20]">
                                <x-icons.laravel class="w-5 h-5 text-[#FF2D20]" />
                            </div>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-white tracking-tight">Laravel 13</span>
                            <span class="block text-[9px] text-cyan-400 font-mono">Full-Stack Core</span>
                        </div>
                    </div>


                    <!-- 7. Floating Badge 2 (Bottom Left: Livewire & Alpine) -->
                    <div class="absolute -bottom-4 -left-3 sm:-left-6 glass-panel px-3.5 py-2 rounded-2xl shadow-[0_0_30px_rgba(251,112,169,0.3)] border border-[#FB70A9]/40 animate-float-slow flex items-center gap-2.5 backdrop-blur-xl hover:scale-105 transition-transform">
                        <div class="w-8 h-8 rounded-xl bg-gradient-to-br from-[#FB70A9] to-purple-600 p-[1px] shadow-md shadow-[#FB70A9]/30">
                            <div class="w-full h-full bg-slate-950 rounded-[11px] flex items-center justify-center">
                                <x-icons.livewire class="w-5 h-5" />
                            </div>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-white tracking-tight">Livewire 3</span>
                            <span class="block text-[9px] text-pink-400 font-mono">Reactive Engine</span>
                        </div>
                    </div>

                    <!-- 8. Floating Micro Chip (Top Left: Experience) -->
                    <div class="absolute top-8 -left-5 glass-panel px-2.5 py-1 rounded-xl border border-emerald-500/40 shadow-[0_0_20px_rgba(16,185,129,0.3)] hidden sm:flex items-center gap-1.5 animate-float-slow">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-[10px] font-mono font-bold text-emerald-300">2+ YRS EXP</span>
                    </div>

                    <!-- 9. Floating Status Radar Pill (Bottom Center) -->
                    <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 glass-panel px-4 py-1.5 rounded-full border border-cyan-500/40 shadow-[0_0_25px_rgba(6,182,212,0.3)] flex items-center gap-2 backdrop-blur-xl whitespace-nowrap">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        <span class="text-[11px] font-medium text-slate-200">Available for Hire</span>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- 2. ABOUT ME SECTION & STATS -->
    <!-- ========================================================================= -->
    <section id="about" class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto scroll-mt-28">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="px-3.5 py-1.5 rounded-full text-xs font-mono font-semibold bg-purple-950/60 text-purple-300 border border-purple-500/30 uppercase tracking-wider inline-block">
                // 01. Profile & Bio
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
                About <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-cyan-400">Me</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base">
                Engineering high-performance web systems with clean code and modern aesthetics.
            </p>
        </div>

        <!-- About Description & Value Pillars -->
        <div class="grid lg:grid-cols-12 gap-8 items-stretch mb-14">
            <!-- Bio Card -->
            <div class="lg:col-span-7 glass-panel p-8 sm:p-10 rounded-3xl border border-slate-700/60 relative overflow-hidden flex flex-col justify-between">
                <div class="space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-3 h-3 rounded-full bg-cyan-400 animate-pulse"></div>
                        <span class="text-xs font-mono text-cyan-400 uppercase tracking-widest">Architectural Philosophy</span>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-white leading-snug">
                        Transforming Complex Business Logic into Elegant Digital Products
                    </h3>
                    <p class="text-slate-300 text-base leading-relaxed">
                        "I am a passionate Full Stack Developer specializing in Laravel, PHP, MySQL, JavaScript, Docker, and modern web technologies. I enjoy building scalable applications, solving complex problems, and continuously learning new technologies."
                    </p>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        With a deep dedication to performance and code maintainability, I bridge the gap between heavy backend data structures and silky-smooth front-end experiences. Every project is built for production resilience, modular growth, and effortless scalability.
                    </p>
                </div>
                
                <div class="pt-8 grid grid-cols-2 gap-4 border-t border-slate-800/80 mt-6">
                    <div>
                        <span class="text-xs font-mono text-slate-400 uppercase">Specialization</span>
                        <p class="text-sm font-semibold text-white mt-0.5">Enterprise Laravel & Full-Stack</p>
                    </div>
                    <div>
                        <span class="text-xs font-mono text-slate-400 uppercase">Location</span>
                        <p class="text-sm font-semibold text-white mt-0.5">Battambang City, Battambang Province, Cambodia (GMT+7)</p>
                    </div>
                </div>
            </div>

            <!-- Animated Stats Grid (4 Cards) -->
            <div class="lg:col-span-5 grid grid-cols-2 gap-4 sm:gap-6">
                
                <!-- Stat 1: 50+ Projects Completed -->
                <div class="glass-panel p-6 rounded-3xl border border-cyan-500/20 hover:border-cyan-400/50 hover:shadow-[0_0_30px_rgba(6,182,212,0.2)] transition-all duration-300 text-center flex flex-col items-center justify-center space-y-2 group">
                    <div class="w-10 h-10 rounded-xl bg-cyan-500/10 text-cyan-400 border border-cyan-500/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    </div>
                    <span class="text-3xl sm:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-sky-300 font-mono" data-counter-target="50" data-counter-suffix="+">
                        0+
                    </span>
                    <span class="text-xs sm:text-sm font-medium text-slate-300">Projects Completed</span>
                </div>

                <!-- Stat 2: 30+ Happy Clients -->
                <div class="glass-panel p-6 rounded-3xl border border-purple-500/20 hover:border-purple-400/50 hover:shadow-[0_0_30px_rgba(168,85,247,0.2)] transition-all duration-300 text-center flex flex-col items-center justify-center space-y-2 group">
                    <div class="w-10 h-10 rounded-xl bg-purple-500/10 text-purple-400 border border-purple-500/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>
                    </div>
                    <span class="text-3xl sm:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400 font-mono" data-counter-target="30" data-counter-suffix="+">
                        0+
                    </span>
                    <span class="text-xs sm:text-sm font-medium text-slate-300">Happy Clients</span>
                </div>

                <!-- Stat 3: 2+ Years Experience -->
                <div class="glass-panel p-6 rounded-3xl border border-blue-500/20 hover:border-blue-400/50 hover:shadow-[0_0_30px_rgba(59,130,246,0.2)] transition-all duration-300 text-center flex flex-col items-center justify-center space-y-2 group">
                    <div class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-400 border border-blue-500/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span class="text-3xl sm:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-300 font-mono" data-counter-target="2" data-counter-suffix="+">
                        0+
                    </span>
                    <span class="text-xs sm:text-sm font-medium text-slate-300">Years Experience</span>
                </div>

                <!-- Stat 4: 100% Satisfaction -->
                <div class="glass-panel p-6 rounded-3xl border border-emerald-500/20 hover:border-emerald-400/50 hover:shadow-[0_0_30px_rgba(16,185,129,0.2)] transition-all duration-300 text-center flex flex-col items-center justify-center space-y-2 group">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <span class="text-3xl sm:text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-300 font-mono" data-counter-target="100" data-counter-suffix="%">
                        0%
                    </span>
                    <span class="text-xs sm:text-sm font-medium text-slate-300">Satisfaction Rate</span>
                </div>

            </div>
        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- 3. MY SKILLS SECTION -->
    <!-- ========================================================================= -->
    <section id="skills" class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto scroll-mt-28" x-data="{ activeTab: 'all' }">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <span class="px-3.5 py-1.5 rounded-full text-xs font-mono font-semibold bg-cyan-950/60 text-cyan-300 border border-cyan-500/30 uppercase tracking-wider inline-block">
                // 02. Tech Stack & Mastery
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
                My <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400">Skills</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base">
                Tools, frameworks, and technologies I utilize to engineer scalable solutions.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-10">
            <button 
                type="button" 
                @click="activeTab = 'all'" 
                :class="activeTab === 'all' ? 'bg-cyan-500 text-slate-950 font-bold shadow-[0_0_20px_rgba(6,182,212,0.4)]' : 'bg-slate-900/80 text-slate-400 hover:text-white border border-slate-800'" 
                class="px-5 py-2.5 rounded-xl text-xs sm:text-sm transition-all duration-200">
                All Technologies
            </button>
            <button 
                type="button" 
                @click="activeTab = 'frontend'" 
                :class="activeTab === 'frontend' ? 'bg-cyan-500 text-slate-950 font-bold shadow-[0_0_20px_rgba(6,182,212,0.4)]' : 'bg-slate-900/80 text-slate-400 hover:text-white border border-slate-800'" 
                class="px-5 py-2.5 rounded-xl text-xs sm:text-sm transition-all duration-200">
                Frontend
            </button>
            <button 
                type="button" 
                @click="activeTab = 'backend'" 
                :class="activeTab === 'backend' ? 'bg-cyan-500 text-slate-950 font-bold shadow-[0_0_20px_rgba(6,182,212,0.4)]' : 'bg-slate-900/80 text-slate-400 hover:text-white border border-slate-800'" 
                class="px-5 py-2.5 rounded-xl text-xs sm:text-sm transition-all duration-200">
                Backend
            </button>
            <button 
                type="button" 
                @click="activeTab = 'database'" 
                :class="activeTab === 'database' ? 'bg-cyan-500 text-slate-950 font-bold shadow-[0_0_20px_rgba(6,182,212,0.4)]' : 'bg-slate-900/80 text-slate-400 hover:text-white border border-slate-800'" 
                class="px-5 py-2.5 rounded-xl text-xs sm:text-sm transition-all duration-200">
                Database
            </button>
            <button 
                type="button" 
                @click="activeTab = 'tools'" 
                :class="activeTab === 'tools' ? 'bg-cyan-500 text-slate-950 font-bold shadow-[0_0_20px_rgba(6,182,212,0.4)]' : 'bg-slate-900/80 text-slate-400 hover:text-white border border-slate-800'" 
                class="px-5 py-2.5 rounded-xl text-xs sm:text-sm transition-all duration-200">
                Tools & DevOps
            </button>
        </div>

        <!-- Skills Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            <!-- 1. HTML5 (Frontend) -->
            <div x-show="activeTab === 'all' || activeTab === 'frontend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-orange-500/50 hover:shadow-[0_0_25px_rgba(249,115,22,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-500/10 border border-orange-500/30 flex items-center justify-center text-orange-400 group-hover:scale-110 transition-transform">
                        <span class="font-mono font-bold text-lg">&lt;/&gt;</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-orange-950/60 text-orange-400 border border-orange-500/30">Frontend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">HTML5</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Semantic architecture, SEO structured data, and accessible web standards (WAI-ARIA).</p>
            </div>

            <!-- 2. CSS3 (Frontend) -->
            <div x-show="activeTab === 'all' || activeTab === 'frontend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-blue-500/50 hover:shadow-[0_0_25px_rgba(59,130,246,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-500/30 flex items-center justify-center text-blue-400 group-hover:scale-110 transition-transform">
                        <span class="font-mono font-bold text-lg">#{}</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-blue-950/60 text-blue-400 border border-blue-500/30">Frontend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">CSS3</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Modern Flexbox/Grid layouts, CSS variables, keyframe animations, and fluid responsive design.</p>
            </div>

            <!-- 3. Tailwind CSS (Frontend) -->
            <div x-show="activeTab === 'all' || activeTab === 'frontend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-cyan-500/50 hover:shadow-[0_0_25px_rgba(6,182,212,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-cyan-950/60 text-cyan-400 border border-cyan-500/30">Frontend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">Tailwind CSS 4</h4>
                <p class="text-xs text-slate-400 leading-relaxed">High-velocity utility-first development, custom themes, dark mode palettes, and sleek UI tokens.</p>
            </div>

            <!-- 4. Bootstrap (Frontend) -->
            <div x-show="activeTab === 'all' || activeTab === 'frontend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-purple-500/50 hover:shadow-[0_0_25px_rgba(168,85,247,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-lg font-mono">B</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-purple-950/60 text-purple-400 border border-purple-500/30">Frontend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">Bootstrap 5</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Rapid prototyping, customizable responsive grid systems, and accessible UI component kits.</p>
            </div>

            <!-- 5. JavaScript (Frontend) -->
            <div x-show="activeTab === 'all' || activeTab === 'frontend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-yellow-500/50 hover:shadow-[0_0_25px_rgba(234,179,8,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-yellow-500/10 border border-yellow-500/30 flex items-center justify-center text-yellow-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">JS</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-yellow-950/60 text-yellow-400 border border-yellow-500/30">Frontend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">JavaScript (ES6+)</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Asynchronous operations, Fetch/Axios API integration, event handlers, and DOM manipulation.</p>
            </div>

            <!-- 6. TypeScript (Frontend) -->
            <div x-show="activeTab === 'all' || activeTab === 'frontend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-sky-500/50 hover:shadow-[0_0_25px_rgba(14,165,233,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-sky-500/10 border border-sky-500/30 flex items-center justify-center text-sky-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">TS</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-sky-950/60 text-sky-400 border border-sky-500/30">Frontend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">TypeScript</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Strong typing, interfaces, generics, and scalable architecture for modern web applications.</p>
            </div>

            <!-- 7. Alpine.js (Frontend) -->
            <div x-show="activeTab === 'all' || activeTab === 'frontend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-teal-500/50 hover:shadow-[0_0_25px_rgba(20,184,166,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-teal-500/10 border border-teal-500/30 flex items-center justify-center text-teal-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">ALP</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-teal-950/60 text-teal-400 border border-teal-500/30">Frontend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">Alpine.js</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Lightweight reactivity, client-side state handling, seamless integration with Laravel Blade templates.</p>
            </div>

            <!-- 8. PHP (Backend) -->
            <div x-show="activeTab === 'all' || activeTab === 'backend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-indigo-500/50 hover:shadow-[0_0_25px_rgba(99,102,241,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 border border-indigo-500/30 flex items-center justify-center text-indigo-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">PHP</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-indigo-950/60 text-indigo-400 border border-indigo-500/30">Backend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">PHP 8.3+</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Modern object-oriented programming, strict typing, attributes, enums, and high-speed execution.</p>
            </div>

            <!-- 9. Laravel (Backend) -->
            <div x-show="activeTab === 'all' || activeTab === 'backend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-[#FF2D20]/50 hover:shadow-[0_0_25px_rgba(255,45,32,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2.5">
                        <div class="w-12 h-12 rounded-xl bg-[#FF2D20]/10 border border-[#FF2D20]/30 flex items-center justify-center text-[#FF2D20] group-hover:scale-110 transition-transform">
                            <x-icons.laravel class="w-6 h-6 text-[#FF2D20]" />
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-[#FB70A9]/10 border border-[#FB70A9]/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-icons.livewire class="w-6 h-6" />
                        </div>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-red-950/60 text-red-400 border border-red-500/30">Backend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">Laravel 13 & Livewire</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Eloquent ORM, queues, events, authorization policies, REST APIs, and dynamic full-stack components.</p>
            </div>


            <!-- 10. Node.js (Backend) -->
            <div x-show="activeTab === 'all' || activeTab === 'backend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-green-500/50 hover:shadow-[0_0_25px_rgba(34,197,94,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-green-500/10 border border-green-500/30 flex items-center justify-center text-green-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">NODE</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-green-950/60 text-green-400 border border-green-500/30">Backend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">Node.js</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Asynchronous event-driven server runtimes, WebSockets, background microservices, and tooling.</p>
            </div>

            <!-- 11. Express.js (Backend) -->
            <div x-show="activeTab === 'all' || activeTab === 'backend'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-slate-400/50 hover:shadow-[0_0_25px_rgba(148,163,184,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-slate-500/10 border border-slate-500/30 flex items-center justify-center text-slate-300 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">EX</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-slate-900/60 text-slate-400 border border-slate-500/30">Backend</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">Express.js</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Fast, unopinionated routing, middleware chains, RESTful services, and JSON API gateways.</p>
            </div>

            <!-- 12. MySQL (Database) -->
            <div x-show="activeTab === 'all' || activeTab === 'database'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-sky-500/50 hover:shadow-[0_0_25px_rgba(14,165,233,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-sky-500/10 border border-sky-500/30 flex items-center justify-center text-sky-400 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-sky-950/60 text-sky-400 border border-sky-500/30">Database</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">MySQL</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Relational schema design, indexes, query optimizations, transactions, and foreign key integrity.</p>
            </div>

            <!-- 13. PostgreSQL (Database) -->
            <div x-show="activeTab === 'all' || activeTab === 'database'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-blue-500/50 hover:shadow-[0_0_25px_rgba(59,130,246,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-500/30 flex items-center justify-center text-blue-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">PG</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-blue-950/60 text-blue-400 border border-blue-500/30">Database</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">PostgreSQL</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Complex queries, JSONB document storage, full-text search, and strict ACID transaction compliance.</p>
            </div>

            <!-- 14. MongoDB (Database) -->
            <div x-show="activeTab === 'all' || activeTab === 'database'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-emerald-500/50 hover:shadow-[0_0_25px_rgba(16,185,129,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">MGO</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-emerald-950/60 text-emerald-400 border border-emerald-500/30">Database</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">MongoDB</h4>
                <p class="text-xs text-slate-400 leading-relaxed">NoSQL document schemas, aggregation pipelines, scalable data clustering, and flexible JSON models.</p>
            </div>

            <!-- 15. Git & GitHub (Tools) -->
            <div x-show="activeTab === 'all' || activeTab === 'tools'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-orange-500/50 hover:shadow-[0_0_25px_rgba(249,115,22,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-500/10 border border-orange-500/30 flex items-center justify-center text-orange-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">GIT</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-orange-950/60 text-orange-400 border border-orange-500/30">DevOps</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">Git & GitHub</h4>
                <p class="text-xs text-slate-400 leading-relaxed">GitFlow workflows, pull request reviews, semantic versioning, and automated GitHub Actions CI/CD.</p>
            </div>

            <!-- 16. Docker (Tools) -->
            <div x-show="activeTab === 'all' || activeTab === 'tools'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-cyan-500/50 hover:shadow-[0_0_25px_rgba(6,182,212,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">DKR</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-cyan-950/60 text-cyan-400 border border-cyan-500/30">DevOps</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">Docker & Containers</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Docker Compose multi-container services, volume isolation, and optimized production images.</p>
            </div>

            <!-- 17. Linux & Nginx (Tools) -->
            <div x-show="activeTab === 'all' || activeTab === 'tools'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-green-500/50 hover:shadow-[0_0_25px_rgba(34,197,94,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-green-500/10 border border-green-500/30 flex items-center justify-center text-green-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">NGX</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-green-950/60 text-green-400 border border-green-500/30">DevOps</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">Linux & Nginx</h4>
                <p class="text-xs text-slate-400 leading-relaxed">Ubuntu server provisioning, reverse proxies, SSL certificate auto-renewal (Let's Encrypt), and security hardening.</p>
            </div>

            <!-- 18. Cloudflare (Tools) -->
            <div x-show="activeTab === 'all' || activeTab === 'tools'" x-transition class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-amber-500/50 hover:shadow-[0_0_25px_rgba(245,158,11,0.2)] transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400 group-hover:scale-110 transition-transform">
                        <span class="font-bold text-base font-mono">CF</span>
                    </div>
                    <span class="text-[10px] font-mono font-semibold px-2 py-0.5 rounded bg-amber-950/60 text-amber-400 border border-amber-500/30">DevOps</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-1.5">Cloudflare</h4>
                <p class="text-xs text-slate-400 leading-relaxed">DNS management, Edge caching, DDoS firewall mitigation, SSL routing, and speed optimization.</p>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- 4. SERVICES SECTION -->
    <!-- ========================================================================= -->
    <section id="services" class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto scroll-mt-28">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="px-3.5 py-1.5 rounded-full text-xs font-mono font-semibold bg-purple-950/60 text-purple-300 border border-purple-500/30 uppercase tracking-wider inline-block">
                // 03. What I Deliver
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
                Services & <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-cyan-400">Solutions</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base">
                End-to-end engineering tailored to empower businesses with competitive technology.
            </p>
        </div>

        <!-- 6 Service Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1: Web Development -->
            <div class="glass-panel p-8 rounded-3xl border border-slate-800 hover:border-cyan-500/50 hover:shadow-[0_0_35px_rgba(6,182,212,0.25)] transition-all duration-300 group flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-cyan-300 transition-colors">Web Development</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Custom business websites and responsive web applications engineered with precision, rapid load times, and intuitive user experiences.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between text-xs text-slate-400 font-mono">
                    <span>SPA / SSR / Blade</span>
                    <span class="text-cyan-400 font-semibold">Learn More →</span>
                </div>
            </div>

            <!-- Service 2: Laravel Development -->
            <div class="glass-panel p-8 rounded-3xl border border-slate-800 hover:border-[#FF2D20]/50 hover:shadow-[0_0_35px_rgba(255,45,32,0.25)] transition-all duration-300 group flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#FF2D20]/10 border border-[#FF2D20]/30 text-[#FF2D20] flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.laravel class="w-7 h-7 text-[#FF2D20]" />
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-red-300 transition-colors">Laravel Development</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Professional Laravel backend solutions, custom CRM/ERP platforms, role & permission architectures, and background job queue automation.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between text-xs text-slate-400 font-mono">
                    <span>Clean Architecture</span>
                    <span class="text-red-400 font-semibold">Learn More →</span>
                </div>
            </div>


            <!-- Service 3: API Development -->
            <div class="glass-panel p-8 rounded-3xl border border-slate-800 hover:border-purple-500/50 hover:shadow-[0_0_35px_rgba(168,85,247,0.25)] transition-all duration-300 group flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-purple-500/10 border border-purple-500/30 text-purple-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-purple-300 transition-colors">API Development</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Secure RESTful APIs, webhook event dispatchers, OAuth2/Sanctum authentication, and third-party payment gateways (Stripe, PayWay, PayPal).
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between text-xs text-slate-400 font-mono">
                    <span>REST / Webhooks</span>
                    <span class="text-purple-400 font-semibold">Learn More →</span>
                </div>
            </div>

            <!-- Service 4: Database Design -->
            <div class="glass-panel p-8 rounded-3xl border border-slate-800 hover:border-blue-500/50 hover:shadow-[0_0_35px_rgba(59,130,246,0.25)] transition-all duration-300 group flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-blue-500/10 border border-blue-500/30 text-blue-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-300 transition-colors">Database Design</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Normalized relational schema architectures, query tuning, indexing strategies, automated backups, and data migration pipelines.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between text-xs text-slate-400 font-mono">
                    <span>MySQL / PostgreSQL</span>
                    <span class="text-blue-400 font-semibold">Learn More →</span>
                </div>
            </div>

            <!-- Service 5: DevOps & Deployment -->
            <div class="glass-panel p-8 rounded-3xl border border-slate-800 hover:border-emerald-500/50 hover:shadow-[0_0_35px_rgba(16,185,129,0.25)] transition-all duration-300 group flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-emerald-300 transition-colors">DevOps & Deployment</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Containerized deployments via Docker, Nginx configuration, Ubuntu Linux server tuning, and Cloudflare Edge protection.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between text-xs text-slate-400 font-mono">
                    <span>Docker / CI & CD</span>
                    <span class="text-emerald-400 font-semibold">Learn More →</span>
                </div>
            </div>

            <!-- Service 6: Technical Consulting -->
            <div class="glass-panel p-8 rounded-3xl border border-slate-800 hover:border-amber-500/50 hover:shadow-[0_0_35px_rgba(245,158,11,0.25)] transition-all duration-300 group flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/10 border border-amber-500/30 text-amber-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-amber-300 transition-colors">Technical Consulting</h3>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Codebase audits, scalability planning, security compliance reviews, and technical roadmapping for growing development teams.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between text-xs text-slate-400 font-mono">
                    <span>Strategy & Scale</span>
                    <span class="text-amber-400 font-semibold">Learn More →</span>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- 5. FEATURED PROJECTS SECTION -->
    <!-- ========================================================================= -->
    <section id="projects" class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto scroll-mt-28">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="px-3.5 py-1.5 rounded-full text-xs font-mono font-semibold bg-cyan-950/60 text-cyan-300 border border-cyan-500/30 uppercase tracking-wider inline-block">
                // 04. Portfolio Showcase
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
                Featured <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400">Projects</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base">
                A selection of high-impact production applications engineered for performance.
            </p>
        </div>

        <!-- 4 Featured Project Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Project 1: Admin Dashboard -->
            <div class="glass-panel rounded-3xl border border-slate-800 overflow-hidden hover:border-cyan-500/50 hover:shadow-[0_0_40px_rgba(6,182,212,0.25)] transition-all duration-500 group flex flex-col justify-between">
                <div>
                    <!-- Project Preview Card (Cyber UI Graphic) -->
                    <div class="h-60 bg-gradient-to-br from-slate-900 via-slate-950 to-cyan-950/40 p-6 relative border-b border-slate-800 flex flex-col justify-between overflow-hidden">
                        <div class="absolute inset-0 bg-radial-at-t from-cyan-500/10 via-transparent to-transparent opacity-60"></div>
                        <div class="flex items-center justify-between z-10">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
                            </div>
                            <span class="text-xs font-mono px-3 py-1 rounded-full bg-slate-900/90 text-cyan-400 border border-cyan-500/30">
                                Realtime Analytics
                            </span>
                        </div>
                        <!-- Mini Preview Mockup Graphic -->
                        <div class="grid grid-cols-3 gap-3 z-10">
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">REVENUE</span>
                                <span class="text-sm font-bold text-cyan-300">$128,450</span>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">ACTIVE USERS</span>
                                <span class="text-sm font-bold text-purple-300">14,280</span>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">UPTIME</span>
                                <span class="text-sm font-bold text-emerald-300">99.98%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Details Content -->
                    <div class="p-6 sm:p-8 space-y-4">
                        <h3 class="text-2xl font-bold text-white group-hover:text-cyan-300 transition-colors">
                            <a href="https://sys-shop.vercel.app/" target="_blank" rel="noopener noreferrer" class="hover:underline inline-flex items-center gap-2">
                                Admin Dashboard & PPT3
                                <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </h3>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Comprehensive administrative portal featuring real-time data widgets, user role management, exportable business reports, and interactive charts built with Livewire and Chart.js.
                        </p>
                        <!-- Tech Badges -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-red-950/60 text-red-300 border border-red-500/30">Laravel 13</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-purple-950/60 text-purple-300 border border-purple-500/30">Livewire 3</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-sky-950/60 text-sky-300 border border-sky-500/30">MySQL</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-cyan-950/60 text-cyan-300 border border-cyan-500/30">Tailwind CSS</span>
                        </div>
                    </div>
                </div>

                <!-- Footer Buttons -->
                <div class="p-6 sm:p-8 pt-0 flex items-center gap-4">
                    <a href="https://sys-shop.vercel.app/" class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-bold rounded-xl text-slate-950 bg-cyan-400 hover:bg-cyan-300 shadow-[0_0_15px_rgba(6,182,212,0.3)] transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        Live Demo
                    </a>
                    <a href="https://github.com/chamroeuntep463-creator" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-semibold rounded-xl text-slate-300 bg-slate-900 border border-slate-700 hover:border-slate-500 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path></svg>
                        GitHub Code
                    </a>
                </div>
            </div>

            <!-- Project 2: E-Commerce Platform -->
            <div class="glass-panel rounded-3xl border border-slate-800 overflow-hidden hover:border-purple-500/50 hover:shadow-[0_0_40px_rgba(168,85,247,0.25)] transition-all duration-500 group flex flex-col justify-between">
                <div>
                    <!-- Project Preview Card (Cyber UI Graphic) -->
                    <div class="h-60 bg-gradient-to-br from-slate-900 via-slate-950 to-purple-950/40 p-6 relative border-b border-slate-800 flex flex-col justify-between overflow-hidden">
                        <div class="absolute inset-0 bg-radial-at-t from-purple-500/10 via-transparent to-transparent opacity-60"></div>
                        <div class="flex items-center justify-between z-10">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
                            </div>
                            <span class="text-xs font-mono px-3 py-1 rounded-full bg-slate-900/90 text-purple-400 border border-purple-500/30">
                                Payment Gateway Integrated
                            </span>
                        </div>
                        <!-- Mini Preview Mockup Graphic -->
                        <div class="grid grid-cols-3 gap-3 z-10">
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">ORDERS</span>
                                <span class="text-sm font-bold text-purple-300">2,410+</span>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">GATEWAYS</span>
                                <span class="text-sm font-bold text-cyan-300">Stripe/ABA</span>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">INVENTORY</span>
                                <span class="text-sm font-bold text-emerald-300">Realtime</span>
                            </div>
                        </div>
                    </div>

                    <!-- Details Content -->
                    <div class="p-6 sm:p-8 space-y-4">
                        <h3 class="text-2xl font-bold text-white group-hover:text-purple-300 transition-colors">
                            <a href="https://sys-shop.vercel.app/" target="_blank" rel="noopener noreferrer" class="hover:underline inline-flex items-center gap-2">
                                Sys Shop – E-Commerce Platform
                                <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </h3>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Scalable online shopping engine supporting multi-currency checkout, dynamic product variant matrices, stock alert triggers, customer order tracking, and automated PDF invoice generation.
                        </p>
                        <!-- Tech Badges -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-red-950/60 text-red-300 border border-red-500/30">Laravel</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-emerald-950/60 text-emerald-300 border border-emerald-500/30">Payment API</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-yellow-950/60 text-yellow-300 border border-yellow-500/30">Inventory System</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-blue-950/60 text-blue-300 border border-blue-500/30">Redis Cache</span>
                        </div>
                    </div>
                </div>

                <!-- Footer Buttons -->
                <div class="p-6 sm:p-8 pt-0 flex items-center gap-4">
                    <a href="https://sys-shop.vercel.app/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-bold rounded-xl text-slate-950 bg-purple-400 hover:bg-purple-300 shadow-[0_0_15px_rgba(168,85,247,0.3)] transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        Live Demo
                    </a>
                    <a href="https://github.com/chamroeuntep463-creator" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-semibold rounded-xl text-slate-300 bg-slate-900 border border-slate-700 hover:border-slate-500 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path></svg>
                        GitHub Code
                    </a>
                </div>
            </div>

            <!-- Project 3: Assessment Alert System -->
            <div class="glass-panel rounded-3xl border border-slate-800 overflow-hidden hover:border-emerald-500/50 hover:shadow-[0_0_40px_rgba(16,185,129,0.25)] transition-all duration-500 group flex flex-col justify-between">
                <div>
                    <!-- Project Preview Card (Cyber UI Graphic) -->
                    <div class="h-60 bg-gradient-to-br from-slate-900 via-slate-950 to-emerald-950/40 p-6 relative border-b border-slate-800 flex flex-col justify-between overflow-hidden">
                        <div class="absolute inset-0 bg-radial-at-t from-emerald-500/10 via-transparent to-transparent opacity-60"></div>
                        <div class="flex items-center justify-between z-10">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
                            </div>
                            <span class="text-xs font-mono px-3 py-1 rounded-full bg-slate-900/90 text-emerald-400 border border-emerald-500/30">
                                Spatie RBAC Security
                            </span>
                        </div>
                        <!-- Mini Preview Mockup Graphic -->
                        <div class="grid grid-cols-3 gap-3 z-10">
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">ALERTS</span>
                                <span class="text-sm font-bold text-emerald-300">Automated</span>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">ROLES</span>
                                <span class="text-sm font-bold text-cyan-300">Granular</span>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">FRAMEWORK</span>
                                <span class="text-sm font-bold text-red-300">Laravel 13</span>
                            </div>
                        </div>
                    </div>

                    <!-- Details Content -->
                    <div class="p-6 sm:p-8 space-y-4">
                        <h3 class="text-2xl font-bold text-white group-hover:text-emerald-300 transition-colors">
                            Assessment Alert & Evaluation System
                        </h3>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Institutional testing and compliance alert system equipped with Spatie role-based authorization, automated email/SMS reminders, evaluation workflows, and instant score computation.
                        </p>
                        <!-- Tech Badges -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-red-950/60 text-red-300 border border-red-500/30">Laravel 13</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-purple-950/60 text-purple-300 border border-purple-500/30">Livewire 3</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-emerald-950/60 text-emerald-300 border border-emerald-500/30">Spatie Permission</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-sky-950/60 text-sky-300 border border-sky-500/30">MySQL</span>
                        </div>
                    </div>
                </div>

                <!-- Footer Buttons -->
                <div class="p-6 sm:p-8 pt-0 flex items-center gap-4">
                    <a href="#contact" class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-bold rounded-xl text-slate-950 bg-emerald-400 hover:bg-emerald-300 shadow-[0_0_15px_rgba(16,185,129,0.3)] transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        Live Demo
                    </a>
                    <a href="https://github.com/chamroeuntep463-creator" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-semibold rounded-xl text-slate-300 bg-slate-900 border border-slate-700 hover:border-slate-500 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path></svg>
                        GitHub Code
                    </a>
                </div>
            </div>

            <!-- Project 4: Futuristic Portfolio Website -->
            <div class="glass-panel rounded-3xl border border-slate-800 overflow-hidden hover:border-sky-500/50 hover:shadow-[0_0_40px_rgba(14,165,233,0.25)] transition-all duration-500 group flex flex-col justify-between">
                <div>
                    <!-- Project Preview Card (Cyber UI Graphic) -->
                    <div class="h-60 bg-gradient-to-br from-slate-900 via-slate-950 to-sky-950/40 p-6 relative border-b border-slate-800 flex flex-col justify-between overflow-hidden">
                        <div class="absolute inset-0 bg-radial-at-t from-sky-500/10 via-transparent to-transparent opacity-60"></div>
                        <div class="flex items-center justify-between z-10">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
                            </div>
                            <span class="text-xs font-mono px-3 py-1 rounded-full bg-slate-900/90 text-sky-400 border border-sky-500/30">
                                60FPS Micro-Animations
                            </span>
                        </div>
                        <!-- Mini Preview Mockup Graphic -->
                        <div class="grid grid-cols-3 gap-3 z-10">
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">AESTHETIC</span>
                                <span class="text-sm font-bold text-sky-300">Cyberpunk</span>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">DARK MODE</span>
                                <span class="text-sm font-bold text-purple-300">Glassmorphic</span>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-900/90 border border-slate-700/60">
                                <span class="text-[10px] text-slate-400 block font-mono">SPEED</span>
                                <span class="text-sm font-bold text-emerald-300">100/100</span>
                            </div>
                        </div>
                    </div>

                    <!-- Details Content -->
                    <div class="p-6 sm:p-8 space-y-4">
                        <h3 class="text-2xl font-bold text-white group-hover:text-sky-300 transition-colors">
                            Cyberpunk Developer Portfolio
                        </h3>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Ultra-modern interactive developer portfolio featuring responsive glassmorphism, dynamic particle background physics, and Livewire contact integration.
                        </p>
                        <!-- Tech Badges -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-cyan-950/60 text-cyan-300 border border-cyan-500/30">React / Blade</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-sky-950/60 text-sky-300 border border-sky-500/30">Tailwind CSS 4</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-purple-950/60 text-purple-300 border border-purple-500/30">Framer Motion</span>
                            <span class="px-2.5 py-1 text-xs font-mono font-medium rounded-lg bg-blue-950/60 text-blue-300 border border-blue-500/30">Flowbite</span>
                        </div>
                    </div>
                </div>

                <!-- Footer Buttons -->
                <div class="p-6 sm:p-8 pt-0 flex items-center gap-4">
                    <a href="#home" class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-bold rounded-xl text-slate-950 bg-sky-400 hover:bg-sky-300 shadow-[0_0_15px_rgba(14,165,233,0.3)] transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        Live Demo
                    </a>
                    <a href="https://github.com/chamroeuntep463-creator" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-semibold rounded-xl text-slate-300 bg-slate-900 border border-slate-700 hover:border-slate-500 hover:text-white transition">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path></svg>
                        GitHub Code
                    </a>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- 6. CONTACT SECTION (POWERED BY LIVEWIRE 3) -->
    <!-- ========================================================================= -->
    <section id="contact" class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto scroll-mt-28">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="px-3.5 py-1.5 rounded-full text-xs font-mono font-semibold bg-cyan-950/60 text-cyan-300 border border-cyan-500/30 uppercase tracking-wider inline-block">
                // 05. Secure Channel
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
                Get In <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400">Touch</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base">
                Have a project idea, contract opportunity, or architectural inquiry? Let's connect.
            </p>
        </div>

        <div class="grid lg:grid-cols-12 gap-8 items-start">
            
            <!-- Contact Info Cards (5 Cols) -->
            <div class="lg:col-span-5 space-y-4">
                
                <!-- Card 1: Email -->
                <div class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-cyan-500/40 hover:shadow-[0_0_25px_rgba(6,182,212,0.2)] transition-all duration-300 flex items-start space-x-4">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <span class="text-xs font-mono text-cyan-400 uppercase tracking-wider block">Direct Email</span>
                        <h4 class="text-base font-bold text-white mb-0.5">youneed257@gmail.com</h4>
                        <p class="text-xs text-slate-400">Average response time: &lt; 12 hours</p>
                    </div>
                </div>
                <!-- Card 3: Location -->
                <div class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-emerald-500/40 hover:shadow-[0_0_25px_rgba(16,185,129,0.2)] transition-all duration-300 flex items-start space-x-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <span class="text-xs font-mono text-emerald-400 uppercase tracking-wider block">Primary Location</span>
                        <h4 class="text-base font-bold text-white mb-0.5">Battambang, Cambodia</h4>
                        <p class="text-xs text-slate-400">Open for Global Remote Contracts & Relocation</p>
                    </div>
                </div>
            </div>

            <!-- Livewire 3 Interactive Contact Form (7 Cols) -->
            <div class="lg:col-span-7 glass-panel p-8 sm:p-10 rounded-3xl border border-slate-700/60 shadow-[0_0_50px_rgba(0,0,0,0.5)]">
                <div class="flex items-center justify-between mb-8 pb-4 border-b border-slate-800">
                    <div>
                        <h3 class="text-2xl font-bold text-white">Send Encrypted Message</h3>
                        <p class="text-xs sm:text-sm text-slate-400">Livewire 3 real-time validated form transmission</p>
                    </div>
                    <div class="flex items-center gap-1.5 text-xs font-mono text-emerald-400">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        ONLINE
                    </div>
                </div>

                <!-- Livewire Component -->
                @livewire('contact-form')

            </div>

        </div>
    </section>

</div>
@endsection
