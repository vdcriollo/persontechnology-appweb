@extends('layouts.client') 

@section('content')

<section id="services" class="section-service-2 pt-130">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1 p-lg-5 p-1 p-md-4">
                <div class="position-relative z-1">
                    <div class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <svg class="text-primary-2 me-2" xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                                <circle cx="2.5" cy="3" r="2.5" fill="#A8FF53" />
                            </svg>
                            <span class="text-linear-4 d-flex align-items-center"> Proceso </span>
                        </div>
                       <h3 class="my-3 text-300">
                            Nuestro proceso de trabajo <span class="text-linear-4">{para soluciones de calidad}</span><span class="flicker">_</span>
                        </h3>

                    </div>

                    <div class="container mt-5">
                        <div class="row g-4">
                            <!-- Paso 1 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card-servies-2 rounded-2 h-100 hover-up d-flex flex-column justify-content-between">
                                    <div>
                                        <i class="ri-number-1 fs-4 text-primary-2"></i>
                                        <h6 class="my-3 fw-medium">Descubrimiento</h6>
                                        <p class="fs-7 text-300 fw-regular">
                                            Exploramos junto al cliente los problemas y oportunidades mediante entrevistas, análisis del entorno y metodologías de descubrimiento.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Paso 2 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card-servies-2 rounded-2 h-100 hover-up d-flex flex-column justify-content-between">
                                    <div>
                                        <i class="ri-number-2 fs-4 text-primary-2"></i>
                                        <h6 class="my-3 fw-medium">Requerimientos</h6>
                                        <p class="fs-7 text-300 fw-regular">
                                            Transformamos las necesidades en requerimientos claros y estructurados, usando herramientas colaborativas y enfoque funcional.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Paso 3 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card-servies-2 rounded-2 h-100 hover-up d-flex flex-column justify-content-between">
                                    <div>
                                        <i class="ri-number-3 fs-4 text-primary-2"></i>
                                        <h6 class="my-3 fw-medium">Diseño</h6>
                                        <p class="fs-7 text-300 fw-regular">
                                            Prototipamos y validamos soluciones funcionales y centradas en el usuario, asegurando estética y usabilidad.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Paso 4 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card-servies-2 rounded-2 h-100 hover-up d-flex flex-column justify-content-between">
                                    <div>
                                        <i class="ri-number-4 fs-4 text-primary-2"></i>
                                        <h6 class="my-3 fw-medium">Desarrollo</h6>
                                        <p class="fs-7 text-300 fw-regular">
                                            Construimos soluciones escalables y de calidad con metodologías ágiles, control de versiones y buenas prácticas.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Paso 5 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card-servies-2 rounded-2 h-100 hover-up d-flex flex-column justify-content-between">
                                    <div>
                                        <i class="ri-number-5 fs-4 text-primary-2"></i>
                                        <h6 class="my-3 fw-medium">Despliegue</h6>
                                        <p class="fs-7 text-300 fw-regular">
                                            Entregamos la solución validada, incluyendo formación, documentación técnica y pruebas con el cliente.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Paso 6 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card-servies-2 rounded-2 h-100 hover-up d-flex flex-column justify-content-between">
                                    <div>
                                        <i class="ri-number-6 fs-4 text-primary-2"></i>
                                        <h6 class="my-3 fw-medium">Mantenimiento</h6>
                                        <p class="fs-7 text-300 fw-regular">
                                            Brindamos soporte continuo, aplicamos mejoras evolutivas y realizamos evaluaciones periódicas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center pt-60">
                            <p class="text-300">
                                ¿Listo para trabajar con una <span class="text-dark">metodología eficiente y transparente?</span><br />
                                <a href="#contacto" class="text-primary-2">Hablemos ahora.</a>
                            </p>
                        </div>
                    </div>
                </div>
                <img class="position-absolute top-0 start-0 z-0" src="{{ asset('assets/imgs/home-page-2/services/bg.png') }}" alt="Person Technology" />
            </div>
        </div>
    </div>
</section>




{{-- experiencia --}}
@include('section.colaboracion')



@endsection
