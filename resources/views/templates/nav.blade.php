<nav class="navbar navbar-expand-md main-nav" id="navbar">
    <div class="container">
        <div class="col-12 col-lg-10 mx-lg-auto d-flex align-items-center pe-lg-4" id="container">

            <div class="w-100">
                <div class="navbar-branch d-flex align-items-center" id="logo">
                    <img src="{{asset('/imagenes/logo.svg')}}" alt="Logo" class=" ms-lg-0 img-120">
                </div>
            </div>

            <div class="w-100">
                <li></li>
                <li></li>
                <li></li>
            </div>

            <div class="bn" id="btn-menu">
                <span></span>
            </div>


            <div id="nav">
                <ul class="navbar-nav px-md-3" id="menu">
                    <div class="nav-item " >
                        <a href="{{route('home')}}" class=" active">{{ __('Home')}}</a>
                    </div>

                    <div class="nav-item " >
                        <a href="{{route('hub')}}" class=" active">{{ __('Hub')}}</a>
                    </div>

                    <div class="dropdown show nav-item  ">
                        <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('Services')}}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">{{ __('Development of e-commerce and informative websites')}}</a>
                            <a class="dropdown-item" href="#">{{ __('Custom software delepment and automation')}}</a>
                            <a class="dropdown-item" href="#">{{ __('Software outsourcing')}}</a>
                            <a class="dropdown-item" href="#">{{ __('Growth-oriented strategy and marketing')}}</a>
                            <a class="dropdown-item" href="#">{{ __('Marketing Digital')}}</a>
                        </div>
                    </div>

                    <div class="nav-item ">
                        <a href="#container-formulario" class=" active">{{ __('Contact')}}</a>
                    </div>

                    <div class="nav-item " id="idioma">
                        <a href="{{ route('changeLange', ['lang' => app()->getLocale() === 'es' ? 'en' : 'es']) }}">
                            @php
                                $flag = app()->getLocale() === 'es' ? 'https://flagcdn.com/w320/co.png' : 'https://flagcdn.com/w320/us.png'
                            @endphp
                            <img src="{{ $flag }}" alt="idioma">
                        </a>
                    </div>
                </ul>
            </div>

        </div>
    </div>



</nav>
