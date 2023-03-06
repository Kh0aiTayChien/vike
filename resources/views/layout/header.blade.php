<nav class="clearfix fixed-top header_mob">
    <ion-icon class="toggle_menu" name="menu"></ion-icon>
    <img class="logo1_mob" src="{{ asset('images/logo.png') }}">
    <ul class="clearfix hidden">
        <li><a href="#logo"><img class="logo2_mob" src="{{asset('images/logo1.png') }}"></a> </li>
        <li><a href="#home"><img class="home_mob" src="{{asset('images/Home.png') }}"></a> </li>
    </ul>
</nav>
<script>
    const toggleButton = document.querySelector('.toggle_menu');
    const navMenu = document.querySelector('nav ul');

    toggleButton.addEventListener('click', function() {
        navMenu.classList.toggle('hidden');
    });
</script>


