<!-- Footer -->
<footer class="bg1">
    <div class="container p-t-40 p-b-70">
        <div class="row">
            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    {{ __('layout.contact_us') }}
                </h4>

                <ul class="m-b-70">
                    <li class="txt14 m-b-14">
                        <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        {{ __('layout.address') }}
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        +998 95 303 08 88
                    </li>

                    {{--                    <li class="txt14 m-b-14">--}}
                    {{--                        <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>--}}
                    {{--                        --}}
                    {{--                    </li>--}}
                </ul>

                <!-- - -->
                <h4 class="txt13 m-b-32">
                    {{ __('layout.opening_hours') }}
                </h4>

                <ul>
                    <li class="txt14">
                        08:00 – 23:00
                    </li>

                    <li class="txt14">
                        {{ __('layout.everyday') }}
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-38">
                    {{ __('layout.gallery') }}
                </h4>
                <!-- Gallery footer -->
                <div class="wrap-gallery-footer flex-w">
                    @foreach($gallery as $photo)
                        <a class="item-gallery-footer wrap-pic-w" href="/storage/{{ $photo->image }}"
                           data-lightbox="gallery-footer">
                            <img src="/storage/{{ $photo->image }}" alt="GALLERY">
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div class="end-footer bg2">
        <div class="container">
            <div class="flex-sb-m flex-w p-t-22 p-b-22">
                <div class="p-t-5 p-b-5">
                    @foreach($socials as $social)
                        <a href="{{ $social->url }}" class="fs-15 c-white"><i class="fa fa-{{ $social->name }} m-l-18" aria-hidden="true"></i></a>
                    @endforeach
                </div>

                <div class="txt17 p-r-20 p-t-5 p-b-5">
                    {{ __('layout.copyright') }} <a href="https://www.linkedin.com/in/azizbektursunov/" target="_blank">Azizbek</a>
                </div>
            </div>
        </div>
    </div>
</footer>
