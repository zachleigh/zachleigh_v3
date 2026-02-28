---
title: Writing
description: Articles and notes on software development, tools, and craft.
---
@extends('_layouts.main')

@section('body')

<h1 class="text-3xl font-semibold tracking-tight mb-2">Writing</h1>
<div class="w-8 h-0.5 bg-[#2F9FD0] mb-4"></div>
<p class="text-gray-500 mb-12">Thoughts on software, tools, and things I'm figuring out.</p>

@if ($posts->count() > 0)
    <ul class="space-y-10">
        @foreach ($posts->sortByDesc('date') as $post)
        <li class="border-b border-gray-100 pb-10 last:border-0 pl-3 border-l-2 border-l-transparent hover:border-l-[#2F9FD0] transition-colors">
            <a href="{{ $post->getUrl() }}" class="group">
                <h2 class="text-lg font-medium group-hover:text-[#2F9FD0] transition-colors mb-1">
                    {{ $post->title }}
                </h2>
            </a>
            @if ($post->date)
            <p class="text-sm text-gray-400 mb-2">{{ date('F j, Y', $post->date) }}</p>
            @endif
            @if ($post->description)
            <p class="text-gray-600 text-sm leading-relaxed">{{ $post->description }}</p>
            @endif
            <a href="{{ $post->getUrl() }}" class="inline-block mt-3 text-sm text-[#2F9FD0] hover:underline">
                Read →
            </a>
        </li>
        @endforeach
    </ul>
@else
    <p class="text-gray-500">Nothing here yet — check back soon.</p>
@endif

@endsection
