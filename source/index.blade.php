@extends('_layouts.master')

@section('content')
    <full-screen-media :ratio="16/9">
        <header slot-scope="{style, scroll}" class="bg-ssg-black flex h-screen items-center justify-center overflow-hidden relative w-full">

            <video class="full-screen-bg h-full"
                   poster="{{$page->media("video/upload/so_0/v1584655179/homepage_myaus8.jpg")}}"
                   playsinline autoplay muted loop
                   style="filter:brightness(50%); z-index:0"
                   :style="style">
                <source src="{{$page->media("video/upload/v1584655179/homepage_myaus8.webm")}}" type="video/webm">
                <source src="{{$page->media("video/upload/v1584655179/homepage_myaus8.mp4")}}" type="video/mp4">
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
            @include('_partials.cloudinary-image', ['url' => 'image/upload/v1584806025/skystone-marriott-module-prototype-1_er7ps9.jpg', 'alt' => 'Skystone Marriott AC finished prototype module'])
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

    <section class="bg-ssg-black py-24 md:py-32 px-6 flex items-center justify-center text-white">
        <div class="max-w-3xl mx-auto">
            <p class="text-xs text-gray-500 uppercase mb-1 tracking-tight">Offices & Factories</p>
            <h2 class="text-3xl text-white mb-2 text-underline">Skystone Locations</h2>

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
                    <h4 class="text-xl font-bold mb-3 font-serif uppercase tracking-wide">UK & Ireland</h4>
                    <p>Delivering modular solutions to the Australia and New Zealand market by a dedicated team of industry professionals. Modules delivered from our Malaysian factory.</p>
                </div>
            </div>


            <div class="grid gap-12 md:grid-cols-2 mt-32">
                <div class="">
                    <h4 class="text-xl font-bold mb-3 font-serif uppercase tracking-wide">Malaysia</h4>
                    <p>Our factory in Malaysia is very near to the port in Jahor. We combine manufacturing capability and capacity, with a rich supply chain of US compliant materials.</p>
                </div>

                <div class="">
                    <h4 class="text-xl font-bold mb-3 font-serif uppercase tracking-wide">Poland</h4>
                    <p>Our factory leverages the quality of polish quality workmanship with availability of quality materials for the Irish and UK market.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-24 md:py-32 px-6 sm:px-8 lg:px-12">

        <p class="text-xs text-gray-500 uppercase mb-1 tracking-tight">Hospitality & Residential Experts</p>
        <h2 class="text-2xl text-underline mb-4">Skystone Projects</h2>

        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($projects as $project)
                <div>
                    <a href="{{$project->getPath()}}" class="block relative">
                        <img alt="{{$project->title}} photo" src="{{$page->cloudinaryTransform($project->image, 'w_400,c_scale')}}" />
                        <span class="absolute bottom-0 right-0 mb-2 mr-2 px-3 py-1 text-xs uppercase tracking-wide bg-ssg-red text-white rounded-full shadow">{{ucwords($project->status)}}</span>
                    </a>
                    <h3 class="my-3 text-lg font-bold">
                        <a href="{{$project->getPath()}}">{{$project->title}}</a>
                    </h3>
                    <p class="">
                        <a href="{{$project->getPath()}}" class="btn btn--red-outline anim-hover--fade">Learn More</a>
                    </p>
                </div>
                <div>
                    <a href="{{$project->getPath()}}" class="block relative">
                        <img alt="{{$project->title}} photo" src="{{$page->cloudinaryTransform($project->image, 'w_400,c_scale')}}" />
                        <span class="absolute bottom-0 right-0 mb-2 mr-2 px-3 py-1 text-xs uppercase tracking-wide bg-ssg-red text-white rounded-full shadow">{{ucwords($project->status)}}</span>
                    </a>
                    <h3 class="my-3 text-lg font-bold">
                        <a href="{{$project->getPath()}}">{{$project->title}}</a>
                    </h3>
                    <p class="">
                        <a href="{{$project->getPath()}}" class="btn btn--red-outline anim-hover--fade">Learn More</a>
                    </p>
                </div>
                <div>
                    <a href="{{$project->getPath()}}" class="block relative">
                        <img alt="{{$project->title}} photo" src="{{$page->cloudinaryTransform($project->image, 'w_400,c_scale')}}" />
                        <span class="absolute bottom-0 right-0 mb-2 mr-2 px-3 py-1 text-xs uppercase tracking-wide bg-ssg-red text-white rounded-full shadow">{{ucwords($project->status)}}</span>
                    </a>
                    <h3 class="my-3 text-lg font-bold">
                        <a href="{{$project->getPath()}}">{{$project->title}}</a>
                    </h3>
                    <p class="">
                        <a href="{{$project->getPath()}}" class="btn btn--red-outline anim-hover--fade">Learn More</a>
                    </p>
                </div>
            @empty
                <p class="text-gray-300">No projects added yet.</p>
            @endforelse
        </div>
    </section>

@endsection
