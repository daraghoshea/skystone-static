<section id="contact-us" class="bg-gray-100 py-24 md:py-32 px-6 sm:px-8 lg:px-12">
    <div class="max-w-3xl mx-auto mb-12">
        <h2 class="text-2xl text-underline mb-4">Contact Us</h2>
    </div>
    <div class="max-w-3xl mx-auto grid gap-12 sm:grid-cols-2 md:grid-cols-3">
        <div class="bg-white py-6 text-center">TODO</div>
        <div class="bg-white py-6 text-center">TODO</div>
        <div class="bg-white py-6 text-center">TODO</div>
    </div>
</section>
<footer class="bg-ssg-black py-12 md:py-18 px-6 text-white">
    <div class="max-w-3xl mx-auto grid gap-12 sm:grid-cols-2 md:grid-cols-3">
        <div>
            <h3 class="text-sm uppercase tracking-wide text-underline mb-4">Menu</h3>
            <ul class="list-reset">
                @foreach($page->nav as $nav)
                    <li class="mb-1">
                        <a href="{{$nav['url']}}" class="py-2 border-b-2 border-transparent font-medium text-white hover:text-ssg-red focus:outline-none focus:text-ssg-red">{{$nav['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="">
            <h3 class="text-sm uppercase tracking-wide text-underline mb-4">Social Media</h3>
        </div>

        <div class="">
            <h3 class="text-sm uppercase tracking-wide text-underline mb-4">Resources</h3>
        </div>
    </div>
    <p class="text-center mt-8 text-gray-500">
        &copy; Skystone Group LLC. All rights reserved.
    </p>
</footer>