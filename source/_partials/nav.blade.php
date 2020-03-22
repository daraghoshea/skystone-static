<navigation break-point="lg">
    <div slot-scope="{isOpen, open, close, sticky, breakPoint}" :class="{'sticky top-0 z-50': sticky, 'relative': !sticky}">
        <div class="fixed w-full z-20 p-4 sm:p-6" :class="{'bg-ssg-black-50': sticky}">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                    <div class="flex items-center justify-between w-full" :class="[`${breakPoint}:w-auto`]">
                        <a href="/">
                            @include('_partials.ssg-icon', ['class' => 'h-6 w-auto md:h-8 ssg-logo--bg-black'])
                        </a>
                        <div class="-mr-2 flex items-center" :class="[`${breakPoint}:hidden`]">
                            <button @click="open" type="button" class="inline-flex items-center justify-center p-2 text-white hover:bg-ssg-red hover:text-white focus:outline-none focus:bg-ssg-red focus:text-white transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden" :class="[`${breakPoint}:block ${breakPoint}:ml-auto ${breakPoint}:pr-4`]">
                    @foreach($page->nav as $nav)
                        <a href="{{$nav['url']}}"
                           class="{{$page->isActiveRoute($nav['url']) ? 'border-ssg-red' : ''}} ml-8 py-2 border-b-2 border-transparent font-medium text-white hover:border-ssg-red focus:outline-none focus:border-ssg-red transition duration-150 ease-in-out">
                            {{$nav['text']}}
                        </a>
                    @endforeach
                </div>
            </nav>
        </div>

        <div v-show="isOpen" v-cloak class="fixed top-0 inset-x-0 transition z-30" :class="[`${breakPoint}:hidden`]">
            <div class="shadow-xl bg-ssg-red">
                <div class="overflow-hidden">
                    <div class="p-4 sm:p-6 flex items-center justify-between">
                        <div>
                            @include('_partials.ssg-icon', ['class' => 'h-6 w-auto md:h-8 ssg-logo--bg-red'])
                        </div>
                        <div class="-mr-2">
                            <button @click="close" type="button" class="inline-flex items-center justify-center p-2 text-white hover:bg-white hover:text-ssg-red focus:outline-none focus:bg-white focus:text-ssg-red transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="px-2 pt-2 pb-3">
                        @foreach($page->nav as $nav)
                            <a href="{{$nav['url']}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">{{$nav['text']}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</navigation>