    <!-- ======= hero Section ======= -->
@unlessrole('owner|user|provider')
    <section id="hero">
        <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="background-image: url(assets2/img/hero-carousel/1.jpeg">
                <div class="carousel-container">
                <div class="container">
                    <h2 class="animate__animated animate__fadeInDown"><h4 class="text-primary font-weight-bold"></h4> <p class="text-primary"></p></h2>
                    <p class="animate__animated animate__fadeInUp">يمكنك الحصول على الخدمة التي تريدها بسهولة</p>
                    <a href="register" class="btn-get-started scrollto animate__animated animate__fadeInUp">ابدأ الآن</a>
                </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(assets2/img/hero-carousel/2.jpeg)">
                <div class="carousel-container">
                <div class="container">
                    <h2 class="animate__animated animate__fadeInDown"><span class="text-primary">لمستقبل أفضل</span></h2>
                    <p class="animate__animated animate__fadeInUp">عليك البدء الآن </p>
                    <a href="register" class="btn-get-started scrollto animate__animated animate__fadeInUp">إبدأ الآن</a>
                </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url(assets2/img/hero-carousel/3.jpeg)">
                <div class="carousel-container">
                <div class="container">
                    <p class="animate__animated animate__fadeInDown">الموقع<h1 class="text-primary"><dt>الأمثل</dt></h1></p>
                    <p class="animate__animated animate__fadeInUp">لبيع وشراء الخدمات</p>
                    <a href="register" class="btn-get-started scrollto animate__animated animate__fadeInUp">إبدأ الآن</a>
                </div>
                </div>


            </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
        </div>
    </section>
@endunlessrole

@hasanyrole('user|provider|owner')
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-item active" style="background-image: url(assets2/img/hero-carousel/3.jpeg)">
                    <div class="carousel-container">
                    <div class="container">
                        <p class="animate__animated animate__fadeInDown">في<h1 class="text-primary"><dt>khadamat</dt></h1></p>
                        <p class="animate__animated animate__fadeInUp">يمكنك الحصول على الخدمة التي تريدها بسهولة</p>
                    </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
        </div>
    </section>
@endhasanyrole
    <!-- End Hero Section -->
