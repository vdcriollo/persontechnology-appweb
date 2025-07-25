@extends('layouts.client')

@section('content')
<section id="portfolio" class="section-experience pt-130">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1">
                <div class="p-lg-8 p-md-6 p-3 position-relative z-1">
                    <div class="d-flex align-items-center">
                        <i class="ri-smartphone-line fs-5 text-primary-2 me-2"></i>
                        <span class="text-linear-4 d-flex align-items-center">Desarrollo de Apps</span>
                    </div>
                    <h3>
                        +{{ \Carbon\Carbon::now()->year - 2017 }}
                        <span class="text-300">años creando</span>
                        experiencias móviles
                        <span class="text-300">intuitivas y de alto impacto</span>
                    </h3>

                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="d-flex flex-column gap-2">
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon-6.svg') }}" alt="React Native" />
                                        <div class="d-flex flex-column ms-2 w-100">
                                            <h5 class="mb-1">React</h5>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 98%;"></div>
                                            </div>
                                            <small class="text-muted mt-1">98%</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/imgs/home-page-2/experience/flutter.svg') }}" alt="Flutter" />
                                        <div class="d-flex flex-column ms-2 w-100">
                                            <h5 class="mb-1">Flutter</h5>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 94%;"></div>
                                            </div>
                                            <small class="text-muted mt-1">94%</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon-4.svg') }}" alt="JavaScript" />
                                        <div class="d-flex flex-column ms-2 w-100">
                                            <h5 class="mb-1">JavaScript</h5>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 92%;"></div>
                                            </div>
                                            <small class="text-muted mt-1">92%</small>
                                        </div>
                                    </div>
                                </div>

                                
                                
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon-2.svg') }}" alt="Firebase" />
                                        <div class="d-flex flex-column ms-2 w-100">
                                            <h5 class="mb-1">Firebase</h5>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 88%;"></div>
                                            </div>
                                            <small class="text-muted mt-1">88%</small>
                                        </div>
                                    </div>
                                </div>

                                
                                
                            </div>
                        </div>

                        <div class="col-lg-8 ps-lg-5 mt-5 mt-lg-0">
                            <h6 class="text-linear-4">Aplicaciones móviles intuitivas y de alto rendimiento para Android e iOS. Creamos experiencias que conectan con tus usuarios.</h6>
                            <ul class="list-unstyled">
                                <li class="text-dark mb-3">
                                    <i class="ri-smartphone-line text-success me-2"></i>
                                    Desarrollo nativo y multiplataforma con tecnologías como Flutter y React Native.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-user-smile-line text-success me-2"></i>
                                    Diseños centrados en la experiencia del usuario con interfaces modernas y accesibles.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-link-line text-success me-2"></i>
                                    Integración con servicios como GPS, notificaciones push, autenticación, pasarelas de pago y APIs externas.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-upload-cloud-line text-success me-2"></i>
                                    Despliegue y publicación en App Store y Google Play, cumpliendo con las políticas de ambas plataformas.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-tools-line text-success me-2"></i>
                                    Mantenimiento evolutivo y actualización de funcionalidades post-lanzamiento.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <img class="position-absolute top-0 start-0 z-0" src="{{ asset('assets/imgs/home-page-2/services/bg.png') }}" alt="Person Technology" />
            </div>
        </div>
    </div>
</section>

<section class="section-experience pt-5 pb-3">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1">
                <div class="row mt-8">
                    <div class="col-lg-8 mx-md-auto text-center">
                        <h2 class="fs-2 fw-normal mb-8">
                            Preguntas Frecuentes sobre <span class="text-linear-4">{Desarrollo de Apps}</span><span class="flicker">_</span>
                        </h2>

                        <div class="accordion">
                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqApp1">
                                        <i class="ri-smartphone-line text-primary-2 fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Qué tipo de apps desarrollan?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqApp1" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Creamos apps móviles nativas y multiplataforma para sectores como salud, educación, logística, ventas y más.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqApp2">
                                        <i class="ri-rocket-line text-success fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿En qué plataformas pueden lanzarse?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqApp2" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Publicamos tus apps en App Store (iOS) y Google Play (Android), asegurando cumplimiento con las normativas.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqApp3">
                                        <i class="ri-money-dollar-circle-line text-warning fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Cuánto cuesta desarrollar una app?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqApp3" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Depende de la complejidad, funcionalidades y plataformas. Contáctanos para una cotización personalizada.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqApp4">
                                        <i class="ri-global-line text-info fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Puedo administrar el contenido desde una plataforma web?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqApp4" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Sí, desarrollamos paneles administrativos web para gestionar usuarios, contenido, estadísticas y más.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqApp5">
                                        <i class="ri-refresh-line text-danger fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Brindan soporte y actualizaciones?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqApp5" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Sí. Ofrecemos soporte técnico, actualizaciones de seguridad y mejoras evolutivas según las necesidades del negocio.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>           
            </div>
        </div>
    </div>
</section>

@include('section.contacto')
@endsection
