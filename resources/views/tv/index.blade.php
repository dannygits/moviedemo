@extends('layouts.main')

@section('content')

    <section class="tabs">
        <div class="container mx-auto">
            <div class="grid grid-cols-2">
                <div id="tab-1" class="tab-item border-b-2 border-gray-600 py-5">
                    <i class="fas fa-door-open fa-3x"></i>
                    <h2 class="uppercase text-center tracking-wider text-teal-500 text-2xl font-semibold">Tv Shows</h2>
                </div>
                <div id="tab-2" class="tab-item py-5">
                    <i class="fas fa-tablet-alt fa-3x"></i>
                    <h2 class="uppercase text-center tracking-wider text-teal-500 text-2xl font-semibold">Top Rated Tv Shows</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="tab-content">
        <div class="container px-12 mx-auto pt-10">
            <div id="tab-1-content" class="tab-content-item popular-tv pb-5 show">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Tv Shows</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach ($popularTv as $tvshow)
                        <x-tv-card :tvshow="$tvshow" />
                    @endforeach
    
                </div>
            </div>
            
            <div id="tab-2-content" class="tab-content-item top-rated-shows">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated Tv Shows</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach ($topRatedTv as $tvshow)
                        <x-tv-card :tvshow="$tvshow" />
                    @endforeach
    
                </div>
            </div>
        </div>
    </section>

    <!-- extra js -->
    <script>
        const tabItems = document.querySelectorAll(".tab-item");
        const tabContentItems = document.querySelectorAll(".tab-content-item");

        // Select tab content item
        function selectItem(e) {
        // Remove all show and border classes
        removeBorder();
        removeShow();
        // Add border to current tab item
        this.classList.add("border-b-2", "border-gray-600");
        // Grab content item from DOM
        const tabContentItem = document.querySelector(`#${this.id}-content`);
        // Add show class
        tabContentItem.classList.add("show");
        }

        // Remove bottom borders from all tab items
        function removeBorder() {
        tabItems.forEach((item) => {
            item.classList.remove("border-b-2","border-gray-600");
        });
        }

        // Remove show class from all content items
        function removeShow() {
        tabContentItems.forEach((item) => {
            item.classList.remove("show");
        });
        }

        // Listen for tab item click
        tabItems.forEach((item) => {
        item.addEventListener("click", selectItem);
        });
    </script>

@endsection