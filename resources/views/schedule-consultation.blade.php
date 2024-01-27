@extends('layouts.master')
@section('title') Schedule Consultation | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Book a consultation to explore our solar panel energy, energy-efficient solutions, and energy storage options. Start your journey to sustainable power today.">
@endsection
@section('content')

@include('components.sections.banner', 
[
    'imagen' => 'images/Main/1-schedule.avif',
    'titulo' => null, 
    'subtitulo' => __("translations.Schedule Consultation"),
])

@include('components.sections.hero-text-black', 
[
    'text_black' => __("translations.hero-title-red"),
])

<div class="background-form-partner lazyload" style="background-image: var(--bkg-form-image-4) !important;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="div-bg-form-schedule-consultation">
                    <h6 class="text-title-tv text-center">{{__("translations.Tell us")}}<span class="yellow-text">!</span></h6>
                    <p class="text-form-tv mt-4">{{__("translations.schedule-text")}}</p>
                    <div class="container p-0"><p class="title-hero-left mt-5">{{__("translations.Your Information")}}</p></div>
                    <form action="/schedule-consultation-form" method="POST" class="w-100 mt-3">
                        @csrf
                        <div class="mb-4">
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="firstName" placeholder="{{__("translations.First Name")}}" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="lastName" placeholder="{{__("translations.Last Name")}}" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control bg-input-form border-radius-2px" name="email" placeholder="{{__("translations.Email Address")}}" required>
                        </div>
                        <div class="mb-4">
                            <input type="phone" class="form-control bg-input-form border-radius-2px" name="phone" placeholder="{{__("translations.Phone Number")}}" required>
                        </div>
                        <div class="mb-4">
                            <select class="form-control bg-input-form border-radius-2px pt-2 pb-2" name="interested_in">
                                <option selected disabled>{{__("translations.interested")}}</option>
                                <option value="Solar Energy">{{__("translations.Solar Energy")}}</option>
                                <option value="Energy Storage">{{__("translations.Energy Storage")}}</option>
                                <option value="Roofing">{{__("translations.Roofing")}}</option>
                                <option value="EV Chargers">{{__("translations.EV Chargers")}}</option>
                                <option value="Energy Efficiency">{{__("translations.Energy Efficiency")}}</option>
                                <option value="AC & Heat Pumps">{{__("translations.AC & Heat Pumps")}}</option>
                            </select>                            
                        </div>
                        <input type="hidden" id="row_new_contador" value="1">
                        <input type="hidden" id="contador_dl" name="contador_dl" value="0">
                        {{-- <div class="text-right mb-2"> --}}
                            {{-- <img src="{{ asset('images/add.png') }}" class="add-icon" alt=""> --}}
                        {{-- </div> --}}
                        <div class="option-container">
                            <div class="row_time">
                                <div class="col-lg-3 pl-0 pr-05 p0-sm">
                                    <input type="date" class="form-control bg-input-form border-radius-2px" name="day_select_0" value="{{ now()->format('Y-m-d') }}" min="{{ now()->format('Y-m-d') }}" required>
                                </div>
                                <div class="col-lg-3 pr-05 p0-sm">
                                    <select class="form-control bg-input-form border-radius-2px pt-2 pb-2 start-time-select" name="start_time_0" required></select>
                                    {{-- <input type="time" class="form-control bg-input-form border-radius-2px" name="start_time_0" id="start_time" placeholder="From --:--" required> --}}
                                </div>
                                <div class="col-lg-3 pl-05 p0-sm">
                                    {{-- <input type="time" class="form-control bg-input-form border-radius-2px" name="end_time_0" id="end_time" placeholder="To --:--" required disabled> --}}
                                    {{-- <select class="form-control bg-input-form border-radius-2px pt-2 pb-2 end-time-select" name="end_time_0" required disabled></select> --}}
                                    <input type="text" class="form-control bg-input-form border-radius-2px pt-2 pbrem end-time-input" name="end_time_0" readonly required>
                                </div>
                                <div class="col-lg-3 p-0">
                                    <select class="form-control bg-input-form border-radius-2px pt-2 pb-2" name="timezone_0" required>
                                        <option value="" selected disabled>{{__("translations.Timezone")}}</option>
                                        <option value="America/Los_Angeles">West Coast, USA</option>
                                        <option value="America/Denver">Center, USA</option>
                                        <option value="America/New_York">East Coast, USA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <p class="text-form-tv mb-4">{{__("translations.warning-text")}} <a data-toggle="modal" data-target="#modal-privacy" href="#">{{__("translations.Privacy Policy")}}</a> {{__("translations.statement-consent")}}</p>
                        <div class="mb-4 mt- form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">{{__("translations.I agree")}}<span class="yellow-text"> *</span></label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-font button-form">{{__("translations.Call me")}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.sections.hero-lead-solarbat-2', 
