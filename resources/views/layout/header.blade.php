<nav class="clearfix fixed-top header_mob">
    <ion-icon class="toggle_menu nav_menu" name="menu"></ion-icon>
    <img class="logo1_mob" src="{{ asset('images/logo.png') }}">
    <ul class="hidden"><br>
{{--        <li><a href="#"><img class="logo2_mob" src="{{asset('images/logo1.png') }}"></a> </li>--}}
{{--        <li><a href="#home"><img class="home_mob" src="{{asset('images/Home.png') }}"></a> </li>--}}
        <li><a href="#"><img class="logo2_mob" src="{{asset('images/logo1.png') }}"></a></li>
        <li><a href="#"><img class="home_mob" src="{{asset('images/Home.png') }}"></a></li>
        <li><a href="#section1">Section1</a></li>
        <li><a href="#section2">Section2</a></li>
        <li><a href="#section3">Section3</a></li>
    </ul>
</nav>
<script>
    const toggleButton = document.querySelector('.toggle_menu');
    const navMenu = document.querySelector('nav ul');
    const navLinks = document.querySelectorAll('nav ul li a');

    toggleButton.addEventListener('click', function() {
        navMenu.classList.toggle('hidden');
    });

    //Thêm trình nghe sự kiện click cho mỗi liên kết trong danh sách
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navMenu.classList.toggle('hidden'); //Thêm class 'hidden' để ẩn danh sách
        });
    });
    // const navbar = document.querySelector('.header_mob');
    //
    // window.addEventListener('scroll', function() {
    //     if (window.pageYOffset > 100) {
    //         navbar.style.backgroundColor = '#4a5562';
    //     } else {
    //         navbar.style.backgroundColor = 'rgba(255, 255, 255, 0)';
    //     }
    // });

    window.addEventListener('scroll', function() {
        var header = document.querySelector('.header_mob');
        header.style.backgroundColor = (window.pageYOffset > 0) ? 'grey' : 'transparent';
    });
</script>


