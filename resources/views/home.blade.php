@extends('layouts.public')
@section('title', 'iDelta – Find the Right Tutor, Get Home Tuition & Solve Doubts | Navi Mumbai')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="gradient-hero relative overflow-hidden pt-16 pb-20 lg:pt-24 lg:pb-28">
    {{-- Background decorative blobs --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-200 rounded-full opacity-20 blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-brand-100 rounded-full opacity-30 blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- Left: Text --}}
            <div>
                <div class="inline-flex items-center gap-2 bg-brand-100 text-brand-700 text-sm font-semibold px-4 py-2 rounded-full mb-6">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Your Complete Learning Partner
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-[3.3rem] font-extrabold leading-tight text-[#1B1836] mb-6">
                    Find the Right Tutor,<br>
                    Get Home Tuition,<br>
                    &amp; Solve <span class="text-brand-600">Doubts Instantly.</span>
                </h1>

                <p class="text-lg text-[#5F5B7A] mb-8 leading-relaxed max-w-lg">
                    Connect with verified tutors in Navi Mumbai for personalised home tuition, online classes, and live doubt-solving sessions — all in one platform.
                </p>

                <div class="flex flex-wrap gap-4 mb-8">
                    <a href="{{ route('tutors') }}"
                       class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold px-6 py-3.5 rounded-xl transition-all shadow-lg shadow-brand-200 hover:shadow-brand-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        Find a Tutor
                    </a>
                    <a href="{{ route('live-doubts') }}"
                       class="inline-flex items-center gap-2 border-2 border-brand-600 text-brand-600 hover:bg-brand-50 font-semibold px-6 py-3.5 rounded-xl transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.07A1 1 0 0121 8.845v6.31a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                        Solve a Doubt Live
                    </a>
                </div>

                <div class="flex items-center gap-3">
                    <div class="flex -space-x-2">
                        @foreach(['8B5CF6','6425D9','5018B5','7C3AED','4F46E5'] as $color)
                        <div class="w-9 h-9 rounded-full border-2 border-white bg-[#{{ $color }}] flex items-center justify-center text-white text-xs font-bold">
                            {{ chr(rand(65,90)) }}
                        </div>
                        @endforeach
                    </div>
                    <p class="text-sm text-[#5F5B7A]">
                        <span class="font-bold text-[#1B1836]">Trusted by 10,000+</span> Students and Parents
                    </p>
                </div>
            </div>

            {{-- Right: Floating Cards --}}
            <div class="relative h-[480px] hidden lg:block">
                {{-- Center Image Placeholder --}}
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-64 h-64 bg-gradient-to-br from-brand-100 to-brand-200 rounded-full flex items-center justify-center shadow-2xl shadow-brand-200">
                        <svg class="w-32 h-32 text-brand-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                        </svg>
                    </div>
                </div>

                {{-- Floating card: Home Tuition --}}
                <div class="absolute top-8 left-0 bg-white rounded-2xl shadow-xl shadow-brand-100/60 p-4 w-48 card-hover border border-brand-50">
                    <div class="w-10 h-10 bg-brand-100 rounded-xl flex items-center justify-center mb-2">
                        <svg class="w-5 h-5 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <p class="font-bold text-sm text-[#1B1836]">Home Tuition</p>
                    <p class="text-xs text-[#5F5B7A] mt-0.5">At your doorstep</p>
                </div>

                {{-- Floating card: Live Doubt Session --}}
                <div class="absolute top-16 right-0 bg-white rounded-2xl shadow-xl shadow-brand-100/60 p-4 w-52 card-hover border border-brand-50">
                    <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.07A1 1 0 0121 8.845v6.31a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <p class="font-bold text-sm text-[#1B1836]">Live Doubt Session</p>
                    <div class="flex items-center gap-1.5 mt-1">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                        <span class="text-xs text-green-600 font-medium">24 experts online</span>
                    </div>
                </div>

                {{-- Floating card: All Classes --}}
                <div class="absolute bottom-24 left-4 bg-white rounded-2xl shadow-xl shadow-brand-100/60 p-4 w-44 card-hover border border-brand-50">
                    <div class="w-10 h-10 bg-orange-100 rounded-xl flex items-center justify-center mb-2">
                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <p class="font-bold text-sm text-[#1B1836]">All Classes</p>
                    <p class="text-xs text-[#5F5B7A] mt-0.5">Class 1 – 12 &amp; College</p>
                </div>

                {{-- Floating card: Popular Subjects --}}
                <div class="absolute bottom-16 right-4 bg-white rounded-2xl shadow-xl shadow-brand-100/60 p-4 w-48 card-hover border border-brand-50">
                    <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center mb-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <p class="font-bold text-sm text-[#1B1836]">Popular Subjects</p>
                    <p class="text-xs text-[#5F5B7A] mt-0.5">50+ subjects available</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     STATS BAR
     ============================================================ --}}
