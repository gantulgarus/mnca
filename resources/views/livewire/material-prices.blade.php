<div>
    <div class="position-relative mb-4">
        <div class="swiper price-swiper">
            <div class="swiper-wrapper">
                @foreach ($prices as $price)
                    <div class="swiper-slide">
                        <div class="flex-fill stat border rounded p-2 bg-light shadow-sm text-center h-100">
                            <div class="fw-bold small mb-1">
                                @lang('materials.' . Str::slug($price->material_name, '_'))
                            </div>
                            <div class="fs-6 fw-bold" style="color: #162450">
                                {{ $price->price }}
                            </div>
                            <div
                                class="small
                                @if ($price->trend == 'up') text-success
                                @elseif ($price->trend == 'down') text-danger
                                @else text-secondary @endif">
                                {{ $price->percentage_change }}%
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Add pagination dots -->
            {{-- <div class="swiper-pagination"></div> --}}
        </div>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev price-swiper-prev"></div>
        <div class="swiper-button-next price-swiper-next"></div>
    </div>
</div>
