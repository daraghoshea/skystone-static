<!-- search/social -->
<meta name="referrer" content="always">
<link rel="canonical" href="{{ $page->getUrl() }}">
<meta name="description" content="{!! $page->excerpt() ?: $page->data('settings', 'site.description') !!}">

<meta property="og:title" content="{{ $page->title ?: $page->data('settings', 'site.title') }}">
<meta property="og:description" content="{!! $page->excerpt() ?: $page->data('settings', 'site.description') !!}">
<meta property="og:image" content="{{ $page->media($page->image ? $page->image : $page->data('settings', 'site.image')) }}">
<meta property="og:type" content="{{ $page->isPost ? 'article' : 'business' }}">
<meta property="og:url" content="{{ $page->getUrl() }}">

<meta name="twitter:title" content="{{ $page->title ?: $page->data('settings', 'site.title') }}">
<meta name="twitter:description" content="{!! $page->excerpt() ?: $page->data('settings', 'site.description') !!}">
<meta name="twitter:image" content="{{ $page->media($page->image ? $page->image : $page->data('settings', 'site.image')) }}">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="{{ $page->twitterHandle() }}">
<meta name="twitter:creator" content="{{ $page->twitterHandle() }}">
<!-- end search/social -->
