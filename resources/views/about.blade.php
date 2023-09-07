<x-layout>
    <x-slot:title>
        {{ __('about_us.about_us') }}
    </x-slot:title>
	<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-03.jpg);">
    <h2 class="tit6 t-center">
        {{ __('about_us.about_us') }}
    </h2>
</section>


<!-- Our Story -->
<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
    <span class="tit2 t-center">
        {{ __('home.turkish_restaurant') }}
    </span>

    <h3 class="tit3 t-center m-b-35 m-t-5">
        {{ __('home.our_story') }}
    </h3>

    <p class="t-center size32 m-l-r-auto">
        {{ __('about_us.about_us_text') }}
    </p>
</section>


<!-- Video -->
<section class="section-video parallax100" style="background-image: url(images/header-menu-01.jpg);">
    <div class="content-video t-center p-t-225 p-b-250">
        <span class="tit2 p-l-15 p-r-15">
            {{ __('home.discover') }}
        </span>

        <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
            {{ __('home.our_video') }}
        </h3>

        <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
            <div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
                <i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>


<!-- Delicious & Romantic-->
<section class="bg1-pattern p-t-120 p-b-105">
    <div class="container">
        <!-- Delicious -->
        <div class="row">
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-delicious t-center">
                    <span class="tit2 t-center">
                        {{ __('about_us.delicious') }}
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-5">
                        {{ __('about_us.recipes') }}
                    </h3>

                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        {{ __('about_us.recipes_text') }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="images/our-story-01.jpg" alt="IMG-OUR">
                </div>
            </div>
        </div>


        <!-- Romantic -->
        <div class="row p-t-170">
            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="images/our-story-02.jpg" alt="IMG-OUR">
                </div>
            </div>

            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-romantic t-center">
                    <span class="tit2 t-center">
                        {{ __('home.romantic') }}
                    </span>

                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            {{ __('home.restaurant') }}
                        </h3>

                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        Fusce iaculis, quam quis volutpat cursus, tellus quam varius eros, in euismod lorem nisl in ante. Maecenas imperdiet vulputate dui sit amet vestibulum. Nulla quis suscipit nisl.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Banner -->
<div class="parallax0 parallax100" style="background-image: url(images/bg-cover-video-02.jpg);">
    <div class="overlay0-parallax t-center size33"></div>
</div>


<!-- Chef -->
<section class="section-chef bgwhite p-t-115 p-b-95">
    <div class="container t-center">

        <h3 class="tit5 t-center m-b-50 m-t-5">
            {{ __('about_us.our_team') }}
        </h3>

        <div class="row">

            @foreach ($chefs as $chef)
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block5 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <img src="/storage/{{ $chef->image }}" alt="IGM-AVATAR">
                        </div>

                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                            <a href="#" class="txt34 dis-block p-b-6">
                                {{ $chef->name }}
                            </a>

                            <span class="dis-block t-center txt35 p-b-25">
                                Chef
                            </span>

                            <p class="t-center">
                                {{ $chef->about }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
</x-layout>
