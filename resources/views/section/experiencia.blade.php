<section id="portfolio" class="section-experience pt-5">
    <div class="container">
        <div class="rounded-3 border border-1 position-relative overflow-hidden">
            <div class="box-linear-animation position-relative z-1">
                <div class="p-lg-8 p-md-6 p-3 position-relative z-1">
                    <div class="d-flex align-items-center">
                        <svg class="text-primary-2 me-2" xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                            <circle cx="2.5" cy="3" r="2.5" fill="#A8FF53" />
                        </svg>
                        <span class="text-linear-4 d-flex align-items-center"> Experiencia </span>
                    </div>
                    <h3>
                        +{{ \Carbon\Carbon::now()->year - 2017 }}
                        <span class="text-300">años de </span>
                        pasión
                        <span class="text-300">
                            por <br />
                            la innovación tecnológica
                        </span>
                    </h3>
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="d-flex flex-column gap-2">

                                <div class="technology border border-1 rounded-3 p-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('assets/imgs/home-page-2/experience/javascript.svg') }}" alt="cliente" />
                                            <div class="d-flex flex-column ms-2 w-100">
                                                <h5 class="mb-1">JavaScript</h5>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 92%;" aria-valuenow="92"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <small class="text-muted mt-1">92%</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="technology border border-1 rounded-3 p-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('assets/imgs/home-page-2/experience/laravel.svg') }}" alt="cliente" />
                                            <div class="d-flex flex-column ms-2 w-100">
                                                <h5 class="mb-1">Laravel</h5>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 98%;" aria-valuenow="98"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <small class="text-muted mt-1">98%</small>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="technology border border-1 rounded-3 p-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('assets/imgs/home-page-2/experience/postgresql.svg') }}" alt="cliente" />
                                            <div class="d-flex flex-column ms-2 w-100">
                                                <h5 class="mb-1">PostgreSQL</h5>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 95%;" aria-valuenow="95"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <small class="text-muted mt-1">95%</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="col-lg-8 ps-lg-5 mt-5 mt-lg-0">
                            <h6 class="text-linear-4">Sabemos lo que hacemos. Mira en qué somos expertos</h6>
                            <ul class="mt-4">
                                <li class="text-dark mb-3">Desarrollo de plataformas web y móviles personalizadas para sectores como educación, agroindustria y retail.</li>
                                <li class="text-dark mb-3">Integración de soluciones IoT para monitoreo en tiempo real y automatización de procesos.</li>
                                <li class="text-dark mb-3">Implementación de arquitecturas full stack escalables, seguras y alojadas en la nube.</li>
                                <li class="text-dark mb-3">Formación especializada con cursos de programación full stack, desde lo básico hasta nivel profesional.</li>
                            </ul>
                            {{-- <div class="d-flex flex-wrap align-items-center gap-3 mt-7">
                                <a href="#" class="text-300 border border-1 px-3 py-1">JavaScript</a>
                                <a href="#" class="text-300 border border-1 px-3 py-1">Laravel</a>
                                <a href="#" class="text-300 border border-1 px-3 py-1">PostgreSql</a>
                                <a href="#" class="text-300 border border-1 px-3 py-1">Java</a>
                                <a href="#" class="text-300 border border-1 px-3 py-1">Python</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <img class="position-absolute top-0 start-0 z-0" src="{{ asset('assets/imgs/home-page-2/services/bg.png') }}" alt="Person Technology" />
            </div>
        </div>
    </div>
</section>