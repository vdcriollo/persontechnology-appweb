@extends('layouts.client')

@section('content')
<section id="portfolio" class="section-experience pt-130">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1">
                <div class="p-lg-8 p-md-6 p-3 position-relative z-1">
                    <div class="d-flex align-items-center">
                        <i class="ri-code-s-slash-line fs-5 text-primary-2 me-2"></i>
                        <span class="text-linear-4 d-flex align-items-center">Desarrollo Web</span>
                    </div>

                    <h3>
                        +{{ \Carbon\Carbon::now()->year - 2017 }}
                        <span class="text-300">años de </span>
                        experiencia
                        <span class="text-300">
                            creando plataformas digitales a medida
                        </span>
                    </h3>
                   
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="d-flex flex-column gap-2">
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/imgs/home-page-2/experience/javascript.svg') }}" alt="JavaScript" />
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
                                        <img src="{{ asset('assets/imgs/home-page-2/experience/laravel.svg') }}" alt="Laravel" />
                                        <div class="d-flex flex-column ms-2 w-100">
                                            <h5 class="mb-1">Laravel</h5>
                                            <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 98%;"></div>
                                            </div>
                                            <small class="text-muted mt-1">98%</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/imgs/home-page-2/experience/postgresql.svg') }}" alt="PostgreSQL" />
                                        <div class="d-flex flex-column ms-2 w-100">
                                            <h5 class="mb-1">PostgreSQL</h5>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 95%;"></div>
                                            </div>
                                            <small class="text-muted mt-1">95%</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/imgs/home-page-2/experience/javascript.svg') }}" alt="React" />
                                        <div class="d-flex flex-column ms-2 w-100">
                                            <h5 class="mb-1">React</h5>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 93%;"></div>
                                            </div>
                                            <small class="text-muted mt-1">93%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 ps-lg-5 mt-5 mt-lg-0">
                            <h6 class="text-linear-4">Creamos sitios web modernos, seguros y optimizados para cualquier dispositivo. Impulsa tu marca con soluciones hechas a tu medida.</h6>
                            <ul class="list-unstyled">
                                <li class="text-dark mb-3">
                                    <i class="ri-layout-4-line text-success me-2"></i>
                                    Diseñamos plataformas web a medida que se adaptan a los procesos y objetivos específicos de cada cliente.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-shield-check-line text-success me-2"></i>
                                    Desarrollamos sistemas escalables y seguros con tecnologías modernas y arquitectura robusta.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-device-line text-success me-2"></i>
                                    Aseguramos una experiencia de usuario (UX) optimizada y diseños atractivos (UI) en todos los dispositivos.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-function-line text-success me-2"></i>
                                    Implementamos funcionalidades avanzadas como autenticación, gestión de usuarios, pasarelas de pago, notificaciones y más.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-customer-service-2-line text-success me-2"></i>
                                    Brindamos soporte post-lanzamiento, mantenimiento continuo y mejoras basadas en métricas reales.
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
                            Preguntas Frecuentes sobre <span class="text-linear-4">{Desarrollo Web}</span><span class="flicker">_</span>
                        </h2>

                        <div class="accordion">
                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqOne">
                                        <i class="ri-layout-4-line text-primary-2 fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Qué incluye una solución web personalizada?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqOne" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Incluye diseño UI/UX, desarrollo front-end y back-end, base de datos, integraciones (API, pagos, notificaciones), pruebas, documentación y soporte post-lanzamiento.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqTwo">
                                        <i class="ri-time-line text-warning fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Cuánto tiempo toma desarrollar una plataforma web?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqTwo" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Depende del alcance del proyecto, pero un sistema completo suele tomar entre 6 y 12 semanas desde la planificación hasta el despliegue.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqThree">
                                        <i class="ri-bar-chart-line text-success fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Puedo escalar la plataforma en el futuro?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqThree" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Sí. Todas nuestras plataformas están construidas con arquitectura escalable, listas para adaptarse al crecimiento del negocio o nuevas funcionalidades.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqFour">
                                        <i class="ri-code-s-slash-line text-info fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Qué tecnologías usan para estas soluciones?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqFour" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Utilizamos JavaScript, React, Laravel, PostgreSQL, Node.js, entre otras, asegurando rendimiento, seguridad y facilidad de mantenimiento.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqFive">
                                        <i class="ri-customer-service-2-line text-danger fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Ofrecen mantenimiento y soporte técnico?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqFive" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Sí. Ofrecemos mantenimiento correctivo, evolutivo y preventivo, así como atención a incidencias y mejoras a demanda.
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
