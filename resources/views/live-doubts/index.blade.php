@extends('layouts.public')
@section('title', 'Live Doubt Solving – Get Expert Help Instantly | iDelta')

@section('content')

{{-- Header Banner --}}
<div class="bg-gradient-to-r from-brand-800 to-brand-600 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center text-white">
        <div class="inline-flex items-center gap-2 bg-white/20 text-white text-sm font-semibold px-4 py-2 rounded-full mb-4">
            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
            24 Experts Available Now
        </div>
        <h1 class="text-3xl sm:text-4xl font-extrabold mb-3">Get Your Doubts Solved Instantly</h1>
        <p class="text-brand-100 max-w-xl mx-auto mb-8">Connect with verified subject experts in real-time. Live video, chat, or audio — your choice.</p>

        {{-- Mode Buttons --}}
        <div class="flex flex-wrap justify-center gap-3" x-data="{ mode: 'video' }">
            <button @click="mode='video'" :class="mode==='video' ? 'bg-white text-brand-700' : 'bg-white/20 text-white border border-white/30'"
                    class="flex items-center gap-2 font-semibold px-5 py-2.5 rounded-xl transition-all text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.07A1 1 0 0121 8.845v6.31a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                Live Video
            </button>
            <button @click="mode='chat'" :class="mode==='chat' ? 'bg-white text-brand-700' : 'bg-white/20 text-white border border-white/30'"
                    class="flex items-center gap-2 font-semibold px-5 py-2.5 rounded-xl transition-all text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                Chat Doubt
            </button>
            <button @click="mode='audio'" :class="mode==='audio' ? 'bg-white text-brand-700' : 'bg-white/20 text-white border border-white/30'"
                    class="flex items-center gap-2 font-semibold px-5 py-2.5 rounded-xl transition-all text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                Audio Call
            </button>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 py-10">
    <div class="flex flex-col lg:flex-row gap-8">

        {{-- ======== LEFT: FILTER PANEL ======== --}}
        <aside class="w-full lg:w-64 shrink-0">
            <div class="bg-white rounded-2xl border border-[#E6E1F2] p-6 sticky top-20">
                <h2 class="font-bold text-[#1B1836] mb-5 flex items-center gap-2">
                    <svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    Find a Subject Expert
                </h2>

                <div class="space-y-4">
                    <div>
                        <label class="text-xs font-semibold text-[#5F5B7A] uppercase tracking-wider mb-1.5 block">Subject</label>
                        <select class="w-full px-3 py-2.5 text-sm border border-[#E6E1F2] rounded-xl focus:outline-none focus:border-brand-400 text-[#1B1836]">
                            <option>All Subjects</option>
                            @foreach(['Mathematics','Physics','Chemistry','Biology','Computer Science','English','Economics','Accountancy'] as $s)
                            <option>{{ $s }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="text-xs font-semibold text-[#5F5B7A] uppercase tracking-wider mb-1.5 block">Class / Level</label>
                        <select class="w-full px-3 py-2.5 text-sm border border-[#E6E1F2] rounded-xl focus:outline-none focus:border-brand-400 text-[#1B1836]">
                            <option>All Levels</option>
                            @foreach(range(6,12) as $c)<option>Class {{ $c }}</option>@endforeach
                            <option>College / UG</option>
                            <option>Competitive Exams</option>
                        </select>
                    </div>
                </div>

                {{-- Availability --}}
                <div class="mt-5 pt-5 border-t border-[#E6E1F2]">
                    <h3 class="font-semibold text-sm text-[#1B1836] mb-3">Availability</h3>
                    <div class="flex gap-2 flex-wrap" x-data="{ avail: 'all' }">
                        @foreach(['all'=>'All','now'=>'Available Now','today'=>'Today'] as $key=>$label)
                        <button x-on:click="avail='{{ $key }}'"
                                :class="avail==='{{ $key }}' ? 'bg-brand-600 text-white' : 'bg-brand-50 text-brand-600 hover:bg-brand-100'"
                                class="text-xs font-semibold px-3 py-1.5 rounded-full transition-colors">{{ $label }}</button>
                        @endforeach
                    </div>
                </div>

                {{-- Price Range --}}
                <div class="mt-5 pt-5 border-t border-[#E6E1F2]" x-data="{ price: 400 }">
                    <h3 class="font-semibold text-sm text-[#1B1836] mb-1">Price per Session</h3>
                    <div class="flex justify-between text-xs text-[#5F5B7A] mb-3">
                        <span>₹99</span>
                        <span class="font-semibold text-brand-600">Up to ₹<span x-text="price"></span></span>
                        <span>₹999</span>
                    </div>
                    <input type="range" min="99" max="999" step="50" x-model="price" class="w-full accent-brand-600">
                </div>

                <button class="w-full mt-5 bg-brand-600 hover:bg-brand-700 text-white font-semibold py-3 rounded-xl text-sm transition-colors">
                    Find Experts
                </button>
            </div>
        </aside>

        {{-- ======== CENTER: EXPERTS LIST ======== --}}
        <div class="flex-1">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                <h2 class="font-bold text-[#1B1836] text-lg">
                    Available Experts
                    <span class="text-sm font-normal text-[#5F5B7A]">(24 online)</span>
                </h2>
                <select class="text-sm border border-[#E6E1F2] rounded-lg px-3 py-2 focus:outline-none focus:border-brand-400 text-[#1B1836]">
                    <option>Sort: Rating ↓</option>
                    <option>Sort: Price ↑</option>
                    <option>Sort: Experience</option>
                </select>
            </div>

            <div class="space-y-4">
                @foreach([
                    ['name'=>'Prof. Neha Sharma','tags'=>['Data Structures','Algorithms','DBMS','OOPs'],'exp'=>'5 years','rating'=>4.9,'reviews'=>142,'price'=>399,'duration'=>'30 min','online'=>true,'color'=>'brand','specialty'=>'Computer Science'],
                    ['name'=>'Prof. Arjun Mehta','tags'=>['Algorithms','Discrete Math','Theory of Computation'],'exp'=>'4 years','rating'=>4.8,'reviews'=>98,'price'=>349,'duration'=>'30 min','online'=>true,'color'=>'blue','specialty'=>'Mathematics & CS'],
                    ['name'=>'Prof. Riya Desai','tags'=>['Calculus','Linear Algebra','Statistics','Probability'],'exp'=>'6 years','rating'=>4.9,'reviews'=>187,'price'=>399,'duration'=>'30 min','online'=>true,'color'=>'green','specialty'=>'Mathematics'],
                    ['name'=>'Prof. Kunal Verma','tags'=>['Machine Learning','Data Science','Python','SQL'],'exp'=>'4 years','rating'=>4.8,'reviews'=>76,'price'=>449,'duration'=>'30 min','online'=>false,'color'=>'orange','specialty'=>'Data Science'],
                ] as $expert)
                <div class="bg-white rounded-2xl border border-[#E6E1F2] p-5 card-hover flex flex-col sm:flex-row gap-5 items-start">
                    {{-- Avatar --}}
                    <div class="relative shrink-0">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br
                            @if($expert['color']==='brand') from-brand-400 to-brand-600
                            @elseif($expert['color']==='blue') from-blue-400 to-blue-600
                            @elseif($expert['color']==='green') from-green-400 to-green-600
                            @else from-orange-400 to-orange-600
                            @endif
                            flex items-center justify-center text-white font-bold text-xl shadow-md">
                            {{ substr($expert['name'], strrpos($expert['name'], ' ') + 1, 1) }}
                        </div>
                        @if($expert['online'])
                        <span class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-400 border-2 border-white rounded-full"></span>
                        @endif
                    </div>

                    {{-- Info --}}
                    <div class="flex-1 min-w-0">
                        <div class="flex items-start gap-2 flex-wrap">
                            <h3 class="font-bold text-[#1B1836]">{{ $expert['name'] }}</h3>
                            <span class="inline-flex items-center gap-1 text-xs text-brand-600 bg-brand-50 px-2 py-0.5 rounded-full font-medium">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                Verified
                            </span>
                            @if($expert['online'])
                            <span class="text-xs text-green-600 font-semibold flex items-center gap-1">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Online Now
                            </span>
                            @else
                            <span class="text-xs text-[#5F5B7A]">Offline</span>
                            @endif
                        </div>
                        <p class="text-xs text-[#5F5B7A] mb-2">{{ $expert['specialty'] }} · {{ $expert['exp'] }} experience</p>

                        {{-- Tags --}}
                        <div class="flex flex-wrap gap-1.5 mb-3">
                            @foreach($expert['tags'] as $tag)
                            <span class="text-xs bg-gray-50 text-[#5F5B7A] border border-[#E6E1F2] px-2.5 py-1 rounded-full">{{ $tag }}</span>
                            @endforeach
                        </div>

                        {{-- Rating --}}
                        <div class="flex items-center gap-2">
                            <div class="flex gap-0.5">
                                @for($i=1;$i<=5;$i++)
                                <svg class="w-3.5 h-3.5 {{ $i <= floor($expert['rating']) ? 'text-[#F5B301]' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                @endfor
                            </div>
                            <span class="text-sm font-bold text-[#1B1836]">{{ number_format($expert['rating'],1) }}</span>
                            <span class="text-xs text-[#5F5B7A]">({{ $expert['reviews'] }} sessions)</span>
                        </div>
                    </div>

                    {{-- Price & CTA --}}
                    <div class="sm:text-right flex sm:flex-col items-center sm:items-end gap-4 w-full sm:w-auto justify-between">
                        <div>
                            <div class="text-2xl font-extrabold text-[#1B1836]">₹{{ $expert['price'] }}</div>
                            <div class="text-xs text-[#5F5B7A]">per {{ $expert['duration'] }} session</div>
                        </div>
                        <button class="bg-brand-600 hover:bg-brand-700 text-white font-semibold px-5 py-2.5 rounded-xl transition-colors text-sm whitespace-nowrap
                            {{ !$expert['online'] ? 'opacity-60 cursor-not-allowed' : '' }}"
                            {{ !$expert['online'] ? 'disabled' : '' }}>
                            {{ $expert['online'] ? 'Start Session' : 'Book Later' }}
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- ======== RIGHT PANEL ======== --}}
        <div class="w-full lg:w-72 shrink-0">
            <div class="bg-gradient-to-br from-brand-600 to-brand-800 rounded-2xl p-6 text-white sticky top-20">
                <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Have a Doubt Right Now?</h3>
                <p class="text-brand-100 text-sm mb-5">Get instant help from our experts. No appointments needed.</p>
                <ul class="space-y-3 mb-6">
                    @foreach(['Connect in under 2 minutes', 'No appointment needed', 'Experts in 50+ subjects', 'Whiteboard & screen sharing', 'Session recording available'] as $feat)
                    <li class="flex items-center gap-2 text-sm text-brand-100">
                        <svg class="w-4 h-4 text-green-300 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        {{ $feat }}
                    </li>
                    @endforeach
                </ul>
                <button class="w-full bg-white text-brand-700 hover:bg-brand-50 font-bold py-3 rounded-xl transition-colors text-sm">
                    Start Instant Session
                </button>
                <p class="text-center text-xs text-brand-200 mt-3">First session at 50% off</p>
            </div>
        </div>

    </div>
</div>

@endsection
