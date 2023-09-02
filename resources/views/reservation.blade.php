<x-layout>
    <x-slot:title>
        {{ __('home.reservation') }}
    </x-slot:title>
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
             style="background-image: url(images/bg-title-page-02.jpg);">
        <h2 class="tit6 t-center">
            {{ __('home.reservation') }}
        </h2>
    </section>


    <!-- Reservation -->
    <section class="section-reservation bg1-pattern p-t-100 p-b-113">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-b-30">
                    <div class="t-center">
						<span class="tit2 t-center">
							{{ __('home.reservation') }}
						</span>

                        <h3 class="tit3 t-center m-b-35 m-t-2">
                            {{ __('home.book_table') }}
                        </h3>
                        @error('date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        @error('time')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <form action="{{ route('reservation.store') }}" method="POST"
                          class="wrap-form-reservation size22 m-l-r-auto">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Date -->
                                <span class="txt9">
									{{ __('home.date') }}
								</span>

                                <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date">
                                    <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18"
                                       aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- Time -->
                                <span class="txt9">
									{{ __('home.time') }}
								</span>

                                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <!-- Select2 -->
                                    <select class="selection-1" name="time" required>
                                        <option value="" disabled selected hidden>{{ __('home.choose') }}</option>
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
                            </div>

                            <div class="col-md-4">
                                <!-- People -->
                                <span class="txt9">
									{{ __('home.guests') }}
								</span>

                                <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <!-- Select2 -->
                                    <select class="selection-1" name="guests" required>
                                        <option value="1">1 {{ __('home.guest') }}</option>
                                        @for($i=2; $i<= 12; $i++)
                                            <option value="{{ $i }}">{{ $i }} {{ __('home.guests') }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <!-- Name -->
                                <span class="txt9">
									{{ __('home.name') }}
								</span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" required
                                           placeholder="{{ __('home.name') }}">
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

                        </div>

                        <div class="wrap-btn-booking flex-c-m m-t-6">
                            <!-- Button3 -->
                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                {{ __('home.book_table') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="info-reservation flex-w p-t-80">
                <div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
                    <h4 class="txt5 m-b-18">
                        {{ __('reservation.byPhone') }}
                    </h4>

                    <p class="size25">
                        {{ __("reservation.byPhone_text") }}
                        <span class="txt24">55 500 08 00</span>
                    </p>
                </div>

            </div>
        </div>
    </section>
</x-layout>
