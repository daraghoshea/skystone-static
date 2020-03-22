<picture>
    <source media="(max-width: 400px)" srcset="{{$page->cloudinaryTransform( $page->media($url), 'w_400,c_scale')}}">
    <source media="(max-width: 800px)" srcset="{{$page->cloudinaryTransform( $page->media($url), 'w_800,c_scale')}}">
    <img src="{{$page->media($url)}}" alt="{{$alt ?? ""}}">
</picture>