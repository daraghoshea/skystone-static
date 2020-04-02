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
    ],
    'nav' => [
        ['url' => '/about', 'text' => 'About'],
        ['url' => '#contact-us', 'text' => 'Contact'],
        ['url' => '/projects', 'text' => 'Projects'],
        ['url' => '#', 'text' => 'Factories', 'factory' => true],
//        ['url' => '#', 'text' => 'How it Works'],
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
        'news' => [
            'path' => 'news/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.news',
            'section' => 'postContent',
            'hasExcerpt' => true
        ],
        'testimonials' => [
            'path' => 'projects/{filename}',
            'extends' => '_layouts.project',
            'section' => 'description',
            'sort' => '-order'
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->hasExcerpt
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'media' => function ($page, $path) {
        if( substr($path,0,4) === 'http' ) {
            return $path;
        }
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
    'placeholderImage' => function() {
        return "data:image/svg+xml;utf8,%3Csvg width='1' height='1' viewBox='0 0 1 1' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='1' height='1' fill='%23E0E0E0'/%3E%3C/svg%3E";
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

        return data_get($contents, $key) ?? $default;
    },
    'twitterHandle' => function($page) {
        $url = $page->data('settings', 'social.twitter');
        return "@" . explode("/",ltrim(parse_url($url, PHP_URL_PATH), "/"))[0];
    }
];
