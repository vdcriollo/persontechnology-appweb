@extends('layouts.client') 

@section('content')


<section class="section-work pt-120 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-lg-auto">
                <div class="text-center">
                    <h3 class="fs-3 mt-3 mb-4 text-dark">
                        Conoce a las personas que lideran <span class="text-linear-4">{Person Technology}</span><span class="flicker">_</span>
                    </h3>

                    <p class="text-300 fs-5">
                        Somos un equipo multidisciplinario comprometido con acercar la tecnología a más personas.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="card-scroll mt-8">
                <div class="cards">

                    <!-- Integrante: David Criollo -->
                    <div class="card-custom">
                        <div class="card__inner bg-3 p-lg-6 p-md-4 p-3">
                            <div class="card__image-container zoom-img position-relative">
                                <img class="card__image" src="{{ asset('assets/imgs/equipo/1.png') }}" alt="David Criollo" />
                            </div>
                             

                            <div class="card__content px-md-4 px-3">
                               <div class="d-flex align-items-center text-secondary-2">
                                    <span class="me-2 text-muted">{</span>
                                    <div class="typewriter">
                                        <h1 class="fs-6 fw-bold mb-0 text-linear-4">David Criollo</h1>
                                    </div>
                                    <span class="ms-2 text-muted">}</span>
                                </div>
                                <p class="text-primary-2 fs-6 mb-2">CEO / Fundador</p>

                                <p class="text-300">Fundador de Person Technology. Dirige la visión estratégica de la empresa y lidera la innovación para el desarrollo de soluciones tecnológicas personalizadas.</p>
                                <p class="text-300">Cuenta con más de 8 años de experiencia liderando proyectos de software e innovación en robótica e IoT. Apasionado por llevar la tecnología a comunidades y sectores desatendidos.</p>
                                <div class="d-flex gap-3 mt-3 align-items-center">
                                    <a href="https://www.facebook.com/criollomikel" class="text-dark fs-4" target="_blank"><i class="ri-facebook-circle-line"></i></a>
                                    <a href="https://www.tiktok.com/@deividcriollo?is_from_webapp=1&sender_device=pc" class="text-dark fs-4" target="_blank"><i class="ri-tiktok-line"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Integrante: Fabián López -->
                    <div class="card-custom">
                        <div class="card__inner bg-3 p-lg-6 p-md-4 p-3">
                            <div class="card__image-container zoom-img position-relative">
                                <img class="card__image" src="{{ asset('assets/imgs/equipo/2.png') }}" alt="Fabián López" />
                            </div>
                            <div class="card__content px-md-4 px-3">
                                <div class="d-flex align-items-center text-secondary-2">
                                    <span class="me-2 text-muted">{</span>
                                    <div class="typewriter">
                                        <h1 class="fs-6 fw-bold mb-0 text-linear-4">Fabián López</h1>
                                    </div>
                                    <span class="ms-2 text-muted">}</span>
                                </div>

                                <p class="text-primary-2 fs-6 mb-2">CTO</p>
                                <p class="text-300">Responsable de la arquitectura tecnológica, gestión de proyectos complejos y supervisión de desarrollo e integraciones técnicas.</p>
                                <p class="text-300">Con amplia experiencia en back-end y cloud, lidera la adopción de nuevas tecnologías en la empresa y la formación de nuevos desarrolladores.</p>
                                <div class="d-flex gap-3 mt-3 align-items-center">
                                    <a href="https://www.facebook.com/fabi.lopez.1466" class="text-dark fs-4" target="_blank"><i class="ri-facebook-circle-line"></i></a>
                                    <a href="https://www.tiktok.com/@fabilopez6756?is_from_webapp=1&sender_device=pc" class="text-dark fs-4" target="_blank"><i class="ri-tiktok-line"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Integrante: Edison Manay -->
                    <div class="card-custom">
                        <div class="card__inner bg-3 p-lg-6 p-md-4 p-3">
                            <div class="card__image-container zoom-img position-relative">
                                <img class="card__image" src="{{ asset('assets/imgs/equipo/3.png') }}" alt="Edison Manay" />
                            </div>
                            <div class="card__content px-md-4 px-3">
                                <div class="d-flex align-items-center text-secondary-2">
                                    <span class="me-2 text-muted">{</span>
                                    <div class="typewriter">
                                        <h1 class="fs-6 fw-bold mb-0 text-linear-4">Edison Manay</h1>
                                    </div>
                                    <span class="ms-2 text-muted">}</span>
                                </div>
                                <p class="text-primary-2 fs-6 mb-2">CDO</p>
                                <p class="text-300">Lidera la experiencia de usuario y diseño digital de productos. Garantiza interfaces intuitivas y consistencia visual en los desarrollos.</p>
                                <p class="text-300">Ha participado en decenas de proyectos UI/UX para startups y empresas públicas. Promotor del diseño centrado en el usuario.</p>
                                <div class="d-flex gap-3 mt-3 align-items-center">
                                    <a href="https://www.facebook.com/edmanay1" class="text-dark fs-4" target="_blank"><i class="ri-facebook-circle-line"></i></a>
                                    <a href="https://www.tiktok.com/@edmanay?is_from_webapp=1&sender_device=pc" class="text-dark fs-4" target="_blank"><i class="ri-tiktok-line"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Integrante: Mauricio Chiliquinga -->
                    <div class="card-custom">
                        <div class="card__inner bg-3 p-lg-6 p-md-4 p-3">
                            <div class="card__image-container zoom-img position-relative">
                                <img class="card__image" src="{{ asset('assets/imgs/equipo/4.png') }}" alt="Mauricio Chiliquinga" />
                            </div>
                            <div class="card__content px-md-4 px-3">
                                <div class="d-flex align-items-center text-secondary-2">
                                    <span class="me-2 text-muted">{</span>
                                    <div class="typewriter">
                                        <h1 class="fs-6 fw-bold mb-0 text-linear-4">Mauricio Chiliquinga</h1>
                                    </div>
                                    <span class="ms-2 text-muted">}</span>
                                </div>
                                <p class="text-primary-2 fs-6 mb-2">CMO</p>
                                <p class="text-300">Responsable del marketing digital, estrategia de marca y posicionamiento de productos tecnológicos en el mercado.</p>
                                <p class="text-300">Especialista en campañas multicanal y comunicación estratégica. Enfocado en generar visibilidad para la marca y fidelización de usuarios.</p>
                                <div class="d-flex gap-3 mt-3 align-items-center">
                                    <a href="https://www.facebook.com/danilo.maury" class="text-dark fs-4" target="_blank"><i class="ri-facebook-circle-line"></i></a>
                                    <a href="https://www.tiktok.com/@persontechnology?is_from_webapp=1&sender_device=pc" class="text-dark fs-4" target="_blank"><i class="ri-tiktok-line"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
 {{-- experiencia --}}
     
 {{-- contacto --}}
        @include('section.contador_estadistica')
@endsection
