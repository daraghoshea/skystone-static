<section class="bg-white py-24 md:py-32 px-6 sm:px-8 lg:px-12">
    <div class="max-w-xl mx-auto mb-8 md:mb-12">
        <h2 class="text-2xl text-underline">Skystone Testimonials</h2>
    </div>
    <vue-glide type="slider" :bullet="true" :per-view="1" :autoplay="5000" :animationDuration="900" class="relative">
        @foreach($testimonials as $test)
            <vue-glide-slide class="pb-8 px-6">
                <div v-cloak class="flex flex-col md:flex-row w-full max-w-xl bg-gray-100 shadow-xl rounded-lg px-6 py-12 mx-auto">
                    <div class="md:mr-8 flex-none">
                        <img class="mx-auto max-w-full" src="{{str_replace(['.jpeg', '.jpg'], '.png', $page->cloudinaryTransform( $page->media( $test->image ), 'w_150,h_150,r_25,c_pad,b_white'))}}" alt="{{$test->title}} logo" />
                    </div>
                    <div>
                        <div class="text-xl italic text-center md:text-left my-10 md:mt-0">
                            {{$test->quote}}
                        </div>
                        <div class="text-center md:text-left">
                            <p class="text-gray-700 font-bold">{{$test->person}}</p>
                            <p class="text-gray-500">{{$test->role ? "{$test->role}, " : ""}}{{$test->title}}</p>
                        </div>
                    </div>
                </div>
            </vue-glide-slide>
        @endforeach
    </vue-glide>
</section>