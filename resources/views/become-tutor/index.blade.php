@extends('layouts.public')
@section('title', 'Become a Tutor – Teach & Earn with iDelta Navi Mumbai')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-br from-brand-900 via-brand-700 to-brand-500 py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-white rounded-full blur-3xl -translate-x-1/3 translate-y-1/3"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-white">
                <div class="inline-flex items-center gap-2 bg-white/20 text-sm font-semibold px-4 py-2 rounded-full mb-6">
                    👨‍🏫 Join 500+ iDelta Tutors
                </div>
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-5">
                    Become an iDelta Tutor
                </h1>
                <p class="text-brand-100 text-lg leading-relaxed mb-7">
                    Teach, solve doubts, take home tuition and earn while making a difference in students' lives across Navi Mumbai.
                </p>
                <ul class="space-y-3 mb-8">
                    @foreach([
                        'Set your own schedule & availability',
                        'Teach online or at students\' homes',
                        'Earn through live doubt sessions',
                        'Build your verified teaching profile',
                        'Access to 10,000+ students in Navi Mumbai',
                    ] as $benefit)
                    <li class="flex items-center gap-3 text-brand-100">
                        <div class="w-5 h-5 bg-green-400 rounded-full flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        </div>
                        {{ $benefit }}
                    </li>
                    @endforeach
                </ul>
                <a href="#apply" class="inline-flex items-center gap-2 bg-white text-brand-700 hover:bg-brand-50 font-bold px-8 py-4 rounded-xl transition-all shadow-lg text-lg">
                    Apply as a Tutor →
                </a>
            </div>

            {{-- Stats Cards --}}
            <div class="grid grid-cols-2 gap-4">
                @foreach([
                    ['num'=>'₹500+', 'label'=>'Avg. earnings per session', 'icon'=>'💰'],
                    ['num'=>'10K+', 'label'=>'Active students waiting', 'icon'=>'👨‍🎓'],
                    ['num'=>'4.8★', 'label'=>'Average tutor rating', 'icon'=>'⭐'],
                    ['num'=>'Free', 'label'=>'Profile creation & listing', 'icon'=>'🆓'],
                ] as $stat)
                <div class="bg-white/15 backdrop-blur-sm rounded-2xl p-6 text-white text-center border border-white/20">
                    <div class="text-3xl mb-2">{{ $stat['icon'] }}</div>
                    <div class="text-3xl font-extrabold mb-1">{{ $stat['num'] }}</div>
                    <div class="text-sm text-brand-100">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- How it Works for Tutors --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-14">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Simple Onboarding</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1B1836] mt-2">How It Works for Tutors</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['step'=>'01','icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','title'=>'Apply Online','desc'=>'Fill out the tutor application form with your qualifications, subjects, and experience.'],
                ['step'=>'02','icon'=>'M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2','title'=>'Get Verified','desc'=>'Our team verifies your identity, qualifications, and conducts a brief interview.'],
                ['step'=>'03','icon'=>'M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0M19.488 10.5a9 9 0 10-14.976 0M12 2a7 7 0 110 14A7 7 0 0112 2z','title'=>'Build Your Profile','desc'=>'Create a compelling tutor profile with your photo, subjects, timings, and fee structure.'],
                ['step'=>'04','icon'=>'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6','title'=>'Start Earning','desc'=>'Accept students, conduct sessions, solve doubts, and grow your teaching business on iDelta.'],
            ] as $step)
            <div class="text-center">
                <div class="w-14 h-14 bg-brand-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-brand-200">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $step['icon'] }}"/>
                    </svg>
                </div>
                <div class="text-xs font-bold text-brand-600 tracking-widest uppercase mb-1">Step {{ $step['step'] }}</div>
                <h3 class="text-lg font-bold text-[#1B1836] mb-2">{{ $step['title'] }}</h3>
                <p class="text-sm text-[#5F5B7A] leading-relaxed">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Earnings Calculator --}}
