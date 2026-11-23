@extends('layouts.public')
@section('title', 'About iDelta – Navi Mumbai\'s Trusted Learning Platform')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-br from-brand-900 to-brand-600 py-20 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl translate-x-1/3 -translate-y-1/3"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center relative">
        <div class="inline-flex items-center gap-2 bg-white/20 text-sm font-semibold px-4 py-2 rounded-full mb-6">
            🎓 About iDelta
        </div>
        <h1 class="text-4xl sm:text-5xl font-extrabold mb-5 leading-tight">
            Empowering Every Learner<br>in Navi Mumbai
        </h1>
        <p class="text-brand-100 text-xl max-w-2xl mx-auto leading-relaxed">
            iDelta was born from a simple belief — every student deserves access to great teachers, personalised guidance, and instant help when they need it most.
        </p>
    </div>
</section>

{{-- Mission --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Our Mission</span>
                <h2 class="text-3xl font-extrabold text-[#1B1836] mt-2 mb-5">
                    Making Quality Education Accessible to Every Student
                </h2>
                <p class="text-[#5F5B7A] leading-relaxed mb-5">
                    Founded in Navi Mumbai, iDelta connects students with verified, experienced tutors for personalised home tuition, online classes, and instant doubt-solving — all at affordable prices.
                </p>
                <p class="text-[#5F5B7A] leading-relaxed mb-7">
                    We believe that the right tutor at the right time can transform a student's academic journey. Our platform makes it easy to find that perfect match in your neighbourhood, whether you're in Kharghar, Vashi, Belapur, or anywhere across Navi Mumbai.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('tutors') }}" class="bg-brand-600 hover:bg-brand-700 text-white font-semibold px-6 py-3 rounded-xl transition-colors">
                        Find a Tutor
                    </a>
                    <a href="{{ route('become-tutor') }}" class="border-2 border-brand-600 text-brand-600 hover:bg-brand-50 font-semibold px-6 py-3 rounded-xl transition-colors">
                        Join as Tutor
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5">
                @foreach([
                    ['num'=>'10,000+', 'label'=>'Students Served', 'icon'=>'👨‍🎓', 'color'=>'brand'],
                    ['num'=>'500+', 'label'=>'Verified Tutors', 'icon'=>'👨‍🏫', 'color'=>'green'],
                    ['num'=>'25,000+', 'label'=>'Sessions Completed', 'icon'=>'📚', 'color'=>'blue'],
                    ['num'=>'50+', 'label'=>'Subjects Covered', 'icon'=>'🔬', 'color'=>'orange'],
                ] as $stat)
                <div class="bg-[#FAF8FF] rounded-2xl border border-[#E6E1F2] p-6 text-center card-hover hover:border-brand-200 transition-all">
                    <div class="text-3xl mb-3">{{ $stat['icon'] }}</div>
                    <div class="text-3xl font-extrabold text-[#1B1836] mb-1">{{ $stat['num'] }}</div>
                    <div class="text-sm text-[#5F5B7A] font-medium">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Values --}}
