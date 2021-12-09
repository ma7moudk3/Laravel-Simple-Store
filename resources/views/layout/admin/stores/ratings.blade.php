@extends("layout.admin.admin")
@section("title","التقييمات")

@section("title-side")

@endsection

@section("js")
    <script src="{{ asset('metronic/assets/demo/default/custom/crud/forms/widgets/summernote.js') }}"
            type="text/javascript"></script>

@endsection
@section("content")

    <!DOCTYPE html>
    <html lang="ar">
    @include('layout.website.head')
    <body>
    <div class="row isotope-grid">
        @foreach($stores as $store)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{ asset('storage/images/'.$store->image)}}" alt="IMG-PRODUCT">

                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{URL('product/'.$store->id)}}"
                               class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$store->name}}
                            </a>

                            <span class="stext-105 cl3">

                                            @if($store->rating_avg > 0)
                                                @for ($i = 0; $i < $store->rating_avg ; $i++)
                                                    <i class="zmdi zmdi-star"></i>
                                                @endfor
                                                {{$store->rating_avg}}
                                            @else
                                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                            @endif

								</span>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
    </body>

    </html>
@endsection
