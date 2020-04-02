<section id="contact-us" class="bg-gray-100 py-24 md:py-32 px-6 sm:px-8 lg:px-12">
    <div class="max-w-3xl mx-auto mb-12">
        <h2 class="text-2xl text-underline mb-4">Contact Us</h2>
    </div>
    <div class="max-w-3xl mx-auto grid gap-12 sm:grid-cols-2 md:grid-cols-3">
        @foreach($page->data('offices')->offices as $office)
            <div class="">
{{--                <pre>{{print_r($office)}}</pre>--}}
                <h3 class="text-xl font-bold">{{$office->title}}</h3>
                <p class="mt-4">{{$office->address}}</p>
                @if($office->telephone)
                    <p class="mt-4 flex items-center flex-wrap">
                        <svg class="h-3 w-auto mr-2 text-ssg-red" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.8881 15.9201V18.9201C20.8892 19.1986 20.8322 19.4743 20.7206 19.7294C20.6091 19.9846 20.4454 20.2137 20.2402 20.402C20.035 20.5902 19.7927 20.7336 19.5289 20.8228C19.265 20.912 18.9855 20.9452 18.7081 20.9201C15.631 20.5857 12.6751 19.5342 10.0781 17.8501C7.66194 16.3148 5.61345 14.2663 4.07812 11.8501C2.38809 9.2413 1.33636 6.27109 1.00812 3.1801C0.983127 2.90356 1.01599 2.62486 1.10462 2.36172C1.19324 2.09859 1.33569 1.85679 1.52288 1.65172C1.71008 1.44665 1.93792 1.28281 2.19191 1.17062C2.44589 1.05843 2.72046 1.00036 2.99812 1.0001H5.99812C6.48342 0.995321 6.95391 1.16718 7.32188 1.48363C7.68985 1.80008 7.93019 2.23954 7.99812 2.7201C8.12474 3.68016 8.35957 4.62282 8.69812 5.5301C8.83266 5.88802 8.86178 6.27701 8.78202 6.65098C8.70227 7.02494 8.51698 7.36821 8.24812 7.6401L6.97812 8.9101C8.40167 11.4136 10.4746 13.4865 12.9781 14.9101L14.2481 13.6401C14.52 13.3712 14.8633 13.1859 15.2372 13.1062C15.6112 13.0264 16.0002 13.0556 16.3581 13.1901C17.2654 13.5286 18.2081 13.7635 19.1681 13.8901C19.6539 13.9586 20.0975 14.2033 20.4146 14.5776C20.7318 14.9519 20.9003 15.4297 20.8881 15.9201Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {{$office->telephone}}
                    </p>
                @endif
                @if($office->email)
                    <p class="mt-4 flex items-center flex-wrap">
                        <svg class="h-3 w-auto mr-2 text-ssg-red" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 1H19C20.1 1 21 1.9 21 3V15C21 16.1 20.1 17 19 17H3C1.9 17 1 16.1 1 15V3C1 1.9 1.9 1 3 1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21 3L11 10L1 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {{$office->email}}
                    </p>
                @endif
            </div>
        @endforeach
    </div>
