@extends('_layouts.master')

@section('content')
    <full-screen-media :ratio="16/9">
        <header slot-scope="{style, scroll}" class="bg-ssg-black flex h-screen items-center justify-center overflow-hidden relative w-full">

            @include('_partials.cloudinary-image', [
                'url' => 'https://res.cloudinary.com/skystone/image/upload/v1584847450/cages_pm83ed.jpg',
                'alt' => "Skystone steel cages lined up in the factory",
                'attributes' => 'class="full-screen-bg h-full" style="filter:brightness(40%); z-index:0" :style="style"'
            ])

            <h2 class="text-3xl md:text-5xl text-center text-white shadow z-0">Skystone Projects</h2>

            <button type="button" @click.prevent="scroll" class="absolute bottom-0 content-center focus:outline-none outline-none py-6 text-white w-full">
                <div>Scroll</div>
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="8" class="icon mt-3 mx-auto"><path d="M1.41.59L6 5.17 10.59.59 12 2 6 8 0 2z" fill="currentColor"></path></svg>
            </button>

        </header>
    </full-screen-media>

    <section class="bg-white py-24 md:py-32 px-6 sm:px-8 lg:px-12">
        <pre>
            {{$page->data('pages/projects')}}
        </pre>
        <div class="mt-6 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($projects as $project)
                <div>
                    <a href="{{$project->getPath()}}" class="block relative">
                        <img alt="{{$project->title}} photo" src="{{$page->cloudinaryTransform($project->image, 'w_400,h_225,c_scale')}}" />
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