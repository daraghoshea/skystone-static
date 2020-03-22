@extends('_layouts.master')

@section('title', $page->title)

@php
$otherProjects = $projects->reject(function($project) use ($page) {
    return $project->getPath() === $page->getPath();
})
@endphp

@section('content')
    <full-screen-media :ratio="16/9">
        <header slot-scope="{style, scroll}" class="bg-ssg-black flex h-screen items-center justify-center overflow-hidden relative w-full">

            @include('_partials.cloudinary-image', [
                'url' => $page->image,
                'alt' => "{$page->title} photo",
                'attributes' => 'class="full-screen-bg h-full" style="filter:brightness(50%); z-index:0" :style="style"'
            ])

            <h2 class="text-3xl md:text-5xl text-center text-white shadow z-0">{{$page->title}}</h2>

            <button type="button" @click.prevent="scroll" class="absolute bottom-0 content-center focus:outline-none outline-none py-6 text-white w-full">
                <div>Scroll</div>
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="8" class="icon mt-3 mx-auto"><path d="M1.41.59L6 5.17 10.59.59 12 2 6 8 0 2z" fill="currentColor"></path></svg>
            </button>

        </header>
    </full-screen-media>

    <section class="bg-white py-24 md:py-32 px-6 sm:px-8 lg:px-12">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-2xl text-underline mb-4">{{ $page->title }}</h1>

            <div class="grid gap-8 md:grid-cols-4 mt-16">
                <div class="row-start-2 md:row-start-1">
                    <h3 class="text-ssg-red text-sm uppercase tracking-wide font-serif mb-1">Sector</h3>
                    <div class="mb-6">
                        @forelse($page->sector as $sector)
                            <p>{{ucfirst($sector ?? '')}}</p>
                        @empty
                            <em class="text-gray-500">n/a</em>
                        @endforelse
                    </div>
                </div>
                <div class="markdown md:col-span-3">
                    @yield('description')

                    <p>This 26-story hotel in midtown Manhattan will be the tallest modular hotel in the world. Skystone is currently fabricating the 168 modules in a factory in Poland, using manufacturing subcontractors STP Elbud (Steel), Aluprof (Facade), DMD Modular (Fit-out manufacturing) and several others. The hotel has 8 different module types per floor, each surrounding a conventional concrete core.</p>
                    <p>As the modular designer, manufacturer & installer, to general contractor, Skystone has had exceptional control over every process of the project.</p>

                    <p>This 26-story hotel in midtown Manhattan will be the tallest modular hotel in the world. Skystone is currently fabricating the 168 modules in a factory in Poland, using manufacturing subcontractors STP Elbud (Steel), Aluprof (Facade), DMD Modular (Fit-out manufacturing) and several others. The hotel has 8 different module types per floor, each surrounding a conventional concrete core.</p>
                    <p>As the modular designer, manufacturer & installer, to general contractor, Skystone has had exceptional control over every process of the project.</p>

                    <p>This 26-story hotel in midtown Manhattan will be the tallest modular hotel in the world. Skystone is currently fabricating the 168 modules in a factory in Poland, using manufacturing subcontractors STP Elbud (Steel), Aluprof (Facade), DMD Modular (Fit-out manufacturing) and several others. The hotel has 8 different module types per floor, each surrounding a conventional concrete core.</p>
                    <p>As the modular designer, manufacturer & installer, to general contractor, Skystone has had exceptional control over every process of the project.</p>

                </div>
            </div>
        </div>
    </section>

    @if( ! $otherProjects->isEmpty() )
    <section class="bg-white py-24 md:py-32 px-6 sm:px-8 lg:px-12">
        <h2 class="text-2xl text-underline mb-4">Other Projects</h2>
        <div class="mt-6 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($otherProjects as $project)
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
            @endforeach
        </div>
    </section>
    @endif



@endsection
