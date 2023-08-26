<x-layout>
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
             style="background-image: url(images/bg-title-page-01.jpg);">
        <h2 class="tit6 t-center">
            Pato Menu
        </h2>
    </section>


    <!-- Main menu -->
    <section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
        <div class="container">
            <div class="row">
                @foreach($categoriesWithMeals as $category)
                <div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
                            {{ $category->name }}
						</h3>
                        @foreach($category->menus as $meal)
                            <!-- Item mainmenu -->
                            <div class="item-mainmenu m-b-36">
                                <div class="flex-w flex-b m-b-3">
                                    <a href="#" class="name-item-mainmenu txt21">
                                        {{ $meal->name }}
                                    </a>

                                    <div class="line-item-mainmenu bg3-pattern"></div>

                                    <div class="price-item-mainmenu txt22">
                                        ${{ $meal->price }}
                                    </div>
                                </div>

                                <span class="info-item-mainmenu txt23">
                                    {{ $meal->about }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Lunch -->
    <section class="section-lunch bgwhite">
        <div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
            <div class="bg1-overlay t-center p-t-170 p-b-165">
                <h2 class="tit4 t-center">
                    Lunch
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
                            <a href="#"><img src="images/lunch-01.jpg" alt="IMG-MENU"></a>
                        </div>
                        <div class="text-blo3 size21 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                                {{ $meal->name }}
                            </a>

                            <span class="txt23">
								{{ $meal->about }}
							</span>

                            <span class="txt22 m-t-20">
								${{ $meal->price }}
							</span>
                        </div>
                    </div>                    
                </div>
                @endforeach
                {{-- <div class="col-md-8 col-lg-6 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="blo3 flex-w flex-col-l-sm m-b-30">
                        <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                            <a href="#"><img src="images/lunch-02.jpg" alt="IMG-MENU"></a>
                        </div>

                        <div class="text-blo3 size21 flex-col-l-m">
                            <a href="#" class="txt21 m-b-3">
                                sbrisalona
                            </a>

                            <span class="txt23">
								Proin lacinia nisl ut ultricies posuere nulla
							</span>

                            <span class="txt22 m-t-20">
								$29.79
							</span>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>


</x-layout>
