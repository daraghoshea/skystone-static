<picture >
    <source media="(max-width: 400px)" srcset="{{$page->cloudinaryTransform( $page->media($url), 'w_400,c_scale,q_auto:eco')}}">
    <source media="(max-width: 800px)" srcset="{{$page->cloudinaryTransform( $page->media($url), 'w_800,c_scale,q_auto:eco')}}">
    <img src="{{$page->cloudinaryTransform( $page->media($url), 'w_1000,c_scale,q_auto:eco')}}" alt="{{$alt ?? ""}}" {!! $attributes ?? '' !!}>
</picture>