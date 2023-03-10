<style>
    .logo1_mob {
        display: none;
    }
    body{
        background-color: #0e1628;
    }
    nav ul {
        text-align: center;
        background: transparent;
        opacity: 90%;
        width: 100%;
        height: 10vh;
    }
    nav ul li {
        padding-top: 0;
    }
    nav ul li a {

    }
    .page-item.active > .page-link{
        background-color: goldenrod !important;
    }
    .page-link{
        background-color: #0b4d75 !important;
        color: white !important;
    }
</style>dark
<nav class="navbar navbar-expand-lg navbar-light fixed-top " style="background-color: #14203b; opacity: 0.8">
    <div class="container-fluid">
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=" navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row " id="navbarSupportedContent">
            <ul class="ul navbar-nav  mb-2 mb-lg-0 col-sm-4 offset-sm-4" style="">
                <li class="menu3 d-none d-lg-block"><a href="#logo1"><img src="{{asset('images/logo.png') }}"></a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid" style="margin-top: 10rem; color: darkgoldenrod">
    <h1 align="center">Latest news about </h1>
    <h2 align="center" style="color: darkgoldenrod">VIKE PLATFORM</h2>

</div>
<div class="" style="margin: 5rem 15vw 0 15vw ">
    <section class="articles">
        @include('pages.content_page')
    </section>
</div>
<!-- Footer -->
<footer class="text-center text-lg-start text-muted" style="background-color: #14203b">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 link-secondary">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3 text-secondary"></i>Company name
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3 text-secondary"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        ?? 2023 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">VikePlaform.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<script>
    window.addEventListener('scroll', function() {
        var header = document.querySelector('.header_mob');
        header.style.backgroundColor = (window.pageYOffset > 0) ? 'transparent' : 'transparent';
    });
    $(function() {
        $('body').on('click', '.pagination a', function(e) {
            e.preventDefault();
            $('#load a').css('color', '#dfecf6');
            // $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');

            var url = $(this).attr('href');
            console.log(url);
            getArticles(url);
            window.history.pushState("", "", url);
        });

        function getArticles(url) {
            $.ajax({
                url : url
            }).done(function (data) {
                $('.articles').html(data);
                console.log(data);
            }).fail(function () {
                alert('Articles could not be loaded.');
            });
        }
    });
</script>