<x-layout>
    <x-slot:title>
        {{ __('layout.gallery') }}
    </x-slot:title>
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
             style="background-image: url(/images/bg-title-page-02.jpg);">
        <h2 class="tit6 t-center">
            {{ __('layout.gallery') }}
        </h2>
    </section>


    <!-- Gallery -->
    <div class="section-gallery p-t-118 p-b-100">
        <div
            class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
            <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
                {{ __('gallery.all_photos') }}
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".food">
                {{ __('gallery.food') }}
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".interior">
                {{ __('gallery.interior') }}
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".guests">
                {{ __('home.guests') }}
            </button>
            <button class="label-gallery txt26 trans-0-4" data-filter=".events">
                {{ __('gallery.events') }}
            </button>
        </div>

        <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
            <!-- - -->
            @foreach ($photos as $photo)
                <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom {{ $photo->category }}">
                    <img src="/storage/{{ $photo->image }}" alt="IMG-GALLERY">

                    <div class="overlay-item-gallery trans-0-4 flex-c-m">
                        <a class="btn-show-gallery flex-c-m fa 	fa-search" href="/storage/{{ $photo->image }}"
                           data-lightbox="gallery"></a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
            {{ $photos->links() }}
        </div>
    </div>
</x-layout>
