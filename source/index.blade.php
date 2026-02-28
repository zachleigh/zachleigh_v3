---
title: false
---
@extends('_layouts.main')

@section('body')

<section class="mb-16">
    <h1 class="text-3xl font-semibold tracking-tight mb-4">Hey, I'm <span class="text-[#2F9FD0]">Zach</span>.</h1>
    <div class="text-gray-600 leading-relaxed space-y-4 max-w-prose">
        <p>
            I'm a software developer based somewhere with good coffee. I build things for the web,
            think about code quality, and occasionally write about what I'm learning.
        </p>
        <p>
            Currently working on interesting problems. Always happy to chat about software,
            side projects, or anything else.
        </p>
    </div>
    <div class="mt-8 flex gap-4 text-sm">
        <a href="https://github.com" class="text-[#2F9FD0] hover:underline">GitHub</a>
        <span class="text-gray-300">/</span>
        <a href="mailto:hello@example.com" class="text-[#2F9FD0] hover:underline">Email</a>
    </div>
</section>

@if ($posts->count() > 0)
<section>
    <h2 class="text-xs font-semibold tracking-widest uppercase text-[#2F9FD0] mb-6">Recent Writing</h2>
    <ul class="space-y-6">
        @foreach ($posts->sortByDesc('date')->take(5) as $post)
        <li class="pl-3 border-l-2 border-transparent hover:border-[#2F9FD0] transition-colors">
            <a href="{{ $post->getUrl() }}" class="group block">
                <span class="text-base font-medium group-hover:text-[#2F9FD0] transition-colors">
                    {{ $post->title }}
                </span>
                @if ($post->date)
                <span class="block text-sm text-gray-400 mt-0.5">
                    {{ date('F j, Y', $post->date) }}
                </span>
                @endif
                @if ($post->description)
                <span class="block text-sm text-gray-500 mt-1">{{ $post->description }}</span>
                @endif
            </a>
        </li>
        @endforeach
    </ul>
    @if ($posts->count() > 5)
    <div class="mt-8">
        <a href="/blog" class="text-sm text-[#2F9FD0] hover:underline">All posts →</a>
    </div>
    @endif
</section>
@endif

@endsection
