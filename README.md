# zachleigh.com

Personal site built with [Jigsaw](https://jigsaw.tighten.com/), Blade, Tailwind CSS v4, and Vite.

## Local development

Start the Jigsaw dev server and Vite in two separate terminals:

```bash
vendor/bin/jigsaw serve
```

```bash
npm run dev
```

The site will be available at `http://localhost:8000`.

## Build for production

```bash
npm run build && vendor/bin/jigsaw build production
```

Output goes to `build_production/`.

## Adding a new post

1. Create a new Markdown file in `source/_posts/` named `your-post-slug.md`.
2. Add front matter at the top:

```markdown
---
extends: _layouts.post
title: Your Post Title
date: 1740614400
description: A short description of the post.
section: content
---

Post content here.
```

> `date` is a Unix timestamp. Run `date -j -f "%Y-%m-%d" "2026-03-01" +%s` to generate one.

3. Rebuild or let the dev server pick it up automatically.
