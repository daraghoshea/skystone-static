<div>
    <a href="{{$project->getPath()}}" class="block relative hover:opacity-75">
        <div class="absolute top-0 right-0 w-full px-3 pt-2 pb-10 text-xs text-right text-gray-400 uppercase tracking-wide linear-black-gradient-top">
            {{$project->rooms}}
            @if($project->floors) <span class="ml-3">{{$project->floors}} floors</span> @endif
        </div>
        <img alt="{{$project->title}} photo" src="{{$page->cloudinaryTransform($project->image, 'w_400,h_225,c_scale')}}" />
        <div class="absolute bottom-0 right-0 w-full px-3 pb-2 pt-10 text-xs text-right text-gray-400 uppercase tracking-wide linear-black-gradient-bottom">
            {{ucwords($project->status)}}
            @if($project->completion) <span class="ml-3">{{$project->completion}}</span> @endif
        </div>
    </a>
    <h3 class="my-3 text-lg font-bold">
        <a href="{{$project->getPath()}}">{{$project->title}}</a>
    </h3>
    <p class="">
        <a href="{{$project->getPath()}}" class="btn btn--red-outline anim-hover--fade">Learn More</a>
    </p>
</div>