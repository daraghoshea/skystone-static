@extends('_layouts.master')

@section('content')
    <full-screen-media :ratio="16/9">
        <header slot-scope="{style, scroll}" class="bg-ssg-black flex h-screen items-center justify-center overflow-hidden relative w-full">


            @include('_partials.cloudinary-image', [
                'url' => 'https://res.cloudinary.com/skystone/image/upload/v1584847450/cages_pm83ed.jpg',
                'alt' => "Skystone steel cages lined up in the factory",
                'class' => 'full-screen-bg h-full',
                'attributes' => 'style="filter:brightness(40%); z-index:0" :style="style"'
            ])

            <h2 class="text-3xl md:text-5xl text-center text-white shadow z-0">High Quality Construction, Delivered Faster</h2>

            <button type="button" @click.prevent="scroll" class="absolute bottom-0 content-center focus:outline-none outline-none py-6 text-white w-full">
                <div>Scroll</div>
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="8" class="icon mt-3 mx-auto"><path d="M1.41.59L6 5.17 10.59.59 12 2 6 8 0 2z" fill="currentColor"></path></svg>
            </button>

        </header>
    </full-screen-media>

    <section class="bg-white py-24 md:py-32 px-6 sm:px-8 lg:px-12">
        <div class="max-w-4xl mx-auto grid gap-8 md:grid-cols-5">
            TODO
        </div>
    </section>

@endsection
