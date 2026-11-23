@extends('layouts.public')
@section('title', 'Home Tuition in Navi Mumbai – Find Verified Home Tutors | iDelta')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-br from-brand-800 via-brand-700 to-brand-500 py-16 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
        <div class="text-center text-white mb-10">
            <div class="inline-flex items-center gap-2 bg-white/20 text-sm font-semibold px-4 py-2 rounded-full mb-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                Home Tuition Specialist
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-4 leading-tight">
                Find Verified Home Tutors<br>Near You in Navi Mumbai
            </h1>
            <p class="text-brand-100 text-lg max-w-xl mx-auto">Personalised one-on-one learning at your doorstep. All subjects, all classes, all areas of Navi Mumbai.</p>
        </div>

        {{-- Search --}}
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-2xl p-2 flex flex-col sm:flex-row gap-2">
            <select class="flex-1 px-4 py-3 rounded-xl text-[#1B1836] text-sm border border-[#E6E1F2] focus:outline-none focus:border-brand-400">
                <option>📍 Your Area in Navi Mumbai</option>
                @foreach(['Kharghar','Belapur','Vashi','Nerul','Panvel','Airoli','Ghansoli','Kopar Khairane','Sanpada','Turbhe'] as $loc)
                <option>{{ $loc }}</option>
                @endforeach
            </select>
            <select class="flex-1 px-4 py-3 rounded-xl text-[#1B1836] text-sm border border-[#E6E1F2] focus:outline-none focus:border-brand-400">
                <option>📚 Select Class</option>
                @foreach(range(1,12) as $c)<option>Class {{ $c }}</option>@endforeach
                <option>College</option>
            </select>
            <select class="flex-1 px-4 py-3 rounded-xl text-[#1B1836] text-sm border border-[#E6E1F2] focus:outline-none focus:border-brand-400">
                <option>🔬 Select Subject</option>
                @foreach(['Mathematics','Science','English','Physics','Chemistry','Biology','Computer Science','History','Economics','Accountancy'] as $s)
                <option>{{ $s }}</option>
                @endforeach
            </select>
            <button class="bg-brand-600 hover:bg-brand-700 text-white font-semibold px-6 py-3 rounded-xl transition-colors whitespace-nowrap">
                Find Tutors
            </button>
        </div>
    </div>
</section>

