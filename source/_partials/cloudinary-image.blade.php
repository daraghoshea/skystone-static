<picture >
    <!--[if IE 9]><audio><![endif]-->
    <source media="(max-width: 400px)" data-srcset="{{$page->cloudinaryTransform( $page->media($url), 'w_400,c_scale,q_auto:eco')}}">
    <source media="(max-width: 800px)" data-srcset="{{$page->cloudinaryTransform( $page->media($url), 'w_800,c_scale,q_auto:eco')}}">
    <source media="(max-width: 1024px)" data-srcset="{{$page->cloudinaryTransform( $page->media($url), 'w_1024,c_scale,q_auto:eco')}}">
    <source data-srcset="{{$page->cloudinaryTransform( $page->media($url), 'w_1200,c_scale,q_auto:eco')}}">
    <!--[if IE 9]></audio><![endif]-->
    <img
{{--        src="{!! $page->placeholderImage() !!}" --}}{{-- skystone logo encoded as svg --}}
        data-src="{{$page->cloudinaryTransform( $page->media($url), 'w_1024,c_scale,q_auto:eco')}}"
        alt="{{$alt ?? ""}}"
        class="lazyload {{$class ?? ''}}"
        {!! $attributes ?? '' !!}>
</picture>