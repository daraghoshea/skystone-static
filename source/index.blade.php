@extends('_layouts.master')

@section('content')
    <full-screen-media :ratio="16/9">
        <header slot-scope="{style, scroll}" class="bg-ssg-black flex h-screen items-center justify-center overflow-hidden relative w-full">

            <video class="full-screen-bg h-full"
                   poster="{{$page->media("video/upload/so_0/v1585316828/homepage-720_m7oniu.jpg")}}"
                   playsinline autoplay muted loop
                   style="filter:brightness(50%); z-index:0"
                   :style="style">
                <source src="{{$page->media("video/upload/c_scale,f_auto,q_auto:eco,w_1015/v1585316828/homepage-720_m7oniu.webm")}}" type="video/webm">
                <source src="{{$page->media("video/upload/c_scale,f_auto,q_auto:eco,w_1015/v1585316828/homepage-720_m7oniu.mov")}}" type="video/mov">
                <source src="{{$page->media("video/upload/c_scale,f_auto,q_auto:eco,w_1015/v1585316828/homepage-720_m7oniu.mp4")}}" type="video/mp4">
            </video>

            <h2 class="text-3xl md:text-5xl text-center text-white shadow z-0">High-rise Volumetric <em>Modular</em> Construction</h2>

            <button type="button" @click.prevent="scroll" class="absolute bottom-0 content-center focus:outline-none outline-none py-6 text-white w-full">
                <div>Scroll</div>
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="8" class="icon mt-3 mx-auto"><path d="M1.41.59L6 5.17 10.59.59 12 2 6 8 0 2z" fill="currentColor"></path></svg>
            </button>

        </header>
    </full-screen-media>

    <section class="bg-white py-24 md:py-48 px-6 sm:px-8 lg:px-12 grid gap-12 md:grid-cols-2">
        <div class="md:px-8">
            <img class="mx-auto lazyload" src="{!! $page->placeholderImage() !!}" data-src="{{$page->media('image/upload/w_500,c_scale,q_auto:eco/v1584806025/skystone-marriott-module-prototype-1_er7ps9.jpg')}}" alt="Skystone Marriott AC finished prototype module" />
        </div>
        <div class="max-w-xl mx-auto">
            <p class="text-xs text-gray-500 uppercase mb-1 tracking-tight">Steel Specialists</p>
            <h2 class="text-2xl text-underline mb-4">Skystone Volumetric Modular</h2>
            <p class="mb-4">Skystone specialises in <em>steel-framed</em> volumetric modular structures, that combine on-site to form a steel superstructures.</p>
            <p class="mb-4">The modules are engineered to suit each project, and are ideally suited for <strong>mid-high rise buildings</strong>.</p>
            <p class="mb-6">The modules are completed off-site to a high quality finish, that can <strong>provide 25-45% saving versus traditional construction</strong>.</p>
            <p class="">
                <a href="#" class="btn btn--red-outline anim-hover--fade">Learn More</a>
            </p>
        </div>
    </section>

    <section class="bg-gray-100 py-24 md:py-32 px-6 flex items-center justify-center">
        <div class="max-w-3xl mx-auto">
            <p class="text-xs text-gray-500 uppercase mb-1 tracking-tight">Global Reach</p>
            <h2 class="text-3xl mb-2 text-underline">Skystone Markets</h2>

            <div class="grid gap-12 md:grid-cols-2 mt-32">
                <div class="">
                    @include('_partials.cloudinary-image', ['url' => 'image/upload/v1584834479/skystone-map-usa_gltgoq.png', 'alt' => 'Skystone USA highlighted on a map'])
                </div>
                <div class="">
                    <h4 class="text-xl font-bold mb-3 font-serif uppercase tracking-wide">USA</h4>
                    <p>We have offices in New York and California serving both coasts of the USA. All of our US projects are served from our dedicated facility in Malaysia.</p>
                </div>
            </div>

            <div class="grid gap-12 md:grid-cols-2 mt-32">
                <div class="">
                    <h4 class="text-xl font-bold mb-3 font-serif uppercase tracking-wide">UK & Ireland</h4>
                    <p>Operating as part of a Joint Venture partnership with Mac Group to delivery turnkey construction projects. Offices in Dublin, Birmingham, Manchester, and London. Projects delivered from our facility in Poland.</p>
                    <p class="mt-3">
                        <a href="http://www.macskystone.com" target="_blank" rel="nofollow" class="btn btn--red-outline anim-hover--fade inline-flex items-center">
                            Visit macskystone.com
                            <svg class="h-3 w-3 ml-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 11V17C16 17.5304 15.7893 18.0391 15.4142 18.4142C15.0391 18.7893 14.5304 19 14 19H3C2.46957 19 1.96086 18.7893 1.58579 18.4142C1.21071 18.0391 1 17.5304 1 17V6C1 5.46957 1.21071 4.96086 1.58579 4.58579C1.96086 4.21071 2.46957 4 3 4H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13 1H19V7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 12L19 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </p>
                </div>
                <div class="">
                    @include('_partials.cloudinary-image', ['url' => 'image/upload/v1584834479/skystone-map-uk-ireland_kznzwd.png', 'alt' => 'Skystone UK & Ireland highlighted on a map'])
                </div>
            </div>

            <div class="grid gap-12 md:grid-cols-2 mt-32">
                <div class="">
                    @include('_partials.cloudinary-image', ['url' => 'image/upload/v1584834479/skystone-map-australia_ghn98r.png', 'alt' => 'Skystone UK & Ireland highlighted on a map'])
                </div>
                <div class="">
                    <h4 class="text-xl font-bold mb-3 font-serif uppercase tracking-wide">Australia and New Zealand</h4>
                    <p>Delivering modular solutions to the Australia and New Zealand market by a dedicated team of industry professionals. Modules delivered from our Malaysian factory.</p>
                </div>
            </div>

            @if( $page->data('settings', 'show_factories') !== false )
            <div class="grid gap-12 md:grid-cols-2 mt-32">
                <div class="">
                    <h4 class="text-xl font-bold mb-3 font-serif uppercase tracking-wide">Our Factories</h4>
                    <p>We are uniquely placed as a modular manufacturer with production capabilities on two continents.</p>
                    <p class="mt-3">
                        <a href="/factories" class="btn btn--red-outline anim-hover--fade">
                            More about our Factories
                        </a>
                    </p>
                </div>
            </div>
            @endif
        </div>
    </section>

    <section class="bg-white py-24 md:py-32 px-6 sm:px-8 lg:px-12">

        <p class="text-xs text-gray-500 uppercase mb-1 tracking-tight">Hospitality & Residential Experts</p>
        <h2 class="text-2xl text-underline mb-4">Skystone Projects</h2>

        <div class="mt-6 grid gap-8 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl mx-auto">
            @forelse ($projects as $project)
                @include('_partials.projects.thumb-link', ['project' => $project])
            @empty
                <p class="text-gray-300">No projects added yet.</p>
            @endforelse
        </div>
    </section>

    @include('_partials.testimonials-section')

@endsection
