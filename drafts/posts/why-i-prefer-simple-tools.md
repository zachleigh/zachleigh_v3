---
extends: _layouts.post
title: Why I Still Prefer Simple Tools
date: 1737936000
description: There's a lot to be said for reaching for the boring, proven option.
section: content
---

There's a common pull in software development toward novelty — new frameworks, new paradigms, new ways to think about old problems. I feel it too. But in practice, I keep coming back to the same lesson: simple tools, used well, outperform sophisticated ones used poorly.

## Complexity has a cost

Every abstraction you add is code that has to be understood, maintained, and debugged. Frameworks and libraries make some things easier, but they also introduce surface area for bugs, upgrade pain, and conceptual overhead for anyone new to a codebase.

I'm not anti-framework. I love Laravel. But I've learned to reach for the simplest tool that solves the problem — and only add complexity when the benefits are clear and worth it.

## What "simple" actually means

Simple doesn't mean primitive. It means:

- **Legible** — readable without knowing a special API
- **Focused** — does one thing, doesn't try to do everything
- **Reversible** — easy to replace or remove if requirements change

A plain PHP function is often simpler than a design pattern. A well-named variable is simpler than a clever abstraction. Text files are simpler than a database, until they aren't.

## The heuristic

When I'm reaching for a tool or pattern, I ask: *what's the cost if I'm wrong?* If it's easy to undo, the risk is low. If it bakes complexity into the core of the application, I slow down and think harder.

Simple tools tend to have low undo cost. That's most of why I prefer them.
