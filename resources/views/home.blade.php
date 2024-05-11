<!DOCTYPE html>
<html lang="{{app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="" >
    @include('templates.nav')

    <div class="container py-50 py-xl-100 mb-xl-100">
        <h1 class="fz-t2 fz-xl-xxl text-center text-uppercase fw-bolder ">
            @lang('unleash your business potential')
        </h1>
        <h3 class="fz-cl fz-xl-t2 text-center text-uppercase fw-normal ">@lang('discover the power of panthera')</h3>
    </div>
    <div class="container-expanded  mb-lg-150">
        <div class="d-grid-responsive">
            <div class="card-service">
                <img src="{{asset('/imagenes/card-service1.png')}}" alt="">
                <div class="d-flex flex-column justify-content-between h-100 content-info">
                    <div>
                        <h3 class="fw-bold mb-4">
                            @lang('E-commerce and informative websites development')
                        </h3>
                        <p>
                            <b>@lang('Start')</b>
                                @lang('your businnes and start')
                            <b>@lang('billing')</b>
                            @lang('with 360 integracion')
                        </p>
                    </div>
                    <div class="text-end">
                        <a href="" class="btn btn-outline-light border-3 fw-bold rounded-3">@lang('See more')</a>
                    </div>
                </div>
            </div>
{{-- /// vamos traduccion --}}
            <div class="card-service">
                <img src="{{asset('/imagenes/card-service2.png')}}" alt="">
                <div class="d-flex flex-column justify-content-between h-100 content-info">
                    <div>
                        <h3 class="fw-bold mb-4">
                            @lang('Cuestom software development and automation')
                        </h3>
                        <p>
                            <b>@lang('Bring')</b>
                            @lang('Your business idea to life or streamline operational inefficiencies with a tailos-made technological solution')
                        </p>
                    </div>
                    <div class="text-end">
                        <a href="" class="btn btn-outline-light border-3 fw-bold rounded-3">@lang('See more')</a>
                    </div>
                </div>
            </div>
            <div class="card-service">
                <img src="{{asset('/imagenes/card-service3.png')}}" alt="">
                <div class="d-flex flex-column justify-content-between h-100 content-info">
                    <div>
                        <h3 class="fw-bold mb-4">
                            @lang('Software outsourcing')
                        </h3>
                        <p>
                            <b>@lang('Reduce')</b>
                            @lang('costs associated with in-house teams and streamline system updates ')
                        </p>
                    </div>
                    <div class="text-end">
                        <a href="" class="btn btn-outline-light border-3 fw-bold rounded-3">@lang('See more')</a>
                    </div>
                </div>
            </div>

            <div class="card-service">
                <img src="{{asset('/imagenes/card-service4.png')}}" alt="">
                <div class="d-flex flex-column justify-content-between h-100 content-info">
                    <div>
                        <h3 class="fw-bold mb-4">
                            @lang('Growth marketing strategy')
                        </h3>
                        <p>
                            @lang('Scale up your business and achieve your goals with a data-driven strategy')
                        </p>
                    </div>
                    <div class="text-end">
                        <a href="" class="btn btn-outline-light border-3 fw-bold rounded-3">@lang('See more')</a>
                    </div>
                </div>
            </div>

            <div class="card-service">
                <img src="{{asset('/imagenes/card-service5.png')}}" alt="">
                <div class="d-flex flex-column justify-content-between h-100 content-info">
                    <div>
                        <h3 class="fw-bold mb-4">
                            @lang('Strategic brand desing')
                        </h3>
                        <p>
                            @lang('Conceptualize your idea and position your value proposition in Develop yor idea and define your value proposition')
                        </p>
                    </div>
                    <div class="text-end">
                        <a href="" class="btn btn-outline-light border-3 fw-bold rounded-3">@lang('See more')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-logos ">
        <div>
            <img src="{{asset('/imagenes/efipay.png')}}" alt="efipay">
            <img src="{{asset('/imagenes/uala.png')}}" alt="uala">
            <img src="{{asset('/imagenes/levely.png')}}" alt="levely">
            <img src="{{asset('/imagenes/klipclub.png')}}" alt="klipclub">
            <img src="{{asset('/imagenes/accedo.png')}}" alt="accedo">
            <img src="{{asset('/imagenes/alltruismo.png')}}" alt="alltruismo">
            <img src="{{asset('/imagenes/ya-te-ayudo.png')}}" alt="ya-te-ayudo">
            <img src="{{asset('/imagenes/ingles-de-una.png')}}" alt="ingles-de-una">
            <img src="{{asset('/imagenes/tutrok.png')}}" alt="tutrok">
            <img src="{{asset('/imagenes/atg.png')}}" alt="atg">
            <img src="{{asset('/imagenes/cfs.png')}}" alt="cfs">
            <img src="{{asset('/imagenes/efipay.png')}}" alt="efipay">
            <img src="{{asset('/imagenes/uala.png')}}" alt="uala">
            <img src="{{asset('/imagenes/levely.png')}}" alt="levely">
            <img src="{{asset('/imagenes/klipclub.png')}}" alt="klipclub">
            <img src="{{asset('/imagenes/accedo.png')}}" alt="accedo">
            <img src="{{asset('/imagenes/alltruismo.png')}}" alt="alltruismo">
            <img src="{{asset('/imagenes/ya-te-ayudo.png')}}" alt="ya-te-ayudo">
            <img src="{{asset('/imagenes/ingles-de-una.png')}}" alt="ingles-de-una">
            <img src="{{asset('/imagenes/tutrok.png')}}" alt="tutrok">
            <img src="{{asset('/imagenes/atg.png')}}" alt="atg">
            <img src="{{asset('/imagenes/cfs.png')}}" alt="cfs">
            <img src="{{asset('/imagenes/efipay.png')}}" alt="efipay">
            <img src="{{asset('/imagenes/uala.png')}}" alt="uala">
            <img src="{{asset('/imagenes/levely.png')}}" alt="levely">
            <img src="{{asset('/imagenes/klipclub.png')}}" alt="klipclub">
            <img src="{{asset('/imagenes/accedo.png')}}" alt="accedo">
            <img src="{{asset('/imagenes/alltruismo.png')}}" alt="alltruismo">
            <img src="{{asset('/imagenes/ya-te-ayudo.png')}}" alt="ya-te-ayudo">
            <img src="{{asset('/imagenes/ingles-de-una.png')}}" alt="ingles-de-una">
            <img src="{{asset('/imagenes/tutrok.png')}}" alt="tutrok">
            <img src="{{asset('/imagenes/atg.png')}}" alt="atg">
            <img src="{{asset('/imagenes/cfs.png')}}" alt="cfs">
            <img src="{{asset('/imagenes/efipay.png')}}" alt="efipay">
            <img src="{{asset('/imagenes/uala.png')}}" alt="uala">
            <img src="{{asset('/imagenes/levely.png')}}" alt="levely">
            <img src="{{asset('/imagenes/klipclub.png')}}" alt="klipclub">
            <img src="{{asset('/imagenes/accedo.png')}}" alt="accedo">
            <img src="{{asset('/imagenes/alltruismo.png')}}" alt="alltruismo">
            <img src="{{asset('/imagenes/ya-te-ayudo.png')}}" alt="ya-te-ayudo">
            <img src="{{asset('/imagenes/ingles-de-una.png')}}" alt="ingles-de-una">
            <img src="{{asset('/imagenes/tutrok.png')}}" alt="tutrok">
            <img src="{{asset('/imagenes/atg.png')}}" alt="atg">
            <img src="{{asset('/imagenes/cfs.png')}}" alt="cfs">
            <img src="{{asset('/imagenes/efipay.png')}}" alt="efipay">
            <img src="{{asset('/imagenes/uala.png')}}" alt="uala">
            <img src="{{asset('/imagenes/levely.png')}}" alt="levely">
            <img src="{{asset('/imagenes/klipclub.png')}}" alt="klipclub">
            <img src="{{asset('/imagenes/accedo.png')}}" alt="accedo">
            <img src="{{asset('/imagenes/alltruismo.png')}}" alt="alltruismo">
            <img src="{{asset('/imagenes/ya-te-ayudo.png')}}" alt="ya-te-ayudo">
            <img src="{{asset('/imagenes/ingles-de-una.png')}}" alt="ingles-de-una">
            <img src="{{asset('/imagenes/tutrok.png')}}" alt="tutrok">
            <img src="{{asset('/imagenes/atg.png')}}" alt="atg">
            <img src="{{asset('/imagenes/cfs.png')}}" alt="cfs">
            <img src="{{asset('/imagenes/efipay.png')}}" alt="efipay">
            <img src="{{asset('/imagenes/uala.png')}}" alt="uala">
            <img src="{{asset('/imagenes/levely.png')}}" alt="levely">
            <img src="{{asset('/imagenes/klipclub.png')}}" alt="klipclub">
            <img src="{{asset('/imagenes/accedo.png')}}" alt="accedo">
            <img src="{{asset('/imagenes/alltruismo.png')}}" alt="alltruismo">
            <img src="{{asset('/imagenes/ya-te-ayudo.png')}}" alt="ya-te-ayudo">
            <img src="{{asset('/imagenes/ingles-de-una.png')}}" alt="ingles-de-una">
            <img src="{{asset('/imagenes/tutrok.png')}}" alt="tutrok">
            <img src="{{asset('/imagenes/atg.png')}}" alt="atg">
            <img src="{{asset('/imagenes/cfs.png')}}" alt="cfs">
        </div>
    </div>

    <div class="content-video d-mb-none-down">
        <video autoplay loop muted playsinline src="{{asset('/videos/home-desktop.mp4')}}"></video>
    </div>

    <div class="container content-h">
        <h1 class="fz-t2 fz-lg-xxl text-cener text-uppercase fw-bolder mb-80 mb-lg-150 mx-auto" id="
        home-title" style="height: 76px; max-width:970px;" > <span class="typed"></span></h1>
        <h3 class="fz-t3 text-center text-uppercase">
            @lang('You won’t be just another number; we will analyze your business to offer you a personalized solution and lead you to success.')
        </h3>
    </div>
    <br class="d-lg-none-down">


    <div class="swiper mySwiper">
        <div class="swiper-wrapper projects-swiper">
            <div class="swiper-slide" aria-label="1 / 9">
                <div class="content-img">
                    <img src="{{asset('/imagenes/view-work-efipay.png')}}" alt="">
                </div>

                <div class="content-project px-3 ps-md-4 pe-md-0">
                    <h3 class="project-title mb-3 fw-bold text-capitalize">efipay</h3>
                    <p class="project-text mb-4">
                        @lang('swiper-card1')
                    </p>
                    <a href="" class="btn btn-outline-lightpurple rounded-3">@lang('See more')</a>
                </div>
            </div>
            <div class="swiper-slide" aria-label="2 / 9">
                <div class="content-img">
                    <img src="{{asset('/imagenes/view-work-uala.png')}}" alt="">
                </div>

                <div class="content-project">
                    <h3 class="project-title mb-3 fw-bold text-capitalize">ualá</h3>
                    <p class="project-text mb-4">
                        @lang('swiper-card2')
                    </p>
                    <a href="" class="btn btn-outline-lightpurple rounded-3">@lang('See more')</a>
                </div>
            </div>
            <div class="swiper-slide" aria-label="3 / 9">
                <div class="content-img">
                    <img src="{{asset('/imagenes/view-work-levely.png')}}" alt="">
                </div>

                <div class="content-project">
                    <h3 class="project-title mb-3 fw-bold text-capitalize">levely</h3>
                    <p class="project-text mb-4">
                        @lang('swiper-card3')
                    </p>
                    <a href="" class="btn btn-outline-lightpurple rounded-3">@lang('See more')</a>
                </div>
            </div>
            <div class="swiper-slide" aria-label="4 / 9">
                <div class="content-img">
                    <img src="{{asset('/imagenes/view-work-klipclub.png')}}" alt="">
                </div>

                <div class="content-project">
                    <h3 class="project-title mb-3 fw-bold text-capitalize">klipclub</h3>
                    <p class="project-text mb-4">
                        @lang('swiper-card4')
                    </p>
                    <a href="" class="btn btn-outline-lightpurple rounded-3">@lang('See more')</a>
                </div>
            </div>
            <div class="swiper-slide" aria-label="5 / 9">
                <div class="content-img">
                    <img src="{{asset('/imagenes/view-work-accedo.png')}}" alt="">
                </div>

                <div class="content-project">
                    <h3 class="project-title mb-3 fw-bold text-capitalize">accedo</h3>
                    <p class="project-text mb-4">
                        @lang('swiper-card5')
                    </p>
                    <a href="" class="btn btn-outline-lightpurple rounded-3">@lang('See more')</a>
                </div>
            </div>
            <div class="swiper-slide" aria-label="6 / 9">
                <div class="content-img">
                    <img src="{{asset('/imagenes/view-work-alltruismo.png')}}" alt="">
                </div>

                <div class="content-project">
                    <h3 class="project-title mb-3 fw-bold text-capitalize">alltruismo</h3>
                    <p class="project-text mb-4">
                        @lang('swiper-card6')
                    </p>
                    <a href="" class="btn btn-outline-lightpurple rounded-3">@lang('See more')</a>
                </div>
            </div>
            <div class="swiper-slide" aria-label="7 / 9">
                <div class="content-img">
                    <img src="{{asset('/imagenes/view-work-yateayudo.png')}}" alt="">
                </div>

                <div class="content-project">
                    <h3 class="project-title mb-3 fw-bold text-capitalize">yateayudo</h3>
                    <p class="project-text mb-4">
                        @lang('swiper-card7')
                    </p>
                    <a href="" class="btn btn-outline-lightpurple rounded-3">@lang('See more')</a>
                </div>
            </div>
            <div class="swiper-slide" aria-label="8 / 9">
                <div class="content-img">
                    <img src="{{asset('/imagenes/view-work-inglesdeuna.png')}}" alt="">
                </div>

                <div class="content-project">
                    <h3 class="project-title mb-3 fw-bold text-capitalize">inglés de una</h3>
                    <p class="project-text mb-4">
                        @lang('swiper-card8')
                    </p>
                    <a href="" class="btn btn-outline-lightpurple rounded-3">@lang('See more')</a>
                </div>
            </div>
            <div class="swiper-slide" aria-label="9 / 9">
                <div class="content-img">
                    <img src="{{asset('/imagenes/view-work-tutrok.png')}}" alt="">
                </div>

                <div class="content-project">
                    <h3 class="project-title mb-3 fw-bold text-capitalize">tutrok</h3>
                    <p class="project-text mb-4">
                        @lang('swiper-card9')
                    </p>
                    <a href="" class="btn btn-outline-lightpurple rounded-3">@lang('See more')</a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>


    @include('templates.contacto')

    @include('templates.footer')



</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    document.('DOMContentloaded', function(){
        alert('ol a')
    })
</script>
</html>
