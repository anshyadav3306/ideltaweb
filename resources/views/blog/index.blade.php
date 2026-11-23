@extends('layouts.public')
@section('title', 'Blog – Education Tips, Study Guides & Tutor Stories | iDelta')

@section('content')

{{-- Header --}}
<div class="bg-gradient-to-r from-brand-700 to-brand-500 py-14 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <h1 class="text-3xl sm:text-4xl font-extrabold mb-3">iDelta Blog</h1>
        <p class="text-brand-100 text-lg max-w-xl">Study tips, exam strategies, tutor stories, and education insights for students and parents in Navi Mumbai.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 py-12">
    <div class="flex flex-col lg:flex-row gap-10">

        {{-- ======== BLOG GRID ======== --}}
        <div class="flex-1">
            {{-- Category Tabs --}}
            <div class="flex flex-wrap gap-2 mb-8" x-data="{ cat: 'all' }">
                @foreach(['all'=>'All Posts', 'study-tips'=>'Study Tips', 'exam-prep'=>'Exam Prep', 'tutor-stories'=>'Tutor Stories', 'subject-guides'=>'Subject Guides', 'parenting'=>'For Parents'] as $key=>$label)
                <button @click="cat='{{ $key }}'"
                        :class="cat==='{{ $key }}' ? 'bg-brand-600 text-white' : 'bg-white text-[#5F5B7A] border border-[#E6E1F2] hover:border-brand-200 hover:text-brand-600'"
                        class="px-4 py-2 rounded-xl text-sm font-semibold transition-all">
                    {{ $label }}
                </button>
                @endforeach
            </div>

            {{-- Featured Post --}}
            <div class="mb-8">
                <div class="bg-white rounded-2xl border border-[#E6E1F2] overflow-hidden card-hover group">
                    <div class="bg-gradient-to-br from-brand-600 to-brand-800 h-56 flex items-center justify-center relative">
                        <div class="absolute inset-0 opacity-20">
                            <div class="absolute top-0 right-0 w-40 h-40 bg-white rounded-full blur-2xl translate-x-1/4 -translate-y-1/4"></div>
                        </div>
                        <div class="text-center text-white px-8 relative">
                            <span class="text-5xl mb-3 block">📚</span>
                            <div class="text-sm font-semibold opacity-80">Featured Article</div>
                        </div>
                    </div>
                    <div class="p-7">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="text-xs bg-brand-50 text-brand-700 font-semibold px-3 py-1 rounded-full">Exam Prep</span>
                            <span class="text-xs text-[#5F5B7A]">November 15, 2026</span>
                            <span class="text-xs text-[#5F5B7A]">· 8 min read</span>
                        </div>
                        <h2 class="text-2xl font-extrabold text-[#1B1836] mb-3 group-hover:text-brand-600 transition-colors">
                            The Complete Class 10 Board Exam Preparation Guide for CBSE Students in Navi Mumbai
                        </h2>
                        <p class="text-[#5F5B7A] leading-relaxed mb-5">
                            Board exams are approaching and stress levels are rising. Here's a comprehensive, step-by-step guide to ace your Class 10 CBSE boards with the right study plan, resources, and expert tutor support available right here in Navi Mumbai...
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gradient-to-br from-brand-400 to-brand-600 rounded-full flex items-center justify-center text-white text-xs font-bold">P</div>
                                <div>
                                    <div class="text-xs font-bold text-[#1B1836]">Priya Kulkarni</div>
                                    <div class="text-xs text-[#5F5B7A]">Head of Academics</div>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-semibold text-brand-600 hover:text-brand-700 flex items-center gap-1">
                                Read More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Blog Grid --}}
            <div class="grid sm:grid-cols-2 gap-6">
                @foreach([
                    ['title'=>'Top 10 Study Tips for Maths That Actually Work', 'cat'=>'Study Tips', 'cat_color'=>'green', 'date'=>'Nov 10, 2026', 'read'=>'5 min', 'author'=>'Rohan K.', 'excerpt'=>'Struggling with Math? These proven techniques from our top tutors will transform how you approach problems...', 'emoji'=>'🔢'],
                    ['title'=>'Why Home Tuition Still Beats Online Classes for Primary Students', 'cat'=>'Tutor Stories', 'cat_color'=>'orange', 'date'=>'Nov 5, 2026', 'read'=>'6 min', 'author'=>'Pooja S.', 'excerpt'=>'The debate between home tuition and online learning continues. Here\'s what we\'ve learned from 10,000+ sessions...', 'emoji'=>'🏠'],
                    ['title'=>'JEE 2027 Preparation: Month-by-Month Study Plan', 'cat'=>'Exam Prep', 'cat_color'=>'brand', 'date'=>'Oct 28, 2026', 'read'=>'10 min', 'author'=>'Amit D.', 'excerpt'=>'Starting JEE prep early is the key. Here\'s a detailed month-by-month plan created with IIT alumni tutors...', 'emoji'=>'⚗️'],
                    ['title'=>'How to Choose the Right Home Tutor for Your Child', 'cat'=>'For Parents', 'cat_color'=>'purple', 'date'=>'Oct 20, 2026', 'read'=>'7 min', 'author'=>'Sneha J.', 'excerpt'=>'Picking a tutor is a big decision. Here are the 8 key factors every parent should evaluate before saying yes...', 'emoji'=>'👨‍👩‍👧'],
                    ['title'=>'CBSE vs State Board: Which is Better for Your Child?', 'cat'=>'Subject Guides', 'cat_color'=>'cyan', 'date'=>'Oct 15, 2026', 'read'=>'8 min', 'author'=>'Priya K.', 'excerpt'=>'Parents often struggle with this decision. We break down the pros and cons of each board to help you decide...', 'emoji'=>'📋'],
                    ['title'=>'5 Signs Your Child Needs Extra Tutoring Help', 'cat'=>'For Parents', 'cat_color'=>'purple', 'date'=>'Oct 8, 2026', 'read'=>'4 min', 'author'=>'Rohan K.', 'excerpt'=>'Early intervention is key. Watch out for these warning signs that your child could benefit from a tutor...', 'emoji'=>'🚦'],
                ] as $post)
                <article class="bg-white rounded-2xl border border-[#E6E1F2] overflow-hidden card-hover group hover:shadow-lg hover:shadow-brand-50 transition-all">
                    <div class="h-32 flex items-center justify-center text-5xl
                        @if($post['cat_color']==='green') bg-green-50
                        @elseif($post['cat_color']==='orange') bg-orange-50
                        @elseif($post['cat_color']==='brand') bg-brand-50
                        @elseif($post['cat_color']==='purple') bg-purple-50
                        @elseif($post['cat_color']==='cyan') bg-cyan-50
                        @else bg-gray-50
                        @endif">
                        {{ $post['emoji'] }}
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-full
                                @if($post['cat_color']==='green') bg-green-50 text-green-700
                                @elseif($post['cat_color']==='orange') bg-orange-50 text-orange-700
                                @elseif($post['cat_color']==='brand') bg-brand-50 text-brand-700
                                @elseif($post['cat_color']==='purple') bg-purple-50 text-purple-700
                                @elseif($post['cat_color']==='cyan') bg-cyan-50 text-cyan-700
                                @else bg-gray-50 text-gray-700
                                @endif">
                                {{ $post['cat'] }}
                            </span>
                            <span class="text-xs text-[#5F5B7A]">{{ $post['date'] }}</span>
                        </div>
                        <h3 class="font-bold text-[#1B1836] text-sm leading-snug mb-2 group-hover:text-brand-600 transition-colors line-clamp-2">{{ $post['title'] }}</h3>
                        <p class="text-xs text-[#5F5B7A] leading-relaxed mb-4 line-clamp-2">{{ $post['excerpt'] }}</p>
                        <div class="flex items-center justify-between pt-3 border-t border-[#E6E1F2]">
                            <span class="text-xs text-[#5F5B7A]">{{ $post['author'] }} · {{ $post['read'] }} read</span>
                            <a href="#" class="text-xs font-semibold text-brand-600 hover:text-brand-700">Read →</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            {{-- Load More --}}
            <div class="text-center mt-10">
                <button class="inline-flex items-center gap-2 border-2 border-brand-600 text-brand-600 hover:bg-brand-50 font-semibold px-8 py-3 rounded-xl transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    Load More Articles
                </button>
            </div>
        </div>

        {{-- ======== SIDEBAR ======== --}}
        <aside class="w-full lg:w-72 shrink-0 space-y-6">

            {{-- Search --}}
            <div class="bg-white rounded-2xl border border-[#E6E1F2] p-5">
                <h3 class="font-bold text-[#1B1836] mb-3">Search Articles</h3>
                <div class="relative">
                    <input type="search" placeholder="Search the blog..." class="w-full pl-10 pr-4 py-2.5 text-sm rounded-xl border border-[#E6E1F2] focus:outline-none focus:border-brand-400">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-[#5F5B7A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>

            {{-- Categories --}}
            <div class="bg-white rounded-2xl border border-[#E6E1F2] p-5">
                <h3 class="font-bold text-[#1B1836] mb-4">Categories</h3>
                <div class="space-y-2">
                    @foreach([
                        ['name'=>'Study Tips', 'count'=>12, 'color'=>'green'],
                        ['name'=>'Exam Preparation', 'count'=>18, 'color'=>'brand'],
                        ['name'=>'Tutor Stories', 'count'=>7, 'color'=>'orange'],
                        ['name'=>'Subject Guides', 'count'=>15, 'color'=>'blue'],
                        ['name'=>'For Parents', 'count'=>9, 'color'=>'purple'],
                        ['name'=>'Platform Updates', 'count'=>4, 'color'=>'gray'],
                    ] as $cat)
                    <a href="#" class="flex items-center justify-between py-2 px-3 rounded-xl hover:bg-brand-50 transition-colors group">
                        <span class="text-sm text-[#1B1836] group-hover:text-brand-600 transition-colors">{{ $cat['name'] }}</span>
                        <span class="text-xs bg-brand-50 text-brand-600 font-semibold px-2 py-0.5 rounded-full">{{ $cat['count'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Recent Posts --}}
            <div class="bg-white rounded-2xl border border-[#E6E1F2] p-5">
                <h3 class="font-bold text-[#1B1836] mb-4">Recent Posts</h3>
                <div class="space-y-4">
                    @foreach([
                        ['title'=>'Class 12 Physics Formula Sheet 2027', 'date'=>'Nov 18, 2026'],
                        ['title'=>'How to Crack NEET in First Attempt', 'date'=>'Nov 12, 2026'],
                        ['title'=>'Best Time to Study: Morning vs Night', 'date'=>'Nov 7, 2026'],
                        ['title'=>'Understanding the Maharashtra HSC Syllabus', 'date'=>'Oct 30, 2026'],
                    ] as $rp)
                    <a href="#" class="flex gap-3 group">
                        <div class="w-12 h-12 bg-brand-50 rounded-xl flex items-center justify-center text-xl shrink-0 group-hover:bg-brand-100 transition-colors">📄</div>
                        <div>
                            <div class="text-xs font-semibold text-[#1B1836] group-hover:text-brand-600 transition-colors leading-snug">{{ $rp['title'] }}</div>
                            <div class="text-xs text-[#5F5B7A] mt-0.5">{{ $rp['date'] }}</div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- CTA --}}
            <div class="bg-gradient-to-br from-brand-600 to-brand-800 rounded-2xl p-6 text-white text-center">
                <div class="text-3xl mb-3">🎓</div>
                <h3 class="font-bold mb-2">Need a Tutor?</h3>
                <p class="text-brand-100 text-xs mb-4">Find verified tutors in Navi Mumbai for your subject and class.</p>
                <a href="{{ route('tutors') }}" class="block bg-white text-brand-700 font-bold py-2.5 rounded-xl text-sm hover:bg-brand-50 transition-colors">
                    Find a Tutor
                </a>
            </div>

            {{-- Popular Tags --}}
            <div class="bg-white rounded-2xl border border-[#E6E1F2] p-5">
                <h3 class="font-bold text-[#1B1836] mb-4">Popular Tags</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach(['CBSE','Board Exams','JEE','NEET','Home Tuition','Mathematics','Physics','Study Plan','Navi Mumbai','Class 10','Class 12','Science'] as $tag)
                    <a href="#" class="text-xs bg-brand-50 text-brand-700 font-medium px-3 py-1.5 rounded-full hover:bg-brand-100 transition-colors">{{ $tag }}</a>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
</div>

@endsection
