<div class="block3" style="">
    <img class="bot_content ani_slideInLeft" src="{{asset('images/rm373batch16-55 1 (1).png')}}">

    <img class="text_anh1 ani_slideInLeft" src="{{asset('images/Group 52.png')}}">

</div>
<div class="mt-2 p-4 no-padding " style="">
    <div class="multiple-items">
        @foreach( $articles as $article)
            <div class="card" style="">
                @unless(empty($article->image))
                    <img src="{{$article->image}}" class="card-img-top ps-5 pe-5 pt-5" alt="">
                @else
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg"
                         class="card-img-top ps-5 pe-5 pt-5" alt="">
                @endif
                <div class="card-body ps-5 pe-5">
                    <h5 class="card-title" style="">{{ $article->title}}</h5>
                    <p class="card-text text-white mt-5 "
                       style="">{!! Str::limit(strip_tags($article->content)) !!}</p>
                    <button class="button-more">more</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.multiple-items').slick({
            dots: false,
            infinite: true,
            speed: 800,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 5000,
            // fade: true,
            ssEase: 'linear',
            responsive: [
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: true,
                    }
                }
            ],
        });
    });
</script>
