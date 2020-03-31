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

                    <h3 class="text-ssg-red text-xs uppercase tracking-wide mb-1">Sector</h3>
                    <div class="mb-6 text-ssg-black opacity-75">
                        @forelse($page->sector as $sector)
                            <p>{{ucfirst($sector ?? '')}}</p>
                        @empty
                            <em class="text-gray-500">n/a</em>
                        @endforelse
                    </div>

                    @if($page->location)
                    <h3 class="text-ssg-red text-xs uppercase tracking-wide mb-1">Location</h3>
                    <div class="mb-6 text-ssg-black opacity-75">
                        {{$page->location}}
                    </div>
                    @endif

                    <h3 class="text-ssg-red text-xs uppercase tracking-wide mb-1">Status</h3>
                    <div class="mb-6 text-ssg-black opacity-75">
                        {{ucwords($page->status)}}
                    </div>

                    <h3 class="text-ssg-red text-xs uppercase tracking-wide mb-1">Completion</h3>
                    <div class="mb-6 text-ssg-black opacity-75">
                        {{$page->completion}}
                    </div>

                    @if($page->rooms)
                    <h3 class="text-ssg-red text-xs uppercase tracking-wide mb-1">Size</h3>
                    <div class="mb-6 text-ssg-black opacity-75">
                        {{$page->rooms}}
                    </div>
                    @endif

                    @if($page->floors)
                        <h3 class="text-ssg-red text-xs uppercase tracking-wide mb-1">Floors</h3>
                        <div class="mb-6 text-ssg-black opacity-75">
                            {{$page->floors}}
                        </div>
                    @endif
                </div>
                <div class="markdown md:col-span-3">
                    @yield('description')
                </div>
            </div>
        </div>
    </section>

    @if( ! $otherProjects->isEmpty() )
    <section class="bg-white py-24 md:py-32 px-6 sm:px-8 lg:px-12">
        <h2 class="text-2xl text-underline mb-4">Other Projects</h2>
        <div class="mt-6 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($otherProjects as $project)
                @include('_partials.projects.thumb-link', ['project' => $project])
            @endforeach
        </div>
    </section>
    @endif



@endsection