</section>
<footer class="bg-ssg-black pt-12 pb-6 md:py-18 px-6 text-white">
    <div class="max-w-3xl mx-auto grid gap-12 sm:grid-cols-2 md:grid-cols-3">

        {{-- Navigation --}}
        <div>
            <h3 class="text-sm uppercase tracking-wide text-underline mb-4">Menu</h3>
            <ul class="list-reset">
                @foreach($page->nav as $nav)
                    <li class="mb-1">
                        @php
                            if( ( $nav['factory'] ?? false )  && $page->data('settings', 'show_factories') === false) {
                                continue;
                            }
                        @endphp
                        <a href="{{$nav['url']}}" class="py-2 border-b-2 border-transparent font-medium text-white hover:text-ssg-red focus:outline-none focus:text-ssg-red">{{$nav['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Social Media--}}
        <div class="">
            <h3 class="text-sm uppercase tracking-wide text-underline mb-4">Social Media</h3>

            {{-- The Admin UI has a url input for each of the social media accounts below --}}
            <ul class="list-reset">
                @if($page->data('settings', 'social.facebook'))
                <li class="mb-1">
                    <a href="{{$page->data('settings', 'social.facebook')}}" target="_blank" rel="nofollow" class="inline-flex items-center border-b-2 border-transparent font-medium text-white hover:text-ssg-red focus:outline-none focus:text-ssg-red">
                        <svg class="h-3 w-3 mr-2" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1H9C7.67392 1 6.40215 1.52678 5.46447 2.46447C4.52678 3.40215 4 4.67392 4 6V9H1V13H4V21H8V13H11L12 9H8V6C8 5.73478 8.10536 5.48043 8.29289 5.29289C8.48043 5.10536 8.73478 5 9 5H12V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Facebook
                    </a>
                </li>
                @endif
                @if($page->data('settings', 'social.linkedin'))
                <li class="mb-1">
                    <a href="{{$page->data('settings', 'social.linkedin')}}" target="_blank" rel="nofollow" class="inline-flex items-center border-b-2 border-transparent font-medium text-white hover:text-ssg-red focus:outline-none focus:text-ssg-red">
                        <svg class="h-3 w-3 mr-2" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 7C16.5913 7 18.1174 7.63214 19.2426 8.75736C20.3679 9.88258 21 11.4087 21 13V20H17V13C17 12.4696 16.7893 11.9609 16.4142 11.5858C16.0391 11.2107 15.5304 11 15 11C14.4696 11 13.9609 11.2107 13.5858 11.5858C13.2107 11.9609 13 12.4696 13 13V20H9V13C9 11.4087 9.63214 9.88258 10.7574 8.75736C11.8826 7.63214 13.4087 7 15 7V7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5 8H1V20H5V8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3 5C4.10457 5 5 4.10457 5 3C5 1.89543 4.10457 1 3 1C1.89543 1 1 1.89543 1 3C1 4.10457 1.89543 5 3 5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        LinkedIn
                    </a>
                </li>
                @endif
                @if($page->data('settings', 'social.twitter'))
                <li class="mb-1">
                    <a href="{{$page->data('settings', 'social.twitter')}}" target="_blank" rel="nofollow" class="inline-flex items-center border-b-2 border-transparent font-medium text-white hover:text-ssg-red focus:outline-none focus:text-ssg-red">
                        <svg class="h-3 w-3 mr-2" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 1.01006C22.0424 1.68553 20.9821 2.20217 19.86 2.54006C19.2577 1.84757 18.4573 1.35675 17.567 1.13398C16.6767 0.911216 15.7395 0.967251 14.8821 1.29451C14.0247 1.62177 13.2884 2.20446 12.773 2.96377C12.2575 3.72309 11.9877 4.62239 12 5.54006V6.54006C10.2426 6.58562 8.50127 6.19587 6.93101 5.4055C5.36074 4.61513 4.01032 3.44869 3 2.01006C3 2.01006 -1 11.0101 8 15.0101C5.94053 16.408 3.48716 17.109 1 17.0101C10 22.0101 21 17.0101 21 5.51006C20.9991 5.23151 20.9723 4.95365 20.92 4.68006C21.9406 3.67355 22.6608 2.40277 23 1.01006V1.01006Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Twitter
                    </a>
                </li>
                @endif
                @if($page->data('settings', 'social.instagram'))
                    <li class="mb-1">
                        <a href="{{$page->data('settings', 'social.instagram')}}" target="_blank" rel="nofollow" class="inline-flex items-center border-b-2 border-transparent font-medium text-white hover:text-ssg-red focus:outline-none focus:text-ssg-red">
                            <svg class="h-3 w-3 mr-2" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 1H6C3.23858 1 1 3.23858 1 6V16C1 18.7614 3.23858 21 6 21H16C18.7614 21 21 18.7614 21 16V6C21 3.23858 18.7614 1 16 1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 10.37C15.1234 11.2022 14.9813 12.0522 14.5938 12.799C14.2063 13.5458 13.5932 14.1514 12.8416 14.5297C12.0901 14.9079 11.2385 15.0396 10.4078 14.9059C9.57714 14.7723 8.80977 14.3801 8.21485 13.7852C7.61993 13.1902 7.22774 12.4229 7.09408 11.5922C6.96041 10.7615 7.09208 9.90989 7.47034 9.15837C7.8486 8.40685 8.4542 7.79374 9.201 7.40624C9.9478 7.01874 10.7978 6.87658 11.63 7C12.4789 7.12588 13.2649 7.52146 13.8717 8.1283C14.4785 8.73515 14.8741 9.52107 15 10.37Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Instagram
                        </a>
                    </li>
                @endif
            </ul>
        </div>

        {{-- RESOURCES --}}
{{--        <div class="">--}}
{{--            <h3 class="text-sm uppercase tracking-wide text-underline mb-4">Resources</h3>--}}
{{--        </div>--}}
    </div>
    <p class="text-center mt-8 text-sm text-white opacity-25">
        &copy; Skystone Group LLC. All rights reserved.
    </p>
</footer>