@extends('layouts.app')

@section('title', 'Contact Me - DevChamroeun')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
    <!-- Header Section -->
    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
        <span class="px-3.5 py-1.5 rounded-full text-xs font-mono font-semibold bg-cyan-950/60 text-cyan-300 border border-cyan-500/30 uppercase tracking-wider inline-block">
            // Establish Connection
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
            Contact <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-purple-400">Me</span>
        </h1>
        <p class="text-slate-400 text-sm sm:text-base">
            Reach out directly for freelance contracts, full-time opportunities, or project consultations.
        </p>
    </div>

    <div class="grid lg:grid-cols-12 gap-8 items-start">
        <!-- Contact Information Cards (5 Cols) -->
        <div class="lg:col-span-5 space-y-4">
            <!-- Email -->
            <div class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-cyan-500/40 hover:shadow-[0_0_25px_rgba(6,182,212,0.2)] transition-all duration-300 flex items-start space-x-4">
                <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <span class="text-xs font-mono text-cyan-400 uppercase tracking-wider block">Email</span>
                    <h4 class="text-base font-bold text-white mb-0.5">youneed257@gmail.com</h4>
                    <p class="text-xs text-slate-400">Response time: &lt; 12 hours</p>
                </div>
            </div>
            <!-- Location -->
            <div class="glass-panel p-6 rounded-2xl border border-slate-800 hover:border-emerald-500/40 hover:shadow-[0_0_25px_rgba(16,185,129,0.2)] transition-all duration-300 flex items-start space-x-4">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div>
                    <span class="text-xs font-mono text-emerald-400 uppercase tracking-wider block">Location</span>
                    <h4 class="text-base font-bold text-white mb-0.5">Battambang City, Battambang Province, Cambodia</h4>
                    <p class="text-xs text-slate-400">Remote Worldwide & On-site</p>
                </div>
            </div>
        </div>

        <!-- Livewire Contact Form (7 Cols) -->
        <div class="lg:col-span-7 glass-panel p-8 sm:p-10 rounded-3xl border border-slate-700/60 shadow-2xl">
            <h3 class="text-2xl font-bold text-white mb-6">Send a Transmission</h3>
            @livewire('contact-form')
        </div>
    </div>
</div>
@endsection
