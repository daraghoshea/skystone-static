@if( isset($url) && ! empty( $url ) )
<!-- generics -->
<link rel="icon" href="{{$page->cloudinaryTransform( $page->media($url), 'w_32,h_32')}}" sizes="32x32">
<link rel="icon" href="{{$page->cloudinaryTransform( $page->media($url), 'w_57,h_57')}}" sizes="57x57">
<link rel="icon" href="{{$page->cloudinaryTransform( $page->media($url), 'w_76,h_76')}}" sizes="76x76">
<link rel="icon" href="{{$page->cloudinaryTransform( $page->media($url), 'w_96,h_96')}}" sizes="96x96">
<link rel="icon" href="{{$page->cloudinaryTransform( $page->media($url), 'w_128,h_128')}}" sizes="128x128">
<link rel="icon" href="{{$page->cloudinaryTransform( $page->media($url), 'w_192,h_192')}}" sizes="192x192">
<link rel="icon" href="{{$page->cloudinaryTransform( $page->media($url), 'w_228,h_228')}}" sizes="228x228">

<!-- Android -->
<link rel="shortcut icon" sizes="196x196" href=“{{$page->cloudinaryTransform( $page->media($url), 'w_196,h_196')}}">

<!-- iOS -->
<link rel="apple-touch-icon" href="{{$page->cloudinaryTransform( $page->media($url), 'w_120,h_120')}}" sizes="120x120">
<link rel="apple-touch-icon" href="{{$page->cloudinaryTransform( $page->media($url), 'w_152,h_152')}}" sizes="152x152">
<link rel="apple-touch-icon" href="{{$page->cloudinaryTransform( $page->media($url), 'w_180,h_180')}}" sizes="180x180">

<!-- Windows 8 IE 10-->
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="/{{$page->cloudinaryTransform( $page->media($url), 'w_144,h_144')}}">
@endif