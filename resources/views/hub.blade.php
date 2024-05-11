<!DOCTYPE html>
<html lang="{{app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('templates.nav')

    <div id="app" data-v-app>
        
        <div theme="body-tertiary" class="mb-md-6">
            <div class="container-video mb-50" id="content-header">
                <div class="content-video d-md-none-down">
                    <video autoplay loop playsinline src="{{asset('videos/hub-desktop.mp4')}}"></video>
                </div>
                <div class="content-video d-md-none" style="padding-top: 170%;">
                    <video autoplay loop playsinline src="{{asset('videos/hub-desktop.mp4')}}"></video>
                </div>
                <h1 class="fz-t2 fz-lg-xxl fw-bolder text-center container-video-title">
                    @lang('title-hub')
                </h1>
            </div>
            <div class="container mb-80 mb-lg-150">
                <div class="row">
                    <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                        <div>
                            <h2 class="fz-t3 fz-lg-t2 fw-bolder mb-3 mb-lg-4 line pt-3" style="--line-width: 75px;">
                                @lang('title-container')
                            </h2>
                        </div>

                        <div class="card">
                            <img src="{{asset('imagenes/hub-card-1.png')}}" alt="">
                            <div class="card-img-overlay bg-transparent cross-center flex-column" style="text-align: center;">
                                <h1 class="fz-t2 fz-lg-t1 fw-bolder">@lang('our-mision')</h1>
                                <p class="text-center fz-normal fz-lg-t3">
                                    @lang('mision')
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-column flex-lg-column-reverse gap-3 gap-lg-4">
                        <div>
                            <img src="{{asset('/imagenes/hub-card-3.png')}}" alt="" style="height: 250px">
                        </div>
                        <div>
                            <img src="{{asset('/imagenes/hub-card-1.png')}}" alt="" style="height: 230px">
                            <div class="card-img-overlay bg-transparent cross-center flex-column">
                                <p class="text-center fz-normal fz-lg-t3 mb-0" style="padding: 20px;">
                                    @lang('impulsamos')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-expanded">
                <div class="mb-4 mb-lg-50">
                    <div>
                        <h3 class="d-block text-center fw-bold fz-t2 text-uppercase">@lang('our-team')</h3>
                    </div>
                    <div>
                        <h4 class="d-block text-center mb-4 fz-t3 text-uppercase">@lang('team')</h4>
                    </div>
                </div>
                
                <div class="swiper mySwiper mySwiper2"   >
                    <div class="swiper-wrapper projects-swiper" autoplay loop>
                        <div class="swiper-slide" aria-label="1 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/federico gadea.jpg')}}" alt="Federico Gadea" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Federico Gadea</b>
                                <label>C.E.O</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="2 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Norwin Guerrero.jpg')}}" alt="Norwin Guerrero" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Norwin Guerrero</b>
                                <label>C.T.O</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="3 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('imagenes/equipo/Juan Dorado.jpeg')}}" alt="Juan Dorado" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Juan Dorado</b>
                                <label>Strategic Innovation Lead</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="4 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{asset('/imagenes/equipo/Carolina Gonzalez.jpeg')}}" alt="Carolina Gonzáles" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Carolina González</b>
                                <label>Business Development Manager</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="5 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Carlos Echeverry.jpg')}}" alt="Carlos Echeverry" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Carlos Echeverry</b>
                                <label>Creative Director</label>
                            </div>
                        </div><div class="swiper-slide" aria-label="6 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Rebeca Peña.jpg')}}" alt="Rebeca Peña" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Rebeca Peña</b>
                                <label>Marketing Manager</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="7 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Stiven Arias.png')}}" alt="Stiven Arias" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Stiven Arias</b>
                                <label>Software Developer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="8 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Nicolas Garcia Ramirez.jpg')}}" alt="Nicolas Garcia" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Nicolas Garcia</b>
                                <label>Software Developer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="9 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Ivan Danilo Quintero Ramirez.jpg')}}" alt="Ivan Quintero" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Ivan Quintero</b>
                                <label>Software Developer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="10 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/John Obando.jpg')}}" alt="Jhon Obando" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Jhon Obando</b>
                                <label>Software Developer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="11 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/John Chisco.png')}}" alt="John Chisco" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>John Chisco</b>
                                <label>Infrastructure Leader</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="12 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Nicol Gomez.jpg')}}" alt="Nicol Gómez" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Nicol Gómez</b>
                                <label>Software Developer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="13 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{asset('/imagenes/equipo/cristian parada.jpg')}}" alt="Cristian Parada" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Cristian Parada</b>
                                <label>Software Developer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="14 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/osmi otalora.jpg')}}" alt="Osmi Otalora" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Osmi Otalora</b>
                                <label>Software Developer Sr.</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="15 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Juan Ramirez.jpg')}}" alt="Juan Ramirez" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Juan Ramirez</b>
                                <label>Desarrollador .Net</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="16 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/David Lozano.jpg')}}" alt="David Lozano" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>David Lozano</b>
                                <label>Software Developer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="17 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/David Torres.png')}}" alt="David Torres" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>David Torres</b>
                                <label>Sofware Developer Sr.</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="18 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Juan Leon.png')}}" alt="Juan Leon" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Juan Leon</b>
                                <label>Software Developer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="19 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Milton Beltran.jpg')}}" alt="Milton Beltran" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Milton Beltran</b>
                                <label>Database Administrator</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="20 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Andres Ortiz.jpg')}}" alt="Edgar Ortiz" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Edgar Ortiz</b>
                                <label>Infrastructure Analyst</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="21 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Ramon Aburto.jpg')}}" alt="Ramon Aburto" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Ramon Aburto</b>
                                <label>Quality Assurance</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="22 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Orlish Guido.jpg')}}" alt="Orlish Guido" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Orlish Guido</b>
                                <label>Digital Product Designer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="23 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Sasha Torres.jpg')}}" alt="Sasha Torres" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Sasha Torres</b>
                                <label>Senior Graphic Designer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="24 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Laura Holguin.png')}}" alt="Laura Holguin" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Laura Holguin </b>
                                <label>Jr. Graphic Designer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="25 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Julian Barriga.jpg')}}" alt="Julian Barriga" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Julian Barriga</b>
                                <label>Social Media Officer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="26 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Melissa Albares.png')}}" alt="Melissa Álvarez" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Melissa Álvarez</b>
                                <label>Scrum Master</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="27 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Maria Fernanda.jpeg')}}" alt="Maria Ospina" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Maria Ospina</b>
                                <label>Social Media Officier</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="28 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Angela Parrales.png')}}" alt="Ánguela Parrales" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Ánguela Parrales</b>
                                <label>Sr. Audiovisual Specialist</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="29 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Nathalie Gomez.jpg')}}" alt="Nathalie Gómez" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Nathalie Gómez</b>
                                <label>Graphic Designer</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="30 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Camila Ossa.jpg')}}" alt="Camila Ossa" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Camila Ossa</b>
                                <label>Digital Product Designer Senior</label>
                            </div>
                        </div>
                        <div class="swiper-slide" aria-label="31 / 31" style="width: 202px; margin-right: 30px;">
                            <div class="card">
                                <img src="{{ asset('/imagenes/equipo/Felipe Torres.jpg')}}" alt="Felipe Torres" class="w-100 object-fit-cover rounded-2 mb-2" style="aspect-ratio: 1 / 1; filter: grayscale(1);">
                                <b>Felipe Torres</b>
                                <label>Audiovisual Officer</label>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-clikable swiper-pagination-bullets swiper-pagination-horizontal ">
                        <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slider 1"></span>
                    </div>
                    <span class="swiper-notification" aria-label="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
        
    </div>
    @include('components.form')
    @include('templates.footer')



</body>
</html>

