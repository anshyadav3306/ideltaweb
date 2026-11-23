@extends('layouts.public')
@section('title', 'Contact iDelta – Get in Touch | Navi Mumbai')

@section('content')

{{-- Header --}}
<div class="bg-gradient-to-r from-brand-700 to-brand-500 py-14 text-white text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <h1 class="text-3xl sm:text-4xl font-extrabold mb-3">Get in Touch</h1>
        <p class="text-brand-100 text-lg max-w-xl mx-auto">Have a question? We'd love to hear from you. Our team is here to help.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 py-16">
    <div class="grid lg:grid-cols-5 gap-10">

        {{-- Contact Info --}}
        <div class="lg:col-span-2 space-y-6">
            <div>
                <h2 class="text-2xl font-extrabold text-[#1B1836] mb-5">Contact Information</h2>
            </div>

            @foreach([
                ['icon'=>'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'label'=>'Phone', 'value'=>'+91 86687 07874', 'sub'=>'Mon–Sat, 9AM–8PM', 'link'=>'tel:+918668707874'],
                ['icon'=>'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label'=>'Email', 'value'=>'hello@idelta.in', 'sub'=>'We reply within 24 hours', 'link'=>'mailto:hello@idelta.in'],
                ['icon'=>'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z', 'label'=>'Location', 'value'=>'Navi Mumbai, Maharashtra', 'sub'=>'Serving all areas of Navi Mumbai', 'link'=>'#'],
                ['icon'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label'=>'Office Hours', 'value'=>'Mon–Saturday, 9AM–8PM', 'sub'=>'Closed on Sundays & Public Holidays', 'link'=>'#'],
            ] as $info)
            <div class="flex items-start gap-4 p-5 bg-[#FAF8FF] rounded-2xl border border-[#E6E1F2] hover:border-brand-200 transition-colors">
                <div class="w-10 h-10 bg-brand-100 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $info['icon'] }}"/>
                    </svg>
                </div>
                <div>
                    <div class="text-xs font-bold text-[#5F5B7A] uppercase tracking-wider mb-0.5">{{ $info['label'] }}</div>
                    <a href="{{ $info['link'] }}" class="font-bold text-[#1B1836] hover:text-brand-600 transition-colors">{{ $info['value'] }}</a>
                    <div class="text-xs text-[#5F5B7A] mt-0.5">{{ $info['sub'] }}</div>
                </div>
            </div>
            @endforeach

            {{-- Social --}}
            <div class="p-5 bg-[#FAF8FF] rounded-2xl border border-[#E6E1F2]">
                <div class="text-xs font-bold text-[#5F5B7A] uppercase tracking-wider mb-3">Follow Us</div>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 bg-brand-100 hover:bg-brand-600 rounded-xl flex items-center justify-center group transition-colors">
                        <svg class="w-5 h-5 text-brand-600 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-brand-100 hover:bg-brand-600 rounded-xl flex items-center justify-center group transition-colors">
                        <svg class="w-5 h-5 text-brand-600 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-brand-100 hover:bg-brand-600 rounded-xl flex items-center justify-center group transition-colors">
                        <svg class="w-5 h-5 text-brand-600 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Map Placeholder --}}
            <div class="rounded-2xl overflow-hidden border border-[#E6E1F2] h-48 bg-gradient-to-br from-brand-50 to-brand-100 flex flex-col items-center justify-center gap-2">
                <svg class="w-8 h-8 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span class="text-sm text-brand-600 font-semibold">Navi Mumbai, Maharashtra</span>
                <span class="text-xs text-brand-400">Map view coming soon</span>
            </div>
        </div>

        {{-- Contact Form --}}
        <div class="lg:col-span-3">
            <div class="bg-white rounded-2xl border border-[#E6E1F2] p-8 shadow-sm">
                <h2 class="text-2xl font-extrabold text-[#1B1836] mb-6">Send Us a Message</h2>

                <form class="space-y-5">
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Full Name *</label>
                            <input type="text" placeholder="Your full name" class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm transition-colors">
                        </div>
                        <div>
                            <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Email Address *</label>
                            <input type="email" placeholder="your@email.com" class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm transition-colors">
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Phone Number</label>
                        <input type="tel" placeholder="+91 XXXXX XXXXX" class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm transition-colors">
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">I am a *</label>
                        <div class="flex gap-3 flex-wrap">
                            @foreach(['Student','Parent','Tutor','Other'] as $type)
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="user_type" class="w-4 h-4 text-brand-600">
                                <span class="text-sm text-[#1B1836]">{{ $type }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Subject / Topic *</label>
                        <select class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm text-[#1B1836]">
                            <option>Select a topic</option>
                            <option>Find a Tutor</option>
                            <option>Home Tuition Enquiry</option>
                            <option>Live Doubt Sessions</option>
                            <option>Become a Tutor</option>
                            <option>Pricing & Plans</option>
                            <option>Technical Support</option>
                            <option>Partnership / B2B</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-[#1B1836] block mb-1.5">Message *</label>
                        <textarea rows="5" placeholder="Tell us how we can help you..." class="w-full px-4 py-3 rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400 text-sm transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-4 rounded-xl transition-colors text-base">
                        Send Message →
                    </button>
                    <p class="text-xs text-[#5F5B7A] text-center">We typically respond within 2–4 business hours.</p>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Quick Actions --}}
<div class="bg-[#FAF8FF] border-t border-[#E6E1F2] py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-8">
            <h2 class="text-xl font-bold text-[#1B1836]">Quick Actions</h2>
        </div>
        <div class="grid sm:grid-cols-3 gap-5 max-w-3xl mx-auto">
            <a href="{{ route('tutors') }}" class="flex flex-col items-center text-center p-6 bg-white rounded-2xl border border-[#E6E1F2] hover:border-brand-200 hover:shadow-md transition-all group">
                <div class="w-12 h-12 bg-brand-100 rounded-2xl flex items-center justify-center mb-3 group-hover:bg-brand-200 transition-colors">
                    <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <div class="font-bold text-sm text-[#1B1836] mb-1">Find a Tutor</div>
                <div class="text-xs text-[#5F5B7A]">Browse our verified tutors</div>
            </a>
            <a href="{{ route('live-doubts') }}" class="flex flex-col items-center text-center p-6 bg-white rounded-2xl border border-[#E6E1F2] hover:border-brand-200 hover:shadow-md transition-all group">
                <div class="w-12 h-12 bg-green-100 rounded-2xl flex items-center justify-center mb-3 group-hover:bg-green-200 transition-colors">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.07A1 1 0 0121 8.845v6.31a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                </div>
                <div class="font-bold text-sm text-[#1B1836] mb-1">Live Doubts</div>
                <div class="text-xs text-[#5F5B7A]">Instant expert sessions</div>
            </a>
            <a href="{{ route('become-tutor') }}" class="flex flex-col items-center text-center p-6 bg-white rounded-2xl border border-[#E6E1F2] hover:border-brand-200 hover:shadow-md transition-all group">
                <div class="w-12 h-12 bg-orange-100 rounded-2xl flex items-center justify-center mb-3 group-hover:bg-orange-200 transition-colors">
                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                </div>
                <div class="font-bold text-sm text-[#1B1836] mb-1">Become a Tutor</div>
                <div class="text-xs text-[#5F5B7A]">Start teaching today</div>
            </a>
        </div>
    </div>
</div>

@endsection
