<x-layout>
    <x-slot:title>
        {{ __('layout.contact') }}
    </x-slot:title>
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
             style="background-image: url(images/bg-title-page-02.jpg);">
        <h2 class="tit6 t-center">
            {{ __('contact.contact_us') }}
        </h2>
    </section>

    <!-- Contact form -->
    <section class="section-contact bg1-pattern p-t-90 p-b-113">
        <!-- Map -->
        <div class="container">
            <div class="map bo8 bo-rad-10 of-hidden">
                <div>
                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1164&amp;height=400&amp;hl=en&amp;q=istanbul asylum of&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://gachanymph.com/">Gacha Nymph Download</a></div><style>.mapouter{position:relative;text-align:right;width:1164px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:1164px;height:400px;}.gmap_iframe {width:1164px!important;height:400px!important;}</style></div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="tit7 t-center p-b-62 p-t-105">
                {{ __('contact.send_message') }}
            </h3>

            <form class="wrap-form-reservation size22 m-l-r-auto" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <!-- Name -->
                        <span class="txt9">
							{{ __('home.name') }}
						</span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name"
                                   placeholder="{{ __('home.name') }}"
                                   required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Phone -->
                        <span class="txt9">
							{{ __('home.phone') }}
						</span>

                        <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" required
                                   placeholder="{{ __('home.phone') }}">
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Message -->
                        <span class="txt9">
							{{ __('contact.message') }}
						</span>
                        <textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" required name="message"
                                  placeholder="{{ __('contact.message') }}"></textarea>
                    </div>
                </div>

                <div class="wrap-btn-booking flex-c-m m-t-13">
                    <!-- Button3 -->
                    <button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
                        {{ __('contact.submit') }}
                    </button>
                </div>
            </form>

            <div class="row p-t-135">
                <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="images/icons/map-icon.png" alt="IMG-ICON">
                        </div>

                        <div class="flex-col-l">
							<span class="txt5 p-b-10">
								{{ __('contact.location') }}
							</span>

                            <span class="txt23 size38">
							    {{ __('contact.address') }}
							</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="images/icons/phone-icon.png" alt="IMG-ICON">
                        </div>


                        <div class="flex-col-l">
							<span class="txt5 p-b-10">
								{{ __('contact.call_us')}}
							</span>

                            <span class="txt23 size38">
								☎️ 55 500 08 00
							</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="images/icons/clock-icon.png" alt="IMG-ICON">
                        </div>


                        <div class="flex-col-l">
							<span class="txt5 p-b-10">
								{{ __('layout.opening_hours') }}
							</span>

                            <span class="txt23 size38">
								08:00 – 23:00 <br/>{{ __('layout.everyday') }}
							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
