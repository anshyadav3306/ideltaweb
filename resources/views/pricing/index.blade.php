@extends('layouts.public')
@section('title', 'Pricing – iDelta Learning Plans')

@section('content')

<div class="bg-[#FAF8FF] py-16" x-data="{ tab: 'students' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        {{-- Header --}}
        <div class="text-center mb-10">
            <span class="text-brand-600 font-semibold text-sm uppercase tracking-wider">Transparent Pricing</span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-[#1B1836] mt-2 mb-3">Choose the Right Plan for Your Learning</h1>
            <p class="text-[#5F5B7A] max-w-xl mx-auto">Simple, affordable plans that grow with you. Cancel anytime — no questions asked.</p>
        </div>

        {{-- Toggle --}}
        <div class="flex justify-center mb-12">
            <div class="flex bg-white border border-[#E6E1F2] p-1.5 rounded-2xl shadow-sm">
                <button @click="tab='students'" :class="tab==='students' ? 'bg-brand-600 text-white shadow' : 'text-[#5F5B7A] hover:text-brand-600'"
                        class="px-6 py-2.5 rounded-xl font-semibold text-sm transition-all">
                    👨‍🎓 For Students
                </button>
                <button @click="tab='tutors'" :class="tab==='tutors' ? 'bg-brand-600 text-white shadow' : 'text-[#5F5B7A] hover:text-brand-600'"
                        class="px-6 py-2.5 rounded-xl font-semibold text-sm transition-all">
                    👨‍🏫 For Tutors
                </button>
            </div>
        </div>

        {{-- Student Plans --}}
        <div x-show="tab==='students'" x-transition>
            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">

                {{-- Basic --}}
                <div class="bg-white rounded-2xl border border-[#E6E1F2] p-7 card-hover hover:shadow-xl hover:shadow-brand-50/80 transition-all">
                    <div class="mb-5">
                        <div class="font-bold text-sm text-[#5F5B7A] uppercase tracking-wider mb-2">Basic</div>
                        <div class="flex items-end gap-1">
                            <span class="text-4xl font-extrabold text-[#1B1836]">₹199</span>
                            <span class="text-[#5F5B7A] pb-1">/month</span>
                        </div>
                        <p class="text-sm text-[#5F5B7A] mt-2">Perfect for getting started with doubt solving.</p>
                    </div>

                    <ul class="space-y-3 mb-7">
                        @foreach([
                            ['text'=>'Live doubt sessions (up to 5/month)','ok'=>true],
                            ['text'=>'Ask text &amp; image doubts','ok'=>true],
                            ['text'=>'Access to study resources','ok'=>true],
                            ['text'=>'Basic doubt resolution (chat)','ok'=>true],
                            ['text'=>'Priority doubt resolution','ok'=>false],
                            ['text'=>'1:1 sessions with experts','ok'=>false],
                            ['text'=>'Recorded sessions &amp; notes','ok'=>false],
                        ] as $feat)
                        <li class="flex items-center gap-2.5 text-sm {{ $feat['ok'] ? 'text-[#1B1836]' : 'text-[#5F5B7A] opacity-50' }}">
                            @if($feat['ok'])
                            <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            @else
                            <svg class="w-4 h-4 text-gray-300 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            @endif
                            {!! $feat['text'] !!}
                        </li>
                        @endforeach
                    </ul>

                    <a href="#" class="block w-full text-center border-2 border-brand-600 text-brand-600 hover:bg-brand-50 font-bold py-3 rounded-xl transition-all">
                        Get Basic
                    </a>
                </div>

                {{-- Pro (Popular) --}}
                <div class="bg-gradient-to-b from-brand-700 to-brand-900 rounded-2xl p-7 relative shadow-2xl shadow-brand-300/40 scale-105">
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                        <span class="bg-[#F5B301] text-[#1B1836] text-xs font-extrabold px-4 py-1.5 rounded-full whitespace-nowrap">⭐ Most Popular</span>
                    </div>

                    <div class="mb-5">
                        <div class="font-bold text-sm text-brand-200 uppercase tracking-wider mb-2">Pro</div>
                        <div class="flex items-end gap-1">
                            <span class="text-4xl font-extrabold text-white">₹399</span>
                            <span class="text-brand-200 pb-1">/month</span>
                        </div>
                        <p class="text-sm text-brand-200 mt-2">The complete doubt-solving powerhouse.</p>
                    </div>

                    <ul class="space-y-3 mb-7">
                        @foreach([
                            'Live doubt sessions (up to 15/month)',
                            'Priority doubt resolution',
                            '1:1 doubt sessions with experts',
                            'Access to recorded sessions &amp; notes',
                            'Subject-wise practice material',
                            'Ask text, image &amp; voice doubts',
                            'Chat support 7 days a week',
                        ] as $feat)
                        <li class="flex items-center gap-2.5 text-sm text-white">
                            <svg class="w-4 h-4 text-green-300 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            {!! $feat !!}
                        </li>
                        @endforeach
                    </ul>

                    <a href="#" class="block w-full text-center bg-white text-brand-700 hover:bg-brand-50 font-bold py-3 rounded-xl transition-all">
                        Get Pro
                    </a>
                </div>

                {{-- Premium --}}
                <div class="bg-white rounded-2xl border border-[#E6E1F2] p-7 card-hover hover:shadow-xl hover:shadow-brand-50/80 transition-all">
                    <div class="mb-5">
                        <div class="font-bold text-sm text-[#5F5B7A] uppercase tracking-wider mb-2">Premium</div>
                        <div class="flex items-end gap-1">
                            <span class="text-4xl font-extrabold text-[#1B1836]">₹799</span>
                            <span class="text-[#5F5B7A] pb-1">/month</span>
                        </div>
                        <p class="text-sm text-[#5F5B7A] mt-2">The ultimate learning experience — no limits.</p>
                    </div>

                    <ul class="space-y-3 mb-7">
                        @foreach([
                            ['text'=>'Unlimited live doubt sessions','ok'=>true],
                            ['text'=>'1:1 mentorship &amp; study guidance','ok'=>true],
                            ['text'=>'Personalised study plan','ok'=>true],
                            ['text'=>'All study material &amp; tests','ok'=>true],
                            ['text'=>'Priority support (phone &amp; chat)','ok'=>true],
                            ['text'=>'Exam strategy sessions','ok'=>true],
                            ['text'=>'Parent progress report','ok'=>true],
                        ] as $feat)
                        <li class="flex items-center gap-2.5 text-sm text-[#1B1836]">
                            <svg class="w-4 h-4 text-brand-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            {!! $feat['text'] !!}
                        </li>
                        @endforeach
                    </ul>

                    <a href="#" class="block w-full text-center border-2 border-brand-600 text-brand-600 hover:bg-brand-50 font-bold py-3 rounded-xl transition-all">
                        Get Premium
                    </a>
                </div>
            </div>
        </div>

        {{-- Tutor Plans --}}
        <div x-show="tab==='tutors'" x-cloak x-transition>
            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                @foreach([
                    ['name'=>'Starter','price'=>'Free','color'=>'border','features'=>['Create a tutor profile','Get listed in search results','Receive up to 5 enquiries/month','Basic profile badge','Access to tutor community'],'popular'=>false,'btn'=>'Join Free','cta_style'=>'border-2 border-brand-600 text-brand-600 hover:bg-brand-50'],
                    ['name'=>'Growth','price'=>'₹299','color'=>'dark','features'=>['Everything in Starter','Priority placement in search','Receive unlimited enquiries','Verified tutor badge','Doubt session earnings (₹200+/hr)','Monthly performance report'],'popular'=>true,'btn'=>'Get Growth','cta_style'=>'bg-white text-brand-700 hover:bg-brand-50'],
                    ['name'=>'Pro Tutor','price'=>'₹599','color'=>'border','features'=>['Everything in Growth','Featured tutor listing','Dedicated profile page','Home tuition lead generation','Priority customer support','Promotional visibility boost'],'popular'=>false,'btn'=>'Get Pro','cta_style'=>'border-2 border-brand-600 text-brand-600 hover:bg-brand-50'],
                ] as $plan)
                <div class="{{ $plan['color']==='dark' ? 'bg-gradient-to-b from-brand-700 to-brand-900 scale-105 shadow-2xl shadow-brand-300/40 relative' : 'bg-white border border-[#E6E1F2] hover:shadow-xl hover:shadow-brand-50/80' }} rounded-2xl p-7 transition-all card-hover">
                    @if($plan['popular'])
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                        <span class="bg-[#F5B301] text-[#1B1836] text-xs font-extrabold px-4 py-1.5 rounded-full">⭐ Recommended</span>
                    </div>
                    @endif
                    <div class="mb-5">
                        <div class="font-bold text-sm uppercase tracking-wider mb-2 {{ $plan['color']==='dark' ? 'text-brand-200' : 'text-[#5F5B7A]' }}">{{ $plan['name'] }}</div>
                        <div class="text-4xl font-extrabold {{ $plan['color']==='dark' ? 'text-white' : 'text-[#1B1836]' }}">{{ $plan['price'] }}<span class="text-base font-normal {{ $plan['color']==='dark' ? 'text-brand-200' : 'text-[#5F5B7A]' }}">/month</span></div>
                    </div>
                    <ul class="space-y-3 mb-7">
                        @foreach($plan['features'] as $feat)
                        <li class="flex items-center gap-2.5 text-sm {{ $plan['color']==='dark' ? 'text-white' : 'text-[#1B1836]' }}">
                            <svg class="w-4 h-4 {{ $plan['color']==='dark' ? 'text-green-300' : 'text-brand-600' }} shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            {{ $feat }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('become-tutor') }}" class="block w-full text-center font-bold py-3 rounded-xl transition-all {{ $plan['cta_style'] }}">
                        {{ $plan['btn'] }}
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Trust Row --}}
        <div class="mt-16 grid grid-cols-2 sm:grid-cols-4 gap-5 max-w-3xl mx-auto text-center">
            @foreach([
                ['icon'=>'🔒', 'label'=>'Secure Payments', 'sub'=>'SSL encrypted'],
                ['icon'=>'↩️', 'label'=>'Easy Refunds', 'sub'=>'7-day guarantee'],
                ['icon'=>'💬', 'label'=>'24/7 Support', 'sub'=>'Chat & call'],
                ['icon'=>'🏅', 'label'=>'No Hidden Fees', 'sub'=>'Pay what you see'],
            ] as $trust)
            <div class="p-4">
                <div class="text-3xl mb-2">{{ $trust['icon'] }}</div>
                <div class="font-bold text-sm text-[#1B1836]">{{ $trust['label'] }}</div>
                <div class="text-xs text-[#5F5B7A]">{{ $trust['sub'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- FAQ --}}
<section class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <h2 class="text-2xl font-extrabold text-[#1B1836] text-center mb-10">Frequently Asked Questions</h2>
        <div class="space-y-3" x-data="{ open: null }">
            @foreach([
                ['q'=>'Can I switch plans anytime?', 'a'=>'Yes, you can upgrade or downgrade your plan at any time. Changes take effect from the next billing cycle.'],
                ['q'=>'Is there a free trial?', 'a'=>'Yes! All new students get one free live doubt session before committing to any plan.'],
                ['q'=>'What payment methods are accepted?', 'a'=>'We accept UPI, debit/credit cards, net banking, and all major wallets including Paytm, PhonePe, and Google Pay.'],
                ['q'=>'Can I get a refund?', 'a'=>'We offer a 7-day money-back guarantee if you are not satisfied with your plan.'],
                ['q'=>'How is iDelta different from other platforms?', 'a'=>'iDelta is focused on Navi Mumbai, so all our tutors are local, verified, and available for home tuition as well as online sessions.'],
            ] as $i => $faq)
            <div class="border border-[#E6E1F2] rounded-2xl overflow-hidden" x-data="{ open: false }">
                <button @click="open = !open" class="w-full text-left px-5 py-4 flex items-center justify-between gap-3 hover:bg-brand-50 transition-colors">
                    <span class="font-semibold text-sm text-[#1B1836]">{{ $faq['q'] }}</span>
                    <svg class="w-5 h-5 text-brand-600 shrink-0 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" x-collapse class="px-5 pb-4 text-sm text-[#5F5B7A] leading-relaxed border-t border-[#E6E1F2]">
                    <p class="pt-4">{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