<section class="py-10 bg-white border-b border-[#E6E1F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'num'=>'500+', 'label'=>'Verified Tutors', 'desc'=>'Background checked &amp; qualified', 'color'=>'brand'],
                ['icon'=>'M15 10l4.553-2.07A1 1 0 0121 8.845v6.31a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z', 'num'=>'24/7', 'label'=>'Instant Doubt Solving', 'desc'=>'Experts always available', 'color'=>'green'],
                ['icon'=>'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'num'=>'10K+', 'label'=>'Local Home Tuition', 'desc'=>'Across Navi Mumbai', 'color'=>'orange'],
                ['icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'num'=>'25K+', 'label'=>'Track Your Progress', 'desc'=>'Sessions completed', 'color'=>'blue'],
            ] as $stat)
            <div class="flex items-start gap-4 p-5 rounded-2xl bg-[#FAF8FF] border border-[#E6E1F2]">
                <div class="w-12 h-12 shrink-0 rounded-xl
                    @if($stat['color']==='brand') bg-brand-100 text-brand-600
                    @elseif($stat['color']==='green') bg-green-100 text-green-600
                    @elseif($stat['color']==='orange') bg-orange-100 text-orange-500
                    @else bg-blue-100 text-blue-600
                    @endif
                    flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"/>
                    </svg>
                </div>
                <div>
                    <div class="text-2xl font-extrabold text-[#1B1836]">{{ $stat['num'] }}</div>
                    <div class="font-semibold text-sm text-[#1B1836]">{{ $stat['label'] }}</div>
                    <div class="text-xs text-[#5F5B7A] mt-0.5">{!! $stat['desc'] !!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     HOW IDELTA WORKS
     ============================================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-14">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Simple Process</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1B1836] mt-2">How iDelta Works</h2>
            <p class="text-[#5F5B7A] mt-3 max-w-xl mx-auto">Get started in 4 easy steps — finding the right tutor has never been easier.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 relative">
            @foreach([
                ['step'=>'01', 'icon'=>'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z', 'title'=>'Search', 'desc'=>'Browse tutors by subject, class, location, or budget — filter to find your perfect match.'],
                ['step'=>'02', 'icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', 'title'=>'Connect', 'desc'=>'View tutor profiles, check reviews, and connect directly for a free trial class.'],
                ['step'=>'03', 'icon'=>'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'title'=>'Learn', 'desc'=>'Attend home tuition, online sessions, or solve doubts live — your choice, your pace.'],
                ['step'=>'04', 'icon'=>'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', 'title'=>'Grow', 'desc'=>'Track progress, improve grades, and achieve your academic goals with expert guidance.'],
            ] as $i => $step)
            <div class="relative text-center">
                {{-- Arrow between steps (not last) --}}
                @if($i < 3)
                <div class="hidden lg:block absolute top-6 left-[60%] right-0 h-0.5 bg-gradient-to-r from-brand-200 to-brand-100 z-0"></div>
                @endif

                <div class="relative z-10">
                    <div class="w-14 h-14 bg-brand-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-brand-200">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $step['icon'] }}"/>
                        </svg>
                    </div>
                    <div class="text-xs font-bold text-brand-600 tracking-widest uppercase mb-1">Step {{ $step['step'] }}</div>
                    <h3 class="text-xl font-bold text-[#1B1836] mb-2">{{ $step['title'] }}</h3>
                    <p class="text-sm text-[#5F5B7A] leading-relaxed">{{ $step['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     SUBJECT CATEGORIES
     ============================================================ --}}
<section class="py-20 bg-[#FAF8FF]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-12">
            <div>
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Explore</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1B1836] mt-2">Popular Subjects</h2>
            </div>
            <a href="{{ route('subjects') }}" class="text-brand-600 font-semibold hover:text-brand-700 text-sm flex items-center gap-1">
                View all subjects
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
            @foreach([
                ['name'=>'Mathematics',      'icon'=>'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 11h.01M12 11h.01M15 11h.01M4 19h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z', 'bg'=>'bg-brand-50', 'icon_color'=>'text-brand-600'],
                ['name'=>'Science',          'icon'=>'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'bg'=>'bg-green-50', 'icon_color'=>'text-green-600'],
                ['name'=>'English',          'icon'=>'M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129', 'bg'=>'bg-blue-50', 'icon_color'=>'text-blue-600'],
                ['name'=>'Physics',          'icon'=>'M13 10V3L4 14h7v7l9-11h-7z', 'bg'=>'bg-yellow-50', 'icon_color'=>'text-yellow-600'],
                ['name'=>'Chemistry',        'icon'=>'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'bg'=>'bg-red-50', 'icon_color'=>'text-red-500'],
                ['name'=>'Biology',          'icon'=>'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'bg'=>'bg-emerald-50', 'icon_color'=>'text-emerald-600'],
                ['name'=>'Computer Science', 'icon'=>'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'bg'=>'bg-purple-50', 'icon_color'=>'text-purple-600'],
                ['name'=>'History',          'icon'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'bg'=>'bg-amber-50', 'icon_color'=>'text-amber-600'],
                ['name'=>'Economics',        'icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'bg'=>'bg-cyan-50', 'icon_color'=>'text-cyan-600'],
                ['name'=>'Accountancy',      'icon'=>'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 11h.01M12 11h.01M15 11h.01M4 19h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z', 'bg'=>'bg-indigo-50', 'icon_color'=>'text-indigo-600'],
            ] as $subj)
            <a href="{{ route('tutors') }}"
               class="group flex flex-col items-center text-center p-6 bg-white rounded-2xl border border-[#E6E1F2] hover:border-brand-200 hover:shadow-lg hover:shadow-brand-100/50 transition-all duration-200">
                <div class="w-14 h-14 {{ $subj['bg'] }} rounded-2xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-200">
                    <svg class="w-7 h-7 {{ $subj['icon_color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $subj['icon'] }}"/>
                    </svg>
                </div>
                <div class="font-semibold text-sm text-[#1B1836] group-hover:text-brand-600 transition-colors">{{ $subj['name'] }}</div>
                <div class="text-xs text-brand-600 mt-1.5 font-medium opacity-0 group-hover:opacity-100 transition-opacity">View Tutors →</div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     WHY IDELTA
     ============================================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-14">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Why Choose Us</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1B1836] mt-2">Why iDelta?</h2>
            <p class="text-[#5F5B7A] mt-3 max-w-xl mx-auto">We combine the best of local tutoring with the power of technology to give every student the edge they need.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach([
                ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'color'=>'brand', 'title'=>'Verified Tutors', 'desc'=>'Every tutor on iDelta is carefully screened with identity verification, qualification checks, and background verification for complete peace of mind.', 'points'=>['Identity & document verified','Qualification & experience checked','Trial class before commitment']],
                ['icon'=>'M15 10l4.553-2.07A1 1 0 0121 8.845v6.31a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z', 'color'=>'green', 'title'=>'Instant Doubt Solving', 'desc'=>'Get your doubts answered anytime with our pool of subject experts available 24/7 for live video, chat, and audio sessions.', 'points'=>['Live video doubt sessions','Chat & image doubt support','Responses in minutes']],
                ['icon'=>'M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z', 'color'=>'purple', 'title'=>'Expert Mentorship', 'desc'=>'Beyond tuition — our tutors provide holistic mentorship including study planning, exam strategy, and career guidance for Class 10, 12, and beyond.', 'points'=>['Personalised study plans','Exam strategy &amp; prep support','Career &amp; subject counselling']],
            ] as $why)
            <div class="p-8 rounded-2xl border border-[#E6E1F2] hover:border-brand-100 hover:shadow-xl hover:shadow-brand-50/80 transition-all duration-200 card-hover">
                <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-5
                    @if($why['color']==='brand') bg-brand-100 text-brand-600
                    @elseif($why['color']==='green') bg-green-100 text-green-600
                    @else bg-purple-100 text-purple-600
                    @endif">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $why['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1B1836] mb-3">{{ $why['title'] }}</h3>
                <p class="text-[#5F5B7A] text-sm leading-relaxed mb-5">{{ $why['desc'] }}</p>
                <ul class="space-y-2">
                    @foreach($why['points'] as $pt)
                    <li class="flex items-center gap-2 text-sm text-[#1B1836]">
                        <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        {!! $pt !!}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     TESTIMONIALS
     ============================================================ --}}
<section class="py-20 bg-[#FAF8FF]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-14">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Student Reviews</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1B1836] mt-2">What Students Say</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['name'=>'Priya Sharma', 'class'=>'Class 10 Student', 'subject'=>'Mathematics', 'review'=>'iDelta helped me go from 55% to 92% in Maths in just 3 months! My tutor Prof. Rohan explains every concept with such clarity. The live doubt sessions are a lifesaver before exams.', 'rating'=>5, 'location'=>'Kharghar, Navi Mumbai'],
                ['name'=>'Aryan Patel', 'class'=>'Class 12 PCM', 'subject'=>'Physics', 'review'=>'The best thing about iDelta is the quality of tutors. I found a great Physics teacher near my home in Belapur. The app makes booking and payments super easy too!', 'rating'=>5, 'location'=>'Belapur, Navi Mumbai'],
                ['name'=>'Sneha Kulkarni', 'class'=>'College Student', 'subject'=>'Computer Science', 'review'=>'Got my DSA and DBMS concepts completely cleared through the live doubt sessions. The experts are incredibly patient and explain things step by step. Worth every rupee!', 'rating'=>5, 'location'=>'Vashi, Navi Mumbai'],
            ] as $review)
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-[#E6E1F2] card-hover">
                {{-- Stars --}}
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < $review['rating']; $i++)
                    <svg class="w-5 h-5 text-[#F5B301]" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-[#1B1836] text-sm leading-relaxed mb-5 italic">"{{ $review['review'] }}"</p>
                <div class="flex items-center gap-3 pt-4 border-t border-[#E6E1F2]">
                    <div class="w-10 h-10 bg-gradient-to-br from-brand-400 to-brand-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                        {{ substr($review['name'], 0, 1) }}
                    </div>
                    <div>
                        <div class="font-bold text-sm text-[#1B1836]">{{ $review['name'] }}</div>
                        <div class="text-xs text-[#5F5B7A]">{{ $review['class'] }} · {{ $review['location'] }}</div>
                    </div>
                    <div class="ml-auto">
                        <span class="text-xs bg-brand-50 text-brand-600 font-semibold px-2.5 py-1 rounded-full">{{ $review['subject'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     CTA BANNER
     ============================================================ --}}
<section class="py-20 gradient-brand relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-white rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center relative">
        <div class="inline-flex items-center gap-2 bg-white/20 text-white text-sm font-semibold px-4 py-2 rounded-full mb-6">
            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
            Tutors Available Now
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white mb-5 leading-tight">
            Ready to Start<br>Learning Today?
        </h2>
        <p class="text-brand-100 text-lg mb-10 max-w-xl mx-auto leading-relaxed">
            Join 10,000+ students in Navi Mumbai who are learning smarter with iDelta. Your first session is free.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('tutors') }}"
               class="inline-flex items-center gap-2 bg-white text-brand-600 hover:bg-brand-50 font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                Find a Tutor Near Me
            </a>
            <a href="{{ route('live-doubts') }}"
               class="inline-flex items-center gap-2 border-2 border-white text-white hover:bg-white/10 font-bold px-8 py-4 rounded-xl transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.07A1 1 0 0121 8.845v6.31a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                </svg>
                Solve a Doubt Live
            </a>
        </div>
    </div>
</section>

@endsection
