<div class="block1_mob justify-content-center">
    {{--    <nav class="navbar navbar-expand-lg navbar-light fixed-top">--}}
    {{--        <div class="container col-12 justify-content-center">--}}
    {{--            <a class="logo col-6 ms-auto"><img class="logo" src="{{ asset('images/logo.png') }}"></a>--}}
    {{--            <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
    {{--                <img src="{{asset('images/card-list.svg')}}">--}}
    {{--            </button>--}}
    {{--            <div class="collapse" id="navbarSupportedContent">--}}
    {{--                <ul class="justify-content-center">--}}
    {{--                    <li class="item text-center">--}}
    {{--                        <a class="active" aria-current="page" href="#">Home</a>--}}
    {{--                    </li>--}}
    {{--                    <li class="item">--}}
    {{--                        <a class="link" href="#"><img class="logo2_mob col-5" src="{{asset('images/logo1.png') }}"></a>--}}
    {{--                    </li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}
    <button
            type="button"
            class="btn btn-danger btn-floating"
            id="btn-back-to-top"
    >
        <i class="fas fa-arrow-up"></i>
    </button>
    <script>
        //Get the button
        let mybutton1 = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton1.style.display = "block";
            } else {
                mybutton1.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton1.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <ul class="header clearfix navbar">
        <div class="column menu">
            <li class="animate__animated animate__backInLeft"><button class="mybtn logo1" onclick="topFunction()" id="myBtn" title="Go to top"><img class="logo1" src="{{ asset('images/logo.png') }}"></button></li>

        </div>
        <div class="column content_mob animate__animated animate__backInRight">
            <li class="menu2"><a href="#Home"><img class="home" src="{{asset('images/Home.png') }}"></a></li>
            <li class="menu3"><a href="#logo1"><img class="logo2" src="{{asset('images/logo1.png') }}"></a></li>
        </div>
    </ul>
    <div class="anh_to_mob">
        <img class="animate__animated animate__bounceIn col-10" src="{{ asset('images/text_content.png') }}">
    </div>
    <div class="text_content">
        <p class="col-9 text-center">The free global platform to play hundreds of P2E games - connecting gamers,
            games, and guilds worldwide. Watch game reviews, chat, level up, and get guild verified. Beta platform coming Q2, 2022.</p>
    </div>
    <div class="themlink">
        <a href="https://google.com"><img class="join anh_nho_mob col-3" src="{{asset('images/bình thường1.png' )}}"></a>
    </div>
    <div class="themlink">
        <a href="https://fb.com"><img class="invest anh_nho_mob col-3" src="{{asset('images/Group 40.png')}}"></a>
    </div>
    <div class="buildingblock">
        <img class="text_anh_mob ani_bounceIn col-9" src="{{asset('images/textanh.png')}}">
    </div>
</div>

<div class="block1">
    <img class="banner1" src="{{ asset('images/Group 41.png') }}" alt="anh nen">
    <div>
        <ul class="header clearfix fixed-top navbar">
            <div class="column menu">
                <li class="animate__animated animate__backInLeft"><button class="mybtn logo1" onclick="topFunction()" id="myBtn" title="Go to top"><img class="logo1" src="{{ asset('images/logo.png') }}"></button></li>
                <script>
                    // Get the button
                    let mybutton = document.getElementById("myBtn");

                    // When the user scrolls down 20px from the top of the document, show the button
                    window.onscroll = function() {scrollFunction()};

                    // function scrollFunction() {
                    //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    //         mybutton.style.display = "block";
                    //     } else {
                    //         mybutton.style.display = "none";
                    //     }
                    // }

                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    }
                </script>
            </div>
            <div class="column content animate__animated animate__backInRight">
                <li class="menu2"><a href="#Home"><img class="home" src="{{asset('images/Home.png') }}"></a></li>
                <li class="menu3"><a href="#logo1"><img class="logo2" src="{{asset('images/logo1.png') }}"></a></li>
            </div>
        </ul>
        <div class="clear"></div>
        <img class="anh_to animate__animated animate__bounceIn" src="{{ asset('images/Group 39.png') }}">
        <div class="animate__animated animate__bounceIn them_link">
            <a href="https://google.com" class="btn"><img class="join anh_nho" src="{{asset('images/bình thường1.png' )}}"></a>
            <a href="https://fb.com" class="btn"><img class="invest anh_nho1" src="{{asset('images/Group 40.png')}}"></a>
        </div>
        <img class="text_anh ani_bounceIn" src="{{asset('images/textanh.png')}}">
        <img class="text_anh2 ani_bounceIn" src="{{asset('images/text.png')}}">
        <div class="chinh_anh">
            <img class="rectangle" src="{{asset('images/Rectangle 6.png')}}">
            <div>
                <img class="icon1 ani_fadeInLeft aniUtil_dramatic" src="{{asset('images/Group 48.png')}}">
            </div>
        </div>
        <img class="icon2 ani_fadeInRight aniUtil_dramatic" src="{{asset('images/Group 491.png')}}">
        <img class="name_banner_icon3 ani_zoomIn aniUtil_dramatic" src="{{asset('images/BACKED BY THE TOP VENTURES.png')}}">
        <img class="banner_icon3 ani_bounceInDown aniUtil_dramatic" src="{{asset('images/Group 45.png')}}">
        <img class="banner_icon4 ani_bounceInDown aniUtil_dramatic" src="{{asset('images/Group 46.png')}}">
        <img class="banner_icon5 ani_bounceInDown aniUtil_dramatic" src="{{asset('images/Group 47.png')}}">
        <img class="banner_name ani_bounceInDown aniUtil_dramatic" src="{{asset('images/Group 42.png')}}">
        <img class="banner_icon6 ani_fadeInLeft aniUtil_dramatic" src="{{asset('images/Group 43.png')}}">
        <img class="banner_icon7 ani_fadeInRight aniUtil_dramatic" src="{{asset('images/Group 441.png')}}">
    </div>
</div>


