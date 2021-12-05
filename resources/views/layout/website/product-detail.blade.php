<!DOCTYPE html>
<html lang="en">
@include('layout.website.head')
<body class="animsition">

@include('layout.website.header')


<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                        <div class="slick3 gallery-lb">
                            <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{ asset('storage/images/'.$store->image)}}" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                       href="{{ asset('storage/images/'.$store->image)}}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        {{$store->name}}
                    </h4>
                    <h5 class="mtext-90 cl2 js-name-detail p-b-14">
                        {{$store->category->name}}
                    </h5>
                    {{--                    <span class="mtext-106 cl2">--}}
                    {{--							$58.79--}}
                    {{--						</span>--}}

                    <p class="stext-102 cl3 p-t-23">
                        {{$store->details}}
                    </p>
                    <br>
                    <br>

                    <h4>
                        {{$store->rating_avg}}
                    </h4>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
            <div class="p-b-30 m-lr-15-sm">
                <!-- Review -->
                <div class="flex-w flex-t p-b-68">
                    @foreach($ratings as $rating)
                        <div class="size-207">
                            <div class="flex-w flex-sb-m p-b-17">
                                <div class="flex-w flex-t p-b-68">

                                    <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                        <img src="{{asset('profile.jpg')}}" alt="AVATAR">
                                    </div>
                                    <span class="mtext-107 cl2 p-r-20">
                                        {{$rating->username}}
                                    </span>

                                    <span class="fs-18 cl11">
                                    @for ($i = 0; $i < $rating->rate; $i++)
                                            <i class="zmdi zmdi-star"></i>
                                        @endfor
                                </span>
                                    <br>

                                </div>
                                <p class="stext-102 cl6">
                                    {{$rating->note}}
                                </p>

                            </div>
                        </div>
                    @endforeach
                        {{$ratings->links('pagination::bootstrap-4')}}

                </div>


            <!-- Add review -->
                <form class="w-full" method="POST" action='{{URL('stores/rating/store/'. $store->id)}}'>
                    @csrf
                    <h5 class="mtext-108 cl2 p-b-7">
                        Add a review
                    </h5>

                    <div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

                        <span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
                    </div>
                    <div class="row p-b-25">
                        <div class="col-12 p-b-5">
                            <label class="stext-102 cl3" for="message">Your review</label>
                            <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review"
                                      name="note"></textarea>
                        </div>
                        <div class="col-sm-12 p-b-5">
                            <label class="stext-102 cl3" for="name">Name</label>
                            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
                        </div>
                        <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10"
                                type="submit" style="margin-top: 10px">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('layout.website.footer')


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>

@include('layout.website.js')

</body>
</html>
