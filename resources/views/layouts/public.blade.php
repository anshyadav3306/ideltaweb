<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="iDelta - Your Complete Learning Partner in Navi Mumbai. Find verified home tutors, solve doubts live, and grow academically.">
    <title>@yield('title', 'iDelta – Learn • Solve • Grow')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .nav-link-active { color: #6425D9; border-bottom: 2px solid #6425D9; }
        .gradient-hero { background: linear-gradient(135deg, #FAF8FF 0%, #EDE5FF 50%, #FAF8FF 100%); }
        .gradient-brand { background: linear-gradient(135deg, #6425D9 0%, #5018B5 100%); }
        .card-hover { transition: all 0.25s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(100,37,217,0.12); }
        [x-cloak] { display: none !important; }
    </style>
    @stack('head')
</head>
<body class="bg-white text-[#1B1836] antialiased">

{{-- ============================================================
     TOP INFO BAR
     ============================================================ --}}
<div class="bg-[#2A0F63] text-white text-sm py-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 flex flex-col sm:flex-row items-center justify-between gap-2">
        <div class="flex flex-wrap items-center gap-4 sm:gap-6">
            <a href="tel:+918668707874" class="flex items-center gap-1.5 hover:text-brand-200 transition-colors">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                +91 86687 07874
            </a>
            <span class="flex items-center gap-1.5">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Mon–Sat, 9AM–8PM
            </span>
            <span class="flex items-center gap-1.5">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Navi Mumbai
            </span>
        </div>
        <div class="flex items-center gap-3">
            <a href="https://instagram.com" target="_blank" rel="noopener" class="hover:text-brand-200 transition-colors" aria-label="Instagram">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                </svg>
            </a>
            <a href="https://youtube.com" target="_blank" rel="noopener" class="hover:text-brand-200 transition-colors" aria-label="YouTube">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener" class="hover:text-brand-200 transition-colors" aria-label="LinkedIn">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
            </a>
        </div>
    </div>
</div>

{{-- ============================================================
     STICKY NAV
     ============================================================ --}}
<nav x-data="{ open: false, scrolled: false }"
     @scroll.window="scrolled = window.scrollY > 20"
     :class="scrolled ? 'shadow-md bg-white/95 backdrop-blur-md' : 'bg-white'"
     class="sticky top-0 z-50 border-b border-[#E6E1F2] transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between h-16">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                <div class="w-9 h-9 bg-brand-600 rounded-xl flex items-center justify-center shadow-sm group-hover:bg-brand-700 transition-colors">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/>
                    </svg>
                </div>
                <div class="leading-none">
                    <div class="text-lg font-800 text-[#1B1836] font-extrabold tracking-tight">iDelta</div>
                    <div class="text-[10px] font-medium text-[#5F5B7A] tracking-widest uppercase">Learn • Solve • Grow</div>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex items-center gap-1">
                @php
                    $navLinks = [
                        ['label' => 'Home',         'route' => 'home'],
                        ['label' => 'Find Tutors',  'route' => 'tutors'],
                        ['label' => 'Live Doubts',  'route' => 'live-doubts'],
                        ['label' => 'Subjects',     'route' => 'subjects'],
                        ['label' => 'Home Tuition', 'route' => 'home-tuition'],
                        ['label' => 'Pricing',      'route' => 'pricing'],
                        ['label' => 'Blog',         'route' => 'blog'],
                    ];
                @endphp
                @foreach($navLinks as $link)
                <a href="{{ route($link['route']) }}"
                   class="px-3 py-1.5 text-sm font-medium rounded-lg transition-all duration-150
                          {{ request()->routeIs($link['route']) ? 'text-brand-600 bg-brand-50' : 'text-[#1B1836] hover:text-brand-600 hover:bg-brand-50' }}">
                    {{ $link['label'] }}
                </a>
                @endforeach
            </div>

            {{-- Desktop CTA --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="{{ route('become-tutor') }}"
                   class="text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors">
                    Become a Tutor
                </a>
                <a href="{{ route('tutors') }}"
                   class="inline-flex items-center gap-1.5 bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold px-4 py-2 rounded-xl transition-colors shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    Find a Tutor
                </a>
            </div>

            {{-- Mobile Hamburger --}}
            <button @click="open = !open" class="lg:hidden p-2 rounded-lg text-[#1B1836] hover:bg-brand-50 transition-colors" aria-label="Menu">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
             class="lg:hidden border-t border-[#E6E1F2] py-4 space-y-1">
            @foreach($navLinks as $link)
            <a href="{{ route($link['route']) }}"
               class="block px-3 py-2.5 text-sm font-medium rounded-lg transition-colors
                      {{ request()->routeIs($link['route']) ? 'text-brand-600 bg-brand-50' : 'text-[#1B1836] hover:text-brand-600 hover:bg-brand-50' }}">
                {{ $link['label'] }}
            </a>
            @endforeach
            <div class="pt-3 border-t border-[#E6E1F2] flex flex-col gap-2">
                <a href="{{ route('become-tutor') }}" class="block px-3 py-2.5 text-sm font-semibold text-brand-600 hover:bg-brand-50 rounded-lg transition-colors">
                    Become a Tutor
                </a>
                <a href="{{ route('tutors') }}" class="block px-3 py-2.5 text-sm font-semibold bg-brand-600 text-white rounded-xl text-center">
                    Find a Tutor
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- ============================================================
     PAGE CONTENT
     ============================================================ --}}
<main>
    @yield('content')
</main>

{{-- ============================================================
     FOOTER
     ============================================================ --}}
<footer class="bg-[#1B1836] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Col 1: About --}}
            <div>
                <div class="flex items-center gap-2.5 mb-5">
                    <div class="w-9 h-9 bg-brand-600 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/>
                        </svg>
                    </div>
                    <div class="leading-none">
                        <div class="text-lg font-extrabold tracking-tight">iDelta</div>
                        <div class="text-[10px] text-brand-200 tracking-widest uppercase">Learn • Solve • Grow</div>
                    </div>
                </div>
                <p class="text-sm text-gray-400 leading-relaxed mb-5">
                    iDelta is Navi Mumbai's trusted educational platform connecting students with verified tutors for home tuition, online classes, and instant doubt solving.
                </p>
                <div class="flex items-center gap-3">
                    <a href="https://instagram.com" target="_blank" rel="noopener" class="w-8 h-8 bg-white/10 hover:bg-brand-600 rounded-lg flex items-center justify-center transition-colors" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="https://youtube.com" target="_blank" rel="noopener" class="w-8 h-8 bg-white/10 hover:bg-brand-600 rounded-lg flex items-center justify-center transition-colors" aria-label="YouTube">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener" class="w-8 h-8 bg-white/10 hover:bg-brand-600 rounded-lg flex items-center justify-center transition-colors" aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Col 2: Quick Links --}}
            <div>
                <h3 class="font-bold text-sm uppercase tracking-wider text-gray-300 mb-5">Quick Links</h3>
                <ul class="space-y-3 text-sm">
                    @foreach([
                        ['label'=>'Find Tutors',    'route'=>'tutors'],
                        ['label'=>'Live Doubts',    'route'=>'live-doubts'],
                        ['label'=>'Home Tuition',   'route'=>'home-tuition'],
                        ['label'=>'Pricing',        'route'=>'pricing'],
                        ['label'=>'Become a Tutor', 'route'=>'become-tutor'],
                        ['label'=>'About Us',       'route'=>'about'],
                        ['label'=>'Contact',        'route'=>'contact'],
                        ['label'=>'Blog',           'route'=>'blog'],
                    ] as $fl)
                    <li>
                        <a href="{{ route($fl['route']) }}" class="text-gray-400 hover:text-white transition-colors">
                            {{ $fl['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Col 3: Subjects --}}
            <div>
                <h3 class="font-bold text-sm uppercase tracking-wider text-gray-300 mb-5">Subjects</h3>
                <ul class="space-y-3 text-sm">
                    @foreach(['Mathematics','Science','Physics','Chemistry','Biology','English','Computer Science','Economics','Accountancy','History'] as $sub)
                    <li>
                        <a href="{{ route('subjects') }}" class="text-gray-400 hover:text-white transition-colors">{{ $sub }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Col 4: Contact --}}
            <div>
                <h3 class="font-bold text-sm uppercase tracking-wider text-gray-300 mb-5">Contact Us</h3>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start gap-3 text-gray-400">
                        <svg class="w-4 h-4 mt-0.5 shrink-0 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+918668707874" class="hover:text-white transition-colors">+91 86687 07874</a>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <svg class="w-4 h-4 mt-0.5 shrink-0 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Mon–Sat, 9AM–8PM
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <svg class="w-4 h-4 mt-0.5 shrink-0 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Navi Mumbai, Maharashtra
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <svg class="w-4 h-4 mt-0.5 shrink-0 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        hello@idelta.in
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-5 flex flex-col sm:flex-row items-center justify-between gap-3 text-sm text-gray-500">
            <p>© {{ date('Y') }} iDelta. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-white transition-colors">Refund Policy</a>
            </div>
        </div>
    </div>
</footer>

@stack('scripts')
</body>
</html>
