<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
        <title>{{ $page->title ? $page->title . ' — ' . $page->siteName : $page->siteName }}</title>
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
    </head>
    <body class="bg-white text-gray-900 font-sans antialiased min-h-screen flex flex-col">

        <header class="border-b border-gray-100">
            <div class="h-1 bg-[#2F9FD0]"></div>
            <div class="max-w-2xl mx-auto px-6 py-5 flex items-center justify-between">
                <a href="/" class="text-lg font-semibold tracking-tight text-[#2F9FD0]">
                    {{ $page->siteName }}
                </a>
                <nav class="flex items-center gap-6 text-sm text-gray-500">
                    <a href="/" class="transition-colors {{ $page->isActive('/') ? 'text-[#2F9FD0] font-medium' : 'hover:text-gray-900' }}">Home</a>
                    <a href="/blog" class="transition-colors {{ $page->isActive('/blog') ? 'text-[#2F9FD0] font-medium' : 'hover:text-gray-900' }}">Writing</a>
                </nav>
            </div>
        </header>

        <main class="flex-1 max-w-2xl mx-auto px-6 py-16 w-full">
            @yield('body')
        </main>

        <footer class="border-t border-gray-100">
            <div class="max-w-2xl mx-auto px-6 py-6 text-sm text-gray-400">
                &copy; {{ date('Y') }} {{ $page->siteName }}
            </div>
        </footer>

    </body>
</html>
