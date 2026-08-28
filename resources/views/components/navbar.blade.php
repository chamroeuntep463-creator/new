<nav class="fixed top-0 start-0 w-full z-50 bg-slate-950/80 backdrop-blur-xl border-b border-slate-800/80 transition-all duration-300 shadow-[0_4px_30px_rgba(0,0,0,0.5)]">
    <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto px-4 sm:px-6 py-3.5">
        <!-- Developer Branding / Logo -->
        <a href="#home" class="flex items-center space-x-3 rtl:space-x-reverse group">
            <div class="relative w-10 h-10 rounded-xl bg-gradient-to-br from-cyan-500 via-blue-600 to-purple-600 p-[1px] shadow-[0_0_15px_rgba(6,182,212,0.5)] group-hover:shadow-[0_0_25px_rgba(168,85,247,0.7)] transition-all duration-300">
                <div class="w-full h-full bg-slate-950 rounded-[11px] flex items-center justify-center">
                    <span class="font-mono font-extrabold text-lg text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-violet-400 group-hover:scale-110 transition-transform">
                        &lt;/&gt;
                    </span>
                </div>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-extrabold text-white tracking-tight leading-tight">
                    Dev<span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-400 to-purple-400">Chamroeun</span>
                </span>
                <span class="text-[10px] font-mono text-cyan-400/80 tracking-widest uppercase">Full-Stack Architect</span>
            </div>
        </a>

        <!-- Right Side Actions: CV Button & Mobile Toggle -->
        <div class="flex items-center md:order-2 space-x-3 rtl:space-x-reverse">
            <!-- Download CV Trigger -->
            <button 
                data-modal-target="cv-modal" 
                data-modal-toggle="cv-modal"
                type="button" 
                class="hidden sm:inline-flex items-center gap-2 px-4 py-2 text-xs md:text-sm font-semibold rounded-xl text-cyan-300 bg-cyan-950/50 border border-cyan-500/40 hover:bg-cyan-900/60 hover:text-white hover:border-cyan-400 hover:shadow-[0_0_20px_rgba(6,182,212,0.4)] transition-all duration-300">
                <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span>Download CV</span>
            </button>

            <!-- Contact CTA -->
            <a href="#contact" class="hidden lg:inline-flex items-center px-4 py-2 text-xs md:text-sm font-bold text-slate-950 bg-gradient-to-r from-cyan-400 via-sky-400 to-blue-500 hover:from-cyan-300 hover:to-blue-400 rounded-xl shadow-[0_0_20px_rgba(6,182,212,0.35)] hover:shadow-[0_0_25px_rgba(6,182,212,0.55)] transition-all duration-300">
                Let's Talk
            </a>

            <!-- Mobile Hamburger Toggle -->
            <button 
                data-collapse-toggle="navbar-sticky" 
                type="button" 
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-400 rounded-xl md:hidden hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 transition" 
                aria-controls="navbar-sticky" 
                aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>

        <!-- Main Navigation Links -->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-slate-800 rounded-2xl bg-slate-900/90 md:space-x-6 lg:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent text-sm">
                <li>
                    <a href="#home" class="block py-2 px-3 text-cyan-400 rounded-lg md:p-0 font-semibold hover:text-cyan-300 transition duration-200" aria-current="page">
                        Home
                    </a>
                </li>
                
                <li>
                    <a href="#about" class="block py-2 px-3 text-slate-300 rounded-lg md:p-0 hover:text-cyan-400 transition duration-200">
                        About
                    </a>
                </li>
                <li>
                    <a href="#skills" class="block py-2 px-3 text-slate-300 rounded-lg md:p-0 hover:text-cyan-400 transition duration-200">
                        Skills
                    </a>
                </li>
                <li>
                    <a href="#services" class="block py-2 px-3 text-slate-300 rounded-lg md:p-0 hover:text-cyan-400 transition duration-200">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#projects" class="block py-2 px-3 text-slate-300 rounded-lg md:p-0 hover:text-cyan-400 transition duration-200">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#contact" class="block py-2 px-3 text-slate-300 rounded-lg md:p-0 hover:text-cyan-400 transition duration-200">
                        Contact
                    </a>
                </li>
                <li class="sm:hidden pt-2 border-t border-slate-800">
                    <button 
                        data-modal-target="cv-modal" 
                        data-modal-toggle="cv-modal"
                        type="button" 
                        class="w-full flex items-center justify-center gap-2 py-2.5 text-xs font-semibold rounded-xl text-cyan-300 bg-cyan-950/60 border border-cyan-500/40">
                        <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Download CV
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