<section class="py-20 bg-[#FAF8FF]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-10">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Earnings Potential</span>
            <h2 class="text-3xl font-extrabold text-[#1B1836] mt-2">Calculate Your Potential Earnings</h2>
        </div>

        <div class="bg-white rounded-2xl border border-[#E6E1F2] p-8 shadow-sm" x-data="{
            students: 5,
            sessionsPerWeek: 3,
            ratePerHour: 500,
            get monthly() { return this.students * this.sessionsPerWeek * 4 * this.ratePerHour; }
        }">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <label class="text-sm font-semibold text-[#1B1836] block mb-2">Number of Students</label>
                    <input type="range" min="1" max="20" x-model="students" class="w-full accent-brand-600 mb-1">
                    <div class="flex justify-between text-xs text-[#5F5B7A]"><span>1</span><span class="font-bold text-brand-600" x-text="students + ' students'"></span><span>20</span></div>
                </div>
                <div>
                    <label class="text-sm font-semibold text-[#1B1836] block mb-2">Sessions / Week</label>
                    <input type="range" min="1" max="7" x-model="sessionsPerWeek" class="w-full accent-brand-600 mb-1">
                    <div class="flex justify-between text-xs text-[#5F5B7A]"><span>1</span><span class="font-bold text-brand-600" x-text="sessionsPerWeek + ' sessions'"></span><span>7</span></div>
                </div>
                <div>
                    <label class="text-sm font-semibold text-[#1B1836] block mb-2">Rate per Hour (₹)</label>
                    <input type="range" min="200" max="2000" step="50" x-model="ratePerHour" class="w-full accent-brand-600 mb-1">
                    <div class="flex justify-between text-xs text-[#5F5B7A]"><span>₹200</span><span class="font-bold text-brand-600">₹<span x-text="ratePerHour"></span></span><span>₹2,000</span></div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-brand-600 to-brand-800 rounded-2xl p-6 text-white text-center">
                <div class="text-sm text-brand-200 mb-1">Estimated Monthly Earnings</div>
                <div class="text-5xl font-extrabold mb-1">₹<span x-text="monthly.toLocaleString('en-IN')"></span></div>
                <div class="text-brand-200 text-sm">Based on your selected parameters</div>
            </div>
        </div>
    </div>
</section>

{{-- Requirements --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-[#1B1836]">Requirements to Join</h2>
            <p class="text-[#5F5B7A] mt-3">We maintain high standards to ensure quality education for every student.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['icon'=>'🎓', 'title'=>'Educational Qualification', 'desc'=>'Minimum graduate degree in the subject you wish to teach. Post-graduation or B.Ed. preferred for Class 11-12.'],
                ['icon'=>'🪪', 'title'=>'Valid Identity Proof', 'desc'=>'Government-issued ID (Aadhar, PAN, Passport). Required for verification and trust building.'],
                ['icon'=>'📱', 'title'=>'Smartphone & Internet', 'desc'=>'For online sessions, you need a stable internet connection and a smartphone or laptop with camera.'],
                ['icon'=>'⏰', 'title'=>'Minimum 10 hrs/Week', 'desc'=>'Commit to at least 10 hours per week of teaching availability to be an active tutor on the platform.'],
                ['icon'=>'🗣️', 'title'=>'Communication Skills', 'desc'=>'Ability to explain concepts clearly in English or Hindi/Marathi. Patience and empathy with students.'],
                ['icon'=>'📊', 'title'=>'Subject Expertise', 'desc'=>'Deep knowledge of your subject. We conduct a brief test/demo class to assess your teaching ability.'],
            ] as $req)
            <div class="bg-[#FAF8FF] rounded-2xl border border-[#E6E1F2] p-6 hover:border-brand-200 transition-colors">
                <div class="text-3xl mb-3">{{ $req['icon'] }}</div>
                <h3 class="font-bold text-[#1B1836] mb-2">{{ $req['title'] }}</h3>
                <p class="text-sm text-[#5F5B7A] leading-relaxed">{{ $req['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Application Form --}}
<section id="apply" class="py-20 bg-[#FAF8FF]">
    <div class="max-w-2xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-extrabold text-[#1B1836]">Apply as a Tutor</h2>
            <p class="text-[#5F5B7A] mt-2">Fill out the form and our team will reach out within 24 hours.</p>
        </div>

        <form class="bg-white rounded-2xl border border-[#E6E1F2] p-8 shadow-sm space-y-5">
            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Full Name *</label>
                    <input type="text" placeholder="Your full name" class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm">
                </div>
                <div>
                    <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Phone Number *</label>
                    <input type="tel" placeholder="+91 XXXXX XXXXX" class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm">
                </div>
            </div>
            <div>
                <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Email Address *</label>
                <input type="email" placeholder="your@email.com" class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm">
            </div>
            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Subject(s) You Teach *</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm text-[#1B1836]">
                        <option>Select Subject</option>
                        @foreach(['Mathematics','Physics','Chemistry','Biology','English','Computer Science','Economics','Accountancy','History','Geography'] as $s)
                        <option>{{ $s }}</option>
                        @endforeach
                        <option>Multiple Subjects</option>
                    </select>
                </div>
                <div>
                    <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Classes You Can Teach *</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm text-[#1B1836]">
                        <option>Select Class Range</option>
                        <option>Class 1-5 (Primary)</option>
                        <option>Class 6-8 (Middle)</option>
                        <option>Class 9-10 (Secondary)</option>
                        <option>Class 11-12 (Sr. Secondary)</option>
                        <option>College Level</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Your Area in Navi Mumbai *</label>
                <select class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm text-[#1B1836]">
                    <option>Select Your Area</option>
                    @foreach(['Kharghar','Belapur','Vashi','Nerul','Panvel','Airoli','Ghansoli','Kopar Khairane','Sanpada','Turbhe'] as $loc)
                    <option>{{ $loc }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Years of Teaching Experience *</label>
                <select class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm text-[#1B1836]">
                    <option>Select Experience</option>
                    <option>Fresher (Less than 1 year)</option>
                    <option>1-2 years</option>
                    <option>3-5 years</option>
                    <option>5-10 years</option>
                    <option>10+ years</option>
                </select>
            </div>
            <div>
                <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">About Yourself</label>
                <textarea rows="3" placeholder="Tell us about your teaching style, qualifications, and what makes you a great tutor..." class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm resize-none"></textarea>
            </div>
            <button type="submit" class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-4 rounded-xl transition-colors text-base">
                Submit Application →
            </button>
            <p class="text-xs text-[#5F5B7A] text-center">By submitting, you agree to our Terms of Service and Privacy Policy.</p>
        </form>
    </div>
</section>

@endsection
