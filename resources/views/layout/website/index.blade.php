<!DOCTYPE html>
<html lang="ar">
@include('layout.website.head')
<body>
@include('layout.website.header')
@include('layout.website.slider')

{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('storage/images/'.$category->image)}}" alt="IMG-BANNER">
                    <a href="{{url('category/products/'.$category->id)}}"
                       class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									{{$category->name}}
								</span>

                            <span class="block1-info stext-102 trans-04">
									{{$category->description}}
								</span>
                        </div>
                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{--<br>--}}
{{--<br>--}}
{{--<br>--}}
<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Stores Overview
            </h3>
        </div>

        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    All Products
                </button>
                @foreach($categories as $category)
                    <a href="{{URL('category/'.$category->id)}}">
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" >
                            {{$category->name}}
                        </button>
                    </a>


            @endforeach
            </div>
            <div class="flex-w flex-c-m m-tb-10">

                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Search
                </div>
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <form action="{{URL('storesSearch')}}" method="GET">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search"
                               placeholder="Search">
                    </div>
                </form>

            </div>

        </div>

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
                                <a href="{{URL('product/'.$store->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                   {{$store->name}}
                                </a>

                                <span class="stext-105 cl3">
									{{$store->category->name}}{{$store->category->name}}
								</span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04" src="{{asset('website_style/images/icons/icon-heart-01.png')}}" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('website_style/images/icons/icon-heart-02.png')}}" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</section>



@include('layout.website.footer')

</body>

@include('layout.website.js')

</html>
