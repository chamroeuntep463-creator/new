<div class="relative">
    @if ($submitted)
        <!-- Success State Alert (Cyber Neon Glow) -->
        <div class="p-8 rounded-3xl bg-slate-900/90 border border-cyan-500/50 shadow-[0_0_40px_rgba(6,182,212,0.25)] text-center animate-fade-in">
            <div class="w-16 h-16 rounded-2xl bg-cyan-500/20 text-cyan-400 border border-cyan-400/40 flex items-center justify-center mx-auto mb-5 shadow-lg shadow-cyan-500/30">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-white mb-2 tracking-tight">Transmission Received!</h3>
            <p class="text-slate-300 text-sm sm:text-base max-w-md mx-auto mb-6 leading-relaxed">
                Thank you for reaching out. Your message has been encrypted and sent directly to my inbox. I'll get back to you shortly.
            </p>
            <button 
                type="button" 
                wire:click="resetForm" 
                class="inline-flex items-center px-6 py-3 text-sm font-semibold rounded-xl text-cyan-300 bg-cyan-950/60 border border-cyan-500/40 hover:bg-cyan-900/50 hover:text-white transition duration-200 shadow-md">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Send Another Message
            </button>
        </div>
    @else
        <!-- Contact Form -->
        <form wire:submit.prevent="submit" class="space-y-6">
            <div class="grid sm:grid-cols-2 gap-6">
                <!-- Name -->
                <div>
                    <label for="contact-name" class="block mb-2 text-sm font-medium text-slate-200">
                        Your Name <span class="text-cyan-400">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            id="contact-name" 
                            wire:model.blur="name" 
                            placeholder="Your Name"
                            class="bg-slate-900/80 border @error('name') border-red-500/80 focus:border-red-500 focus:ring-red-500/30 @else border-slate-700/80 focus:border-cyan-500 focus:ring-cyan-500/30 @enderror text-white text-sm rounded-xl block w-full ps-10 p-3.5 placeholder-slate-500 transition shadow-inner focus:outline-none focus:ring-2">
                    </div>
                    @error('name')
                        <p class="mt-1.5 text-xs text-red-400 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 inline" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="contact-email" class="block mb-2 text-sm font-medium text-slate-200">
                        Your Email <span class="text-cyan-400">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <input 
                            type="email" 
                            id="contact-email" 
                            wire:model.blur="email" 
                            placeholder="name@example.com"
                            class="bg-slate-900/80 border @error('email') border-red-500/80 focus:border-red-500 focus:ring-red-500/30 @else border-slate-700/80 focus:border-cyan-500 focus:ring-cyan-500/30 @enderror text-white text-sm rounded-xl block w-full ps-10 p-3.5 placeholder-slate-500 transition shadow-inner focus:outline-none focus:ring-2">
                    </div>
                    @error('email')
                        <p class="mt-1.5 text-xs text-red-400 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 inline" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <!-- Subject -->
            <div>
                <label for="contact-subject" class="block mb-2 text-sm font-medium text-slate-200">
                    Subject <span class="text-cyan-400">*</span>
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                    </div>
                    <input 
                        type="text" 
                        id="contact-subject" 
                        wire:model.blur="subject" 
                        placeholder="Project Collaboration / Full Stack Inquiry"
                        class="bg-slate-900/80 border @error('subject') border-red-500/80 focus:border-red-500 focus:ring-red-500/30 @else border-slate-700/80 focus:border-cyan-500 focus:ring-cyan-500/30 @enderror text-white text-sm rounded-xl block w-full ps-10 p-3.5 placeholder-slate-500 transition shadow-inner focus:outline-none focus:ring-2">
                </div>
                @error('subject')
                    <p class="mt-1.5 text-xs text-red-400 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5 inline" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Message -->
            <div>
                <label for="contact-message" class="block mb-2 text-sm font-medium text-slate-200">
                    Message Details <span class="text-cyan-400">*</span>
                </label>
                <textarea 
                    id="contact-message" 
                    rows="5" 
                    wire:model.blur="message" 
                    placeholder="Tell me about your project, timeline, tech requirements, or goals..."
                    class="bg-slate-900/80 border @error('message') border-red-500/80 focus:border-red-500 focus:ring-red-500/30 @else border-slate-700/80 focus:border-cyan-500 focus:ring-cyan-500/30 @enderror text-white text-sm rounded-xl block w-full p-4 placeholder-slate-500 transition shadow-inner focus:outline-none focus:ring-2 resize-none"></textarea>
                @error('message')
                    <p class="mt-1.5 text-xs text-red-400 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5 inline" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Action Button -->
            <button 
                type="submit" 
                wire:loading.attr="disabled"
                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-bold text-slate-900 bg-gradient-to-r from-cyan-400 via-sky-400 to-blue-500 hover:from-cyan-300 hover:to-blue-400 rounded-xl shadow-[0_0_25px_rgba(6,182,212,0.4)] hover:shadow-[0_0_35px_rgba(6,182,212,0.6)] focus:ring-4 focus:ring-cyan-400/50 transition-all duration-300 group disabled:opacity-50 disabled:cursor-not-allowed">
                
                <span wire:loading.remove wire:target="submit" class="flex items-center">
                    Send Message
                    <svg class="w-5 h-5 ms-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>

                <span wire:loading wire:target="submit" class="flex items-center">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Encrypting & Sending...
                </span>
            </button>
        </form>
    @endif
</div>
