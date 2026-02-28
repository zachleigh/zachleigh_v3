<?php

return [
    'production' => false,
    'baseUrl' => '',
    'siteName' => 'Zach Leigh',
    'siteDescription' => 'Software developer. Writing about code, tools, and craft.',

    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'sort' => '-date',
        ],
    ],

    'isActive' => function ($page, $path) {
        return $page->getPath() === $path ||
               str_starts_with($page->getPath(), rtrim($path, '/') . '/');
    },
];
