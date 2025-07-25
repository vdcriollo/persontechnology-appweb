@extends('layouts.client')

@section('content')

<section id="academia" class="section-experience pt-130">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1">
                <div class="p-lg-8 p-md-6 p-3 position-relative z-1">
                    <div class="d-flex align-items-center mb-2">
                        <i class="ri-graduation-cap-line fs-4 text-success me-2"></i>
                        <span class="text-linear-4 fs-5">Academia Full Stack</span>
                    </div>
                    

                    <div class="row mt-5">
                        <div class="col-lg-5">
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-start">
                                    <i class="ri-lightbulb-flash-line text-primary-2 fs-3 me-3"></i>
                                    <div>
                                        <h5 class="mb-1">Aprende desde cero</h5>
                                        <p class="mb-0 text-muted">Contenido orientado a principiantes sin experiencia previa. Explicaciones claras y proyectos reales.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="ri-global-line text-primary-2 fs-3 me-3"></i>
                                    <div>
                                        <h5 class="mb-1">Cursos gratuitos</h5>
                                        <p class="mb-0 text-muted">Acceso 100% libre en <strong>YouTube</strong>, <strong>Facebook</strong> y <strong>TikTok</strong>.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="ri-tools-line text-primary-2 fs-3 me-3"></i>
                                    <div>
                                        <h5 class="mb-1">Tecnologías modernas</h5>
                                        <p class="mb-0 text-muted">JavaScript, Laravel, PostgreSQL, Git, API REST y más, en proyectos reales para el mundo laboral.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="ri-send-plane-line text-primary-2 fs-3 me-3"></i>
                                    <div>
                                        <h5 class="mb-1">Certificación opcional</h5>
                                        <p class="mb-0 text-muted">Estamos trabajando en ofrecer certificados por módulo finalizado (disponible próximamente).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 mt-4 mt-lg-0">
                            <h2 class="fw-bold">
                                +{{ \Carbon\Carbon::now()->year - 2017 }}
                                <span class="text-300">años formando talentos</span><br/>
                                en desarrollo web profesional
                            </h2>
                            <div class="bg-light p-4 rounded-3 shadow-sm">
                                
                                <h4 class="fw-semibold mb-3"><i class="ri-arrow-right-circle-line text-success me-2"></i>¡Empieza gratis ahora!</h4>
                                <p class="mb-3 text-dark">Nuestros cursos están disponibles en las siguientes plataformas:</p>
                                <div class="contact-list">
                                    <p class="text-400 fs-5 mb-2">
                                        <i class="ri-share-forward-fill me-1"></i> Redes sociales
                                    </p>
                                    <div class="d-md-flex d-none gap-3">
                                        @if($empresa->enlace_whatsapp)
                                            <a href="{{ $empresa->enlace_whatsapp }}" target="_blank" title="WhatsApp">
                                                <i class="ri-whatsapp-fill fs-18"></i>
                                            </a>
                                        @endif
                                        @if($empresa->enlace_facebook)
                                            <a href="{{ $empresa->enlace_facebook }}" target="_blank" title="Facebook">
                                                <i class="ri-facebook-circle-fill fs-18"></i>
                                            </a>
                                        @endif
                                        @if($empresa->enlace_instagram)
                                            <a href="{{ $empresa->enlace_instagram }}" target="_blank" title="Instagram">
                                                <i class="ri-instagram-fill fs-18"></i>
                                            </a>
                                        @endif
                                        @if($empresa->enlace_youtube)
                                            <a href="{{ $empresa->enlace_youtube }}" target="_blank" title="YouTube">
                                                <i class="ri-youtube-fill fs-18"></i>
                                            </a>
                                        @endif
                                        @if($empresa->enlace_github)
                                            <a href="{{ $empresa->enlace_github }}" target="_blank" title="GitHub">
                                                <i class="ri-github-fill fs-18"></i>
                                            </a>
                                        @endif
                                        @if($empresa->enlace_tiktok)
                                            <a href="{{ $empresa->enlace_tiktok }}" target="_blank" title="TikTok">
                                                <i class="ri-tiktok-fill fs-18"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="position-absolute top-0 start-0 z-0" src="{{ asset('assets/imgs/home-page-2/services/bg.png') }}" alt="Academia Full Stack" />
            </div>
        </div>
    </div>
</section>

