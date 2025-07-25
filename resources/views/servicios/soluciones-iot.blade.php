@extends('layouts.client')

@section('content')

<section id="portfolio" class="section-experience pt-130">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1">
                <div class="p-lg-8 p-md-6 p-3 position-relative z-1">
                    <div class="d-flex align-items-center mb-3">
                        <i class="ri-wireless-charging-line text-success fs-4 me-2"></i>
                        <span class="text-linear-4 d-flex align-items-center">Soluciones IoT Inteligentes</span>
                    </div>
                    <h3>
                        +{{ \Carbon\Carbon::now()->year - 2017 }}
                        <span class="text-300">años conectando</span>
                        el mundo físico con lo digital
                    </h3>

                    <div class="row mt-5">
                        <!-- Tecnologías -->
                        <div class="col-lg-4">
                            <div class="d-flex flex-column gap-3">
                                @php
                                    $tecnologias = [
                                        ['img' => 'iot-4.svg', 'name' => 'Chirpstack', 'percent' => 95],
                                        ['img' => 'iot-3.svg', 'name' => 'AWS IoT', 'percent' => 92],
                                        ['img' => 'iot-1.svg', 'name' => 'MQTT', 'percent' => 90],
                                        ['img' => 'iot-2.svg', 'name' => 'Node-RED', 'percent' => 87],
                                    ];
                                @endphp

                                @foreach ($tecnologias as $tec)
                                    <div class="technology border border-1 rounded-3 p-3 bg-white shadow-sm">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('assets/imgs/home-page-2/experience/' . $tec['img']) }}" alt="{{ $tec['name'] }}" />
                                            <div class="d-flex flex-column ms-2 w-100">
                                                <h5 class="mb-1">{{ $tec['name'] }}</h5>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $tec['percent'] }}%;"></div>
                                                </div>
                                                <small class="text-muted mt-1">{{ $tec['percent'] }}%</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Descripción -->
                        <div class="col-lg-8 ps-lg-5 mt-5 mt-lg-0">
                            <h6 class="text-linear-4 mb-4">
                                <i class="ri-lightbulb-flash-line me-2"></i>Transformamos espacios comunes en entornos inteligentes con sensores, datos en tiempo real y automatización avanzada.
                            </h6>
                            <ul class="list-unstyled">
                                <li class="text-dark mb-3"><i class="ri-checkbox-circle-line text-success me-2"></i> Soluciones IoT personalizadas para sectores como agricultura, industria, domótica y salud.</li>
                                <li class="text-dark mb-3"><i class="ri-cpu-line text-success me-2"></i> Integración de sensores, actuadores y controladores con plataformas web y móviles.</li>
                                <li class="text-dark mb-3"><i class="ri-bar-chart-line text-success me-2"></i> Dashboards visuales con datos en tiempo real para análisis y toma de decisiones.</li>
                                <li class="text-dark mb-3"><i class="ri-robot-2-line text-success me-2"></i> Automatización mediante reglas personalizadas y procesamiento inteligente.</li>
                                <li class="text-dark mb-3"><i class="ri-signal-wifi-line text-success me-2"></i> Protocolos como WiFi, LoRa, NB-IoT, MQTT, HTTP, Bluetooth.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <img class="position-absolute top-0 start-0 z-0" src="{{ asset('assets/imgs/home-page-2/services/bg.png') }}" alt="Person Technology" />
            </div>
        </div>
    </div>
</section>

<!-- Preguntas frecuentes -->
<section class="section-experience pt-5 pb-3">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1 py-5">
                <div class="row mt-8">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="fs-2 fw-normal mb-5">
                            Preguntas Frecuentes sobre <span class="text-linear-4">{IoT}</span><span class="flicker">_</span>
                        </h2>

                        <div class="accordion">
                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqIot1">
                                        <i class="ri-bluetooth-connect-line text-primary-2 fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Qué es exactamente una solución IoT?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqIot1" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Conecta sensores y dispositivos físicos a internet para recopilar, procesar y visualizar datos en tiempo real.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqIot2">
                                        <i class="ri-line-chart-line text-success fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Qué beneficios ofrece implementar IoT?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqIot2" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Reduce costos, automatiza tareas, mejora la eficiencia y permite tomar decisiones basadas en datos.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqIot3">
                                        <i class="ri-bar-chart-box-line text-warning fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Puedo visualizar los datos recolectados?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqIot3" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Sí. Creamos dashboards personalizados donde puedes analizar métricas y generar reportes fácilmente.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqIot4">
                                        <i class="ri-cpu-line text-danger fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Qué hardware necesito para empezar?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqIot4" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Utilizamos dispositivos como ESP32, Raspberry Pi, sensores DHT, MQ, cámaras y más, según la solución requerida.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-3 card border-2 rounded-4">
                                <div class="card-header p-0 border-0">
                                    <a class="p-3 collapsed text-900 fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#faqIot5">
                                        <i class="ri-tools-line text-info fs-5 me-2"></i>
                                        <p class="fs-5 mb-0 text-dark">¿Desarrollan también el software y panel de control?</p>
                                        <span class="ms-auto arrow me-2 icon-shape text-primary-2"><i class="ri-add-line"></i></span>
                                    </a>
                                </div>
                                <div id="faqIot5" class="collapse" data-bs-parent=".accordion">
                                    <p class="px-4 pt-0 text-start card-body">
                                        Sí, ofrecemos soluciones completas: hardware, backend y panel web o app móvil integrados.
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
