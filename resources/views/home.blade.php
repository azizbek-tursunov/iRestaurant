<x-layout>
    <!-- Slide1 -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(images/slide1-01.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
                                  data-appear="fadeInDown">
								{{ __('home.welcome') }}
							</span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            {{ __('home.istanbul_restaurant') }}
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                            <!-- Button1 -->
                            <a href="{{ route('menu') }}" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                {{ __('home.look_menu') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1" style="background-image: url(images/master-slides-02.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
                                  data-appear="rollIn">
								{{ __('home.welcome_to') }}
							</span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37"
                            data-appear="lightSpeedIn">
                            {{ __('home.istanbul_restaurant') }}
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
                            <!-- Button1 -->
                            <a href="{{ route('menu') }}" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                {{ __('home.look_menu') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1" style="background-image: url(images/master-slides-01.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
                                  data-appear="rotateInDownLeft">
								{{ __('home.welcome_to') }}
							</span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37"
                            data-appear="rotateInUpRight">
                            {{ __('home.istanbul_restaurant') }}
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
                            <!-- Button1 -->
                            <a href="{{ route('menu') }}" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                {{ __('home.look_menu') }}
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="wrap-slick1-dots"></div>
        </div>
    </section>

    <!-- Welcome -->
    <section class="section-welcome bg1-pattern p-t-120 p-b-105">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-welcome t-center">
							<span class="tit2 t-center">
								{{ __('home.turkish_restaurant') }}
							</span>

                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            {{ __('home.welcome') }}
                        </h3>

                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            {{ __('home.about') }}
                        </p>

                        <a href="{{ route('about') }}" class="txt4">
                            {{ __('home.our_story') }}
                            <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="images/our-story-01.jpg" alt="IMG-OUR">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro -->
    <section class="section-intro">
        <div class="header-intro parallax100 t-center p-t-135 p-b-158"
             style="background-image: url(images/bg-intro-01.jpg);">
				<span class="tit2 p-l-15 p-r-15">
					{{ __('home.discover') }}
				</span>

            <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                {{ __('home.istanbul_restaurant') }}
            </h3>
        </div>

        <div class="content-intro bg-white p-t-77 p-b-133">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="#"><img src="images/intro-01.jpg" alt="IMG-INTRO"></a>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        {{ __('home.romantic') }}
                                    </h4></a>

                                <p class="m-b-20">
                                    {{ __('home.romantic_text') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="#"><img src="images/intro-02.jpg" alt="IMG-INTRO"></a>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        {{ __('home.delicious_food') }}
                                    </h4></a>

                                <p class="m-b-20">
                                    {{ __('home.delicious_text') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                                <a href="#"><img src="images/intro-04.jpg" alt="IMG-INTRO"></a>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        {{ __('home.drinks') }}
                                    </h4></a>

                                <p class="m-b-20">
                                    {{ __('home.drinks_text') }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Our menu -->
    <section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
        <div class="container">
            <div class="title-section-ourmenu t-center m-b-22">
					<span class="tit2 t-center">
						{{ __('home.discover') }}
					</span>

                <h3 class="tit5 t-center m-t-2">
                    {{ __('home.our_menu') }}
                </h3>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/our-menu-01.jpg" alt="IMG-MENU">

                                <!-- Button2 -->
                                <button class="btn2 flex-c-m txt5 ab-c-m size4">
                                    {{ __('home.lunch') }}
                                </button>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/our-menu-05.jpg" alt="IMG-MENU">

                                <!-- Button2 -->
                                <button class="btn2 flex-c-m txt5 ab-c-m size6">
                                    {{ __('home.dinner') }}
                                </button>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/our-menu-13.jpg" alt="IMG-MENU">

                                <!-- Button2 -->
                                <button class="btn2 flex-c-m txt5 ab-c-m size30">
                                    {{ __('home.happy_hour') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/our-menu-08.jpg" alt="IMG-MENU">

                                <!-- Button2 -->
                                <button class="btn2 flex-c-m txt5 ab-c-m size6">
                                    {{ __('home.drinks') }}
                                </button>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/our-menu-10.jpg" alt="IMG-MENU">

                                <!-- Button2 -->
                                <button class="btn2 flex-c-m txt5 ab-c-m size8">
                                    {{ __('home.starters') }}
                                </button>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- Item our menu -->
                            <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                                <img src="images/our-menu-16.jpg" alt="IMG-MENU">

                                <!-- Button2 -->
                                <button class="btn2 flex-c-m txt5 ab-c-m size9">
                                    {{ __('home.desserts') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Booking -->
    <section class="section-booking bg1-pattern p-t-100 p-b-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-b-30">
                    <div class="t-center">
							<span class="tit2 t-center">
								{{ __('home.reservation') }}
							</span>

                        <h3 class="tit3 t-center m-b-35 m-t-2">
                            {{ __('home.book_table') }}
                        </h3>
                    </div>

                    <form action="{{ route('reservation.store') }}" class="wrap-form-booking" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Date -->
                                <span class="txt9">
										{{ __('home.date') }}
									</span>

                                <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date">
                                    <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18"
                                       aria-hidden="true"></i>
                                </div>

                                <!-- Time -->
                                <span class="txt9">
										{{ __('home.time') }}
									</span>

                                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <!-- Select2 -->
                                    <select class="selection-1" name="time">
                                        <option>9:00</option>
                                        <option>9:30</option>
                                        <option>10:00</option>
                                        <option>10:30</option>
                                        <option>11:00</option>
                                        <option>11:30</option>
                                        <option>12:00</option>
                                        <option>12:30</option>
                                        <option>13:00</option>
                                        <option>13:30</option>
                                        <option>14:00</option>
                                        <option>14:30</option>
                                        <option>15:00</option>
                                        <option>15:30</option>
                                        <option>16:00</option>
                                        <option>16:30</option>
                                        <option>17:00</option>
                                        <option>17:30</option>
                                        <option>18:00</option>
                                    </select>
                                </div>

                                <!-- People -->
                                <span class="txt9">
										{{ __('home.guests') }}
									</span>

                                <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <!-- Select2 -->
                                    <select class="selection-1" name="guests">
                                        <option value="1">1 {{ __('home.guest') }}</option>
                                        @for($i=2; $i<= 12; $i++)
                                            <option value="{{ $i }}">{{ $i }} {{ __('home.guests') }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Name -->
                                <span class="txt9">
										{{ __('home.name') }}
									</span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" required
                                           placeholder="{{ __('home.name') }}">
                                </div>

                                <!-- Phone -->
                                <span class="txt9">
										{{ __('home.phone') }}
									</span>

                                <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" required
                                           placeholder="{{ __('home.phone') }}">
                                </div>
                            </div>
                        </div>

                        <div class="wrap-btn-booking flex-c-m m-t-6">
                            <!-- Button3 -->
                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                {{ __('home.book_table') }}
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 p-b-30 p-t-18">
                    <div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="images/booking-01.jpg" alt="IMG-OUR">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-video parallax100" style="background-image: url(images/bg-cover-video-02.jpg);">
        <div class="content-video t-center p-t-225 p-b-250">
				<span class="tit2 p-l-15 p-r-15">
					{{ __('home.discover') }}
				</span>

            <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                {{ __('home.our_video') }}
            </h3>

            <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal"
                 data-target="#modal-video-01">
                <div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
                    <i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog -->
    <section class="section-blog bg-white p-t-115 p-b-123">
        <div class="container">
            <div class="title-section-ourmenu t-center m-b-22">
					<span class="tit2 t-center">
						{{ __('home.latest_news') }}
					</span>

                <h3 class="tit5 t-center m-t-2">
                    {{ __('home.blog') }}
                </h3>
            </div>

            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->
                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                                <a href="{{ route('blog.show', ['blog' => $post->id]) }}"><img src="/storage/{{ $post->image }}"
                                                                                               alt="IMG-INTRO"></a>
                                @php
                                    $carbonDatetime = \Carbon\Carbon::parse($post->created_at);
                                    $formattedDate = $carbonDatetime->format('d F Y');
                                @endphp
                                <div class="time-blog">
                                    {{ $formattedDate }}
                                </div>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="{{ route('blog.show', ['blog' => $post->id]) }}"><h4
                                        class="txt5 color0-hov trans-0-4 m-b-13">
                                        {{ $post->title }}
                                    </h4></a>

                                <p class="m-b-20">
                                    {!! $post->shortBody() !!}
                                </p>

                                <a href="{{ route('blog.show', ['blog' => $post->id]) }}" class="txt4">
                                    {{ __('blog.continue_reading') }}
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
