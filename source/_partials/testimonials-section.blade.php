<section class="bg-white py-24 md:py-32 px-6 sm:px-8 lg:px-12">
    <div class="max-w-xl mx-auto mb-8 md:mb-12">
        <h2 class="text-2xl text-underline">Skystone Testimonials</h2>
    </div>
    <vue-glide type="slider" :bullet="true" :per-view="1" :autoplay="5000" :animationDuration="900" class="relative">
        @foreach($testimonials as $test)
            <vue-glide-slide class="pb-8">
                <div v-cloak class="w-full max-w-xl bg-gray-100 px-6 py-12 mx-auto border-2 border-gray-500 md:border-transparent md:rounded-lg md:shadow-xl">
                    <div class="text-xl italic text-center mb-10">
                        {{$test->quote}}
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="mr-4 md:mr-8 flex-none">
                            <div class="border-2 border-ssg-black rounded-full overflow-hidden">
                                <img class="mx-auto max-w-full" src="{{str_replace(['.jpeg', '.jpg'], '.png', $page->cloudinaryTransform( $page->media( $test->image ), 'w_75,h_75,c_pad,b_auto'))}}" alt="{{$test->title}} logo" />
                            </div>
                        </div>
                        <div class="text-left">
                            <p class="text-gray-700 font-bold">{{$test->person}}</p>
                            <p class="text-gray-500">{{$test->role ? "{$test->role}, " : ""}}{{$test->title}}</p>
                        </div>
                    </div>
                </div>
            </vue-glide-slide>
        @endforeach
    </vue-glide>
</section>