<section class="section-experience pt-5 pb-3">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1">
                <div class="row mt-8">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="fs-2 fw-normal mb-5">
                            Preguntas Frecuentes sobre <span class="text-linear-4">{la Academia}</span><span class="flicker">_</span>
                        </h2>

                        <div class="accordion" id="faqAcademia">
                            <!-- Pregunta 1 -->
                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqA1">
                                        <i class="ri-graduation-cap-line me-2 text-primary-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Los cursos son gratuitos?</p>
                                        <span class="ms-auto arrow icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqA1" class="collapse" data-bs-parent="#faqAcademia">
                                    <p class="px-4 pt-0 text-start card-body">Sí, todos los cursos disponibles en nuestras plataformas son completamente gratuitos y abiertos a todo público.</p>
                                </div>
                            </div>
                            <!-- Pregunta 2 -->
                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqA2">
                                        <i class="ri-youtube-line me-2 text-danger"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Dónde puedo acceder a los cursos?</p>
                                        <span class="ms-auto arrow icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqA2" class="collapse" data-bs-parent="#faqAcademia">
                                    
                                   <div class="contact-list">
                                    <p class="text-400 fs-5 mb-2">
                                        <i class="ri-share-forward-fill me-1"></i> Aqui en nuetsras redes sociales:
                                    </p>
                                    <div class="mx-5 px-5 pb-3">
                                        <div class="d-md-flex d-none gap-3">
                                            @if($empresa->enlace_whatsapp)
                                                <a href="{{ $empresa->enlace_whatsapp }}" target="_blank" title="WhatsApp">
                                                    <i class="ri-whatsapp-fill fs-18"></i>
                                                </a>
                                            @endif
                                            @if($empresa->enlace_facebook)
                                                <a href="{{ $empresa->enlace_facebook }}" target="_blank" title="Facebook">
                                                    <i class="ri-facebook-circle-fill fs-18"></i>
                                                </a>
                                            @endif
                                            @if($empresa->enlace_instagram)
                                                <a href="{{ $empresa->enlace_instagram }}" target="_blank" title="Instagram">
                                                    <i class="ri-instagram-fill fs-18"></i>
                                                </a>
                                            @endif
                                            @if($empresa->enlace_youtube)
                                                <a href="{{ $empresa->enlace_youtube }}" target="_blank" title="YouTube">
                                                    <i class="ri-youtube-fill fs-18"></i>
                                                </a>
                                            @endif
                                            @if($empresa->enlace_github)
                                                <a href="{{ $empresa->enlace_github }}" target="_blank" title="GitHub">
                                                    <i class="ri-github-fill fs-18"></i>
                                                </a>
                                            @endif
                                            @if($empresa->enlace_tiktok)
                                                <a href="{{ $empresa->enlace_tiktok }}" target="_blank" title="TikTok">
                                                    <i class="ri-tiktok-fill fs-18"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                            <!-- Pregunta 3 -->
                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqA3">
                                        <i class="ri-timer-line me-2 text-warning"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Necesito experiencia previa en programación?</p>
                                        <span class="ms-auto arrow icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqA3" class="collapse" data-bs-parent="#faqAcademia">
                                    <p class="px-4 pt-0 text-start card-body">No. Nuestros cursos están diseñados para principiantes y avanzan progresivamente hasta nivel profesional.</p>
                                </div>
                            </div>
                            <!-- Pregunta 4 -->
                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqA4">
                                        <i class="ri-code-s-slash-line me-2 text-info"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Qué tecnologías se enseñan?</p>
                                        <span class="ms-auto arrow icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqA4" class="collapse" data-bs-parent="#faqAcademia">
                                    <p class="px-4 pt-0 text-start card-body">Aprenderás HTML, CSS, JavaScript, React, Laravel, Node.js, Git, APIs REST, PostgreSQL, y más tecnologías del stack moderno.</p>
                                </div>
                            </div>
                            <!-- Pregunta 5 -->
                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqA5">
                                        <i class="ri-chat-smile-2-line me-2 text-success"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Puedo hacer consultas si tengo dudas?</p>
                                        <span class="ms-auto arrow icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqA5" class="collapse" data-bs-parent="#faqAcademia">
                                    <p class="px-4 pt-0 text-start card-body">Sí, puedes dejar tus preguntas en los comentarios o contactarnos por nuestras redes sociales y te responderemos lo más pronto posible.</p>
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
