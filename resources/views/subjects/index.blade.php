@extends('layouts.public')
@section('title', 'Browse Subjects – iDelta Navi Mumbai')

@section('content')

{{-- Header --}}
<div class="bg-gradient-to-r from-brand-700 to-brand-500 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center text-white">
        <h1 class="text-3xl sm:text-4xl font-extrabold mb-3">Explore Subjects</h1>
        <p class="text-brand-100 text-lg max-w-xl mx-auto">Find tutors and doubt-solving experts for every subject from Class 1 to College.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 py-12" x-data="{ tab: 'class' }">

    {{-- Tabs --}}
    <div class="flex gap-2 mb-10 bg-brand-50 p-1.5 rounded-2xl w-fit mx-auto">
        <button @click="tab='class'" :class="tab==='class' ? 'bg-white text-brand-700 shadow-sm' : 'text-[#5F5B7A] hover:text-brand-600'"
                class="px-6 py-2.5 rounded-xl font-semibold text-sm transition-all">By Class</button>
        <button @click="tab='stream'" :class="tab==='stream' ? 'bg-white text-brand-700 shadow-sm' : 'text-[#5F5B7A] hover:text-brand-600'"
                class="px-6 py-2.5 rounded-xl font-semibold text-sm transition-all">By Stream</button>
    </div>

    {{-- BY CLASS --}}
    <div x-show="tab==='class'" x-transition>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mb-12">
            @foreach([
                ['label'=>'Class 1-2',  'desc'=>'Primary Foundation', 'subj'=>'4 subjects', 'bg'=>'from-pink-400 to-rose-500'],
                ['label'=>'Class 3-5',  'desc'=>'Primary Stage', 'subj'=>'6 subjects', 'bg'=>'from-orange-400 to-amber-500'],
                ['label'=>'Class 6',    'desc'=>'Middle School', 'subj'=>'8 subjects', 'bg'=>'from-yellow-400 to-orange-400'],
                ['label'=>'Class 7',    'desc'=>'Middle School', 'subj'=>'8 subjects', 'bg'=>'from-green-400 to-emerald-500'],
                ['label'=>'Class 8',    'desc'=>'Middle School', 'subj'=>'9 subjects', 'bg'=>'from-teal-400 to-cyan-500'],
                ['label'=>'Class 9',    'desc'=>'Secondary', 'subj'=>'10 subjects', 'bg'=>'from-cyan-400 to-blue-500'],
                ['label'=>'Class 10',   'desc'=>'Secondary (Board)', 'subj'=>'10 subjects', 'bg'=>'from-blue-500 to-indigo-600'],
                ['label'=>'Class 11',   'desc'=>'Senior Secondary', 'subj'=>'12 subjects', 'bg'=>'from-indigo-500 to-brand-600'],
                ['label'=>'Class 12',   'desc'=>'Senior Secondary (Board)', 'subj'=>'12 subjects', 'bg'=>'from-brand-500 to-brand-700'],
                ['label'=>'College',    'desc'=>'Undergraduate & Beyond', 'subj'=>'20+ subjects', 'bg'=>'from-brand-700 to-brand-900'],
            ] as $cls)
            <a href="{{ route('tutors') }}"
               class="group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:shadow-brand-100/60 transition-all duration-200 card-hover">
                <div class="bg-gradient-to-br {{ $cls['bg'] }} p-6 text-white">
                    <div class="font-extrabold text-xl mb-1">{{ $cls['label'] }}</div>
                    <div class="text-xs opacity-80">{{ $cls['desc'] }}</div>
                </div>
                <div class="bg-white px-4 py-3 border border-t-0 border-[#E6E1F2] rounded-b-2xl flex items-center justify-between">
                    <span class="text-xs text-[#5F5B7A]">{{ $cls['subj'] }}</span>
                    <svg class="w-4 h-4 text-brand-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </div>
            </a>
            @endforeach
        </div>

        {{-- Popular Subjects by Class --}}
        <div>
            <h2 class="text-2xl font-extrabold text-[#1B1836] mb-6">All Subjects</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                @foreach([
                    ['name'=>'Mathematics', 'icon'=>'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 11h.01M12 11h.01M15 11h.01M4 19h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z', 'bg'=>'bg-brand-50 text-brand-600', 'tutors'=>'42 Tutors'],
                    ['name'=>'Science', 'icon'=>'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'bg'=>'bg-green-50 text-green-600', 'tutors'=>'38 Tutors'],
                    ['name'=>'English', 'icon'=>'M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129', 'bg'=>'bg-blue-50 text-blue-600', 'tutors'=>'29 Tutors'],
                    ['name'=>'Physics', 'icon'=>'M13 10V3L4 14h7v7l9-11h-7z', 'bg'=>'bg-yellow-50 text-yellow-600', 'tutors'=>'24 Tutors'],
                    ['name'=>'Chemistry', 'icon'=>'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'bg'=>'bg-red-50 text-red-500', 'tutors'=>'22 Tutors'],
                    ['name'=>'Biology', 'icon'=>'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'bg'=>'bg-emerald-50 text-emerald-600', 'tutors'=>'18 Tutors'],
                    ['name'=>'Computer Science', 'icon'=>'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'bg'=>'bg-purple-50 text-purple-600', 'tutors'=>'16 Tutors'],
                    ['name'=>'History', 'icon'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'bg'=>'bg-amber-50 text-amber-600', 'tutors'=>'12 Tutors'],
                    ['name'=>'Economics', 'icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'bg'=>'bg-cyan-50 text-cyan-600', 'tutors'=>'14 Tutors'],
                    ['name'=>'Accountancy', 'icon'=>'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 11h.01M12 11h.01M15 11h.01M4 19h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z', 'bg'=>'bg-indigo-50 text-indigo-600', 'tutors'=>'11 Tutors'],
                    ['name'=>'Geography', 'icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'bg'=>'bg-teal-50 text-teal-600', 'tutors'=>'8 Tutors'],
                    ['name'=>'Political Science', 'icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'bg'=>'bg-rose-50 text-rose-600', 'tutors'=>'6 Tutors'],
                ] as $subj)
                <a href="{{ route('tutors') }}" class="group bg-white rounded-2xl border border-[#E6E1F2] p-5 hover:border-brand-200 hover:shadow-lg hover:shadow-brand-100/50 transition-all duration-200 card-hover">
                    <div class="w-12 h-12 {{ $subj['bg'] }} rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $subj['icon'] }}"/>
                        </svg>
                    </div>
                    <div class="font-bold text-sm text-[#1B1836] mb-1">{{ $subj['name'] }}</div>
                    <div class="text-xs text-[#5F5B7A]">{{ $subj['tutors'] }}</div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- BY STREAM --}}
    <div x-show="tab==='stream'" x-cloak x-transition>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['stream'=>'Science', 'desc'=>'Physics, Chemistry, Biology, Mathematics and more for Class 11-12 and JEE/NEET aspirants.', 'subjects'=>['Physics','Chemistry','Biology','Mathematics','Computer Science','English'], 'color'=>'from-blue-500 to-indigo-600', 'tutors'=>'80+ Tutors'],
                ['stream'=>'Commerce', 'desc'=>'Accountancy, Economics, Business Studies, Mathematics for Class 11-12 and CA aspirants.', 'subjects'=>['Accountancy','Economics','Business Studies','Mathematics','English','Entrepreneurship'], 'color'=>'from-green-500 to-emerald-600', 'tutors'=>'45+ Tutors'],
                ['stream'=>'Arts / Humanities', 'desc'=>'History, Political Science, Geography, Sociology, Psychology and more.', 'subjects'=>['History','Political Science','Geography','Sociology','Psychology','English'], 'color'=>'from-orange-500 to-amber-500', 'tutors'=>'30+ Tutors'],
            ] as $stream)
            <div class="bg-white rounded-2xl border border-[#E6E1F2] overflow-hidden card-hover hover:shadow-xl hover:shadow-brand-100/50 transition-all">
                <div class="bg-gradient-to-br {{ $stream['color'] }} p-7 text-white">
                    <div class="text-2xl font-extrabold mb-2">{{ $stream['stream'] }}</div>
                    <div class="text-sm opacity-90 leading-relaxed">{{ $stream['desc'] }}</div>
                    <div class="mt-3 text-sm font-semibold opacity-80">{{ $stream['tutors'] }}</div>
                </div>
                <div class="p-5">
                    <h4 class="text-xs font-bold text-[#5F5B7A] uppercase tracking-wider mb-3">Subjects Available</h4>
                    <div class="flex flex-wrap gap-2 mb-5">
                        @foreach($stream['subjects'] as $s)
                        <span class="text-xs bg-brand-50 text-brand-700 font-medium px-2.5 py-1 rounded-full">{{ $s }}</span>
                        @endforeach
                    </div>
                    <a href="{{ route('tutors') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors">
                        Find {{ $stream['stream'] }} Tutors
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Competitive Exams --}}
        <div class="mt-10">
            <h2 class="text-2xl font-extrabold text-[#1B1836] mb-6">Competitive Exam Prep</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach([
                    ['name'=>'JEE Main & Advanced','icon'=>'⚗️','desc'=>'Physics, Chemistry & Maths'],
                    ['name'=>'NEET UG','icon'=>'🔬','desc'=>'Physics, Chemistry & Biology'],
                    ['name'=>'CA Foundation','icon'=>'📊','desc'=>'Accountancy & Law'],
                    ['name'=>'Class 10 Board','icon'=>'📚','desc'=>'All CBSE/ICSE Subjects'],
                ] as $exam)
                <a href="{{ route('tutors') }}" class="bg-[#FAF8FF] hover:bg-brand-50 border border-[#E6E1F2] hover:border-brand-200 rounded-2xl p-5 transition-all group">
                    <div class="text-3xl mb-3">{{ $exam['icon'] }}</div>
                    <div class="font-bold text-sm text-[#1B1836] mb-1 group-hover:text-brand-600 transition-colors">{{ $exam['name'] }}</div>
                    <div class="text-xs text-[#5F5B7A]">{{ $exam['desc'] }}</div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