[
    'imagen' => 'images/Hero/Lead/1-solar-bat.jpg',
    'hero_lead_titulo' => __("translations.hero-lead-title-solarbat-2"), 
    'hero_lead_text' => __("translations.hero-lead-text-solarbat-1"),
    'hero_lead_items' => 
    [
        __("translations.hero-lead-item-solarbat-4"),
        __("translations.hero-lead-item-solarbat-5"),
    ],
    'justify' => 'end',
    'order' => 'order-2',
])

<div class="section-fullscreen section-footer-1 bg-mobile-help bg-position-xleft bg-image parallax" data-bg-src="{{ asset('images/Footer/banner-1/2.avif') }}">
    <div class="bg-effect-black banner-text-flex padding-y-50">
        <h3 class="text-title-tv text-center-md text-center-sm">{{ __("translations.We are here to help") }}<span class="yellow-text">!</span></h3>
        <p class="text-subtitle-tv padding-y-10">{{ __("translations.Footer Subtitle") }}</p>
        <a class="button button-md button-outline-grey-2 border-radius-2px margin-top-20 text-inherit" href="https://wa.me/13052046134" target="_blank">{{ __("translations.I need your help") }}</a>
    </div>
</div>

@include('components.sections.banner-footer-2', 
[
    'imagen' => 'images/Footer/banner-1/icon/icon.png', 
    'banner_titulo1' => __("translations.More Solar Less CO2"), 
    'banner_titulo2' => __("translations.We can make a difference"), 
    'banner_texto' => __("translations.description-banner-footer-2")
])

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            var contador_dl = parseInt($("#contador_dl").val());
            $('.add-icon').click(function () {
                var contador = parseInt($("#row_new_contador").val());
                // <div class="col-lg-3 p-0">
                // <select class="form-control bg-input-form border-radius-2px pt-2 pb-2" name="day_select_${contador_dl + 1}">
                //     <option selected disabled>Select Day</option>
                //     <option value="MON">MON</option>
                //     <option value="TUE">TUE</option>
                //     <option value="WED">WED</option>
                //     <option value="THU">THU</option>
                //     <option value="FRI">FRI</option>
                // </select>
                // </div> 
                var today = new Date();
                var year = today.getFullYear();
                // JavaScript cuenta los meses de 0 a 11, por lo que necesitas sumar 1 al mes actual
                var month = today.getMonth() + 1;
                var day = today.getDate();

                // Formatea el mes y el día para que tengan dos dígitos
                if (month < 10) {
                    month = '0' + month;
                }
                if (day < 10) {
                    day = '0' + day;
                }

                // Crea la cadena de fecha en el formato YYYY-MM-DD
                var formattedDate = year + '-' + month + '-' + day;
                const newRowTime = `
                    <div class="text-right mb-2 row_new_${contador} delete_row" rownew="${contador}">
                        <img data-src="{{ asset('images/delete.png') }}" class="delete-icon-sc lazyload" alt="">
                    </div>
                    <div class="row_time row_new_${contador} delete_row">
                        <div class="col-lg-3 pl-0 pr-05 p0-sm">
                            <input type="date" class="form-control bg-input-form border-radius-2px" name="day_select_${contador}" value="${formattedDate}" min="${formattedDate}" required>
                        </div>
                        <div class="col-lg-3 pr-05 p0-sm">
                            <select class="form-control bg-input-form border-radius-2px pt-2 pb-2 start-time-select" name="start_time_${contador}" required></select>
                        </div>
                        <div class="col-lg-3 pl-05 p0-sm">
                            <input type="text" class="form-control bg-input-form border-radius-2px pt-2 pbrem end-time-input" name="end_time_${contador}" readonly required>
                        </div>
                        <div class="col-lg-3 p-0">
                            <select class="form-control bg-input-form border-radius-2px pt-2 pb-2" name="timezone_${contador}">
                                <option selected disabled>{{__("translations.Timezone")}}</option>
                                <option value="America/Los_Angeles">West Coast, USA</option>
                                <option value="America/Denver">Center, USA</option>
                                <option value="America/New_York">East Coast, USA</option>
                            </select>
                        </div>
                    </>
                `;

                // Oculta el nuevo contenido, agrega con efecto de deslizamiento y fade-in, luego muestra
                var $newRow = $(newRowTime).hide().appendTo('.option-container');
                $newRow.slideDown().fadeIn();

                $("#row_new_contador").val(contador + 1); 
                $("#contador_dl").val(contador_dl + 1); 
            });

            $(document).on('click', '.delete-icon-sc', function () {
                var rownewValue = $(this).closest('.delete_row').attr('rownew');
                console.log("Valor de rownew:", rownewValue);
                
                var $rowToDelete = $(".row_new_" + rownewValue);

                // Aplica efecto de fade-out y luego desliza hacia arriba y elimina el elemento
                $rowToDelete.fadeOut(function () {
                    $rowToDelete.slideUp(function () {
                        $(this).remove();
                    });
                });

                $("#row_new_contador").val(contador_dl - 1); 
            });
        });
    </script>
    
    @if(session('status'))
        <script>
            $(document).ready(function () {
                $('#modal-form-result').modal('show');
            });
        </script>
    @endif
    
    <script src="{{ asset('/js/schedule.js') }}"></script>

    <script>
        // Obtén todos los elementos select con la clase 'start-time-select'
            const startTimeInputs = document.querySelectorAll('.start-time-select');
            // Obtén todos los elementos input con la clase 'end-time-input'
            const endTimeInputs = document.querySelectorAll('.end-time-input');

            // Función para generar opciones de tiempo cada 30 minutos entre las 9:00 AM y las 16:30 PM
            function generateTimeOptions() {
                let options = '';
                for (let hours = 9; hours <= 16; hours++) {
                    for (let minutes = 0; minutes < 60; minutes += 30) {
                        // Si son las 16:30 o menos, agrega la opción
                        if (!(hours === 16 && minutes > 30)) {
                            // Formatea las horas y minutos con ceros a la izquierda si es necesario
                            const formattedHours = String(hours).padStart(2, '0');
                            const formattedMinutes = String(minutes).padStart(2, '0');
                            // Agrega la opción al conjunto de opciones
                            options += `<option value="${formattedHours}:${formattedMinutes}">${formattedHours}:${formattedMinutes}</option>`;
                        }
                    }
                }

                // Establece las opciones en todos los campos de entrada de inicio
                startTimeInputs.forEach(input => {
                    input.innerHTML = options;
                });

                // Agrega un manejador de eventos para todos los campos de entrada de inicio
                startTimeInputs.forEach((input, index) => {
                    input.addEventListener('change', function() {
                        // Obtén el valor seleccionado en el campo de entrada de inicio
                        const selectedStartTime = input.value;
                        // Calcula el end_time agregando 30 minutos al horario de inicio
                        const [hours, minutes] = selectedStartTime.split(':');
                        const endHours = (parseInt(hours) + (parseInt(minutes) === 30 ? 1 : 0)).toString().padStart(2, '0');
                        const endMinutes = (parseInt(minutes) === 0) ? '30' : '00';
                        // Muestra el end_time en el campo de entrada de fin correspondiente
                        endTimeInputs[index].value = `${endHours}:${endMinutes}`;
                    });
                });
            }

            // Llama a la función para generar las opciones de tiempo al cargar la página
            generateTimeOptions();

    </script>
@endsection