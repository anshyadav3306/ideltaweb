@extends('layouts.public')
@section('title', 'Find Home Tutors Near You – iDelta Navi Mumbai')

@section('content')

{{-- Breadcrumb --}}
<div class="bg-[#FAF8FF] border-b border-[#E6E1F2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3">
        <nav class="flex items-center gap-2 text-sm text-[#5F5B7A]">
            <a href="{{ route('home') }}" class="hover:text-brand-600 transition-colors">Home</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-[#1B1836] font-medium">Find Tutors</span>
        </nav>
    </div>
</div>

{{-- Page Header --}}
<div class="bg-gradient-to-r from-brand-700 to-brand-500 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center text-white">
        <h1 class="text-3xl sm:text-4xl font-extrabold mb-3">Find Home Tutors Near You</h1>
        <p class="text-brand-100 text-lg max-w-xl mx-auto">Discover verified tutors in Navi Mumbai for personalised home tuition and online classes.</p>

        {{-- Search Bar --}}
        <div class="mt-8 max-w-3xl mx-auto bg-white rounded-2xl shadow-xl p-2 flex flex-col sm:flex-row gap-2">
            <select class="flex-1 px-4 py-3 rounded-xl text-[#1B1836] text-sm border border-[#E6E1F2] focus:outline-none focus:border-brand-400 bg-white">
                <option>📍 Select Location</option>
                <option>Kharghar</option>
                <option>Belapur</option>
                <option>Vashi</option>
                <option>Nerul</option>
                <option>Panvel</option>
                <option>Airoli</option>
                <option>Ghansoli</option>
                <option>Kopar Khairane</option>
            </select>
            <select class="flex-1 px-4 py-3 rounded-xl text-[#1B1836] text-sm border border-[#E6E1F2] focus:outline-none focus:border-brand-400 bg-white">
                <option>📚 Select Class</option>
                @foreach(range(1,12) as $c)
                <option>Class {{ $c }}</option>
                @endforeach
                <option>College / Undergraduate</option>
            </select>
            <select class="flex-1 px-4 py-3 rounded-xl text-[#1B1836] text-sm border border-[#E6E1F2] focus:outline-none focus:border-brand-400 bg-white">
                <option>🔬 Select Subject</option>
                @foreach(['Mathematics','Science','English','Physics','Chemistry','Biology','Computer Science','History','Economics','Accountancy'] as $s)
                <option>{{ $s }}</option>
                @endforeach
            </select>
            <button class="bg-brand-600 hover:bg-brand-700 text-white font-semibold px-7 py-3 rounded-xl transition-colors whitespace-nowrap">
                Search Tutors
            </button>
        </div>
    </div>
</div>

{{-- Main Layout --}}
<div class="max-w-7xl mx-auto px-4 sm:px-6 py-10" x-data="{
    filters: { mode: [], board: [], feeMax: 5000 },
    toggleFilter(arr, val) { const i = arr.indexOf(val); if(i > -1) arr.splice(i,1); else arr.push(val); }
}">
    <div class="flex flex-col lg:flex-row gap-8">

        {{-- ======== SIDEBAR FILTERS ======== --}}
        <aside class="w-full lg:w-64 shrink-0">
            <div class="bg-white rounded-2xl border border-[#E6E1F2] p-6 sticky top-20">
                <div class="flex items-center justify-between mb-5">
                    <h2 class="font-bold text-[#1B1836]">Filters</h2>
                    <button class="text-xs text-brand-600 hover:text-brand-700 font-semibold">Clear All</button>
                </div>

                {{-- Mode --}}
                <div class="mb-6">
                    <h3 class="font-semibold text-sm text-[#1B1836] mb-3">Teaching Mode</h3>
                    <div class="space-y-2">
                        @foreach(['Home Tuition', 'Online Classes', 'Both'] as $mode)
                        <label class="flex items-center gap-2.5 cursor-pointer group">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 border-gray-300 focus:ring-brand-500">
                            <span class="text-sm text-[#5F5B7A] group-hover:text-[#1B1836] transition-colors">{{ $mode }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                {{-- Board --}}
                <div class="mb-6 pt-5 border-t border-[#E6E1F2]">
                    <h3 class="font-semibold text-sm text-[#1B1836] mb-3">Board</h3>
                    <div class="space-y-2">
                        @foreach(['CBSE', 'ICSE', 'Maharashtra State Board', 'IB', 'IGCSE'] as $board)
                        <label class="flex items-center gap-2.5 cursor-pointer group">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand-600 border-gray-300 focus:ring-brand-500">
                            <span class="text-sm text-[#5F5B7A] group-hover:text-[#1B1836] transition-colors">{{ $board }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                {{-- Fee Range --}}
                <div class="mb-6 pt-5 border-t border-[#E6E1F2]" x-data="{ fee: 3000 }">
                    <h3 class="font-semibold text-sm text-[#1B1836] mb-1">Monthly Fee</h3>
                    <div class="flex justify-between text-xs text-[#5F5B7A] mb-3">
                        <span>₹500</span>
                        <span class="font-semibold text-brand-600">Up to ₹<span x-text="fee.toLocaleString('en-IN')"></span></span>
                        <span>₹5,000</span>
                    </div>
                    <input type="range" min="500" max="5000" step="100" x-model="fee"
                           class="w-full accent-brand-600 cursor-pointer">
                </div>

                {{-- Rating --}}
                <div class="pt-5 border-t border-[#E6E1F2]">
                    <h3 class="font-semibold text-sm text-[#1B1836] mb-3">Minimum Rating</h3>
                    <div class="space-y-2">
                        @foreach(['4.5+', '4.0+', '3.5+', 'Any'] as $r)
                        <label class="flex items-center gap-2.5 cursor-pointer group">
                            <input type="radio" name="rating" class="w-4 h-4 text-brand-600 border-gray-300 focus:ring-brand-500">
                            <span class="text-sm text-[#5F5B7A] group-hover:text-[#1B1836] transition-colors">{{ $r }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <button class="w-full mt-6 bg-brand-600 hover:bg-brand-700 text-white font-semibold py-3 rounded-xl transition-colors text-sm">
                    Apply Filters
                </button>
            </div>
        </aside>

        {{-- ======== TUTOR CARDS ======== --}}
        <div class="flex-1">
            {{-- Results Header --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                <div>
                    <h2 class="font-bold text-[#1B1836]">Available Tutors <span class="text-[#5F5B7A] font-normal">(6 results)</span></h2>
                    <p class="text-sm text-[#5F5B7A] mt-0.5">Showing home tutors in Navi Mumbai</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sm text-[#5F5B7A]">Sort by:</span>
                    <select class="text-sm border border-[#E6E1F2] rounded-lg px-3 py-2 focus:outline-none focus:border-brand-400 text-[#1B1836]">
                        <option>Rating: High to Low</option>
                        <option>Fee: Low to High</option>
                        <option>Fee: High to Low</option>
                        <option>Experience</option>
                    </select>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-5">
                @foreach([
                    ['name'=>'Prof. Rohan Kulkarni','subjects'=>['Mathematics','Science'],'classes'=>['Class 9','Class 10'],'location'=>'Belapur','fee'=>1200,'rating'=>4.0,'reviews'=>28,'exp'=>'5 yrs','mode'=>'Home Tuition','board'=>'CBSE','color'=>'brand'],
                    ['name'=>'Ms. Pooja Singh','subjects'=>['Mathematics','English'],'classes'=>['Class 4','Class 5','Class 6'],'location'=>'Belapur','fee'=>1000,'rating'=>4.8,'reviews'=>54,'exp'=>'7 yrs','mode'=>'Home & Online','board'=>'CBSE / ICSE','color'=>'green'],
                    ['name'=>'Mr. Aakash Tiwari','subjects'=>['Physics','Chemistry'],'classes'=>['Class 11','Class 12'],'location'=>'Kharghar','fee'=>1800,'rating'=>4.6,'reviews'=>41,'exp'=>'8 yrs','mode'=>'Online','board'=>'CBSE','color'=>'blue'],
                    ['name'=>'Dr. Meena Joshi','subjects'=>['Biology'],'classes'=>['Class 11','Class 12'],'location'=>'Vashi','fee'=>2000,'rating'=>4.9,'reviews'=>67,'exp'=>'12 yrs','mode'=>'Home Tuition','board'=>'CBSE / State','color'=>'purple'],
                    ['name'=>'Mr. Rahul Deshmukh','subjects'=>['Accountancy','Economics'],'classes'=>['Class 11','Class 12'],'location'=>'Nerul','fee'=>1500,'rating'=>4.4,'reviews'=>33,'exp'=>'6 yrs','mode'=>'Home & Online','board'=>'CBSE / State','color'=>'orange'],
                    ['name'=>'Ms. Anjali Rao','subjects'=>['English','History'],'classes'=>['Class 7','Class 8','Class 9'],'location'=>'Panvel','fee'=>900,'rating'=>4.7,'reviews'=>22,'exp'=>'4 yrs','mode'=>'Home Tuition','board'=>'CBSE / ICSE','color'=>'rose'],
                ] as $tutor)
                <div class="bg-white rounded-2xl border border-[#E6E1F2] overflow-hidden card-hover group" x-data="{ saved: false }">
                    <div class="p-5">
                        {{-- Top Row --}}
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br
                                    @if($tutor['color']==='brand') from-brand-400 to-brand-600
                                    @elseif($tutor['color']==='green') from-green-400 to-green-600
                                    @elseif($tutor['color']==='blue') from-blue-400 to-blue-600
                                    @elseif($tutor['color']==='purple') from-purple-400 to-purple-600
                                    @elseif($tutor['color']==='orange') from-orange-400 to-orange-600
                                    @else from-rose-400 to-rose-600
                                    @endif
                                    flex items-center justify-center text-white font-bold text-xl shadow-md">
                                    {{ substr($tutor['name'], strrpos($tutor['name'], ' ') + 1, 1) }}
                                </div>
                                <div>
                                    <div class="font-bold text-sm text-[#1B1836]">{{ $tutor['name'] }}</div>
                                    <div class="text-xs text-[#5F5B7A] flex items-center gap-1 mt-0.5">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        {{ $tutor['location'] }}, Navi Mumbai
                                    </div>
                                </div>
                            </div>
                            <button @click="saved = !saved" class="w-8 h-8 rounded-full border border-[#E6E1F2] flex items-center justify-center transition-colors hover:border-rose-300" :class="saved ? 'bg-rose-50' : 'bg-white'">
                                <svg class="w-4 h-4 transition-colors" :class="saved ? 'text-rose-500 fill-rose-500' : 'text-[#5F5B7A]'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            </button>
                        </div>

                        {{-- Subject & Class Badges --}}
                        <div class="flex flex-wrap gap-1.5 mb-3">
                            @foreach($tutor['subjects'] as $subj)
                            <span class="text-xs bg-brand-50 text-brand-700 font-medium px-2.5 py-1 rounded-full">{{ $subj }}</span>
                            @endforeach
                            @foreach($tutor['classes'] as $cls)
                            <span class="text-xs bg-gray-50 text-[#5F5B7A] font-medium px-2.5 py-1 rounded-full border border-[#E6E1F2]">{{ $cls }}</span>
                            @endforeach
                        </div>

                        {{-- Rating --}}
                        <div class="flex items-center gap-2 mb-3">
                            <div class="flex gap-0.5">
                                @for($i=1; $i<=5; $i++)
                                <svg class="w-3.5 h-3.5 {{ $i <= floor($tutor['rating']) ? 'text-[#F5B301]' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                @endfor
                            </div>
                            <span class="text-xs font-bold text-[#1B1836]">{{ number_format($tutor['rating'],1) }}</span>
                            <span class="text-xs text-[#5F5B7A]">({{ $tutor['reviews'] }} reviews)</span>
                            <span class="text-xs text-[#5F5B7A] ml-auto">{{ $tutor['exp'] }} exp</span>
                        </div>

                        {{-- Mode & Board --}}
                        <div class="flex items-center gap-2 text-xs text-[#5F5B7A] mb-4">
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                {{ $tutor['mode'] }}
                            </span>
                            <span>·</span>
                            <span>{{ $tutor['board'] }}</span>
                        </div>

                        {{-- Fee & Button --}}
                        <div class="flex items-center justify-between pt-4 border-t border-[#E6E1F2]">
                            <div>
                                <span class="text-xl font-extrabold text-[#1B1836]">₹{{ number_format($tutor['fee']) }}</span>
                                <span class="text-xs text-[#5F5B7A]">/month</span>
                            </div>
                            <a href="#" class="bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-colors">
                                View Profile
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="flex items-center justify-center gap-2 mt-10">
                <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-[#E6E1F2] text-[#5F5B7A] hover:border-brand-300 hover:text-brand-600 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                @foreach([1,2,3,'...',8] as $pg)
                <button class="w-9 h-9 flex items-center justify-center rounded-lg text-sm font-medium transition-colors
                    {{ $pg === 1 ? 'bg-brand-600 text-white' : 'border border-[#E6E1F2] text-[#5F5B7A] hover:border-brand-300 hover:text-brand-600' }}">
                    {{ $pg }}
                </button>
                @endforeach
                <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-[#E6E1F2] text-[#5F5B7A] hover:border-brand-300 hover:text-brand-600 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
