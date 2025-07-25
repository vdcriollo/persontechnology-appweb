@extends('layouts.client')

@section('content')
<section id="mantenimiento-soporte" class="section-experience pt-130">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1">
                <div class="p-lg-8 p-md-6 p-3 position-relative z-1">
                    <div class="d-flex align-items-center">
                        <i class="ri-tools-line text-success me-2 fs-4"></i>
                        <span class="text-linear-4 d-flex align-items-center">Mantenimiento y Soporte Técnico</span>
                    </div>
                    

                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="d-flex flex-column gap-3">
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="ri-shield-check-line text-success fs-3"></i>
                                        <div>
                                            <h5 class="mb-1">Soporte Proactivo</h5>
                                            <small class="text-muted">Monitoreo continuo para prevenir fallos antes de que ocurran.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="ri-bug-line text-warning fs-3"></i>
                                        <div>
                                            <h5 class="mb-1">Corrección de Errores</h5>
                                            <small class="text-muted">Solución de bugs críticos en producción o pruebas.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="ri-upload-cloud-line text-info fs-3"></i>
                                        <div>
                                            <h5 class="mb-1">Actualizaciones Seguras</h5>
                                            <small class="text-muted">Actualización de software, plugins o frameworks sin afectar estabilidad.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="technology border border-1 rounded-3 p-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="ri-customer-service-2-line text-danger fs-3"></i>
                                        <div>
                                            <h5 class="mb-1">Atención Personalizada</h5>
                                            <small class="text-muted">Respuestas rápidas vía WhatsApp, correo o videollamada.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 ps-lg-5 mt-5 mt-lg-0">
                            <h3>
                                +{{ \Carbon\Carbon::now()->year - 2017 }}
                                <span class="text-300">años asegurando</span> estabilidad y rendimiento
                                <span class="text-300">en soluciones tecnológicas</span>
                            </h3>
                            <h6 class="text-linear-4">Nos encargamos del mantenimiento para que tú te enfoques en tu negocio</h6>
                            <ul class="list-unstyled">
                                <li class="text-dark mb-3">
                                    <i class="ri-tools-line text-success me-2"></i>
                                    Mantenimiento preventivo, correctivo y evolutivo.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-headphone-line text-success me-2"></i>
                                    Soporte técnico con atención a incidencias 24/7 según SLA.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-shield-check-line text-success me-2"></i>
                                    Mejoras continuas de rendimiento y seguridad.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-database-2-line text-success me-2"></i>
                                    Optimización de base de datos, limpieza de logs y backup automático.
                                </li>
                                <li class="text-dark mb-3">
                                    <i class="ri-file-chart-line text-success me-2"></i>
                                    Reporte mensual de actividades y mejoras aplicadas.
                                </li>
                            </ul>

                            <div class="bg-light p-4 rounded-3 shadow-sm border border-success">
                                <p class="fw-semibold mb-3 text-success">
                                    <i class="ri-tools-line me-2"></i>¿Necesitas soporte técnico ahora?
                                </p>
                                <p class="text-dark mb-3">
                                    Nuestro equipo está listo para ayudarte a mantener tu sistema seguro, estable y actualizado. ¡Contáctanos hoy y comienza a trabajar sin interrupciones!
                                </p>

                                <a href="#contact" class="btn btn-primary-2 btn-sm">
                                        <i class="ri-mail-line me-1"></i> Contáctanos
                                    </a>
                            </div>


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
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="fs-2 fw-normal mb-8">
                            Preguntas Frecuentes sobre <span class="text-linear-4">{Mantenimiento}</span><span class="flicker">_</span>
                        </h2>

                        <div class="accordion" id="faqSoporte">
                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#soporte1">
                                        <i class="ri-refresh-line me-2 text-primary-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Qué tipo de mantenimiento ofrecen?</p>
                                        <span class="ms-auto icon-shape"><i class="ri-add-line text-primary-2"></i></span>
                                    </a>
                                </div>
                                <div id="soporte1" class="collapse" data-bs-parent="#faqSoporte">
                                    <p class="px-4 pt-0 text-start card-body">Ofrecemos mantenimiento preventivo, correctivo y evolutivo según el estado y evolución de tu sistema.</p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#soporte2">
                                        <i class="ri-time-line me-2 text-success"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Cuál es el tiempo de respuesta ante incidencias?</p>
                                        <span class="ms-auto icon-shape"><i class="ri-add-line text-primary-2"></i></span>
                                    </a>
                                </div>
                                <div id="soporte2" class="collapse" data-bs-parent="#faqSoporte">
                                    <p class="px-4 pt-0 text-start card-body">Depende del nivel de prioridad (SLA). Para incidencias críticas, la respuesta puede ser inmediata o dentro de 2 horas.</p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#soporte3">
                                        <i class="ri-lock-line me-2 text-warning"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Incluye seguridad y backups?</p>
                                        <span class="ms-auto icon-shape"><i class="ri-add-line text-primary-2"></i></span>
                                    </a>
                                </div>
                                <div id="soporte3" class="collapse" data-bs-parent="#faqSoporte">
                                    <p class="px-4 pt-0 text-start card-body">Sí. Mantenemos certificados SSL, monitoreamos actividad sospechosa y configuramos copias automáticas.</p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#soporte4">
                                        <i class="ri-pencil-ruler-line me-2 text-info"></i>
                                        <p class="fs-5 mb-0 text-dark">¿También aplican mejoras al sistema?</p>
                                        <span class="ms-auto icon-shape"><i class="ri-add-line text-primary-2"></i></span>
                                    </a>
                                </div>
                                <div id="soporte4" class="collapse" data-bs-parent="#faqSoporte">
                                    <p class="px-4 pt-0 text-start card-body">Sí. Revisamos el rendimiento, hacemos optimizaciones y proponemos funcionalidades adicionales si lo deseas.</p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#soporte5">
                                        <i class="ri-customer-service-line me-2 text-danger"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Cómo se realiza el soporte?</p>
                                        <span class="ms-auto icon-shape"><i class="ri-add-line text-primary-2"></i></span>
                                    </a>
                                </div>
                                <div id="soporte5" class="collapse" data-bs-parent="#faqSoporte">
                                    <p class="px-4 pt-0 text-start card-body">Te damos acceso a soporte por correo, WhatsApp y videollamada. Documentamos cada atención técnica.</p>
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