<section class="py-20 bg-[#FAF8FF]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-14">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">What We Stand For</span>
            <h2 class="text-3xl font-extrabold text-[#1B1836] mt-2">Our Core Values</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['icon'=>'🎯', 'title'=>'Quality First', 'desc'=>'We rigorously vet every tutor on our platform. Only the best, most qualified, and most passionate educators make the cut.'],
                ['icon'=>'🤝', 'title'=>'Trust & Safety', 'desc'=>'Background checks, identity verification, and regular performance reviews ensure a safe learning environment for all students.'],
                ['icon'=>'🌍', 'title'=>'Local Impact', 'desc'=>'We\'re proudly rooted in Navi Mumbai. By connecting local tutors with local students, we strengthen our community.'],
                ['icon'=>'💡', 'title'=>'Innovation', 'desc'=>'We continuously improve our platform with new features like live doubt sessions, session recordings, and personalised study plans.'],
                ['icon'=>'💙', 'title'=>'Student-Centric', 'desc'=>'Every decision we make starts with asking: "How does this help the student?" Learning outcomes are our north star.'],
                ['icon'=>'🌱', 'title'=>'Growth for All', 'desc'=>'We empower tutors to build sustainable teaching businesses while helping students grow academically and personally.'],
            ] as $val)
            <div class="bg-white rounded-2xl border border-[#E6E1F2] p-6 hover:border-brand-200 hover:shadow-lg hover:shadow-brand-50 transition-all card-hover">
                <div class="text-3xl mb-4">{{ $val['icon'] }}</div>
                <h3 class="font-bold text-[#1B1836] mb-2">{{ $val['title'] }}</h3>
                <p class="text-sm text-[#5F5B7A] leading-relaxed">{{ $val['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Team --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-14">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">The Team</span>
            <h2 class="text-3xl font-extrabold text-[#1B1836] mt-2">Meet the iDelta Team</h2>
            <p class="text-[#5F5B7A] mt-3 max-w-xl mx-auto">Passionate educators and technologists working together to transform learning in Navi Mumbai.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['name'=>'Rahul Sharma','role'=>'Founder & CEO','bio'=>'Former IIT alumni with 10+ years in EdTech. Passionate about making quality education affordable.','color'=>'from-brand-400 to-brand-600'],
                ['name'=>'Priya Kulkarni','role'=>'Head of Academics','bio'=>'Ex-CBSE examiner with 15+ years of teaching experience. Leads our tutor quality program.','color'=>'from-green-400 to-green-600'],
                ['name'=>'Amit Desai','role'=>'CTO','bio'=>'Full-stack engineer who built the iDelta platform from scratch. Loves clean code and fast apps.','color'=>'from-blue-400 to-blue-600'],
                ['name'=>'Sneha Joshi','role'=>'Head of Operations','bio'=>'Operations expert ensuring smooth experiences for both students and tutors across Navi Mumbai.','color'=>'from-orange-400 to-orange-600'],
            ] as $member)
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br {{ $member['color'] }} rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-200 text-white font-bold text-2xl">
                    {{ substr($member['name'], 0, 1) }}
                </div>
                <h3 class="font-bold text-[#1B1836]">{{ $member['name'] }}</h3>
                <p class="text-sm text-brand-600 font-medium mb-2">{{ $member['role'] }}</p>
                <p class="text-xs text-[#5F5B7A] leading-relaxed">{{ $member['bio'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Story Timeline --}}
<section class="py-20 bg-[#FAF8FF]">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-[#1B1836]">Our Journey</h2>
        </div>
        <div class="relative">
            <div class="absolute left-4 top-0 bottom-0 w-0.5 bg-brand-200"></div>
            <div class="space-y-8">
                @foreach([
                    ['year'=>'2021', 'title'=>'The Beginning', 'desc'=>'iDelta was founded in Kharghar, Navi Mumbai with just 5 tutors and a vision to democratize quality education.'],
                    ['year'=>'2022', 'title'=>'Growing the Network', 'desc'=>'Expanded to 100+ tutors across Navi Mumbai. Launched the online doubt-solving feature.'],
                    ['year'=>'2023', 'title'=>'1,000 Students Milestone', 'desc'=>'Crossed 1,000 active students. Introduced the Live Doubt Session feature with real-time expert connectivity.'],
                    ['year'=>'2024', 'title'=>'10,000+ Students Served', 'desc'=>'Reached the 10,000 student milestone. Launched pricing plans and expanded to cover 50+ subjects.'],
                    ['year'=>'2025', 'title'=>'The Future', 'desc'=>'Expanding to other cities in Maharashtra while deepening our roots in Navi Mumbai. AI-powered study plans coming soon.'],
                ] as $event)
                <div class="flex gap-6 items-start pl-10 relative">
                    <div class="absolute left-2 top-1 w-5 h-5 bg-brand-600 border-4 border-brand-100 rounded-full -translate-x-1/2"></div>
                    <div>
                        <div class="text-xs font-bold text-brand-600 tracking-widest uppercase mb-1">{{ $event['year'] }}</div>
                        <h3 class="font-bold text-[#1B1836] mb-1">{{ $event['title'] }}</h3>
                        <p class="text-sm text-[#5F5B7A] leading-relaxed">{{ $event['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
