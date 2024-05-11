<div class="content-contact" style="--bg-image: url('{{asset('/imagenes/contact.png')}}')">

    <div class="container-expanded">

        <div class="row max-0 aos-init aos-animate" id="contact">

            <div class="col-12 col-lg-6 mt-3 p-5 mx-auto me-md-0 mb-6 pb-lg-6" >
                <form action=""  class="form-contact max-auto" id="container-formulario">
                    <input type="text" placeholder="Nombre de empresa" class="ingresar-dato" >
                    <input type="text" placeholder="Nombre y Apellido" class="ingresar-dato" >
                    <input type="email" placeholder="Correo Electrónico" class="ingresar-dato">
                    <input type="tel" placeholder="Teléfono" class="ingresar-dato" >
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check opcion ">
                                <input class="form-check-input" type="checkbox" value="" id="option-4">
                                <label class="form-check-label" for="option-4">
                                    @lang('contact-option4')
                                </label>
                            </div>
                            <div class="form-check opcion">
                                <input class="form-check-input" type="checkbox" name="select-radio" id="option-3 ">
                                <label class="form-check-label" for="option-3">
                                    @lang('contact-option3')
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check opcion">
                                <input class="form-check-input" type="checkbox" name="select-radio" id="option-2 ">
                                <label class="form-check-label" for="option-2">
                                    @lang('contact-option2')
                                </label>
                            </div>
                            <div class="form-check opcion">
                                <input class="form-check-input" type="checkbox" name="select-radio" id="option-1 ">
                                <label class="form-check-label" for="option-1">
                                    @lang('contact-option1')
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check opcion">
                                <input class="form-check-input" type="checkbox" name="select-radio" id="option-5 ">
                                <label class="form-check-label" for="option-5">
                                    @lang('conatact-option5')
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class="text-custom opacity-100 mb-4">
                    <div class="form-check opcion mb-4">
                        <input class="form-check-input" type="checkbox" id="treatment-policies " >
                        <label class="form-check-label" for="treatment-policies">
                            @lang('corfim')
                            <a href="#" class="text-inherint fw-bolder text-decoration-none">@lang('condition')</a>
                        </label>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn fz-normal" value="Trabajemos" >
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6" id="imagen-contacto">
                <img src="{{asset('/imagenes/contact.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