{{-- Trust Badges --}}
<div class="bg-white border-b border-[#E6E1F2] py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            @foreach([
                ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'label'=>'Verified Tutors', 'sub'=>'All identity checked', 'color'=>'brand'],
                ['icon'=>'M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2', 'label'=>'Background Checked', 'sub'=>'Safe & trustworthy', 'color'=>'green'],
                ['icon'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label'=>'Flexible Timings', 'sub'=>'Your schedule, your choice', 'color'=>'orange'],
                ['icon'=>'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z', 'label'=>'Trial Class Free', 'sub'=>'No commitment needed', 'color'=>'brand'],
            ] as $trust)
            <div class="flex items-center gap-3 p-4 rounded-xl bg-[#FAF8FF] border border-[#E6E1F2]">
                <div class="w-10 h-10 shrink-0 rounded-xl flex items-center justify-center
                    {{ $trust['color']==='brand' ? 'bg-brand-100 text-brand-600' : ($trust['color']==='green' ? 'bg-green-100 text-green-600' : 'bg-orange-100 text-orange-500') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $trust['icon'] }}"/>
                    </svg>
                </div>
                <div>
                    <div class="font-bold text-sm text-[#1B1836]">{{ $trust['label'] }}</div>
                    <div class="text-xs text-[#5F5B7A]">{{ $trust['sub'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Main Layout --}}
<div class="max-w-7xl mx-auto px-4 sm:px-6 py-10">
    <div class="flex flex-col lg:flex-row gap-8">

        {{-- Sidebar --}}
        <aside class="w-full lg:w-64 shrink-0">
            <div class="bg-white rounded-2xl border border-[#E6E1F2] p-6 sticky top-20">
                <div class="flex items-center justify-between mb-5">
                    <h2 class="font-bold text-[#1B1836]">Filter Tutors</h2>
                    <button class="text-xs text-brand-600 font-semibold">Reset</button>
                </div>

                <div class="space-y-5">
                    {{-- Area --}}
                    <div>
                        <h3 class="font-semibold text-sm text-[#1B1836] mb-2">Area</h3>
                        <div class="space-y-2">
                            @foreach(['Kharghar','Belapur','Vashi','Nerul','Panvel','Airoli'] as $area)
                            <label class="flex items-center gap-2.5 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 rounded text-brand-600 border-gray-300">
                                <span class="text-sm text-[#5F5B7A] group-hover:text-[#1B1836]">{{ $area }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Gender Preference --}}
                    <div class="pt-4 border-t border-[#E6E1F2]">
                        <h3 class="font-semibold text-sm text-[#1B1836] mb-2">Tutor Gender</h3>
                        <div class="space-y-2">
                            @foreach(['Any','Male','Female'] as $gen)
                            <label class="flex items-center gap-2.5 cursor-pointer">
                                <input type="radio" name="gender" class="w-4 h-4 text-brand-600 border-gray-300">
                                <span class="text-sm text-[#5F5B7A]">{{ $gen }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Fee Range --}}
                    <div class="pt-4 border-t border-[#E6E1F2]" x-data="{ fee: 2500 }">
                        <h3 class="font-semibold text-sm text-[#1B1836] mb-1">Monthly Fee</h3>
                        <div class="flex justify-between text-xs text-[#5F5B7A] mb-2">
                            <span>₹500</span>
                            <span class="text-brand-600 font-semibold">≤ ₹<span x-text="fee.toLocaleString('en-IN')"></span></span>
                            <span>₹5,000</span>
                        </div>
                        <input type="range" min="500" max="5000" step="100" x-model="fee" class="w-full accent-brand-600">
                    </div>

                    {{-- Board --}}
                    <div class="pt-4 border-t border-[#E6E1F2]">
                        <h3 class="font-semibold text-sm text-[#1B1836] mb-2">Board</h3>
                        <div class="space-y-2">
                            @foreach(['CBSE','ICSE','Maharashtra State Board'] as $brd)
                            <label class="flex items-center gap-2.5 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded text-brand-600 border-gray-300">
                                <span class="text-sm text-[#5F5B7A]">{{ $brd }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <button class="w-full mt-5 bg-brand-600 hover:bg-brand-700 text-white font-semibold py-3 rounded-xl text-sm transition-colors">
                    Apply Filters
                </button>
            </div>
        </aside>

        {{-- Tutor Cards (same data as Find Tutors) --}}
        <div class="flex-1">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="font-bold text-[#1B1836]">Home Tutors Near You <span class="font-normal text-[#5F5B7A]">(6)</span></h2>
                    <p class="text-sm text-[#5F5B7A] mt-0.5">Showing verified home tutors in Navi Mumbai</p>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-5">
                @foreach([
                    ['name'=>'Prof. Rohan Kulkarni','subjects'=>['Mathematics','Science'],'classes'=>['Class 9','Class 10'],'location'=>'Belapur','fee'=>1200,'rating'=>4.0,'reviews'=>28,'exp'=>'5 yrs','mode'=>'Home Tuition','color'=>'brand'],
                    ['name'=>'Ms. Pooja Singh','subjects'=>['Mathematics','English'],'classes'=>['Class 4','Class 5','Class 6'],'location'=>'Belapur','fee'=>1000,'rating'=>4.8,'reviews'=>54,'exp'=>'7 yrs','mode'=>'Home Tuition','color'=>'green'],
                    ['name'=>'Mr. Aakash Tiwari','subjects'=>['Physics','Chemistry'],'classes'=>['Class 11','Class 12'],'location'=>'Kharghar','fee'=>1800,'rating'=>4.6,'reviews'=>41,'exp'=>'8 yrs','mode'=>'Home Tuition','color'=>'blue'],
                    ['name'=>'Dr. Meena Joshi','subjects'=>['Biology'],'classes'=>['Class 11','Class 12'],'location'=>'Vashi','fee'=>2000,'rating'=>4.9,'reviews'=>67,'exp'=>'12 yrs','mode'=>'Home Tuition','color'=>'purple'],
                    ['name'=>'Mr. Rahul Deshmukh','subjects'=>['Accountancy','Economics'],'classes'=>['Class 11','Class 12'],'location'=>'Nerul','fee'=>1500,'rating'=>4.4,'reviews'=>33,'exp'=>'6 yrs','mode'=>'Home Tuition','color'=>'orange'],
                    ['name'=>'Ms. Anjali Rao','subjects'=>['English','History'],'classes'=>['Class 7','Class 8','Class 9'],'location'=>'Panvel','fee'=>900,'rating'=>4.7,'reviews'=>22,'exp'=>'4 yrs','mode'=>'Home Tuition','color'=>'rose'],
                ] as $tutor)
                <div class="bg-white rounded-2xl border border-[#E6E1F2] overflow-hidden card-hover" x-data="{ saved: false }">
                    <div class="p-5">
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
                                    flex items-center justify-center text-white font-bold text-xl">
                                    {{ substr($tutor['name'], strrpos($tutor['name'], ' ') + 1, 1) }}
                                </div>
                                <div>
                                    <div class="font-bold text-sm text-[#1B1836]">{{ $tutor['name'] }}</div>
                                    <div class="text-xs text-[#5F5B7A] flex items-center gap-1 mt-0.5">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                        {{ $tutor['location'] }}, Navi Mumbai
                                    </div>
                                </div>
                            </div>
                            <button @click="saved = !saved" class="w-8 h-8 rounded-full border border-[#E6E1F2] flex items-center justify-center transition-colors" :class="saved ? 'bg-rose-50 border-rose-200' : ''">
                                <svg class="w-4 h-4" :class="saved ? 'text-rose-500 fill-rose-500' : 'text-[#5F5B7A]'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            </button>
                        </div>
                        <div class="flex flex-wrap gap-1.5 mb-3">
                            @foreach($tutor['subjects'] as $subj)
                            <span class="text-xs bg-brand-50 text-brand-700 font-medium px-2.5 py-1 rounded-full">{{ $subj }}</span>
                            @endforeach
                            @foreach($tutor['classes'] as $cls)
                            <span class="text-xs bg-gray-50 text-[#5F5B7A] font-medium px-2.5 py-1 rounded-full border border-[#E6E1F2]">{{ $cls }}</span>
                            @endforeach
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <div class="flex gap-0.5">
                                @for($i=1;$i<=5;$i++)
                                <svg class="w-3.5 h-3.5 {{ $i <= floor($tutor['rating']) ? 'text-[#F5B301]' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                @endfor
                            </div>
                            <span class="text-xs font-bold text-[#1B1836]">{{ number_format($tutor['rating'],1) }}</span>
                            <span class="text-xs text-[#5F5B7A]">({{ $tutor['reviews'] }})</span>
                            <span class="text-xs text-[#5F5B7A] ml-auto">{{ $tutor['exp'] }}</span>
                        </div>
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
        </div>
    </div>
</div>

@endsection
