@extends('layouts.client')

@section('content')
<section id="portfolio" class="section-experience pt-130">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1">
                <div class="p-lg-8 p-md-6 p-3 position-relative z-1">
                    <div class="d-flex align-items-center">
                        <i class="ri-stack-line fs-5 text-primary-2 me-2"></i>
                        <span class="text-linear-4 d-flex align-items-center">Desarrollo Full Stack</span>
                    </div>
                    <h3>
                        +{{ \Carbon\Carbon::now()->year - 2017 }}
                        <span class="text-300">años desarrollando</span>
                        soluciones completas
                        <span class="text-300">desde el frontend al backend</span>
                    </h3>

                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="d-flex flex-column gap-2">
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon-1.svg') }}" alt="Next.js" />
                                        <div class="d-flex flex-column ms-2 w-100">
                                            <h5 class="mb-1">Next Js</h5>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 99%;"></div>
                                            </div>
                                            <small class="text-muted mt-1">99%</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/imgs/home-page-2/experience/laravel.svg') }}" alt="Laravel" />
                                        <div class="d-flex flex-column ms-2 w-100">
                                            <h5 class="mb-1">Laravel</h5>
                                            <div class="progress" style="height: 5px;">
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
                                        <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon-5.svg') }}" alt="Tailwind" />
                                        <div class="d-flex flex-column ms-2 w-100">
                                            <h5 class="mb-1">Tailwind</h5>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 90%;"></div>
                                            </div>
                                            <small class="text-muted mt-1">90%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 ps-lg-5 mt-5 mt-lg-0">
                            <h6 class="text-linear-4">Construimos sistemas robustos y escalables, desde la interfaz de usuario hasta el backend, garantizando una experiencia tecnológica completa.</h6>
                            <ul class="list-unstyled">
                                <li class="text-dark mb-3">
                                    <i class="ri-code-s-slash-line text-success me-2"></i>
                                    Desarrollo integral de frontend y backend utilizando frameworks modernos.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-git-branch-line text-success me-2"></i>
                                    Diseño de APIs RESTful y arquitectura basada en microservicios.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-database-2-line text-success me-2"></i>
                                    Gestión de bases de datos relacionales y no relacionales, con alto rendimiento.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-exchange-funds-line text-success me-2"></i>
                                    Integración con servicios de terceros, pagos, autenticación y más.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-cloud-line text-success me-2"></i>
                                    Deploy automatizado en entornos de nube como AWS, DigitalOcean o Vercel.
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
                            Preguntas Frecuentes sobre <span class="text-linear-4">{Desarrollo Full Stack}</span><span class="flicker">_</span>
                        </h2>

                        <div class="accordion">
                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqFS1">
                                        <i class="ri-stack-line text-primary-2 fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Qué es una solución Full Stack?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqFS1" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Es una aplicación desarrollada tanto en el frontend (interfaz de usuario) como en el backend (servidores, lógica, base de datos).
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqFS2">
                                        <i class="ri-speed-up-line text-success fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Cuáles son los beneficios de una solución Full Stack?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqFS2" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Mayor control, velocidad de desarrollo, coherencia en arquitectura, integración eficiente y escalabilidad.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqFS3">
                                        <i class="ri-code-line text-warning fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Qué tecnologías utilizan para el desarrollo Full Stack?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqFS3" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Laravel, Node.js, Vue.js, React, PostgreSQL, Redis, entre otras según el proyecto.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqFS4">
                                        <i class="ri-building-4-line text-danger fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Puedo escalar mi plataforma más adelante?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqFS4" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Sí, diseñamos arquitecturas modulares y escalables para facilitar el crecimiento continuo del sistema.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqFS5">
                                        <i class="ri-file-text-line text-info fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Ofrecen documentación y soporte?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqFS5" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Sí, entregamos documentación técnica y ofrecemos soporte continuo para garantizar la operatividad del sistema.
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
