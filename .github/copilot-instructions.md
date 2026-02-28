# Copilot Instructions

## Project Overview

This is a personal static site built with [Jigsaw](https://jigsaw.tighten.com/) (a Laravel-based static site generator), Blade templating, Tailwind CSS v4, and Vite.

## Stack

- **Static site generator**: Jigsaw (`tightenco/jigsaw`)
- **Templating**: Laravel Blade (`.blade.php`)
- **Styles**: Tailwind CSS v4 (`@tailwindcss/vite`)
- **Build tool**: Vite
- **Content**: Markdown files (blog posts in `source/_posts/`)

## Project Structure

- `source/` — all source files
  - `_layouts/` — Blade layout files (`main.blade.php`, `post.blade.php`)
  - `_posts/` — Markdown blog posts
  - `_assets/css/` — CSS entry point
  - `_assets/js/` — JS entry point
  - `assets/` — static assets (images, etc.)
- `build_local/` — local build output (generated, do not edit)
- `build_production/` — production build output (generated, do not edit)
- `config.php` — Jigsaw site config (dev)
- `config.production.php` — Jigsaw site config (production)

## Conventions

- Use Tailwind utility classes for all styling; avoid writing custom CSS unless necessary.
- Keep layouts and partials in `source/_layouts/`.
- Blog posts are Markdown files with YAML front matter in `source/_posts/`.
- Use Blade's `@yield('body')` / `@section('body')` pattern for page content.
- Do not edit files in `build_local/` or `build_production/` directly.
