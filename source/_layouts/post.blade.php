@extends('_layouts.main')

@section('body')

<article>
    <header class="mb-12">
        <a href="/blog" class="text-sm text-[#2F9FD0] hover:underline transition-colors">
            ← Writing
        </a>
        <h1 class="text-3xl font-semibold tracking-tight mt-6 mb-3">{{ $page->title }}</h1>
        <div class="w-8 h-0.5 bg-[#2F9FD0] mb-3"></div>
        @if ($page->date)
        <p class="text-sm text-gray-400">{{ date('F j, Y', $page->date) }}</p>
        @endif
    </header>

    <div class="prose-content text-gray-700 leading-relaxed">
        @yield('content')
    </div>

    <footer class="mt-16 pt-8 border-t border-gray-100">
        <div class="flex justify-between text-sm text-gray-400">
            @if ($page->getPrevious())
            <a href="{{ $page->getPrevious()->getUrl() }}" class="hover:text-[#2F9FD0] transition-colors">
                ← {{ $page->getPrevious()->title }}
            </a>
            @else
            <span></span>
            @endif
            @if ($page->getNext())
            <a href="{{ $page->getNext()->getUrl() }}" class="hover:text-[#2F9FD0] transition-colors">
                {{ $page->getNext()->title }} →
            </a>
            @endif
        </div>
    </footer>
</article>

@endsection
