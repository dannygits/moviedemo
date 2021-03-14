@extends('layouts.main')

@section('content')
    
<div class="container px-4 mx-auto py-16">
    <div class="popular-actors">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Actors</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularActors as $actor)
            <div class="actor mt-8">
                <a href="{{ route('actors.show', $actor['id']) }}">
                    <img src="{{ $actor['profile_path'] }}" 
                    alt="" 
                    class="hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="mt-2">
                    <a href="{{ route('actors.show', $actor['id']) }}" class="text-lg text-gray-800 hover:text-orange-400 ">{{ $actor['name'] }}</a>
                    <div class="text-sm truncate text-gray-600">
                        {{$actor['known_for']}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> {{-- end of popular-actors --}}
    <div class="page-load-status my-8">
        <div class="flex justify-center">
            <div class="infinite-scroll-request my-8 text-4xl">&nbsp;</div>
        </div>
        <p class="infinite-scroll-last">End of content</p>
        <p class="infinite-scroll-error text-gray-800">Error</p>
    </div>

    {{-- <div class="flex text-gray-800 justify-between mt-16">
        @if ($previous)
            <a href="/actors/page/{{ $previous }}">previous</a>
            @else
                <div></div>
        @endif
    
        @if ($next)
            <a href="/actors/page/{{ $next }}">next</a>
            @else
                <div></div>
        @endif
    </div> --}}
</div> 

{{-- <div class="page-load-status my-8">
    <div class="flex justify-center">
        <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div>
    </div>
    <p class="infinite-scroll-last">End of content</p>
    <p class="infinite-scroll-error text-gray-800">Error</p>
</div> --}}

@endsection

@section('scripts')
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        var elem = document.querySelector('.grid');
        var infScroll = new InfiniteScroll( elem, {
        path: '/actors/page/@{{#}}',
        append: '.actor',
        status: '.page-load-status',
        // history: false,
        });
    </script>
@endsection