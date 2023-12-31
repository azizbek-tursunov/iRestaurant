<x-layout>
    <x-slot:title>
        {{ __('menu.menu') }}
    </x-slot:title>
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
             style="background-image: url(images/bg-title-page-01.jpg);">
        <h2 class="tit6 t-center">
            {{ __('menu.our_menu') }}
        </h2>
    </section>


    <!-- Main menu -->
    <section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
    <div class="container">
        <div class="row">
            <div class="col-md-3 p-r-35 p-r-15-lg m-l-r-auto">
                <!-- Fixed Categories Column -->
                <div class="wrap-item-mainmenu p-b-22">
                    <h3 class="tit-mainmenu tit10 p-b-25">
                        {{ __('menu.categories')}}
                    </h3>
                    <ul>
                        @foreach($categoriesWithMeals as $category)
                            <li><a href="#{{ $category->name }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 p-r-35 p-r-15-lg m-l-r-auto">
                <!-- Flexible Meals Column -->
                @foreach($categoriesWithMeals as $category)
                    <div id="{{ $category->name }}" class="wrap-item-mainmenu p-b-22">
                        <h3 class="tit-mainmenu tit10 p-b-25">
                            {{ $category->name }}
                        </h3>
                        @foreach($category->menus as $meal)
                            <!-- Item mainmenu -->
                            <div class="item-mainmenu m-b-36">
                                <div class="flex-w flex-b m-b-3">
                                    <span class="name-item-mainmenu txt21">
                                        {{ $meal->name }}
                                    </span>                                    
                                    <div class="line-item-mainmenu bg3-pattern"></div>

                                    <div class="price-item-mainmenu txt22">
                                        ${{ $meal->price }}
                                    </div>
                                </div>
                                <div class="name-item-mainmenu txt12">
                                    {{ $meal->name_ru }}
                                </div>
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                    <span class="info-item-mainmenu txt23">
                                        {{ $meal->about_ru }}
                                    </span>
                                @else
                                    <span class="info-item-mainmenu txt23">
                                        {{ $meal->about }}
                                    </span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>



    <!-- Lunch -->
    <section class="section-lunch bgwhite">
        <div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
            <div class="bg1-overlay t-center p-t-170 p-b-165">
                <h2 class="tit4 t-center">
                    {{ __('menu.lunch') }}
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="row p-t-108 p-b-70">
                @foreach($lunchMeals as $meal)
                    <div class="col-md-8 col-lg-6 m-l-r-auto">
                        <!-- Block3 -->
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                            <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                <img src="/storage/{{ $meal->image }}" alt="IMG-MENU">
                            </div>
                            <div class="text-blo3 size21 flex-col-l-m">
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                    <span class="txt21 m-b-3">
                                        {{ $meal->name_ru }}
                                    </span>
                                    <span class="txt12 m-b-3">
                                        {{ $meal->name }}
                                    </span>
                                    <span class="txt23">
                                        {{ $meal->about_ru }}
                                    </span>
                                @else
                                    <span class="txt21 m-b-3">
                                        {{ $meal->name }}
                                    </span>
                                    <span class="txt12 m-b-3">
                                        {{ $meal->name_ru }}
                                    </span>
                                    <span class="txt23">
                                        {{ $meal->about }}
                                    </span>
                                @endif
                                <span class="txt22 m-t-20">
								${{ $meal->price }}
							    </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Dinner -->
    <section class="section-dinner bgwhite">
        <div class="header-dinner parallax0 parallax100" style="background-image: url(images/header-menu-02.jpg);">
            <div class="bg1-overlay t-center p-t-170 p-b-165">
                <h2 class="tit4 t-center">
                    {{ __('menu.dinner') }}
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="row p-t-108 p-b-70">
                @foreach($dinnerMeals as $meal)
                    <div class="col-md-8 col-lg-6 m-l-r-auto">
                        <!-- Block3 -->
                        <div class="blo3 flex-w flex-col-l-sm m-b-30">
                            <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                <img src="/storage/{{ $meal->image }}" alt="IMG-MENU">
                            </div>
                            <div class="text-blo3 size21 flex-col-l-m">

                                @if(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                    <span class="txt21 m-b-3">
                                        {{ $meal->name_ru }}
                                    </span>
                                    <span class="txt12 m-b-3">
                                        {{ $meal->name }}
                                    </span>
                                    <span class="txt23">
                                        {{ $meal->about_ru }}
                                    </span>
                                @else
                                    <span class="txt21 m-b-3">
                                        {{ $meal->name }}
                                    </span>
                                    <span class="txt12 m-b-3">
                                        {{ $meal->name_ru }}
                                    </span>
                                    <span class="txt23">
                                        {{ $meal->about }}
                                    </span>
                                @endif

                                <span class="txt22 m-t-20">
								${{ $meal->price }}
							    </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
