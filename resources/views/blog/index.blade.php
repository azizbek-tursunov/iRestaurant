<x-layout>
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
             style="background-image: url(images/bg-title-page-03.jpg);">
        <h2 class="tit6 t-center">
            Blog
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class="bread-crumb bo5-b p-t-17 p-b-17">
            <div class="container">
                <a href="{{ route('home') }}" class="txt27">
                    Home
                </a>

                <span class="txt29 m-l-10 m-r-10">/</span>

                <span class="txt29">
					Blog
				</span>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
                        @foreach($posts as $post)

                            <!-- Block4 -->
                            <div class="blo4 p-b-63">
                                <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                    <a href="blog-detail.html">
                                        <img src="/storage/{{ $post->image }}" alt="IMG-BLOG">
                                    </a>
                                    @php
                                        $carbonDatetime = \Carbon\Carbon::parse($post->created_at);
                                        $dayNumber = $carbonDatetime->day;
                                        $monthYear = $carbonDatetime->format('M, Y');
                                        $formattedDate = $carbonDatetime->format('d F Y');
                                    @endphp
                                    <div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										{{ $dayNumber }}
									</span>
                                        <span class="txt31">
										{{ $monthYear }}
									</span>
                                    </div>
                                </div>

                                <div class="text-blo4 p-t-33">
                                    <h4 class="p-b-16">
                                        <a href="blog-detail.html" class="tit9">{{ $post->title }}</a>
                                    </h4>

                                    <div class="txt32 flex-w p-b-24">
									    <span>
                                            {{ $formattedDate }}
                                            <span class="m-r-6 m-l-4">|</span>
									    </span>
                                    </div>

                                    <p>
                                        {!! $post->shortBody() !!} 
                                    </p>

                                    <a href="{{ route('blog.show', ['blog' => $post->id]) }}" class="dis-block txt4 m-t-30">
                                        Continue Reading
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                        @endforeach
                        
                        <!-- Pagination -->
                        <div class="pagination flex-l-m flex-w m-l--6 p-t-25">
                            <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                            <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
                        <!-- Search -->
                        <div class="search-sidebar2 size12 bo2 pos-relative">
                            <input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search"
                                   placeholder="Search">
                            <button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
                        </div>

                        <!-- Most Popular -->
                        <div class="popular">
                            <h4 class="txt33 p-b-35 p-t-58">
                                Most popular
                            </h4>

                            <ul>
                                <li class="flex-w m-b-25">
                                    <div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
                                        <a href="#">
                                            <img src="images/blog-11.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>

                                    <div class="size28">
                                        <a href="#" class="dis-block txt28 m-b-8">
                                            Best Places for Wine
                                        </a>

                                        <span class="txt14">
											3 days ago
										</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
