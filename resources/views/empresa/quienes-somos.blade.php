@extends('layouts.client') 

@section('content')

    @include('section.acerca_nosotros')

    <section id="historia" class="section-experience pt-5">
        <div class="container">
            <div class="rounded-3 border border-1 position-relative overflow-hidden">
                <div class="box-linear-animation position-relative z-1">
                    <div class="p-lg-8 p-md-6 p-3 position-relative z-1">
                        <div class="d-flex align-items-center">
                            <svg class="text-primary-2 me-2" xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                                <circle cx="2.5" cy="3" r="2.5" fill="#A8FF53" />
                            </svg>
                            <span class="text-linear-4 d-flex align-items-center"> Nuestra Historia </span>
                        </div>
                        
                        <div class="row mt-5">
                        
                            <div class="col-lg-12 ps-lg-5 mt-5 mt-lg-0">
                                <h6 class="text-linear-4">De una idea estudiantil a un referente en soluciones digitales e IoT en Ecuador</h6>
                                <div class="mt-4">
                                        <p class="mt-4 text-dark">
                                            En el año 2015, tres estudiantes universitarios recién egresados decidieron emprender creando una pequeña startup tecnológica dedicada a desarrollar soluciones digitales para pequeñas empresas y personas naturales. Su enfoque inicial también incluía capacitar a estudiantes y desarrollar pequeños proyectos de impacto.
                                        </p>
                                        <p class="text-dark">
                                            En 2017, con una visión más ambiciosa, el actual CEO, David Criollo, impulsa la evolución del proyecto fundando <strong>SoySoftware</strong>, centrada en el desarrollo de software a medida para clientes corporativos. Esta etapa marcó el inicio de un crecimiento sostenido, sumando nuevos talentos al equipo, incluyendo ingenieros mecatrónicos y electrónicos.
                                        </p>
                                        <p class="text-dark">
                                            La expansión de la empresa permitió incursionar en soluciones de hardware y software combinados, desarrollando productos innovadores en áreas como robótica, IoT y automatización para sectores como la medicina, educación e industria.
                                        </p>
                                        <p class="text-dark">
                                            En 2022, el nombre de <strong>SoySoftware</strong> fue reemplazado oficialmente por <strong>Person Technology</strong>, una marca que refleja de mejor forma la amplitud de servicios tecnológicos e innovaciones que hoy ofrece la empresa. Desde entonces, continuamos comprometidos con acercar la tecnología a más personas y organizaciones, impactando positivamente su calidad de vida.
                                        </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="position-absolute top-0 start-0 z-0" src="{{ asset('assets/imgs/home-page-2/services/bg.png') }}" alt="Person Technology" />
                </div>
            </div>
        </div>
    </section>

    <section id="historia-tiempo" class="section-experience pt-5">
        <div class="container">
            <div class="rounded-3 border border-1 position-relative overflow-hidden">
                <div class="box-linear-animation position-relative z-1">
                    <div class="p-lg-8 p-md-6 p-3 position-relative z-1">
                        <div class="d-flex align-items-center">
                            <svg class="text-primary-2 me-2" xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                                <circle cx="2.5" cy="3" r="2.5" fill="#A8FF53" />
                            </svg>
                            <span class="text-linear-4 d-flex align-items-center"> Nuestra línea de tiempo </span>
                        </div>
                        
                    
                        <div class="row mt-5">
                            <div class="col-lg-12 mt-4">
                                <!-- Línea de tiempo -->
                                <div class="timeline position-relative ms-3">
                                    <div class="border-start border-2 ps-4">
                                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                            <h5 class="text-primary-2">2015</h5>
                                            <p class="text-dark mb-1">
                                                Tres estudiantes universitarios fundan una pequeña startup para crear soluciones digitales y capacitar a otros jóvenes.
                                            </p>
                                        </div>

                                        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                                            <h5 class="text-primary-2">2017</h5>
                                            <p class="text-dark mb-1">
                                                David Criollo, actual CEO, impulsa la transformación hacia <strong>SoySoftware</strong>, enfocada en desarrollo a medida para clientes empresariales.
                                            </p>
                                        </div>

                                        <div class="mb-5" data-aos="fade-up" data-aos-delay="300">
                                            <h5 class="text-primary-2">2019 - 2021</h5>
                                            <p class="text-dark mb-1">
                                                La empresa incorpora perfiles en electrónica y mecatrónica, iniciando proyectos de robótica, IoT y automatización.
                                            </p>
                                        </div>

                                        <div class="mb-5" data-aos="fade-up" data-aos-delay="400">
                                            <h5 class="text-primary-2">2022</h5>
                                            <p class="text-dark mb-1">
                                                Se consolida la nueva marca: <strong>Person Technology</strong>, abarcando todas las líneas de servicio y áreas de innovación.
                                            </p>
                                        </div>

                                        <div data-aos="fade-up" data-aos-delay="500">
                                            <h5 class="text-primary-2">Actualidad</h5>
                                            <p class="text-dark mb-1">
                                                Seguimos desarrollando tecnología que transforma vidas y potenciando el acceso a soluciones digitales de alto impacto.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin de línea de tiempo -->
                            </div>
                        </div>
                    </div>
                    <img class="position-absolute top-0 start-0 z-0" src="{{ asset('assets/imgs/home-page-2/services/bg.png') }}" alt="Person Technology" />
                </div>
            </div>
        </div>
    </section>

    @include('empresa.valores')

    {{-- contador estadisticas de la empresa --}}
    @include('section.contador_estadistica')
@endsection