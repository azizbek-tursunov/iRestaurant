<x-layout>
    	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(/images/bg-title-page-03.jpg);">
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

				<a href="{{ route('blog.index') }}" class="txt27">
					Blog
				</a>
				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					{{ $blog->title }}
				</span>
			</div>
		</div>

		<div class="container">
			<div class="row ">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
						<!-- Block4 -->
						<div class="blo4 p-b-63">
							<!-- - -->
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
									<img src="/storage/{{ $blog->image }}" alt="IMG-BLOG">
								@php
                                	$carbonDatetime = \Carbon\Carbon::parse($blog->created_at);
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

							<!-- - -->
							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="blog-detail.html" class="tit9">{{ $blog->title }}</a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										<span class="m-r-6 m-l-4">123</span>
									</span>
								</div>

								<p>
									{!! $blog->body !!}
								</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>  
</x-layout>