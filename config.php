<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'https://skystone-static.netlify.com',
    'site' => [
        'title' => 'Skystone Group',
        'description' => "Your Volumetric Modular Construction partner.",
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'John Doe',
        'twitter' => 'johndoe',
        'github' => 'johndoe',
    ],
    'nav' => [
        ['url' => '/about', 'text' => 'About'],
        ['url' => '#contact-us', 'text' => 'Contact'],
        ['url' => '/projects', 'text' => 'Projects'],
        ['url' => '#', 'text' => 'Factories', 'factory' => true],
        ['url' => '#', 'text' => 'How it Works'],
    ],
    'services' => [
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'cloudinary' => 'skystone',
        'jumprock' => 'artisanstatic',
    ],
    'collections' => [
        'projects' => [
            'path' => 'projects/{filename}',
            'extends' => '_layouts.project',
            'section' => 'description',
            'sort' => '-order'
        ],
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true
        ]
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'media' => function ($page, $path) {
        if( substr($path,0,4) === 'http' ) {
            return $path;
        }
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
    'cloudinaryTransform' => function($page, $url, $transformation) {
        if( stripos($url, 'cloudinary') === false ) {
            return $url;
        }
        return str_replace_first('image/upload', "image/upload/{$transformation}", $url);
    },
    'isActiveRoute' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
    'data' => function($page, $file, $key = '', $default = '') {
        $filepath = __DIR__ . "/source/_data/" . str_replace('.', '/', $file) . ".json";
        if( ! file_exists($filepath) ) {
            throw new Error("No data found at '{$filepath}'");
        }
        $contents = json_decode(file_get_contents($filepath));

        if( ! $key ) {
            return $contents;
        }

        return $contents->{$key} ?? $default;
    }
];
