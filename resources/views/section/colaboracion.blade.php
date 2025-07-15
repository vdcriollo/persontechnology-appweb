<section class="section-coporation">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="rounded-3 border border-1 position-relative overflow-hidden">
                    <div class="box-linear-animation">
                        <div class="p-lg-8 p-md-6 p-3">
                            <div class="d-flex align-items-center">
                                <svg class="text-primary-2 me-2" xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                                    <circle cx="2.5" cy="3" r="2.5" fill="#A8FF53" />
                                </svg>
                                <span class="text-linear-4 d-flex align-items-center"> Colaboración  </span>
                            </div>
                            <h3 class="fw-medium">
                                Más de +500 <span class="text-300">clientes satisfechos </span> confían en <span class="text-300">Person Technology</span>
                            </h3>
                            <div class="my-5 border border-1 rounded-2 p-3">
                                <!-- Carausel Scroll -->
                                <div class="carouselTicker carouselTicker-left position-relative z-1">
                                    <ul class="carouselTicker__list m-0">
                                        <li class="carouselTicker__item">
                                            <img src="{{ asset('assets/imgs/home-page-2/clients/cliente1.png') }}" class="img-fluid" alt="">
                                        </li>
                                        <li class="carouselTicker__item">
                                            <img src="{{ asset('assets/imgs/home-page-2/clients/cliente2.png') }}" class="img-fluid" alt="">
                                        </li>
                                        <li class="carouselTicker__item">
                                            <img src="{{ asset('assets/imgs/home-page-2/clients/cliente3.png') }}" class="img-fluid" alt="">
                                        </li>
                                        <li class="carouselTicker__item">
                                            <img src="{{ asset('assets/imgs/home-page-2/clients/cliente4.png') }}" class="img-fluid" alt="">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="{{ asset('assets/imgs/home-page-2/clients/cliente5.png') }}" class="img-fluid" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="carouselTicker carouselTicker-right position-relative z-1">
                                    <ul class="carouselTicker__list m-0">
                                        <li class="carouselTicker__item">
                                            <img src="{{ asset('assets/imgs/home-page-2/clients/cliente6.png') }}" class="img-fluid" alt="">
                                        </li>
                                        <li class="carouselTicker__item">
                                            <img src="{{ asset('assets/imgs/home-page-2/clients/cliente7.png') }}" class="img-fluid" alt="">
                                        </li>
                                        <li class="carouselTicker__item">
                                            <img src="{{ asset('assets/imgs/home-page-2/clients/cliente8.png') }}" class="img-fluid" alt="">
                                        </li>
                                        <li class="carouselTicker__item">
                                            <img src="{{ asset('assets/imgs/home-page-2/clients/cliente9.png') }}" class="img-fluid" alt="">
                                        </li>
                                        <li class="carouselTicker__item">
                                            <img src="{{ asset('assets/imgs/home-page-2/clients/cliente10.png') }}" class="img-fluid" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                                 <div class="d-flex align-items-stretch">
                                    <picture class="d-flex align-items-stretch">
                                        <img 
                                        src="{{ asset('logo.png') }}" 
                                        class="img-fluid img-thumbnail h-100" 
                                        style="object-fit: contain;" 
                                        alt="Person Technology"
                                        >
                                    </picture>
                                </div>

                                <div class="d-flex flex-column gap-3">
                                    @if($empresa?->correo)
                                        <a href="mailto:{{ $empresa->correo }}" class="d-flex align-items-center">
                                            <i class="ri-mail-fill me-2"></i>
                                            <span class="text-300">Email:
                                                <span class="text-secondary-2">{{ $empresa->correo }}</span>
                                            </span>
                                        </a>
                                    @endif

                                    @if($empresa?->telefono)
                                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $empresa->telefono) }}" class="d-flex align-items-center">
                                            <i class="ri-phone-fill me-2"></i>
                                            <span class="text-300">WhatsApp/Voz:
                                                <span class="text-secondary-2">{{ $empresa->telefono }}</span>
                                            </span>
                                        </a>
                                    @endif

                                    @if($empresa?->direccion)
                                        <a href="#" class="d-flex align-items-center">
                                            <i class="ri-map-pin-fill me-2"></i>
                                            <span class="text-300">Ubicación:
                                                <span class="text-secondary-2">{{ $empresa->direccion }}</span>
                                            </span>
                                        </a>
                                    @endif
                                </div>


                            </div>
                        </div>
                        <div class="position-absolute d-none d-md-block decorate">
                            <div class="rotateme">
                                <div class="circle-1-1"></div>
                                <div class="circle-1-2 position-absolute top-50 start-50 translate-middle">
                                    <svg class="mb-5 position-absolute bottom-0 start-0" xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#636366" />
                                    </svg>
                                </div>
                                <div class="circle-1-3 position-absolute top-50 start-50 translate-middle ">
                                    <svg class="mb-3 position-absolute bottom-0 end-0" xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                        <circle cx="4.5" cy="4.5" r="4.5" fill="#636366" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-lg-0 pt-5">
                <div class="bg-3 rounded-3 border border-1 p-md-6 p-3 position-relative h-100 overflow-hidden">
                    <div class="d-flex align-items-center">
                        <svg class="text-primary-2 me-2" xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                            <circle cx="2.5" cy="3" r="2.5" fill="#A8FF53" />
                        </svg>
                        <span class="text-linear-4 d-flex align-items-center">Proyectos recientes </span>
                    </div>
                    <div class="h-100 position-relative">
                        <ul class="ps-3 d-flex flex-column justify-content-around h-100 position-relative">
                            <li class="position-relative z-1">
                                <div class="d-flex align-items-center gap-2">
                                    {{-- <p class="text-300 text-nowrap">Web:</p> --}}
                                    <span class="text-dark">Página institucional a medida para GAD Chiguaza</span>
                                </div>
                            </li>
                            <li class="position-relative z-1">
                                <div class="d-flex align-items-center gap-2">
                                    {{-- <p class="text-300 text-nowrap">Full Stack:</p> --}}
                                    <span class="text-dark">Sistema financiero para control de créditos – Cooperativa Credimundo</span>
                                </div>
                            </li>
                            <li class="position-relative z-1">
                                <div class="d-flex align-items-center gap-2">
                                    {{-- <p class="text-300 text-nowrap">IoT:</p> --}}
                                    <span class="text-dark">Paradas inteligentes – Monitoreo de rutas en tiempo real con geocercas</span>
                                </div>
                            </li>
                            <li class="position-relative z-1">
                                <div class="d-flex align-items-center gap-2">
                                    {{-- <p class="text-300 text-nowrap">Movilidad:</p> --}}
                                    <span class="text-dark">Órdenes de movilización – Gestión y control para Ecuaparqueo</span>
                                </div>
                            </li>
                            <li class="position-relative z-1">
                                <div class="d-flex align-items-center gap-2">
                                    {{-- <p class="text-300 text-nowrap">Web/App:</p> --}}
                                    <span class="text-dark">Sistema de generación de cartas digitales – Proyecto multiplataforma para CACTU</span>
                                </div>
                            </li>
                        </ul>
                        <div class="line-left position-absolute border-start z-0"></div>
                    </div>

                    <div class="bg-overlay position-absolute bottom-0 start-0 z-1"></div>
                </div>
            </div>
        </div>
    </div>
</section>